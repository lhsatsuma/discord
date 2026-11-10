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

class redis_cache
{
    private client?: RedisClient;
    private connection?: Promise<RedisClient | undefined>;
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
        const currentRequest = this.pending.get(key);
        if (currentRequest) {
            return currentRequest as Promise<T>;
        }

        const request = (async () => {
            const version = this.versions.get(key) ?? 0;
            log.debug(`[Redis][GET] Searching cache key: ${key}`);
            const client = await this.getClient();
            if (client?.isReady) {
                try {
                    const cached = await client.get(key);
                    if (cached !== null) {
                        log.debug(`[Redis][GET] Cache hit for key: ${key}`);
                        return JSON.parse(cached) as T;
                    }
                    log.debug(`[Redis][GET] Cache miss for key: ${key}`);
                } catch (error) {
                    this.warnUnavailable(error);
                }
            } else {
                log.debug(`[Redis][GET] Skipped for key ${key}; Redis is unavailable.`);
            }

            const value = await load();
            if (
                client?.isReady
                && (this.versions.get(key) ?? 0) === version
                && value !== false
                && value !== undefined
            ) {
                try {
                    await client.set(key, JSON.stringify(value), {EX: ttlSeconds});
                    log.debug(`[Redis][SET] Cached key: ${key} (TTL: ${ttlSeconds}s)`);
                } catch (error) {
                    this.warnUnavailable(error);
                }
            } else if (client?.isReady && value !== false && value !== undefined) {
                log.debug(`[Redis][SET] Skipped key ${key}; cache invalidated during load.`);
            }
            return value;
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
}

const instance = new redis_cache();
export default instance;
