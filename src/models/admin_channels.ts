import model_base from '#models/base.ts';
import log from '#includes/log.ts';
import redisCache from '#includes/cache/redis_cache.ts';
import { fieldTypeInterface } from '../interfaces/fieldInterface.ts';
import type { fieldInterface } from '../interfaces/fieldInterface.ts';

const adminChannelFields = {
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

type adminChannelFieldName = keyof typeof adminChannelFields;
type adminChannelFilter = Pick<Record<adminChannelFieldName, string | undefined>, 'server' | 'channel_id'>;

const ADMIN_CHANNEL_CACHE_TTL_SECONDS = 5 * 60;

export default class model_admin_channels extends model_base
{
    table = 'admin_channels';
    fields = adminChannelFields;
    id?: string;
    date_entered?: Date | string;
    date_modified?: Date | string;
    created_by?: string;
    server?: string;
    channel_id?: string;

    async selectActive(fields: adminChannelFilter): Promise<this | null | false>
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
            log.warning(`Error selecting admin channel: ${error}`);
            return false;
        }
    }

    async listByServer(fields: Pick<adminChannelFilter, 'server'>): Promise<string[] | false>
    {
        const serverId = fields.server;
        if (!serverId) {
            return false;
        }

        return redisCache.getOrSet(
            `discord-bot:admin-channels:${serverId}`,
            ADMIN_CHANNEL_CACHE_TTL_SECONDS,
            async () => {
                try {
                    const result = await this.select(
                        'channel_id',
                        [],
                        `server = ${this.bind(serverId)}`,
                        'channel_id'
                    );
                    return result.rows.map((row: {channel_id: string}) => row.channel_id);
                } catch (error) {
                    log.warning(`Error listing admin channels: ${error}`);
                    return false;
                }
            }
        );
    }

    async invalidateCache(serverId: string): Promise<void>
    {
        await redisCache.delete(`discord-bot:admin-channels:${serverId}`);
    }

    async removeActive(fields: adminChannelFilter): Promise<boolean>
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
            log.warning(`Error removing admin channel: ${error}`);
            return false;
        }
    }
}
