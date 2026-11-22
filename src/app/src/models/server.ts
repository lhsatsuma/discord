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
import model_server_config from '#models/server_config.ts';
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
                    const [result, serverConfigs] = await Promise.all([
                        this.query(
                            `SELECT ARRAY(
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
                        ),
                        new model_server_config().listByServer(serverId),
                    ]);
                    if (serverConfigs === false) {
                        throw new Error('Could not load server configuration records.');
                    }

                    const row = result.rows[0] as {
                        admin_channels: string[] | null;
                        birthday_channels: string[] | null;
                        forbidden_channels: string[] | null;
                    } | undefined;
                    const configValue = (code: string): string | null =>
                        model_server_config.readValue(serverConfigs, code);
                    const redditOdds = Number(configValue('reddit_odd_memes') ?? 5);
                    const deletePeriodMinutes = Number(
                        configValue('autoban_del_period') ?? DEFAULT_AUTOBAN_DELETE_PERIOD_MINUTES
                    );
                    const muteDays = Number(configValue('autoban_mute_days') ?? DEFAULT_AUTOBAN_MUTE_DAYS);
                    const isEnabled = (value: string | null): boolean =>
                        value === 'true' || value === '1';
                    return {
                        reddit_odd_memes: Number.isFinite(redditOdds) ? redditOdds : 5,
                        subreddits_memes: (configValue('subreddits_memes') ?? '')
                            .split(/[,\r\n]/)
                            .map((subreddit) => subreddit.trim())
                            .filter(Boolean),
                        autoban_del_period: Number.isFinite(deletePeriodMinutes)
                            ? deletePeriodMinutes
                            : DEFAULT_AUTOBAN_DELETE_PERIOD_MINUTES,
                        autoban_punishment: configValue('autoban_punishment') === 'mute' ? 'mute' : 'ban',
                        autoban_mute_days: Number.isFinite(muteDays)
                            ? muteDays
                            : DEFAULT_AUTOBAN_MUTE_DAYS,
                        send_voice_update: isEnabled(configValue('send_voice_update')),
                        welcome_message_active: isEnabled(configValue('welcome_message_active')),
                        welcome_channel_id: configValue('welcome_channel_id'),
                        welcome_message: configValue('welcome_message') ?? '',
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
