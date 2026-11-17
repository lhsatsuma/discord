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

import lang from '#includes/lang.ts';
import type { ChatInputCommandInteraction } from 'discord.js';
import { Pagination, type Options } from 'pagination.djs';
import type entryPointApp from '../../entryPointApp.ts';
import type appSubCommandInterface from '../../interfaces/appSubCommandInterface.ts';

export default class appSubCommandBase implements appSubCommandInterface
{
    main: entryPointApp;
    builded: any;
    parentName: string = '';
    name: string = '';
    cooldown = 0;
    inactive = false;
    commandLocaleName: string = '';
    fullCommandLocaleName: string = '';

    constructor(main: entryPointApp)
    {
        this.main = main;
        return this;
    }

    init()
    {
        this.commandLocaleName = lang.translate(this.parentName, 'SUBCMD_'+this.name.toUpperCase()+'_NAME');
        return this;
    }

    build(): any
    {
        return Promise.resolve(this);
    }

    async execute(_interaction: any): Promise<any>
    {
        return true;
    }

    buildPagination(interaction: ChatInputCommandInteraction, options: Partial<Options>)
    {
        const paginationInteraction = interaction as unknown as ConstructorParameters<typeof Pagination>[0];
        return new Pagination(paginationInteraction, options);
    }
}
