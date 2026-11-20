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
    LabelBuilder,
    MessageFlags,
    ModalSubmitInteraction,
    PermissionFlagsBits,
    StringSelectMenuBuilder
} from 'discord.js';
import lang from '#includes/lang.ts';
import appModalBase from '#includes/commands/appModalBase.ts';
import model_servers from '#models/server.ts';

export default class modal_admin_config_voice extends appModalBase
{
    parentName = 'admin';
    name = 'config_voice';
    enabled = false;

    async buildComponents()
    {
        const modal = this.builded;
        if (!modal) {
            throw new Error('Voice update configuration modal must be initialized before building components.');
        }

        modal.addLabelComponents(
            new LabelBuilder()
                .setLabel(lang.translate(this.parentName, 'MODAL_CONFIG_VOICE_LABEL'))
                .setDescription(lang.translate(this.parentName, 'MODAL_CONFIG_VOICE_FIELD_DESCRIPTION'))
                .setStringSelectMenuComponent(
                    new StringSelectMenuBuilder()
                        .setCustomId('send_voice_update')
                        .setMinValues(1)
                        .setMaxValues(1)
                        .addOptions(
                            {
                                label: lang.translate(this.parentName, 'MODAL_CONFIG_VOICE_ENABLED'),
                                value: 'true',
                                default: this.enabled
                            },
                            {
                                label: lang.translate(this.parentName, 'MODAL_CONFIG_VOICE_DISABLED'),
                                value: 'false',
                                default: !this.enabled
                            }
                        )
                )
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
        const values = interaction.fields.getStringSelectValues('send_voice_update');
        const value = values[0];
        if (!serverId || (value !== 'true' && value !== 'false')) {
            await interaction.reply({
                content: lang.translate(this.parentName, 'MODAL_CONFIG_VOICE_INVALID'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const saved = await new model_servers().saveVoiceUpdateSetting(
            serverId,
            value === 'true',
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
            content: lang.translate(this.parentName, 'MODAL_CONFIG_VOICE_SUCCESS', [
                lang.translate(this.parentName, value === 'true'
                    ? 'MODAL_CONFIG_VOICE_ENABLED'
                    : 'MODAL_CONFIG_VOICE_DISABLED')
            ]),
            flags: [MessageFlags.Ephemeral]
        });
        return true;
    }
}
