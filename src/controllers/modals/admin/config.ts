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
    StringSelectMenuBuilder,
    TextInputBuilder,
    TextInputStyle
} from 'discord.js';
import lang from '#includes/lang.ts';
import appModalBase from '#includes/commands/appModalBase.ts';
import model_servers, {
    MAX_AUTOBAN_DELETE_PERIOD_MINUTES,
    MAX_AUTOBAN_MUTE_DAYS,
    type autobanPunishment
} from '#models/server.ts';

export default class modal_admin_config extends appModalBase
{
    parentName = 'admin';
    name = 'config_autoban';
    currentPeriod = 60;
    muteDays = 7;
    punishment: autobanPunishment = 'ban';

    async buildComponents()
    {
        const modal = this.builded;
        if (!modal) {
            throw new Error('Admin configuration modal must be initialized before building components.');
        }

        modal.addLabelComponents(
            new LabelBuilder()
                .setLabel(lang.translate(this.parentName, 'MODAL_CONFIG_AUTOBAN_PUNISHMENT_LABEL'))
                .setDescription(lang.translate(this.parentName, 'MODAL_CONFIG_AUTOBAN_PUNISHMENT_DESCRIPTION'))
                .setStringSelectMenuComponent(
                    new StringSelectMenuBuilder()
                        .setCustomId('punishment')
                        .setMinValues(1)
                        .setMaxValues(1)
                        .addOptions(
                            {
                                label: 'ban',
                                value: 'ban',
                                default: this.punishment === 'ban'
                            },
                            {
                                label: 'mute',
                                value: 'mute',
                                default: this.punishment === 'mute'
                            }
                        )
                ),
            new LabelBuilder()
                .setLabel(lang.translate(this.parentName, 'MODAL_CONFIG_AUTOBAN_PERIOD_LABEL'))
                .setDescription(lang.translate(this.parentName, 'MODAL_CONFIG_AUTOBAN_PERIOD_DESCRIPTION'))
                .setTextInputComponent(
                    new TextInputBuilder()
                        .setCustomId('delete_period')
                        .setStyle(TextInputStyle.Short)
                        .setMinLength(1)
                        .setMaxLength(5)
                        .setValue(String(this.currentPeriod))
                ),
            new LabelBuilder()
                .setLabel(lang.translate(this.parentName, 'MODAL_CONFIG_AUTOBAN_MUTE_DAYS_LABEL'))
                .setDescription(lang.translate(this.parentName, 'MODAL_CONFIG_AUTOBAN_MUTE_DAYS_DESCRIPTION'))
                .setTextInputComponent(
                    new TextInputBuilder()
                        .setCustomId('mute_days')
                        .setStyle(TextInputStyle.Short)
                        .setMinLength(1)
                        .setMaxLength(2)
                        .setValue(String(this.muteDays))
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
        const punishmentValues = interaction.fields.getStringSelectValues('punishment');
        const punishmentValue = punishmentValues[0];
        if (punishmentValue !== 'ban' && punishmentValue !== 'mute') {
            await interaction.reply({
                content: lang.translate(this.parentName, 'MODAL_CONFIG_AUTOBAN_INVALID_PUNISHMENT'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }
        const punishment: autobanPunishment = punishmentValue;
        const periodValue = interaction.fields.getTextInputValue('delete_period');
        const periodMinutes = Number(periodValue);
        const muteDaysValue = interaction.fields.getTextInputValue('mute_days');
        const muteDays = Number(muteDaysValue);
        if (!serverId || !/^[0-9]{1,5}$/.test(periodValue)
            || !Number.isSafeInteger(periodMinutes)
            || periodMinutes < 0
            || periodMinutes > MAX_AUTOBAN_DELETE_PERIOD_MINUTES
            || !/^[0-9]{1,2}$/.test(muteDaysValue)
            || !Number.isSafeInteger(muteDays)
            || muteDays < 1
            || muteDays > MAX_AUTOBAN_MUTE_DAYS) {
            await interaction.reply({
                content: lang.translate(this.parentName, 'MODAL_CONFIG_AUTOBAN_INVALID'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const serverModel = new model_servers();
        const saved = await serverModel.saveAutobanConfiguration(
            serverId,
            {
                deletePeriodMinutes: periodMinutes,
                punishment,
                muteDays
            },
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
            content: lang.translate(this.parentName, 'MODAL_CONFIG_AUTOBAN_SUCCESS', [
                lang.translate(this.parentName, `MODAL_CONFIG_AUTOBAN_PUNISHMENT_${punishment.toUpperCase()}`),
                periodMinutes,
                muteDays
            ]),
            flags: [MessageFlags.Ephemeral]
        });
        return true;
    }
}
