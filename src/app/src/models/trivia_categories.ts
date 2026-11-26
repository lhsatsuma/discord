/*
 * Copyright (C) 2025 Luis Satsuma
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

import model_base from '#models/base.ts';
import log from '#includes/log.ts';

export interface triviaCategoryRecord
{
    id: string;
    short_description: string;
    description: string;
}

export default class model_trivia_categories extends model_base
{
    table = 'trivia_categorys';

    async listForServer(locale: string, categoryIds: string[]): Promise<triviaCategoryRecord[] | false>
    {
        try {
            const result = categoryIds.length
                ? await this.query(
                    `SELECT categories.id, categories.short_description, categories.description
                     FROM ${this.table} AS categories
                     WHERE categories.locale = $1 AND categories.id = ANY($2::uuid[])
                     ORDER BY categories.description`,
                    [locale, categoryIds]
                )
                : await this.query(
                    `SELECT categories.id, categories.short_description, categories.description
                     FROM ${this.table} AS categories
                     WHERE categories.locale = $1
                     ORDER BY categories.description`,
                    [locale]
                );

            return result.rows as triviaCategoryRecord[];
        } catch (error) {
            log.warning(`Error loading trivia categories for locale ${locale}: ${error}`);
            return false;
        }
    }
}
