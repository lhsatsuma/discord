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

import type { ChatInputCommandInteraction, SlashCommandSubcommandBuilder } from 'discord.js';
import type entryPointApp from '../entryPointApp.ts';
import type { Options } from 'pagination.djs';

export default interface appSubCommandInterface
{
    main: entryPointApp;
    builded: SlashCommandSubcommandBuilder;
    parentName: string;
    name: string;
    cooldown: number;
    inactive: boolean;
    commandLocaleName: string;
    fullCommandLocaleName: string;
    init(): this;
    build(): any;
    execute(interaction: ChatInputCommandInteraction): Promise<any>;
    buildPagination(interaction: ChatInputCommandInteraction, options?: Partial<Options>): any;
}
