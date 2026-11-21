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
import { fieldTypeInterface } from '../interfaces/fieldInterface.ts';
import type { fieldInterface } from '../interfaces/fieldInterface.ts';

const jokeFields = {
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
    locale: {
        label: 'Locale',
        type: fieldTypeInterface.string,
        minLength: 1,
        maxLength: 10,
    },
    server: {
        label: 'Server',
        type: fieldTypeInterface.string,
        maxLength: 255,
    },
    content: {
        label: 'Content',
        type: fieldTypeInterface.string,
    }
} as const satisfies Record<string, fieldInterface>;

type jokeFieldName = keyof typeof jokeFields;

export default class model_jokes extends model_base
{
    table = 'jokes';
    fields = jokeFields;

    async getRandom(fields: Pick<Record<jokeFieldName, string>, 'locale'>)
    {
        try{
            const res = await this.select('content', [], `locale = ${this.bind(fields.locale)}`, "RANDOM()", 1);
            return res.rows[0];
        }catch(e){
            return false;
        }
    }
}