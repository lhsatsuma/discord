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

import {Events, MessageFlags, type ModalSubmitInteraction} from "discord.js";
import log from '#includes/log.ts';
import lang, { DEFAULT_LOCALE } from '#includes/lang.ts';
import model_servers from '#models/server.ts';
import entryPointApp from "#src/entryPointApp.ts";

export default class InteractionCreate
{
    main: entryPointApp;

    constructor(main: entryPointApp)
    {
        this.main = main;
    }

    init()
    {
        this.main.on(Events.InteractionCreate, async (interaction) => {
            if (!interaction.isModalSubmit()) return;

            const settings = interaction.guildId
                ? await new model_servers().getServerSettings(interaction.guildId)
                : false;
            await lang.runWithLocale(
                settings === false ? DEFAULT_LOCALE : settings.locale,
                () => this.handleModal(interaction)
            );
        });
    }

    private async handleModal(interaction: ModalSubmitInteraction): Promise<void>
    {
        if (!interaction.customId.startsWith('modal_')) {
            return;
        }

        const modalClass = this.main.modals.get(interaction.customId);
        if (!modalClass) {
            log.warning(lang.translate('system', 'MODAL_NOT_FOUND', [interaction.customId]));
            await interaction.reply({
                content: lang.translate('system', 'MODAL_NOT_FOUND'),
                flags: [MessageFlags.Ephemeral]
            });
            return;
        }

        const interactionKey = `[${interaction.guild?.name}#${interaction.channelId}@${interaction.user.username}]`;
        let optionsText = '';
        for (const [key, value] of interaction.fields.fields) {
            const optionValue = 'value' in value
                ? value.value
                : 'values' in value
                    ? value.values.join(', ')
                    : '';
            optionsText += ` [${key}::${optionValue}]`;
        }

        log.debug(`${interactionKey}[MDL] ${modalClass.commandName}${optionsText}`);

        try {
            const result = await modalClass.execute(interaction);
            if (result === false && interaction.isRepliable() && !interaction.deferred) {
                log.warning(lang.translate('system', 'MODAL_EXECUTE_FAILED', [interaction.customId]));
                await interaction.reply({
                    content: lang.translate('system', 'MODAL_EXECUTE_FAILED'),
                    flags: [MessageFlags.Ephemeral]
                });
            }
        } catch (error) {
            log.warning('Error executing command: '+error);
            if (!interaction.replied) {
                await interaction.reply({
                    content: lang.translate('system', 'MODAL_EXECUTE_FAILED'),
                    flags: [MessageFlags.Ephemeral]
                });
            }
        }
    }
}