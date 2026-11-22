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
import { SlashCommandBuilder, PermissionFlagsBits, MessageFlags, ChatInputCommandInteraction } from "discord.js";
import appCommandBase from "#includes/commands/appCommandBase.ts";
import utils from '#includes/utils.ts';

export default class pinguser extends appCommandBase
{
    name = 'pinguser';
    cooldown = 30;
    async build()
    {
        this.builded = new SlashCommandBuilder();
        this.builded
		.setName(lang.translate(this.name, `CMD_${this.name.toUpperCase()}_NAME`))
		.setDescription(lang.translate(this.name, `CMD_${this.name.toUpperCase()}_DESCRIPTION`))
		.addUserOption(option =>
			option
				.setName('target')
				.setDescription(lang.translate(this.name, `CMD_${this.name.toUpperCase()}_OPTION_TARGET`))
				.setRequired(true))
		.addIntegerOption(option =>
			option
				.setName('times')
				.setDescription(lang.translate(this.name, `CMD_${this.name.toUpperCase()}_OPTION_TIMES`))
				.setRequired(true)
				.setMinValue(1)
				.setMaxValue(10))
		.setDefaultMemberPermissions(PermissionFlagsBits.Administrator)
        return super.build();
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        const target = interaction.options.getUser('target');
		const times = interaction.options.getInteger('times') ?? 0;
		interaction.reply({
			content: lang.translate(this.name, `CMD_${this.name.toUpperCase()}_SUCCESS`),
			flags: [MessageFlags.Ephemeral],
		});

		const channel = interaction.channel;
        if (!channel?.isSendable()) {
            return false;
        }
		
		let messageSended = null;
		for(let i=0;i<times;i++){
		 	messageSended = await channel.send(lang.translate(this.name, `CMD_${this.name.toUpperCase()}_SUCCESS_USER`, [target?.id]));
			await utils.sleep(1500);
			if(i<times-1) {
				await messageSended.delete();
			}
		}
		return true;
    }
}