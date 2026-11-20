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

import { SlashCommandSubcommandBuilder, ChatInputCommandInteraction, MessageFlags} from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import model_server_members from '#models/server_members.ts';
export default class birthday_lsit extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'birthday';
    name = 'list';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
        .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`))
        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        let birthdayClass = new model_server_members();
        
        let birthdays = await birthdayClass.getMembersBirthdays({server: interaction.guild?.id});

        if(birthdays == false){
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return false;
        }

        if(!birthdays.length){
            await interaction.reply({
                content: lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NO_MEMBERS`)
            });
            return true;
        }

        const pag_builded = this.buildPagination(interaction, {limit: 10});
        pag_builded.setDescriptions(birthdays.map((birthday) => {
            return '<@'+birthday.user_id+'> : '+new Date(birthday.birthdate).toLocaleDateString(lang.locale, {
                day: '2-digit',
                month: '2-digit'
            })
        }));
        pag_builded.render();

        return true;
    }
}