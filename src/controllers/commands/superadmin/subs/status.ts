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
import config from '#includes/config.ts';
import log from '#includes/log.ts';
import processRunning from '#includes/processRunning.ts';
export default class superadmin_status extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'superadmin';
    name = 'status';

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

        await interaction.deferReply();

        const uptime = await this.main.runningPid.getUptime();
        const file_info = this.main.runningPid.getFileInfo();
        const date = new Date().toLocaleDateString(lang.locale);

        const runningPidScheduler = new processRunning(this.main, 'scheduler').init();
        const uptime_scheduler = await runningPidScheduler.getUptime();
        const file_info_scheduler = runningPidScheduler.getFileInfo();

        const thumbnailUrl = this.getThumbnailUrl();
        const appEmbed = new EmbedBuilder()
            .setTitle(lang.translate('superadmin', `SUBCMD_${this.name.toUpperCase()}_APP`));
        const schedulerEmbed = new EmbedBuilder()
            .setTitle(lang.translate('superadmin', `SUBCMD_${this.name.toUpperCase()}_SCHEDULER`));
        if (thumbnailUrl) {
            appEmbed.setThumbnail(thumbnailUrl);
            schedulerEmbed.setThumbnail(thumbnailUrl);
        }

        const pagEmbed = this.buildPagination(interaction, {limit: 1});
        pagEmbed.addEmbeds([
            appEmbed
                .setDescription(`**${date}**\n\nUptime: ${uptime}`)
                .addFields([
                    { name: 'OS', value: String(file_info.platform ?? 'N/A'), inline: true},
                    { name: 'PID', value: String(file_info.pid ?? 'N/A'), inline: true},
                    { name: 'Node Version', value: String(file_info.nodeVersion ?? 'N/A'), inline: true},
                    { name: 'DiscordJS Version', value: String(file_info.discordjsVersion ?? 'N/A'), inline: true},
                    { name: 'App Version', value: String(file_info.appVersion ?? 'N/A'), inline: true},
                ])
                .setColor(Colors.Blue),
            schedulerEmbed
                .setDescription(`**${date}**\n\nUptime: ${uptime_scheduler}`)
                .addFields([
                    { name: 'OS', value: String(file_info_scheduler.platform ?? 'N/A'), inline: true},
                    { name: 'PID', value: String(file_info_scheduler.pid ?? 'N/A'), inline: true},
                    { name: 'Node Version', value: String(file_info_scheduler.nodeVersion ?? 'N/A'), inline: true},
                    { name: 'DiscordJS Version', value: String(file_info_scheduler.discordjsVersion ?? 'N/A'), inline: true},
                    { name: 'App Version', value: String(file_info_scheduler.appVersion ?? 'N/A'), inline: true},
                ])
                .setColor(Colors.Blue)
        ],
    );
        await pagEmbed.render();
        return true;
    }

    private getThumbnailUrl(): string | null
    {
        const configuredUrl = config.DISCORD_BOT_ICON.trim();
        if (!configuredUrl) {
            return null;
        }

        try {
            const url = new URL(configuredUrl);
            if (url.protocol !== 'https:' && url.protocol !== 'http:') {
                throw new TypeError('Expected an HTTP or HTTPS URL.');
            }
            return url.toString();
        } catch (error) {
            log.warning(`Ignoring invalid DISCORD_BOT_ICON URL in superadmin status: ${error}`);
            return null;
        }
    }
}