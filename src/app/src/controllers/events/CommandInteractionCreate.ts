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

import {Events, MessageFlags, type ChatInputCommandInteraction} from "discord.js";
import log from '#includes/log.ts';
import cooldown from '#includes/cooldown.ts';
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
            if (!interaction.isChatInputCommand()) return;

            if (!interaction.guildId) {
                await interaction.reply({
                    content: 'Bot is only allowed on servers!',
                    flags: [MessageFlags.Ephemeral]
                });
                return;
            }
            const settings = await new model_servers().getServerSettings(interaction.guildId);
            await lang.runWithLocale(
                settings === false ? DEFAULT_LOCALE : settings.locale,
                () => this.handleCommand(interaction)
            );
        });
    }

    private async handleCommand(interaction: ChatInputCommandInteraction): Promise<void>
    {
        const subcommandName = interaction.options.getSubcommand(false);
        let command = this.main.commandsByLocale.get(lang.locale)?.get(interaction.commandName);
        if (!command || (subcommandName && !command.subcommands?.[subcommandName])) {
            for (const commands of this.main.commandsByLocale.values()) {
                const candidate = commands.get(interaction.commandName);
                if (
                    candidate
                    && (!subcommandName || candidate.subcommands?.[subcommandName])
                ) {
                    command = candidate;
                    break;
                }
            }
        }
        if (!command) {
            log.err('[Commands] Command not found: '+interaction.commandName);
            return;
        }

        let commandCooldownKey = interaction.commandName;
        let commandName = commandCooldownKey;
        let cooldownSeconds = command.cooldown;
        let optionsText = '';

        if (subcommandName) {
            commandCooldownKey += ':'+subcommandName;
            commandName += ':'+subcommandName;
            command = command.subcommands?.[subcommandName];
            if (!command) {
                log.err(`[Commands] Subcommand not found: ${interaction.commandName}:${subcommandName}`);
                return;
            }
            cooldownSeconds = command ? command.cooldown : 0;
        }

        const appendOptionValues = (options: typeof interaction.options.data) => {
            options.forEach((option) => {
                if (option.options?.length) {
                    appendOptionValues(option.options);
                } else if ('value' in option) {
                    optionsText += ` [${option.name}::${option.value}]`;
                }
            });
        };
        appendOptionValues(interaction.options.data);

        const interactionKey = `[${interaction.guild?.name}#${interaction.channelId}@${interaction.user.username}]`;
        log.debug(`${interactionKey}[CMD] ${commandName}${optionsText}`);

        const cooldownLeft = cooldownSeconds
            ? cooldown.checkUserCd(interaction.user.id, commandCooldownKey)
            : 0;
        if (cooldownLeft) {
            await interaction.reply({
                content: lang.translate('globals', 'CMD_COOLDOWN', [cooldownLeft]),
                flags: [MessageFlags.Ephemeral]
            });
            return;
        }

        try {
            const result = await command.execute(interaction);
            if (!result) {
                throw new Error('Command failed!');
            }
            if (cooldownSeconds) {
                cooldown.insertUserCd(interaction.user.id, commandCooldownKey, cooldownSeconds);
            }
        } catch (error) {
            const errorDetails = error instanceof Error ? error.stack ?? error.message : String(error);
            log.warning('Error executing command: ' + errorDetails);
            try {
                if (interaction.deferred) {
                    await interaction.editReply({
                        content: lang.translate('globals', 'CMD_ERROR')
                    });
                } else if (!interaction.replied) {
                    await interaction.reply({
                        content: lang.translate('globals', 'CMD_ERROR'),
                        flags: [MessageFlags.Ephemeral]
                    });
                }
            } catch (responseError) {
                log.warning(`Could not send command error response: ${responseError}`);
            }
        }
    }
}