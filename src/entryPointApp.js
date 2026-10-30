import entryPoint from './entryPoint.js';
import {Collection, Routes, REST} from 'discord.js';
import fs from 'fs';
export default class entryPointApp extends entryPoint
{
    constructor()
    {
        super('app');
    }

    init()
    {
        super.init().then(async () => {

            global.log.debug('Loading commands...');
            if(!await this.loadCommands()) {
                global.log.fatal('Failed to load commands!');
            }
            global.log.debug('Commands loaded successfully!');


			global.log.debug('Loading events...');
			if(!await this.loadEvents()) {
				global.log.fatal('Failed to load events!');
			}
			global.log.debug('Events loaded successfully!');
        });
    }

    async loadCommands()
    {
        const importPath = './Controllers/Commands/';
        const basePath = './src/Controllers/Commands/';
		const commandPaths = fs.readdirSync(basePath);
		let commandsTmp = [];
		this.commands = new Collection();

		for (const commandName of commandPaths) {
			let commandPath = basePath + commandName + '/';
			let commandLocaleName = global.lang.translate(commandName, 'CMD_'+commandName.toUpperCase());
			let commandFile = commandPath + commandName + '.js';
			let command = null;
			let importFile = null;


			if (fs.existsSync(commandFile)) {
				importFile = importPath + commandName + '/' + commandName + '.js';
			} else {
				global.log.error('CommandDir: ' + commandLocaleName + ' dont have JS');
				continue;
			}

			if (this.commands.get(commandLocaleName)) {
				global.log.error('Command already loaded: ' + commandFile);
				continue;
			}

			global.log.debug('Loading command: ' + commandLocaleName);
			command = await import(importFile);
            
            let commandClass = new command.default();

			if (!!commandClass.inactive) {
				global.log.info('Command: ' + commandLocaleName + ' is inactive!');
				continue;
			}
			this.commands.set(commandClass.commandBuilder.name, commandClass);
			commandsTmp.push(commandClass.commandBuilder.toJSON());
			global.log.debug('Loaded command: ' + commandLocaleName);
		}

		// The put method is used to fully refresh all commands in the guild with the current set
		if (process.env.DISCORD_BOT_SEND_COMMANDS_API == 'true') {
			global.log.debug(`Sending ${commandsTmp.length} commands to Discord API`);
			try {
				const rest = new REST().setToken(process.env.DISCORD_BOT_TOKEN);
				const data = await rest.put(
					Routes.applicationCommands(process.env.DISCORD_BOT_ID),
					{body: commandsTmp},
				)
				global.log.debug(`Sent ${data.length} commands to Discord API!`);
			}catch(e){
				global.log.fatal('Error on sending commands to Discord: '+e);
			}
		}

        return true;
    }

	async loadEvents()
	{
		const importPath = './Controllers/Events/';
        const basePath = './src/Controllers/Events/';
		const eventsPath = fs.readdirSync(basePath);


		for (const eventName of eventsPath) {
			global.log.debug('Loading event: '+eventName);
			let importFile = importPath + eventName;
			let event = await import(importFile);

			let eventClass = new event.default();
			this.on(eventClass.eventName, async interaction => {
				eventClass.execute(interaction);
			});
			global.log.debug('Loaded event: '+eventName);
		}

		return true;
	}
}