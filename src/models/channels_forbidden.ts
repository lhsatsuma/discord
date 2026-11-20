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
import model_servers from '#models/server.ts';
import { fieldTypeInterface } from '../interfaces/fieldInterface.ts';
import type { fieldInterface } from '../interfaces/fieldInterface.ts';

const forbiddenChannelFields = {
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
    channel_id: {
        label: 'Channel ID',
        type: fieldTypeInterface.string,
        minLength: 1,
        maxLength: 255,
    }
} as const satisfies Record<string, fieldInterface>;

type forbiddenChannelFieldName = keyof typeof forbiddenChannelFields;
type forbiddenChannelFilter = Pick<Record<forbiddenChannelFieldName, string | undefined>, 'server' | 'channel_id'>;

export default class model_channels_forbidden extends model_base
{
    table = 'channels_forbidden';
    fields = forbiddenChannelFields;
    id?: string;
    date_entered?: Date | string;
    date_modified?: Date | string;
    created_by?: string;
    server?: string;
    channel_id?: string;

    async listByServer(fields: Pick<forbiddenChannelFilter, 'server'>): Promise<string[] | false>
    {
        const serverId = fields.server;
        if (!serverId) {
            return false;
        }

        const settings = await new model_servers().getServerSettings(serverId);
        return settings === false ? false : settings.forbidden_channels;
    }

    async invalidateCache(serverId: string): Promise<void>
    {
        await new model_servers().invalidateSettingsCache(serverId);
    }

    async selectActive(fields: forbiddenChannelFilter): Promise<this | null | false>
    {
        this.resetFields();

        try {
            const result = await this.select(
                Object.keys(this.fields).join(', '),
                [],
                `server = ${this.bind(fields.server)} AND channel_id = ${this.bind(fields.channel_id)}`,
                '',
                1
            );
            if (result.rowCount < 1) {
                return null;
            }

            const record = result.rows[0];
            if (!record) {
                return false;
            }

            Object.assign(this, record);
            return this;
        } catch (error) {
            log.warning(`Error selecting forbidden channel: ${error}`);
            return false;
        }
    }

    async removeActive(fields: forbiddenChannelFilter): Promise<boolean>
    {
        try {
            const result = await this.query(
                `DELETE FROM ${this.table} WHERE server = $1 AND channel_id = $2`,
                [fields.server, fields.channel_id]
            );
            const removed = (result.rowCount ?? 0) > 0;
            if (removed && fields.server) {
                await this.invalidateCache(fields.server);
            }
            return removed;
        } catch (error) {
            log.warning(`Error removing forbidden channel: ${error}`);
            return false;
        }
    }
}
