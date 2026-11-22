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

import { ChatInputCommandInteraction, Collection, SlashCommandSubcommandBuilder } from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import model_memes from '#models/memes.ts';
export default class memes_list extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'memes';
    name = 'list';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
        .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`));

        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        let memes_found = await model_memes.listAll({server: interaction.guild?.id});
        if(memes_found == false){
            interaction.reply({
                content: lang.translate('system', 'DB_ERROR')
            });
            return true;
        }
        memes_found = memes_found.map((meme_found: Record<string, any>) => { return `#${meme_found.order_id} | ${meme_found.description}`});
        
        let pag_builded = this.buildPagination(interaction, {limit: 20});
        pag_builded.setDescriptions(memes_found);
        pag_builded.render();
        return true;
    }
}