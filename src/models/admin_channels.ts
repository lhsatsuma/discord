import model_base from '#models/base.ts';
import log from '#includes/log.ts';
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

const ADMIN_CHANNEL_CACHE_TTL_MS = 5 * 60 * 1000;
const adminChannelCache = new Map<string, {channelIds: string[]; expiresAt: number}>();
const adminChannelRequests = new Map<string, Promise<string[] | false>>();
const adminChannelCacheVersions = new Map<string, number>();

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

        const cached = adminChannelCache.get(serverId);
        if (cached && cached.expiresAt > Date.now()) {
            return [...cached.channelIds];
        }
        adminChannelCache.delete(serverId);

        const pending = adminChannelRequests.get(serverId);
        if (pending) {
            const channelIds = await pending;
            return channelIds === false ? false : [...channelIds];
        }

        const cacheVersion = adminChannelCacheVersions.get(serverId) ?? 0;
        const request = this.select(
            'channel_id',
            [],
            `server = ${this.bind(serverId)}`,
            'channel_id'
        ).then((result) => {
            const channelIds = result.rows.map((row: {channel_id: string}) => row.channel_id);
            if ((adminChannelCacheVersions.get(serverId) ?? 0) === cacheVersion) {
                adminChannelCache.set(serverId, {
                    channelIds,
                    expiresAt: Date.now() + ADMIN_CHANNEL_CACHE_TTL_MS
                });
            }
            return channelIds;
        }).catch((error: unknown) => {
            log.warning(`Error listing admin channels: ${error}`);
            return false as const;
        }).finally(() => {
            if (adminChannelRequests.get(serverId) === request) {
                adminChannelRequests.delete(serverId);
            }
        });

        adminChannelRequests.set(serverId, request);
        const channelIds = await request;
        return channelIds === false ? false : [...channelIds];
    }

    invalidateCache(serverId: string): void
    {
        adminChannelCache.delete(serverId);
        adminChannelRequests.delete(serverId);
        adminChannelCacheVersions.set(serverId, (adminChannelCacheVersions.get(serverId) ?? 0) + 1);
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
                this.invalidateCache(fields.server);
            }
            return removed;
        } catch (error) {
            log.warning(`Error removing admin channel: ${error}`);
            return false;
        }
    }
}
