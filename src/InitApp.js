if(typeof entryPoint == 'undefined') { console.log('Access Denied!'); process.exit(); }

const { REST, Routes, Client, GatewayIntentBits , Collection, Events,Partials} = require("discord.js");
global.Discord = require("discord.js");

class discordAppClient extends Client
{
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
		
		const LogControl = require('./utils/LogControl.js');
		require('./utils/utils.js');
		
		this.log = new LogControl(global.bot_cfg.log_dir, 'client.log', global.bot_cfg.log_options);

		this.log.Info("=".repeat(40));
		this.log.Info("Initializing App");
		this.log.Info('Node.JS Version: '+process.version);
		this.log.Info('Discord.JS Version: '+Discord.version);
		this.log.Info('App Version: '+app_version);
		this.log.Info("=".repeat(40));

		this.commands = new Collection();
		
		this.checkRunningStartVars();

		
		this.log.Debug('Initializing database class');
		const MySQLDB = require('./database/MysqlDataBase.js');
		
		this.db = new MySQLDB('app', bot_cfg['db']);

		const cooldownCls = require('./utils/coolDown.js');
		this.cooldown = new cooldownCls();
		this.author = {name: bot_cfg.discordOptions.name, iconURL: bot_cfg.discordOptions.icon}
	}

	async checkRunningStartVars()
	{
		this.log.Debug('Checking process running');
		const ProcessRunning = require('./Process/ProcessRunning.js');
		let running = new ProcessRunning();

		let result = await running.check_running();
		if(!!result.pid){
			this.log.Fatal("Aborting execute: already running!",1,1);
		}
		running.startPid();
	}
	
	load_class()
	{
		return new Promise(resolve => {
			this.log.Debug('Trying to connect into database');
			let response = this.db.TestConnection();
				
			//WAIT TRYING CONNECTING TO DATABASE
			
			response.then(async (status_conn) => {
				
				if(status_conn.status === false){
					this.log.Fatal(this.db.last_error, 1, 1);
				}
				
				this.log.Debug('Database successfully loaded!');
				
				this.log.Debug('Loading commands files');
				await this.loadCommands();
				this.log.Debug('Loading commands files COMPLETED!');
				//After loaded all Commands files, let's do on event
				client.on(Events.InteractionCreate, async interaction => {
					if (!interaction.isChatInputCommand()) return;
					let command = interaction.client.commands.get(interaction.commandName);
					let commandCD = interaction.commandName;
					let commandName = commandCD;
					let coolDown = command.cooldown;
					if(interaction.options._subcommand){
						commandCD += interaction.options._subcommand;
						commandName += ':'+interaction.options._subcommand;
						command = command.subcommands[interaction.options._subcommand];
					}

					if (!command) {
						this.log.Error(`No command matching ${commandName} was found.`);
						return;
					}
					this.log.Debug(`[${interaction.channel.id}][${interaction.user.id}] Issued command: ${commandName}`);

					let cooldownLeft = 0;
					if(!!coolDown){
						cooldownLeft = this.cooldown.checkUserCd(interaction.user.id, commandCD);
					}
					if(!cooldownLeft){
						try {
							await command.execute(interaction);
							if(!!coolDown){
								this.cooldown.insertUserCd(interaction.user.id, commandCD, coolDown);
							}
						} catch (error) {
							this.log.Fatal('Error executing command: '+error.message+ ' on line '+error.line);
							await interaction.channel.send({
								content: 'There was an error while executing this command!',
								ephemeral: true
							});
						}
					}else{
						await interaction.reply({
							content: 'Aguarde '+cooldownLeft+' segundos para executar novamente o comando...',
							ephemeral: true
						});
					}
					this.log.Debug(`[${interaction.channel.id}][${interaction.user.id}] Issued command: ${commandName} DONE`);
				});
				resolve(status_conn.status);
			});
		});
	}
	
	async loadCommands()
	{
		const basePath = './src/commands/';
		const commandPaths = fs.readdirSync(basePath);
		const rest = new REST().setToken(bot_cfg.discordOptions.token);
		let commandsTmp = [];
		this.commands = new Collection();

		for (const commandName of commandPaths) {
			let commandPath = basePath+commandName+'/';
			let commandFile = commandPath + commandName + '.js';
			let command = null;
			let absolutePath = null;

			if(!fs.lstatSync(basePath+commandName).isDirectory()){
				commandPath = basePath;
				if (this.commands.get(commandName)) {
					this.log.Error('Command already loaded: ' + commandFile);
					continue;
				}
				absolutePath = process.cwd() + '/src/commands/' + commandName;
			}else {

				if (fs.existsSync(commandFile)) {
					absolutePath = process.cwd() + '/src/commands/' + commandName + '/' + commandName + '.js';
				} else {
					this.log.Error('CommandDir: ' + commandName + ' dont have JS');
				}
			}

			if (this.commands.get(commandName)) {
				this.log.Error('Command already loaded: ' + commandFile);
				continue;
			}

			this.log.Debug('Loading command: ' + commandName);
			command = requireAgain(absolutePath);
			if (!!command.inactive) {
				this.log.Info('Command: ' + commandName + ' is inactive!');
				continue;
			}
			this.commands.set(command.data.name, command);
			commandsTmp.push(command.data.toJSON());
			this.log.Debug('Loaded command: ' + commandName);
		}

		// The put method is used to fully refresh all commands in the guild with the current set
		if(!!bot_cfg.discordOptions.sendCommandsAPI || typeof bot_cfg.discordOptions.sendCommandsAPI == 'undefined') {
			this.log.Debug(`Sending ${commandsTmp.length} commands to Discord API`);

			const data = await rest.put(
				Routes.applicationCommands(bot_cfg.discordOptions.bot_id),
				{body: commandsTmp},
			);
			this.log.Debug(`Sended ${data.length} commands to Discord API!`);
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
					this.log.Debug('Loading subcommand: ' + subFullname);
					const subcommand = requireAgain(subFile);
					if (!!subcommand.inactive) {
						this.log.Debug('Subcommand: ' + subFullname + ' is inactive');
						continue;
					}
					subReturn[subName] = subcommand;
					this.log.Debug('Loaded subcommand: ' + subFullname);
				}
			}
		}catch(e){
			this.log.Error('Error loading subcommands: '+e.message+' on line: '+e.lineNumber);
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
	channelSuperAdmin(compare)
	{
		if(typeof bot_cfg.admin_channel_id === 'string'){
			return compare.toString() === bot_cfg.admin_channel_id.toString();
		}

		let valid = false;
		bot_cfg.admin_channel_id.forEach((channel) => {
			if(!valid && compare.toString() === channel.toString()){
				valid = true;
				return true;
			}
		});

		return valid;
	}
}

module.exports = discordAppClient;