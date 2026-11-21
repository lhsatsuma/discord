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

import { SlashCommandSubcommandBuilder, ChatInputCommandInteraction} from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import modal_jokes_add from '#modals/jokes/add.ts';
export default class jokes_add extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'jokes';
    name = 'add';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
        .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`))

        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        const modal = await new modal_jokes_add(this.main).init();
        if (!modal.builded) {
            throw new Error('Jokes add modal was not built.');
        }
        await interaction.showModal(modal.builded);
        return true;
    }
}