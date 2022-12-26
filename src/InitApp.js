if(typeof entryPoint == 'undefined') { console.log('Access Denied!'); process.exit(); }

const { REST, Routes, Client, GatewayIntentBits , Collection, Events} = require("discord.js");
global.Discord = require("discord.js");

class discordAppClient extends Client
{
	constructor()
	{
		super({ intents: [GatewayIntentBits.Guilds, GatewayIntentBits.GuildMessages,GatewayIntentBits.MessageContent,GatewayIntentBits.GuildMembers] });
		
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
		this.fs = require("fs");
		
		this.checkRunningStartVars();

		
		this.log.Debug('Initializing DataBase class');
		const MySQLDB = require('./DataBase/MysqlDataBase.js');
		
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
					this.log.Debug(`Received command: ${commandName}`);

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
							this.log.Fatal('Error executing command: '+error);
							await interaction.reply({
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
					this.log.Debug(`Received command: ${commandName} DONE`);
				});
				resolve(status_conn.status);
			});
		});
	}
	
	async loadCommands()
	{
		const basePath = './src/commands/';
		const commandPaths = this.fs.readdirSync(basePath);
		const rest = new REST().setToken(bot_cfg.discordOptions.token);
		let commandsTmp = [];
		for (const commandName of commandPaths) {
			let commandPath = basePath+commandName+'/';
			
			let commandFile = commandPath+commandName+'.js';
			
			if(this.fs.existsSync(commandFile)){
			
				this.log.Debug('Loading command: '+commandName);
				const command = requireAgain(process.cwd()+'/src/commands/'+commandName+'/'+commandName+'.js');
				this.commands.set(command.data.name, command);
				commandsTmp.push(command.data.toJSON());
				this.log.Debug('Loaded command: '+commandName);
			}else{
				
				this.log.Error('Command: '+commandName+' dont have JS');
			}
		}

		// The put method is used to fully refresh all commands in the guild with the current set

		this.log.Debug(`Sending ${commandsTmp.length} commands to Discord API`);

		const data = await rest.put(
			Routes.applicationCommands(bot_cfg.discordOptions.bot_id),
			{ body: commandsTmp },
		);
		this.log.Debug(`Sended ${data.length} commands to Discord API!`);
	}
}

module.exports = discordAppClient;