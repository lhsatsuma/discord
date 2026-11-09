import log from '#includes/log.ts';
import model_base from '#models/base.ts';
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

const FORBIDDEN_CHANNEL_CACHE_TTL_MS = 60 * 1000;
const forbiddenChannelCache = new Map<string, {channelIds: Set<string>; expiresAt: number}>();
const forbiddenChannelRequests = new Map<string, Promise<string[] | false>>();
const forbiddenChannelCacheVersions = new Map<string, number>();

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

        const cached = forbiddenChannelCache.get(serverId);
        if (cached && cached.expiresAt > Date.now()) {
            return [...cached.channelIds];
        }
        forbiddenChannelCache.delete(serverId);

        const pending = forbiddenChannelRequests.get(serverId);
        if (pending) {
            return await pending;
        }

        const cacheVersion = forbiddenChannelCacheVersions.get(serverId) ?? 0;
        const request = this.select(
            'channel_id',
            [],
            `server = ${this.bind(serverId)}`,
            'channel_id'
        ).then((result) => {
            const channelIds = result.rows.map((row: {channel_id: string}) => row.channel_id);
            if ((forbiddenChannelCacheVersions.get(serverId) ?? 0) === cacheVersion) {
                forbiddenChannelCache.set(serverId, {
                    channelIds: new Set(channelIds),
                    expiresAt: Date.now() + FORBIDDEN_CHANNEL_CACHE_TTL_MS
                });
            }
            return channelIds;
        }).catch((error: unknown) => {
            log.warning(`Error listing forbidden channels: ${error}`);
            return false as const;
        }).finally(() => {
            if (forbiddenChannelRequests.get(serverId) === request) {
                forbiddenChannelRequests.delete(serverId);
            }
        });

        forbiddenChannelRequests.set(serverId, request);
        return await request;
    }

    invalidateCache(serverId: string): void
    {
        forbiddenChannelCache.delete(serverId);
        forbiddenChannelRequests.delete(serverId);
        forbiddenChannelCacheVersions.set(serverId, (forbiddenChannelCacheVersions.get(serverId) ?? 0) + 1);
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
            return (result.rowCount ?? 0) > 0;
        } catch (error) {
            log.warning(`Error removing forbidden channel: ${error}`);
            return false;
        }
    }
}
