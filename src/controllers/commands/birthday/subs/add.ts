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
import model_birthday from '#models/birthday.ts';
export default class birthday_add extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'birthday';
    name = 'add';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
        .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`))
        .addUserOption(option =>
                option
                    .setName('user')
                    .setDescription(lang.translate('birthday', `SUBCMD_${this.name.toUpperCase()}_OPTION_USER`))
                    .setRequired(true)
            )
            .addStringOption(option =>
                option.setName('birthdate')
                    .setDescription(lang.translate('birthday', `SUBCMD_${this.name.toUpperCase()}_OPTION_BIRTHDATE`))
                    .setRequired(true)
                    .setMinLength(5)
                    .setMaxLength(5)
            )
        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        const user = interaction.options.getUser('user');
        const birthdate = interaction.options.getString('birthdate');

        if(!user || !birthdate){
            return false;
        }

        const birthdateParts = /^(\d{2})\/(\d{2})$/.exec(birthdate);
        const isUsLocale = lang.locale?.startsWith('en');
        const firstPart = birthdateParts ? Number(birthdateParts[1]) : 0;
        const secondPart = birthdateParts ? Number(birthdateParts[2]) : 0;
        const month = isUsLocale ? firstPart : secondPart;
        const day = isUsLocale ? secondPart : firstPart;
        const daysInMonth = month >= 1 && month <= 12
            ? new Date(Date.UTC(2000, month, 0)).getUTCDate()
            : 0;

        if (!birthdateParts || day < 1 || day > daysInMonth) {
            await interaction.reply({
                content: lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_FORMAT_ERROR`),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        let birthdayClass = new model_birthday();
        
        const activeBirthday = await birthdayClass.selectActive({server: interaction.guild?.id, user_id: user.id});
        if(activeBirthday === false){
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return false;
        }

        const birthdateFull = new Date(Date.UTC(2000, month - 1, day)).toUTCString();
        birthdayClass.birthdate = birthdateFull;
        birthdayClass.server = interaction.guild?.id;
        birthdayClass.user_id = user.id;
        birthdayClass.username = user.username;
        birthdayClass.created_by = interaction.user.id;
        
        if(!await birthdayClass.save()){
            await interaction.reply({
                content: lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_FORMAT_ERROR`),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }


        await interaction.reply({
            content: lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_SUCCESS`),
            flags: [MessageFlags.Ephemeral]
        });
        return true;
    }
}