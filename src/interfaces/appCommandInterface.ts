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

import type { ChatInputCommandInteraction, SlashCommandBuilder } from 'discord.js';
import type entryPointApp from '../entryPointApp.ts';
import type { Options } from 'pagination.djs';

export default interface appCommandInterface
{
    main: entryPointApp;
    builded: SlashCommandBuilder | null;
    name: string;
    hasSubcommands: boolean;
    cooldown: number;
    inactive: boolean;
    commandLocaleName: string;
    fullCommandLocaleName: string;
    subcommands: any[];
    init(): this;
    build(): Promise<any>;
    execute(interaction: ChatInputCommandInteraction): Promise<any>;
    buildSubCommands(): Promise<this>;
    buildPagination(interaction: ChatInputCommandInteraction, options: Partial<Options>): any;
}
