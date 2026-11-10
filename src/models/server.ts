import model_base from '#models/base.ts';
import redisCache from '#includes/cache/redis_cache.ts';
import log from '#includes/log.ts';
import { fieldTypeInterface } from '../interfaces/fieldInterface.ts';
import type { fieldInterface } from '../interfaces/fieldInterface.ts';

const REDDIT_SETTINGS_CACHE_TTL_SECONDS = 5 * 60;

export interface serverRedditSettings
{
    reddit_odd_memes: number;
    subreddits_memes: string[];
}

const serverFields = {
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
        minLength: 1,
        maxLength: 255,
    },
    server: {
        label: 'Server',
        type: fieldTypeInterface.string,
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
} as const satisfies Record<string, fieldInterface>;

type serverFieldName = keyof typeof serverFields;

export default class model_servers extends model_base
{
    table = 'servers';
    fields = serverFields;
    id?: string;
    date_entered?: Date | string;
    date_modified?: Date | string;
    created_by?: string;
    server?: string;
    active?: boolean;
    name?: string;
    reddit_odd_memes?: number;
    subreddits_memes?: string | null;

    async selectActive(fields: Pick<Record<serverFieldName, string>, 'server'>): Promise<this | false>
    {
        try{
            const res = await this.select(
                Object.keys(this.fields).join(', '),
                [],
                `server = ${this.bind(fields.server)}`,
                '',
                1
            );
            const record = res.rows[0];
            if(!record){
                return false;
            }

            Object.assign(this, record);

            return this;
        }catch(e){
            return false;
        }
    }

    async getRedditSettings(serverId: string): Promise<serverRedditSettings | false>
    {
        return redisCache.getOrSet(
            `discord-bot:server-reddit-settings:${serverId}`,
            REDDIT_SETTINGS_CACHE_TTL_SECONDS,
            async () => {
                try {
                    const result = await this.select(
                        'reddit_odd_memes, subreddits_memes',
                        [],
                        `server = ${this.bind(serverId)}`,
                        '',
                        1
                    );
                    const row = result.rows[0] as {
                        reddit_odd_memes: number | string | null;
                        subreddits_memes: string | null;
                    } | undefined;

                    if (!row) {
                        return {reddit_odd_memes: 0, subreddits_memes: []};
                    }

                    const parsedOdds = Number(row.reddit_odd_memes ?? 0);
                    return {
                        reddit_odd_memes: Number.isFinite(parsedOdds) ? parsedOdds : 0,
                        subreddits_memes: (row.subreddits_memes ?? '')
                            .split(/[,\r\n]/)
                            .map((subreddit) => subreddit.trim())
                            .filter(Boolean)
                    };
                } catch (error) {
                    log.warning(`Error loading Reddit settings for server ${serverId}: ${error}`);
                    return false;
                }
            }
        );
    }

    async invalidateCache(serverId: string): Promise<void>
    {
        await redisCache.delete(`discord-bot:server-reddit-settings:${serverId}`);
    }

    async save(fields: Record<string, unknown> = {}): Promise<any>
    {
        const saved = await super.save(fields);
        const serverId = typeof fields.server === 'string' ? fields.server : this.server;
        if (saved !== false && serverId) {
            await this.invalidateCache(serverId);
        }
        return saved;
    }
}