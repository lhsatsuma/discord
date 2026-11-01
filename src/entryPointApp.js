import entryPoint from './entryPoint.js';
import {Collection, Routes, REST} from 'discord.js';
import fs from 'fs';
import lang from '#includes/lang.js';
import log from '#includes/log.js';
export default class entryPointApp extends entryPoint
{
    init()
    {
        super.init().then(async () => {

            log.debug(lang.translate('system', 'START_LOADING_COMMANDS'));
            let loaded_commands = await this.loadCommands();
			if(!loaded_commands){
				log.fatal(lang.translate('system', 'START_LOADING_COMMANDS_ERR'));
			}
            log.debug(lang.translate('system', 'START_LOADED_COMMANDS', [loaded_commands]));


			log.debug(lang.translate('system', 'START_LOADING_EVENTS'));
			let loaded_events = await this.loadEvents();
			if(!loaded_events){
				log.fatal(lang.translate('system', 'START_LOADING_EVENTS_ERR'));
			}
			log.debug(lang.translate('system', 'START_LOADED_EVENTS', [loaded_events]));

			super.finishInit();
        });
    }

    async loadCommands()
    {
        const importPath = './controllers/commands/';
        const basePath = './src/controllers/commands/';
		const commandPaths = fs.readdirSync(basePath);
		let commandsTmp = [];
		this.commands = new Collection();

		for (const commandName of commandPaths) {
			let commandPath = basePath + commandName + '/';
			let commandFile = commandPath + commandName + '.js';
			let command = null;
			let importFile = null;

			
			if (fs.existsSync(commandFile)) {
				importFile = importPath + commandName + '/' + commandName + '.js';
			} else {
				log.err(lang.translate('system', 'START_LOADING_COMMAND_JS', [commandName]));
				continue;
			}

			if (this.commands.get(commandName)) {
				continue;
			}
			command = await import(importFile);
            
            let commandClass = new command.default().init();
			await commandClass.build();

			if (!!commandClass.inactive) {
				log.info(lang.translate('system', 'START_COMMAND_INNACTIVE', [commandName]));
				continue;
			}
			this.commands.set(commandClass.builded.name, commandClass);
			commandsTmp.push(commandClass.builded.toJSON());
		}

		// The put method is used to fully refresh all commands in the guild with the current set
		if (process.env.DISCORD_BOT_SEND_COMMANDS_API == 'true') {
			log.debug(lang.translate('system', 'START_SENDING_COMMANDS_API'));
			try {
				const rest = new REST().setToken(process.env.DISCORD_BOT_TOKEN);
				const data = await rest.put(
					Routes.applicationCommands(process.env.DISCORD_BOT_ID),
					{body: commandsTmp},
				)
				log.debug(lang.translate('system', 'START_SENDED_COMMANDS_API'));
			}catch(e){
				log.fatal(lang.translate('system', 'START_SENDING_COMMANDS_API_ERR', [e.message]));
			}
		}

        return commandsTmp.length;
    }

	async loadEvents()
	{
		const importPath = './controllers/events/';
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
}