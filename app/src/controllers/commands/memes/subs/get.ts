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

import { SlashCommandSubcommandBuilder, EmbedBuilder, MessageFlags, Colors, ChatInputCommandInteraction} from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import model_memes from '#models/memes.ts';
export default class memes_get extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'memes';
    name = 'get';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
        .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`))
        .addStringOption(search =>
                search.setName('search')
                    .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_OPTION_SEARCH`))
                    .setRequired(true)
        );

        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        const searchStr = interaction.options.getString('search');
        if(!searchStr){
            return false;
        }


        let embedMsg = null;
        let meme = await model_memes.search({server: interaction.guild?.id}, searchStr);

        if(meme == false){
            interaction.reply({
                content: lang.translate('globals', `DB_ERROR`),
                flags: [MessageFlags.Ephemeral]
            });
            return false;
        }

        if(!meme){
            interaction.reply({
                content: lang.translate(this.parentName, `NO_RECORDS`),
                flags: [MessageFlags.Ephemeral]
            });
            return false;
        }
        
        embedMsg = {
            embeds: [
                new EmbedBuilder()
                .setColor('Random')
                .setImage(meme.content)
                .setFooter({
                    text: `#${meme.order_id} | ${meme.description}`
                })
                .setTimestamp(meme.created_at)
            ]
        };
        await interaction.reply(embedMsg);
        return true;
    }
}