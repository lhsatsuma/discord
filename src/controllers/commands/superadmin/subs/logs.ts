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
import log from '#includes/log.ts';
import config from '#includes/config.ts';
export default class superadmin_logs extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'superadmin';
    name = 'logs';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
        .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`));

        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        if(config.DISCORD_BOT_ADMIN_CHANNEL != interaction.channel?.id){
            await interaction.reply({
                content: lang.translate('globals', 'CHANNEL_NOT_ALLOWED'),
                flags: [MessageFlags.Ephemeral]
            });
            return false;
        }

        const run = interaction.options.getString('run') ?? 'app';

        let result = await log.getLines(30);
        let result_lines = result.split('\n');

        let resultArr = [];
        let description = '```';
        result_lines.forEach((line) => {
            if(description.length + line.length > 1900){
                description += '```';
                resultArr.push(description);
                description = '```';
            }
            description += '\n'+line;
        });
        if(description !== '```'){
            description += '```';
            resultArr.push(description);
        }

        await interaction.deferReply();
        await interaction.deleteReply();

        const channel = interaction.channel;
        if (!channel?.isSendable()) {
            return false;
        }

        for (const ipt of resultArr) {
            await channel.send({
                content: ipt
            });
        }
        return true;
    }
}