import log from '#includes/log.ts';
import model_base from '#models/base.ts';
import { fieldTypeInterface } from '../interfaces/fieldInterface.ts';
import type { fieldInterface } from '../interfaces/fieldInterface.ts';

export const jankenponMoves = ['rock', 'paper', 'scissors'] as const;
export type jankenponMove = typeof jankenponMoves[number];
export type jankenponResult = 'win' | 'lose' | 'draw';

const jankenponFields = {
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
        maxLength: 255,
    },
    user_id: {
        label: 'User ID',
        type: fieldTypeInterface.string,
        minLength: 1,
        maxLength: 255,
    },
    played_rock: {
        label: 'Played Rock',
        type: fieldTypeInterface.number,
    },
    played_paper: {
        label: 'Played Paper',
        type: fieldTypeInterface.number,
    },
    played_scissors: {
        label: 'Played Scissors',
        type: fieldTypeInterface.number,
    },
    win_rock: {
        label: 'Rock Wins',
        type: fieldTypeInterface.number,
    },
    win_paper: {
        label: 'Paper Wins',
        type: fieldTypeInterface.number,
    },
    win_scissors: {
        label: 'Scissors Wins',
        type: fieldTypeInterface.number,
    },
    lose_rock: {
        label: 'Rock Losses',
        type: fieldTypeInterface.number,
    },
    lose_paper: {
        label: 'Paper Losses',
        type: fieldTypeInterface.number,
    },
    lose_scissors: {
        label: 'Scissors Losses',
        type: fieldTypeInterface.number,
    },
    draw_rock: {
        label: 'Rock Draws',
        type: fieldTypeInterface.number,
    },
    draw_paper: {
        label: 'Paper Draws',
        type: fieldTypeInterface.number,
    },
    draw_scissors: {
        label: 'Scissors Draws',
        type: fieldTypeInterface.number,
    }
} as const satisfies Record<string, fieldInterface>;

type jankenponFieldName = keyof typeof jankenponFields;
type jankenponFilter = Pick<Record<jankenponFieldName, string | undefined>, 'server' | 'user_id'>;
type jankenponCounter = `played_${jankenponMove}` | `${jankenponResult}_${jankenponMove}`;

export default class model_jankenpon extends model_base
{
    table = 'jankenpon';
    fields = jankenponFields;
    id?: string;
    date_entered?: Date | string;
    date_modified?: Date | string;
    created_by?: string;
    server?: string;
    user_id?: string;
    played_rock?: number;
    played_paper?: number;
    played_scissors?: number;
    win_rock?: number;
    win_paper?: number;
    win_scissors?: number;
    lose_rock?: number;
    lose_paper?: number;
    lose_scissors?: number;
    draw_rock?: number;
    draw_paper?: number;
    draw_scissors?: number;

    async selectActive(fields: jankenponFilter): Promise<this | null | false>
    {
        this.resetFields();

        try {
            const result = await this.select(
                Object.keys(this.fields).join(', '),
                [],
                `server = ${this.bind(fields.server)} AND user_id = ${this.bind(fields.user_id)}`,
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
            log.warning(`Error selecting jankenpon stats: ${error}`);
            return false;
        }
    }

    async recordResult(fields: jankenponFilter & {move: jankenponMove; result: jankenponResult}): Promise<boolean>
    {
        const selected = await this.selectActive(fields);
        if (selected === false) {
            return false;
        }

        this.server = fields.server;
        this.user_id = fields.user_id;
        this.created_by ??= fields.user_id;

        const playedCounter: jankenponCounter = `played_${fields.move}`;
        const resultCounter: jankenponCounter = `${fields.result}_${fields.move}`;
        Reflect.set(this, playedCounter, Number(Reflect.get(this, playedCounter) ?? 0) + 1);
        Reflect.set(this, resultCounter, Number(Reflect.get(this, resultCounter) ?? 0) + 1);

        return Boolean(await this.save());
    }

    async resetScore(fields: jankenponFilter): Promise<boolean>
    {
        const selected = await this.selectActive(fields);
        if (selected === false) {
            return false;
        }

        this.server = fields.server;
        this.user_id = fields.user_id;
        this.created_by ??= fields.user_id;
        for (const move of jankenponMoves) {
            Reflect.set(this, `played_${move}`, 0);
            Reflect.set(this, `win_${move}`, 0);
            Reflect.set(this, `lose_${move}`, 0);
            Reflect.set(this, `draw_${move}`, 0);
        }

        return Boolean(await this.save());
    }
}
