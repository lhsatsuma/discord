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

import { MessageFlags, PermissionFlagsBits, SlashCommandSubcommandBuilder, type ChatInputCommandInteraction } from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import model_admin_channels from '#models/admin_channels.ts';

export default class admin_remove_channel extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'admin';
    name = 'remove_channel';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
            .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
            .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`));

        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        if (!interaction.memberPermissions?.has(PermissionFlagsBits.ManageGuild)) {
            await interaction.reply({
                content: lang.translate('globals', 'CHANNEL_NOT_ALLOWED'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const serverId = interaction.guildId;
        const channelId = interaction.channelId;
        if (!serverId || !channelId) {
            await interaction.reply({
                content: lang.translate('globals', 'CHANNEL_NOT_ALLOWED'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const adminChannel = new model_admin_channels();
        const existingChannel = await adminChannel.selectActive({
            server: serverId,
            channel_id: channelId
        });

        if (existingChannel === false) {
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        if (!existingChannel) {
            await interaction.reply({
                content: lang.translate(this.parentName, 'SUBCMD_REMOVE_CHANNEL_NOT_FOUND'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const removed = await adminChannel.removeActive({
            server: serverId,
            channel_id: channelId
        });
        if (!removed) {
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        await interaction.reply({
            content: lang.translate(this.parentName, 'SUBCMD_REMOVE_CHANNEL_SUCCESS', [channelId]),
            flags: [MessageFlags.Ephemeral]
        });
        return true;
    }
}
