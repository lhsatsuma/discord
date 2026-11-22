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
import model_pickup_lines from '#models/pickup_lines.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
export default class pickup_lines_add extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'pickup_lines';
    name = 'add';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
        .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`))
        .addStringOption(option =>
            option
                .setName('content')
                .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_OPTION_CONTENT`))
                .setRequired(true)
                .setMinLength(2)
        )

        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        let content = interaction.options.getString('content');

        let result = await model_pickup_lines.insert({
            locale: lang.locale,
            content: content,
            created_by: interaction.user.id
        });

        if(result == false){
            await interaction.reply({
                content: lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_ERROR`),
                flags: [MessageFlags.Ephemeral]
            });
            return false;
        }

        await interaction.reply({
            content: lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_SUCCESS`),
            flags: [MessageFlags.Ephemeral]
        });
        
        return true;
    }
}