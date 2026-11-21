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

import model_base from '#models/base.ts';
import redisCache from '#includes/cache/redis_cache.ts';
import log from '#includes/log.ts';
import config from '#includes/config.ts';
import { fieldTypeInterface } from '../interfaces/fieldInterface.ts';
import type { fieldInterface } from '../interfaces/fieldInterface.ts';

const SERVER_SETTINGS_CACHE_TTL_SECONDS = 360;
const SERVER_SETTINGS_CACHE_KEY_PREFIX =
    `discord-bot:server-settings:v3:${config.DISCORD_BOT_ID}:`;

const serverSettingsCacheKey = (serverId: string): string =>
    `${SERVER_SETTINGS_CACHE_KEY_PREFIX}${serverId}`;

export const DEFAULT_AUTOBAN_DELETE_PERIOD_MINUTES = 60;
export const MAX_AUTOBAN_DELETE_PERIOD_MINUTES = 10_080;
export const DEFAULT_AUTOBAN_MUTE_DAYS = 7;
export const MAX_AUTOBAN_MUTE_DAYS = 28;

export type autobanPunishment = 'ban' | 'mute';

export interface serverSettings
{
    reddit_odd_memes: number;
    subreddits_memes: string[];
    autoban_del_period: number;
    autoban_punishment: autobanPunishment;
    autoban_mute_days: number;
    send_voice_update: boolean;
    welcome_message_active: boolean;
    welcome_channel_id: string | null;
    welcome_message: string;
    admin_channels: string[];
    birthday_channels: string[];
    forbidden_channels: string[];
}

export interface serverAutobanConfiguration
{
    deletePeriodMinutes: number;
    punishment: autobanPunishment;
    muteDays: number;
}

const serverFields = {
    id: {
        label: 'ID',
        type: fieldTypeInterface.string,
        minLength: 1,
        maxLength: 255,
        pk: true
    },
    created_at: {
        label: 'Created At',
        type: fieldTypeInterface.datetime,
    },
    updated_at: {
        label: 'Updated At',
        type: fieldTypeInterface.datetime,
    },
    created_by: {
        label: 'Created By',
        type: fieldTypeInterface.string,
        minLength: 1,
        maxLength: 255,
    },
    active: {
        label: 'Active',
        type: fieldTypeInterface.boolean,
    },
    name: {
        label: 'Name',
        type: fieldTypeInterface.string,
        maxLength: 255,
    },
    reddit_odd_memes: {
        label: 'Reddit meme odds',
        type: fieldTypeInterface.number,
    },
    subreddits_memes: {
        label: 'Meme subreddits',
        type: fieldTypeInterface.string,
    },
    autoban_del_period: {
        label: 'Autoban delete period (minutes)',
        type: fieldTypeInterface.number,
    },
    autoban_punishment: {
        label: 'Autoban punishment',
        type: fieldTypeInterface.string,
        maxLength: 10,
    },
    autoban_mute_days: {
        label: 'Autoban timeout (days)',
        type: fieldTypeInterface.number,
    },
    send_voice_update: {
        label: 'Send voice updates on Admin Channel',
        type: fieldTypeInterface.boolean,
    },
    welcome_message_active: {
        label: 'Welcome message active',
        type: fieldTypeInterface.boolean,
    },
    welcome_channel_id: {
        label: 'Welcome message channel ID',
        type: fieldTypeInterface.string,
        maxLength: 255,
    },
    welcome_message: {
        label: 'Welcome message',
        type: fieldTypeInterface.text,
    },
} as const satisfies Record<string, fieldInterface>;

type serverFieldName = keyof typeof serverFields;

export default class model_servers extends model_base
{
    table = 'servers';
    fields = serverFields;
    id?: string;
    created_at?: Date | string;
    updated_at?: Date | string;
    created_by?: string;
    active?: boolean;
    name?: string;
    reddit_odd_memes?: number;
    subreddits_memes?: string | null;
    autoban_del_period?: number | string;
    autoban_punishment?: autobanPunishment;
    autoban_mute_days?: number | string;
    send_voice_update?: boolean;
    welcome_message_active?: boolean;
    welcome_channel_id?: string | null;
    welcome_message?: string | null;

    async selectActive(fields: Pick<Record<serverFieldName, string>, 'id'>): Promise<this | null | false>
    {
        try{
            const res = await this.select(
                Object.keys(this.fields).join(', '),
                [],
                `id = ${this.bind(fields.id)}`,
                '',
                1
            );
            const record = res.rows[0];
            if(!record){
                return null;
            }

            Object.assign(this, record);

            return this;
        }catch(e){
            return false;
        }
    }

    async getServerSettings(serverId: string): Promise<serverSettings | false>
    {
        return redisCache.getOrSet(
            serverSettingsCacheKey(serverId),
            SERVER_SETTINGS_CACHE_TTL_SECONDS,
            async () => {
                try {
                    const result = await this.query(
                        `SELECT reddit_odd_memes, subreddits_memes,
                                autoban_del_period, autoban_punishment, autoban_mute_days, send_voice_update,
                                welcome_message_active, welcome_channel_id, welcome_message,
                                ARRAY(
                                    SELECT channel_id FROM admin_channels
                                    WHERE admin_channels.server = servers.id
                                    ORDER BY channel_id
                                ) AS admin_channels,
                                ARRAY(
                                    SELECT channel_id FROM birthday_channels
                                    WHERE birthday_channels.server = servers.id
                                    ORDER BY channel_id
                                ) AS birthday_channels,
                                ARRAY(
                                    SELECT channel_id FROM channels_forbidden
                                    WHERE channels_forbidden.server = servers.id
                                    ORDER BY channel_id
                                ) AS forbidden_channels
                         FROM ${this.table}
                         WHERE id = $1
                         LIMIT 1`,
                        [serverId]
                    );
                    const row = result.rows[0] as {
                        reddit_odd_memes: number | string | null;
                        subreddits_memes: string | null;
                        autoban_del_period: number | string | null;
                        autoban_punishment: string | null;
                        autoban_mute_days: number | string | null;
                        send_voice_update: boolean | null;
                        welcome_message_active: boolean | null;
                        welcome_channel_id: string | null;
                        welcome_message: string | null;
                        admin_channels: string[] | null;
                        birthday_channels: string[] | null;
                        forbidden_channels: string[] | null;
                    } | undefined;
                    const redditOdds = Number(row?.reddit_odd_memes ?? 0);
                    const deletePeriodMinutes = Number(
                        row?.autoban_del_period ?? DEFAULT_AUTOBAN_DELETE_PERIOD_MINUTES
                    );
                    const muteDays = Number(row?.autoban_mute_days ?? DEFAULT_AUTOBAN_MUTE_DAYS);
                    return {
                        reddit_odd_memes: Number.isFinite(redditOdds) ? redditOdds : 0,
                        subreddits_memes: (row?.subreddits_memes ?? '')
                            .split(/[,\r\n]/)
                            .map((subreddit) => subreddit.trim())
                            .filter(Boolean),
                        autoban_del_period: Number.isFinite(deletePeriodMinutes)
                            ? deletePeriodMinutes
                            : DEFAULT_AUTOBAN_DELETE_PERIOD_MINUTES,
                        autoban_punishment: row?.autoban_punishment === 'mute' ? 'mute' : 'ban',
                        autoban_mute_days: Number.isFinite(muteDays)
                            ? muteDays
                            : DEFAULT_AUTOBAN_MUTE_DAYS,
                        send_voice_update: row?.send_voice_update === true,
                        welcome_message_active: row?.welcome_message_active === true,
                        welcome_channel_id: row?.welcome_channel_id ?? null,
                        welcome_message: row?.welcome_message ?? '',
                        admin_channels: row?.admin_channels ?? [],
                        birthday_channels: row?.birthday_channels ?? [],
                        forbidden_channels: row?.forbidden_channels ?? []
                    };
                } catch (error) {
                    log.warning(`Error loading settings for server ${serverId}: ${error}`);
                    return false;
                }
            }
        );
    }

    async saveAutobanConfiguration(
        serverId: string,
        configuration: serverAutobanConfiguration,
        createdBy: string
    ): Promise<boolean>
    {
        try {
            const result = await this.query(
                `UPDATE ${this.table}
                 SET autoban_del_period = $2, autoban_punishment = $3, autoban_mute_days = $4,
                     updated_at = NOW(), created_by = $5
                 WHERE id = $1`,
                [
                    serverId,
                    configuration.deletePeriodMinutes,
                    configuration.punishment,
                    configuration.muteDays,
                    createdBy
                ]
            );
            if ((result.rowCount ?? 0) < 1) {
                return false;
            }

            await this.invalidateSettingsCache(serverId);
            return true;
        } catch (error) {
            log.warning(`Error saving autoban configuration for server ${serverId}: ${error}`);
            return false;
        }
    }

    async invalidateSettingsCache(serverId: string): Promise<void>
    {
        await redisCache.delete(serverSettingsCacheKey(serverId));
    }

    async saveRedditSettings(
        serverId: string,
        odds: number,
        subreddits: string[],
        createdBy: string
    ): Promise<boolean>
    {
        try {
            const result = await this.query(
                `UPDATE ${this.table}
                 SET reddit_odd_memes = $2, subreddits_memes = $3, updated_at = NOW(), created_by = $4
                 WHERE id = $1`,
                [serverId, odds, subreddits.join(','), createdBy]
            );
            if ((result.rowCount ?? 0) < 1) {
                return false;
            }

            await this.invalidateSettingsCache(serverId);
            return true;
        } catch (error) {
            log.warning(`Error saving Reddit settings for server ${serverId}: ${error}`);
            return false;
        }
    }

    async saveVoiceUpdateSetting(
        serverId: string,
        enabled: boolean,
        createdBy: string
    ): Promise<boolean>
    {
        try {
            const result = await this.query(
                `UPDATE ${this.table}
                 SET send_voice_update = $2, updated_at = NOW(), created_by = $3
                 WHERE id = $1`,
                [serverId, enabled, createdBy]
            );
            if ((result.rowCount ?? 0) < 1) {
                return false;
            }

            await this.invalidateSettingsCache(serverId);
            return true;
        } catch (error) {
            log.warning(`Error saving voice update setting for server ${serverId}: ${error}`);
            return false;
        }
    }

    async saveWelcomeSettings(
        serverId: string,
        active: boolean,
        channelId: string | null,
        message: string | null,
        createdBy: string
    ): Promise<boolean>
    {
        try {
            const result = await this.query(
                `UPDATE ${this.table}
                 SET welcome_message_active = $2, welcome_channel_id = $3, welcome_message = $4,
                     updated_at = NOW(), created_by = $5
                 WHERE id = $1`,
                [serverId, active, channelId, message, createdBy]
            );
            if ((result.rowCount ?? 0) < 1) {
                return false;
            }

            await this.invalidateSettingsCache(serverId);
            return true;
        } catch (error) {
            log.warning(`Error saving welcome message settings for server ${serverId}: ${error}`);
            return false;
        }
    }

    async save(fields: Record<string, unknown> = {}): Promise<any>
    {
        const saved = await super.save(fields);
        const serverId = typeof fields.id === 'string' ? fields.id : this.id;
        if (saved !== false && serverId) {
            await this.invalidateSettingsCache(serverId);
        }
        return saved;
    }
}