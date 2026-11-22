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

import entryPoint from '#src/entryPoint.ts';
import {Collection, Routes, REST, type SlashCommandBuilder} from 'discord.js';
import fs from 'fs';
import lang, { DEFAULT_LOCALE, type LocaleCode } from '#includes/lang.ts';
import log from '#includes/log.ts';
import config from '#includes/config.ts';
import redisCache from '#includes/cache/redis_cache.ts';
import model_servers from '#models/server.ts';

export default class entryPointApp extends entryPoint
{
	commandsByLocale = new Map<LocaleCode, Collection<string, any>>();
	modals: Collection<string, any>;
	private commandDefinitionsByLocale = new Map<
		LocaleCode,
		ReturnType<SlashCommandBuilder['toJSON']>[]
	>();
	private registeredGuildLocales = new Map<string, LocaleCode>();
	private guildCommandRegistrationQueue = new Map<string, Promise<void>>();
	private commandRest?: REST;

	constructor()
	{
		super();
		this.modals = new Collection();
	}

    async init(): Promise<boolean>
    {
        const initialized = await super.init();
        if (!initialized) {
            return false;
        }

        log.debug(lang.translate('system', 'START_LOADING_COMMANDS'));
        const loadedCommands = await this.loadCommands();
        if (!loadedCommands) {
            log.fatal(lang.translate('system', 'START_LOADING_COMMANDS_ERR'));
        }
        log.debug(lang.translate('system', 'START_LOADED_COMMANDS', [loadedCommands]));

        log.debug(lang.translate('system', 'START_LOADING_MODALS'));
        const loadedModals = await this.loadModals();
        if (!loadedModals) {
            log.fatal(lang.translate('system', 'START_LOADING_MODALS_ERR'));
        }
        log.debug(lang.translate('system', 'START_LOADED_MODALS', [loadedModals]));

        log.debug(lang.translate('system', 'START_LOADING_EVENTS'));
        const loadedEvents = await this.loadEvents();
        if (!loadedEvents) {
            log.fatal(lang.translate('system', 'START_LOADING_EVENTS_ERR'));
        }
        log.debug(lang.translate('system', 'START_LOADED_EVENTS', [loadedEvents]));

        super.finishInit();
        return true;
    }

    async loadCommands()
    {
        const importPath = '#commands/';
        const basePath = './src/controllers/commands/';
        const commandPaths = fs.readdirSync(basePath);
        this.commandsByLocale.clear();
        this.commandDefinitionsByLocale.clear();

        for (const locale of lang.availableLocales) {
            const commands = new Collection<string, any>();
            const definitions: ReturnType<SlashCommandBuilder['toJSON']>[] = [];

            await lang.runWithLocale(locale.value, async () => {
                for (const commandName of commandPaths) {
                    const commandPath = `${basePath}${commandName}/${commandName}.ts`;
                    if (!fs.existsSync(commandPath)) {
                        log.err(lang.translate('system', 'START_LOADING_COMMAND_JS', [commandName]));
                        continue;
                    }

                    const commandModule = await import(`${importPath}${commandName}/${commandName}.ts`);
                    const command = new commandModule.default(this).init();
                    await command.build();

                    if (command.inactive) {
                        log.info(lang.translate('system', 'START_COMMAND_INNACTIVE', [commandName]));
                        continue;
                    }
                    if (!command.builded) {
                        throw new Error(`Command ${commandName} did not build for locale ${locale.value}.`);
                    }

                    commands.set(command.builded.name, command);
                    definitions.push(command.builded.toJSON());
                }
            });

            this.commandsByLocale.set(locale.value, commands);
            this.commandDefinitionsByLocale.set(locale.value, definitions);
        }

        if (config.DISCORD_BOT_SEND_COMMANDS_API) {
            log.debug(lang.translate('system', 'START_SENDING_COMMANDS_API'));
            this.commandRest = new REST().setToken(config.DISCORD_BOT_TOKEN);
            try {
                await redisCache.subscribe('discord-bot:server-locale-updated', (serverId) => {
                    void this.refreshGuildCommands(serverId).catch((error: unknown) => {
                        log.warning(`Could not refresh slash commands for guild ${serverId}: ${error}`);
                    });
                });

                for (const guild of this.guilds.cache.values()) {
                    await this.registerCommandsForGuild(guild.id);
                }

                await this.commandRest.put(
                    Routes.applicationCommands(config.DISCORD_BOT_ID),
                    {body: []}
                );
                log.debug(lang.translate('system', 'START_SENDED_COMMANDS_API'));
            } catch (error) {
                log.fatal(lang.translate('system', 'START_SENDING_COMMANDS_API_ERR', [error]));
                throw error;
            }
        }

        return this.commandDefinitionsByLocale.get(DEFAULT_LOCALE)?.length ?? 0;
    }

    private async refreshGuildCommands(guildId: string): Promise<void>
    {
        await new model_servers().invalidateSettingsCache(guildId);
        await this.registerCommandsForGuild(guildId);
    }

    async registerCommandsForGuild(guildId: string): Promise<void>
    {
        if (!config.DISCORD_BOT_SEND_COMMANDS_API) {
            return;
        }

        const previousRegistration = this.guildCommandRegistrationQueue.get(guildId) ?? Promise.resolve();
        const registration = previousRegistration.then(
            () => this.registerCommandsForGuildNow(guildId),
            () => this.registerCommandsForGuildNow(guildId)
        );
        this.guildCommandRegistrationQueue.set(guildId, registration);

        try {
            await registration;
        } finally {
            if (this.guildCommandRegistrationQueue.get(guildId) === registration) {
                this.guildCommandRegistrationQueue.delete(guildId);
            }
        }
    }

    private async registerCommandsForGuildNow(guildId: string): Promise<void>
    {
        const settings = await new model_servers().getServerSettings(guildId);
        if (settings === false) {
            throw new Error(`Could not load locale settings for guild ${guildId}.`);
        }
        if (this.registeredGuildLocales.get(guildId) === settings.locale) {
            return;
        }

        const definitions = this.commandDefinitionsByLocale.get(settings.locale);
        if (!definitions || !this.commandRest) {
            throw new Error(`Commands are not loaded for locale ${settings.locale}.`);
        }

        await this.commandRest.put(
            Routes.applicationGuildCommands(config.DISCORD_BOT_ID, guildId),
            {body: definitions}
        );
        this.registeredGuildLocales.set(guildId, settings.locale);
    }

	async loadEvents()
	{
		const importPath = '#events/';
        const basePath = './src/controllers/events/';
		const eventsPath = fs.readdirSync(basePath);


		for (const eventName of eventsPath) {
			log.debug(lang.translate('system', 'START_LOADING_EVENT_NAME', [eventName]));
			let importFile = importPath + eventName;
			let event = await import(importFile);
			let eventClass = new event.default(this).init();
			log.debug(lang.translate('system', 'START_LOADED_EVENT_NAME', [eventName]));
		}

		return eventsPath.length;
	}

	async loadModals()
	{
		const importPath = '#modals/';
        const basePath = './src/controllers/modals/';
		const modalsPath = fs.readdirSync(basePath);
		this.modals = new Collection();

		let loaded_modals = 0;
		for (const modalFolder of modalsPath) {
			log.debug(lang.translate('system', 'START_LOADING_MODAL_FOLDER', [modalFolder]));
			let baseModalFolder = basePath + modalFolder;

			const modalsPath = fs.readdirSync(baseModalFolder);
			for (const modalFile of modalsPath) {
				log.debug(lang.translate('system', 'START_LOADING_MODAL_NAME', [modalFile]));
				let importFile = importPath + modalFolder + '/' + modalFile;
				let modal = await import(importFile);
				let modalClass = new modal.default(this);
				await modalClass.init();
				this.modals.set(modalClass.commandName, modalClass);
				log.debug(lang.translate('system', 'START_LOADED_MODAL_NAME', [modalFile]));
				loaded_modals++;
			}
			log.debug(lang.translate('system', 'START_LOADED_MODAL_FOLDER', [modalFolder]));
		}

		return loaded_modals;
	}
}