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

import {
    ActionRowBuilder,
    ButtonBuilder,
    ButtonStyle,
    MessageFlags,
    PermissionFlagsBits,
    SlashCommandSubcommandBuilder,
    type ChatInputCommandInteraction
} from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import model_servers from '#models/server.ts';

export default class admin_config extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'admin';
    name = 'config';

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
        if (!serverId) {
            await interaction.reply({
                content: lang.translate('globals', 'CHANNEL_NOT_ALLOWED'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        if (await new model_servers().getServerSettings(serverId) === false) {
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const row = new ActionRowBuilder<ButtonBuilder>().addComponents(
            new ButtonBuilder()
                .setCustomId('admin_config_autoban')
                .setLabel(lang.translate(this.parentName, 'SUBCMD_CONFIG_MENU_AUTOBAN'))
                .setStyle(ButtonStyle.Primary),
            new ButtonBuilder()
                .setCustomId('admin_config_memes')
                .setLabel(lang.translate(this.parentName, 'SUBCMD_CONFIG_MENU_MEMES'))
                .setStyle(ButtonStyle.Primary),
            new ButtonBuilder()
                .setCustomId('admin_config_voice')
                .setLabel(lang.translate(this.parentName, 'SUBCMD_CONFIG_MENU_VOICE'))
                .setStyle(ButtonStyle.Primary),
            new ButtonBuilder()
                .setCustomId('admin_config_welcome')
                .setLabel(lang.translate(this.parentName, 'SUBCMD_CONFIG_MENU_WELCOME'))
                .setStyle(ButtonStyle.Primary)
        );
        await interaction.reply({
            content: lang.translate(this.parentName, 'SUBCMD_CONFIG_MENU_DESCRIPTION'),
            components: [row],
            flags: [MessageFlags.Ephemeral]
        });
        return true;
    }
}
