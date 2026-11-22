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
import log from '#includes/log.ts';
import { fieldTypeInterface } from '../interfaces/fieldInterface.ts';
import type { fieldInterface } from '../interfaces/fieldInterface.ts';

const serverConfigFields = {
    server_id: {
        label: 'Server ID',
        type: fieldTypeInterface.string,
        minLength: 1,
        maxLength: 255,
    },
    config_code: {
        label: 'Configuration Code',
        type: fieldTypeInterface.string,
        minLength: 1,
        maxLength: 255,
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
        maxLength: 255,
    },
    type: {
        label: 'Configuration Type',
        type: fieldTypeInterface.string,
        maxLength: 255,
    },
    value: {
        label: 'Configuration Value',
        type: fieldTypeInterface.string,
        maxLength: 255,
    },
    long_value: {
        label: 'Long Configuration Value',
        type: fieldTypeInterface.text,
    },
} as const satisfies Record<string, fieldInterface>;

export type serverConfigRecord = {
    server_id: string;
    config_code: string;
    type: string;
    value: string | null;
    long_value: string | null;
};

export default class model_server_config extends model_base
{
    table = 'server_config';
    fields = serverConfigFields;

    async listByServer(serverId: string): Promise<Map<string, serverConfigRecord> | false>
    {
        try {
            const result = await this.query(
                `SELECT server_id, config_code, type, value, long_value
                 FROM ${this.table}
                 WHERE server_id = $1`,
                [serverId]
            );
            const configs = new Map<string, serverConfigRecord>();
            for (const row of result.rows as serverConfigRecord[]) {
                configs.set(row.config_code, row);
            }
            return configs;
        } catch (error) {
            log.warning(`Error loading server configuration records for server ${serverId}: ${error}`);
            return false;
        }
    }

    static readValue(configs: Map<string, serverConfigRecord>, configCode: string): string | null
    {
        const config = configs.get(configCode);
        return config?.long_value ?? config?.value ?? null;
    }
}
