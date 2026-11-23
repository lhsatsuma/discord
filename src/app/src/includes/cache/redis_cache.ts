/*
 * Copyright (C) 2025 Luis Satsuma
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

import { createClient } from 'redis';
import config from '#includes/config.ts';
import log from '#includes/log.ts';

const createRedisClient = (url: string, password: string) => createClient({
    url,
    ...(password ? {password} : {}),
    socket: {
        connectTimeout: 1000,
        reconnectStrategy: (retries) => retries >= 1 ? new Error('Redis connection failed') : 250
    }
});

type RedisClient = ReturnType<typeof createRedisClient>;
type LocalCacheEntry = {value: unknown; expiresAt: number};

const LOCAL_CACHE_TTL_MILLISECONDS = 5000;

class redis_cache
{
    private client?: RedisClient;
    private subscriber?: RedisClient;
    private connection?: Promise<RedisClient | undefined>;
    private readonly localCache = new Map<string, LocalCacheEntry>();
    private readonly pending = new Map<string, Promise<unknown>>();
    private readonly versions = new Map<string, number>();
    private unavailable = false;
    private retryAfter = 0;

    private warnUnavailable(error: unknown): void
    {
        if (this.unavailable) {
            return;
        }

        this.unavailable = true;
        this.retryAfter = Date.now() + 5000;
        log.warning(`Redis cache unavailable; using PostgreSQL directly: ${error}`);
    }

    private async getClient(): Promise<RedisClient | undefined>
    {
        if (this.client?.isReady) {
            return this.client;
        }

        if (this.unavailable && Date.now() < this.retryAfter) {
            return undefined;
        }

        if (this.connection) {
            return this.connection;
        }

        if (this.client?.isOpen) {
            return undefined;
        }

        const client = createRedisClient(config.REDIS_URL, config.REDIS_PASSWORD);
        client.on('error', (error) => this.warnUnavailable(error));
        client.on('ready', () => {
            this.unavailable = false;
            this.retryAfter = 0;
        });
        this.client = client;

        const connection = client.connect()
            .then(() => {
                this.unavailable = false;
                this.retryAfter = 0;
                return client;
            })
            .catch((error: unknown) => {
                this.warnUnavailable(error);
                if (this.client === client) {
                    this.client = undefined;
                }
                return undefined;
            })
            .finally(() => {
                if (this.connection === connection) {
                    this.connection = undefined;
                }
            });

        this.connection = connection;
        return connection;
    }

    async getOrSet<T>(key: string, ttlSeconds: number, load: () => Promise<T>): Promise<T>
    {
        const localEntry = this.localCache.get(key);
        if (localEntry && localEntry.expiresAt > Date.now()) {
            return localEntry.value as T;
        }
        if (localEntry) {
            this.localCache.delete(key);
        }

        const currentRequest = this.pending.get(key);
        if (currentRequest) {
            return currentRequest as Promise<T>;
        }

        const request = (async () => {
            let version = this.versions.get(key) ?? 0;
            log.debug(`[Redis][GET] Searching cache key: ${key}`);
            const client = await this.getClient();
            if (client?.isReady) {
                try {
                    const cached = await client.get(key);
                    if (cached !== null) {
                        if ((this.versions.get(key) ?? 0) === version) {
                            log.debug(`[Redis][GET] Cache hit for key: ${key}`);
                            const value = JSON.parse(cached) as T;
                            this.rememberLocally(key, value, ttlSeconds);
                            return value;
                        }
                    }
                    log.debug(`[Redis][GET] Cache miss for key: ${key}`);
                } catch (error) {
                    this.warnUnavailable(error);
                }
            } else {
                log.debug(`[Redis][GET] Skipped for key ${key}; Redis is unavailable.`);
            }

            while (true) {
                const loadVersion = version;
                const value = await load();
                if ((this.versions.get(key) ?? 0) !== loadVersion) {
                    version = this.versions.get(key) ?? 0;
                    continue;
                }

                if (client?.isReady && value !== false && value !== undefined) {
                    try {
                        await client.set(key, JSON.stringify(value), {EX: ttlSeconds});
                        log.debug(`[Redis][SET] Cached key: ${key} (TTL: ${ttlSeconds}s)`);
                    } catch (error) {
                        this.warnUnavailable(error);
                    }
                }

                if ((this.versions.get(key) ?? 0) !== loadVersion) {
                    version = this.versions.get(key) ?? 0;
                    log.debug(`[Redis][SET] Skipped key ${key}; cache invalidated during load.`);
                    continue;
                }

                if (value !== false && value !== undefined) {
                    this.rememberLocally(key, value, ttlSeconds);
                }
                return value;
            }
        })().finally(() => {
            if (this.pending.get(key) === request) {
                this.pending.delete(key);
                this.versions.delete(key);
            }
        });

        this.pending.set(key, request);
        return request;
    }

    async delete(key: string): Promise<void>
    {
        log.debug(`[Redis][DEL] Deleting cache key: ${key}`);
        this.localCache.delete(key);
        if (this.pending.has(key)) {
            this.versions.set(key, (this.versions.get(key) ?? 0) + 1);
        }
        const client = await this.getClient();
        if (!client?.isReady) {
            log.debug(`[Redis][DEL] Skipped for key ${key}; Redis is unavailable.`);
            return;
        }

        try {
            const deleted = await client.del(key);
            log.debug(`[Redis][DEL] Deleted ${deleted} key(s): ${key}`);
        } catch (error) {
            this.warnUnavailable(error);
        }
    }

    async subscribe(channel: string, listener: (message: string) => void): Promise<void>
    {
        if (this.subscriber?.isReady) {
            await this.subscriber.subscribe(channel, listener);
            return;
        }

        const client = await this.getClient();
        if (!client?.isReady) {
            throw new Error('Redis is unavailable; cannot subscribe to server locale updates.');
        }

        const subscriber = client.duplicate();
        subscriber.on('error', (error) => {
            log.warning(`Redis subscription error: ${error}`);
        });
        await subscriber.connect();
        await subscriber.subscribe(channel, listener);
        this.subscriber = subscriber;
    }

    private rememberLocally(key: string, value: unknown, ttlSeconds: number): void
    {
        const ttl = Math.min(ttlSeconds * 1000, LOCAL_CACHE_TTL_MILLISECONDS);
        if (ttl <= 0) return;

        if (this.localCache.size >= 1000) {
            const now = Date.now();
            for (const [cachedKey, entry] of this.localCache) {
                if (entry.expiresAt <= now) this.localCache.delete(cachedKey);
            }
            if (this.localCache.size >= 1000) {
                const oldestKey = this.localCache.keys().next().value;
                if (oldestKey !== undefined) this.localCache.delete(oldestKey);
            }
        }
        this.localCache.set(key, {value, expiresAt: Date.now() + ttl});
    }
}

const instance = new redis_cache();
export default instance;
