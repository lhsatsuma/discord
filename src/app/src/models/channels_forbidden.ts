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
    created_at?: Date | string;
    updated_at?: Date | string;
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
}
