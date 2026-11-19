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

import log from '#includes/log.ts';
import model_base from '#models/base.ts';
import redisCache from '#includes/cache/redis_cache.ts';
import { fieldTypeInterface } from '../interfaces/fieldInterface.ts';
import type { fieldInterface } from '../interfaces/fieldInterface.ts';

export const DEFAULT_AUTOBAN_DELETE_PERIOD_MINUTES = 60;
export const MAX_AUTOBAN_DELETE_PERIOD_MINUTES = 10_080;
export const DEFAULT_AUTOBAN_MUTE_DAYS = 7;
export const MAX_AUTOBAN_MUTE_DAYS = 28;

export type autobanPunishment = 'ban' | 'mute';

export interface autobanConfiguration
{
    deletePeriodMinutes: number;
    punishment: autobanPunishment;
    muteDays: number;
}

const autobanConfigFields = {
    id: {
        label: 'ID',
        type: fieldTypeInterface.uuid,
        minLength: 36,
        maxLength: 36,
        pk: true
    },
    date_entered: {
        label: 'Date Entered',
        type: fieldTypeInterface.datetime,
    },
    date_modified: {
        label: 'Date Modified',
        type: fieldTypeInterface.datetime,
    },
    created_by: {
        label: 'Created By',
        type: fieldTypeInterface.string,
        maxLength: 255,
    },
    server: {
        label: 'Server',
        type: fieldTypeInterface.string,
        minLength: 1,
        maxLength: 255,
    },
    delete_period: {
        label: 'Delete Period (minutes)',
        type: fieldTypeInterface.number,
        maxLength: 5,
        default: DEFAULT_AUTOBAN_DELETE_PERIOD_MINUTES
    },
    punishment: {
        label: 'Punishment',
        type: fieldTypeInterface.string,
        maxLength: 10,
        default: 'ban'
    },
    mute_days: {
        label: 'Mute Period (days)',
        type: fieldTypeInterface.number,
        maxLength: 2,
        default: DEFAULT_AUTOBAN_MUTE_DAYS
    }
} as const satisfies Record<string, fieldInterface>;

const AUTOBAN_CONFIG_CACHE_TTL_SECONDS = 60;

export default class model_autoban_config extends model_base
{
    table = 'autoban_config';
    fields = autobanConfigFields;
    id?: string;
    date_entered?: Date | string;
    date_modified?: Date | string;
    created_by?: string;
    server?: string;
    delete_period?: number | string;
    punishment?: autobanPunishment;
    mute_days?: number | string;

    async getConfiguration(server: string): Promise<autobanConfiguration | false>
    {
        try {
            return await redisCache.getOrSet(
                `discord-bot:autoban-config:${server}`,
                AUTOBAN_CONFIG_CACHE_TTL_SECONDS,
                async () => {
                    const result = await this.select(
                        'delete_period, punishment, mute_days',
                        [],
                        `server = ${this.bind(server)}`,
                        'date_modified DESC',
                        1
                    );
                    const row = result.rows[0] as {
                        delete_period: number | string | null;
                        punishment: string | null;
                        mute_days: number | string | null;
                    } | undefined;
                    return {
                        deletePeriodMinutes: Number(row?.delete_period ?? DEFAULT_AUTOBAN_DELETE_PERIOD_MINUTES),
                        punishment: row?.punishment === 'mute' ? 'mute' : 'ban',
                        muteDays: Number(row?.mute_days ?? DEFAULT_AUTOBAN_MUTE_DAYS)
                    };
                }
            );
        } catch (error) {
            log.warning(`Error loading autoban configuration for server ${server}: ${error}`);
            return false;
        }
    }

    async saveConfiguration(
        server: string,
        configuration: autobanConfiguration,
        createdBy: string
    ): Promise<boolean>
    {
        try {
            const result = await this.query(
                `UPDATE ${this.table}
                 SET delete_period = $2, punishment = $3, mute_days = $4,
                     date_modified = NOW(), created_by = $5
                 WHERE server = $1`,
                [
                    server,
                    configuration.deletePeriodMinutes,
                    configuration.punishment,
                    configuration.muteDays,
                    createdBy
                ]
            );
            if ((result.rowCount ?? 0) > 0) {
                await redisCache.delete(`discord-bot:autoban-config:${server}`);
                return true;
            }

            const inserted = await this.insert({
                server,
                delete_period: configuration.deletePeriodMinutes,
                punishment: configuration.punishment,
                mute_days: configuration.muteDays,
                created_by: createdBy
            });
            if (inserted !== false) {
                await redisCache.delete(`discord-bot:autoban-config:${server}`);
            }
            return inserted !== false;
        } catch (error) {
            log.warning(`Error saving autoban configuration for server ${server}: ${error}`);
            return false;
        }
    }
}
