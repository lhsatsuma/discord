if(typeof entryPoint == 'undefined') { console.log('Access Denied!'); process.exit(); }

const { REST, Routes, Client, GatewayIntentBits , Collection, Partials} = require("discord.js");
const mySqlDb = require("./database/MysqlDataBase");
const ProcessRunning = require("./utils/ProcessRunning");
const coolDownCls = require("./utils/coolDown");
require('./utils/utils');
require('./utils/lang');

global.Discord = require("discord.js");

class discordAppClient extends Client
{
	super_admin_channel = null;
	constructor()
	{
		super({
			intents: [
				GatewayIntentBits.Guilds,
				GatewayIntentBits.GuildMessages,
				GatewayIntentBits.MessageContent,
				GatewayIntentBits.GuildMembers,
				GatewayIntentBits.DirectMessageReactions,
				GatewayIntentBits.GuildMessageReactions
			],
			partials: [
				Partials.Message,
				Partials.Channel,
				Partials.Reaction
			]
		});

		this.author = {name: bot_cfg.BOT_NAME, iconURL: bot_cfg.BOT_ICON}
	}

	login(token) {
		return super.login(bot_cfg.BOT_TOKEN);
	}

	async checkRunningStartVars()
	{
		log.Debug('Checking process running');

		let running = new ProcessRunning();

		let result = await running.check_running();
		if(result){
			log.Fatal("Aborting execute: already running!",1,1);
		}
		running.startPid();
	}

	logInit()
	{
		log.Info("=".repeat(40));
		log.Info('');
		log.Info(`Starting ${entryPoint}`);
		log.Info(`Node ${process.version} | Discord.JS v${Discord.version} | App v${app_version}`);
		log.Info('');
		log.Info("=".repeat(40));

	}

	async init()
	{
		this.logInit();

		this.commands = new Collection();

		await this.checkRunningStartVars();

		log.Debug('Initializing database class');

		global.db = new mySqlDb(entryPoint);
		this.cooldown = new coolDownCls();

		let res = await this.load_class();

		if (res) {
			this.on('error', err => {
				console.error(err);
			});
			this.once('ready', async () => {
				this.super_admin_channel = this.channels.cache.find(channel => channel.id === bot_cfg.ADMIN_CHANNEL_ID);

				client.user.setActivity({
					name: bot_cfg.BOT_DESCRIPTION,
				});

				log.Info("--------------------------");
				log.Info('BOT IS UP AND RUNNING!');
				log.Info("--------------------------");
				if (bot_cfg.HEARTBEAT > 0) {
					await getUtils().sendHeartbeat();
				}
			});
			try{
				log.Debug('Trying to connect into Discord');
				let logged_in = await this.login();
				if(logged_in) {
					log.Debug('Connection estabilished!');
					return true;
				}
			}catch(e){
				log.Fatal('Unable to login into Discord API: ' + e, 1, 1);
			}
			return false;
		} else {
			log.Fatal('Error loading class discordAppClient', 1, 1);
		}

		return false;
	}
	
	async load_class()
	{
		log.Debug('Trying to connect into database');
		let status_conn = await db.TestConnection();

		//WAIT TRYING CONNECTING TO DATABASE

		if(status_conn.status === false){
			log.Fatal(db.last_error, 1, 1);
		}

		log.Debug('Database successfully loaded!');

		log.Debug('Loading locales for: '+bot_cfg.BOT_LOCALE);

		await getLang().importLocales();

		log.Debug('Loaded locales');

		log.Info('Loading commands files');
		await this.loadCommands();
		log.Info('Loading commands files COMPLETED!');


		log.Info('Loading events files');
		await this.loadEvents();
		log.Info('Loading events files COMPLETED!');

		return status_conn.status;
	}
	async loadEvents()
	{
		log.Info('Loading events files');
		const basePath = process.cwd()+'/src/bot_events/';
		const eventsPath = fs.readdirSync(basePath);
		for (const eventName of eventsPath) {
			log.Debug('Loading event: '+eventName);
			let absolutPath = basePath + eventName;
			getUtils().requireAgain(absolutPath);
			log.Debug('Loaded event: '+eventName);
		}

		log.Info('Loading events files COMPLETED!');
	}
	async loadCommands() {
		const basePath = './src/commands/';
		const commandPaths = fs.readdirSync(basePath);
		const rest = new REST().setToken(bot_cfg.BOT_TOKEN);
		let commandsTmp = [];
		this.commands = new Collection();

		for (const commandName of commandPaths) {
			let commandPath = basePath + commandName + '/';
			let commandFile = commandPath + commandName + '.js';
			let command = null;
			let absolutePath = null;


			if (fs.existsSync(commandFile)) {
				absolutePath = process.cwd() + '/src/commands/' + commandName + '/' + commandName + '.js';
			} else {
				log.Error('CommandDir: ' + commandName + ' dont have JS');
				continue;
			}

			if (this.commands.get(commandName)) {
				log.Error('Command already loaded: ' + commandFile);
				continue;
			}

			log.Debug('Loading command: ' + commandName);
			command = getUtils().requireAgain(absolutePath);
			if (!!command.inactive) {
				log.Info('Command: ' + commandName + ' is inactive!');
				continue;
			}
			this.commands.set(command.data.name, command);
			commandsTmp.push(command.data.toJSON());
			log.Debug('Loaded command: ' + commandName);
		}

		// The put method is used to fully refresh all commands in the guild with the current set
		if (bot_cfg.BOT_SEND_COMMANDS_API) {
			log.Debug(`Sending ${commandsTmp.length} commands to Discord API`);
			try {
				const data = await rest.put(
					Routes.applicationCommands(bot_cfg.BOT_ID),
					{body: commandsTmp},
				)
				log.Debug(`Sent ${data.length} commands to Discord API!`);
			}catch(e){
				log.Fatal('Error on sending commands to Discord: '+e, 1, 1);
			}
		}
	}
	create(commandData)
	{
		let dataReturn = {
			data: commandData,
			subcommands: {},
		};
		const command = commandData.name;
		let subReturn = {};
		const subPath = process.cwd()+'/src/commands/'+command+'/subs/';
		try {
			if(fs.existsSync(subPath)) {
				const subs = fs.readdirSync(subPath);
				for (const subFileName of subs) {
					let subName = subFileName.replace('.js', '');
					let subFile = subPath + subFileName;
					let subFullname = command + ':' + subName;
					log.Debug('Loading subcommand: ' + subFullname);
					const subcommand = getUtils().requireAgain(subFile);
					if (!!subcommand.inactive) {
						log.Debug('Subcommand: ' + subFullname + ' is inactive');
						continue;
					}
					subReturn[subName] = subcommand;
					log.Debug('Loaded subcommand: ' + subFullname);
				}
			}
		}catch(e){
			log.Error('Error loading subcommands: '+e.message+' on line: '+e.lineNumber);
		}
		if(Object.keys(subReturn).length){
			for (const [key, value] of Object.entries(subReturn)) {
				commandData.addSubcommand(value.data);
				dataReturn.subcommands[key] = value;
			}
			dataReturn.data = commandData;
		}

		return dataReturn;
	}
}

module.exports = discordAppClient;