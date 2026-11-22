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
export const DEFAULT_AUTOBAN_MUTE_DAYS = 7;

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
                        `SELECT COALESCE(reddit_config.value, '5') AS reddit_odd_memes,
                                COALESCE(subreddits_config.long_value, subreddits_config.value, '') AS subreddits_memes,
                                COALESCE(autoban_period_config.value, '60') AS autoban_del_period,
                                COALESCE(autoban_punishment_config.value, 'ban') AS autoban_punishment,
                                COALESCE(autoban_mute_days_config.value, '7') AS autoban_mute_days,
                                COALESCE(voice_update_config.value, 'false') AS send_voice_update,
                                COALESCE(welcome_active_config.value, 'false') AS welcome_message_active,
                                COALESCE(welcome_channel_config.long_value, welcome_channel_config.value) AS welcome_channel_id,
                                COALESCE(welcome_message_config.long_value, welcome_message_config.value, '') AS welcome_message,
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
                         LEFT JOIN server_config AS reddit_config
                           ON reddit_config.server_id = servers.id
                          AND reddit_config.config_code = 'reddit_odd_memes'
                         LEFT JOIN server_config AS subreddits_config
                           ON subreddits_config.server_id = servers.id
                          AND subreddits_config.config_code = 'subreddits_memes'
                         LEFT JOIN server_config AS autoban_period_config
                           ON autoban_period_config.server_id = servers.id
                          AND autoban_period_config.config_code = 'autoban_del_period'
                         LEFT JOIN server_config AS autoban_punishment_config
                           ON autoban_punishment_config.server_id = servers.id
                          AND autoban_punishment_config.config_code = 'autoban_punishment'
                         LEFT JOIN server_config AS autoban_mute_days_config
                           ON autoban_mute_days_config.server_id = servers.id
                          AND autoban_mute_days_config.config_code = 'autoban_mute_days'
                         LEFT JOIN server_config AS voice_update_config
                           ON voice_update_config.server_id = servers.id
                          AND voice_update_config.config_code = 'send_voice_update'
                         LEFT JOIN server_config AS welcome_active_config
                           ON welcome_active_config.server_id = servers.id
                          AND welcome_active_config.config_code = 'welcome_message_active'
                         LEFT JOIN server_config AS welcome_channel_config
                           ON welcome_channel_config.server_id = servers.id
                          AND welcome_channel_config.config_code = 'welcome_channel_id'
                         LEFT JOIN server_config AS welcome_message_config
                           ON welcome_message_config.server_id = servers.id
                          AND welcome_message_config.config_code = 'welcome_message'
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
                        send_voice_update: boolean | string | null;
                        welcome_message_active: boolean | string | null;
                        welcome_channel_id: string | null;
                        welcome_message: string | null;
                        admin_channels: string[] | null;
                        birthday_channels: string[] | null;
                        forbidden_channels: string[] | null;
                    } | undefined;
                    const redditOdds = Number(row?.reddit_odd_memes ?? 5);
                    const deletePeriodMinutes = Number(
                        row?.autoban_del_period ?? DEFAULT_AUTOBAN_DELETE_PERIOD_MINUTES
                    );
                    const muteDays = Number(row?.autoban_mute_days ?? DEFAULT_AUTOBAN_MUTE_DAYS);
                    const isEnabled = (value: boolean | string | null | undefined): boolean =>
                        value === true || value === 'true' || value === '1';
                    return {
                        reddit_odd_memes: Number.isFinite(redditOdds) ? redditOdds : 5,
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
                        send_voice_update: isEnabled(row?.send_voice_update),
                        welcome_message_active: isEnabled(row?.welcome_message_active),
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

    async invalidateSettingsCache(serverId: string): Promise<void>
    {
        await redisCache.delete(serverSettingsCacheKey(serverId));
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
