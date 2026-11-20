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
    ChannelSelectMenuBuilder,
    ChannelType,
    LabelBuilder,
    MessageFlags,
    PermissionFlagsBits,
    StringSelectMenuBuilder,
    TextInputBuilder,
    TextInputStyle,
    type ModalSubmitInteraction
} from 'discord.js';
import lang from '#includes/lang.ts';
import appModalBase from '#includes/commands/appModalBase.ts';
import model_servers from '#models/server.ts';

const MAX_WELCOME_MESSAGE_LENGTH = 2000;
const MAX_USER_MENTION = '<@18446744073709551615>';

export default class modal_admin_config_welcome extends appModalBase
{
    parentName = 'admin';
    name = 'config_welcome';
    enabled = false;
    channelId: string | null = null;
    message = '';

    async buildComponents()
    {
        const modal = this.builded;
        if (!modal) {
            throw new Error('Welcome message configuration modal must be initialized before building components.');
        }

        const channelSelect = new ChannelSelectMenuBuilder()
            .setCustomId('welcome_channel_id')
            .setChannelTypes(ChannelType.GuildText)
            .setMinValues(0)
            .setMaxValues(1)
            .setRequired(false);
        if (this.channelId) {
            channelSelect.setDefaultChannels(this.channelId);
        }

        const messageInput = new TextInputBuilder()
            .setCustomId('welcome_message')
            .setStyle(TextInputStyle.Paragraph)
            .setRequired(false)
            .setMaxLength(MAX_WELCOME_MESSAGE_LENGTH);
        if (this.message) {
            messageInput.setValue(this.message);
        }

        modal.addLabelComponents(
            new LabelBuilder()
                .setLabel(lang.translate(this.parentName, 'MODAL_CONFIG_WELCOME_ACTIVE_LABEL'))
                .setDescription(lang.translate(this.parentName, 'MODAL_CONFIG_WELCOME_ACTIVE_DESCRIPTION'))
                .setStringSelectMenuComponent(
                    new StringSelectMenuBuilder()
                        .setCustomId('welcome_message_active')
                        .setMinValues(1)
                        .setMaxValues(1)
                        .addOptions(
                            {
                                label: lang.translate(this.parentName, 'MODAL_CONFIG_WELCOME_ENABLED'),
                                value: 'true',
                                default: this.enabled
                            },
                            {
                                label: lang.translate(this.parentName, 'MODAL_CONFIG_WELCOME_DISABLED'),
                                value: 'false',
                                default: !this.enabled
                            }
                        )
                ),
            new LabelBuilder()
                .setLabel(lang.translate(this.parentName, 'MODAL_CONFIG_WELCOME_CHANNEL_LABEL'))
                .setDescription(lang.translate(this.parentName, 'MODAL_CONFIG_WELCOME_CHANNEL_DESCRIPTION'))
                .setChannelSelectMenuComponent(channelSelect),
            new LabelBuilder()
                .setLabel(lang.translate(this.parentName, 'MODAL_CONFIG_WELCOME_MESSAGE_LABEL'))
                .setDescription(lang.translate(this.parentName, 'MODAL_CONFIG_WELCOME_MESSAGE_DESCRIPTION'))
                .setTextInputComponent(messageInput)
        );
        return this;
    }

    async execute(interaction: ModalSubmitInteraction)
    {
        if (!interaction.memberPermissions?.has(PermissionFlagsBits.ManageGuild)) {
            await interaction.reply({
                content: lang.translate('globals', 'CHANNEL_NOT_ALLOWED'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const serverId = interaction.guildId;
        const activeValue = interaction.fields.getStringSelectValues('welcome_message_active')[0];
        const selectedChannels = interaction.fields.getSelectedChannels(
            'welcome_channel_id',
            false,
            [ChannelType.GuildText]
        );
        const channelId = selectedChannels?.first()?.id ?? null;
        const message = interaction.fields.getTextInputValue('welcome_message');
        const renderedMessageLength = message.replaceAll('[@user]', MAX_USER_MENTION).length;

        if (!serverId || (activeValue !== 'true' && activeValue !== 'false')
            || (activeValue === 'true' && (!channelId || !message.trim()))
            || renderedMessageLength > MAX_WELCOME_MESSAGE_LENGTH) {
            await interaction.reply({
                content: lang.translate(this.parentName, 'MODAL_CONFIG_WELCOME_INVALID'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const saved = await new model_servers().saveWelcomeSettings(
            serverId,
            activeValue === 'true',
            channelId,
            message || null,
            interaction.user.id
        );
        if (!saved) {
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        await interaction.reply({
            content: lang.translate(this.parentName, 'MODAL_CONFIG_WELCOME_SUCCESS'),
            flags: [MessageFlags.Ephemeral]
        });
        return true;
    }
}
