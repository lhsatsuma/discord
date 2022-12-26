if(typeof entryPoint == 'undefined') { console.log('Access Denied!'); process.exit(); }

const { REST, Routes, Client, GatewayIntentBits , Collection,EmbedBuilder, Events} = require("discord.js");
global.Discord = require("discord.js");

class discordAppClient extends Client
{
	constructor(options)
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
		return new Promise((resolve, reject) => {
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

					const command = interaction.client.commands.get(interaction.commandName);

					if (!command) {
						this.log.Error(`No command matching ${interaction.commandName} was found.`);
						return;
					}
					this.log.Debug(`Received command: ${interaction.commandName}`);

					let cooldownLeft = 0;
					if(!!command.cooldown){
						cooldownLeft = this.cooldown.checkUserCd(interaction.user.id, interaction.commandName);
					}
					if(!cooldownLeft){
						try {
							await command.execute(interaction);
							if(!!command.cooldown){
								this.cooldown.insertUserCd(interaction.user.id, interaction.commandName, command.cooldown);
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
					this.log.Debug(`Received command: ${interaction.commandName} DONE`);
				});
				resolve(status_conn.status);
			});
		});
	}

	async sendMessageReturn(message, result, command)
	{
		/*
		POSSIBLES RETURNS VALIDS:
		-> {
			err: 'test',
			msg: 'tested',
		}

		-> new EmbedBuilder()
		-> (string) argsError (for generic args error passed)
		-> string
		-> {
			text: 'test',
			'option': new EmbedBuilder()
		}
		*/
		let sendInfo = {
			'text': null,
			'option': null
		};
		let isError = false;
		if(typeof result == 'object'|| (typeof result == 'string' && result == 'argsError')){
			if(result.constructor.name == 'EmbedBuilder'){
				sendInfo.option = result;
			}else{
				if(typeof result.err == 'undefined'
				&& (typeof result !== 'string' && result !== 'argsError')){
					sendInfo.text = result.text;
					sendInfo.option = result.option;
					sendInfo.timeout = result.timeout;
				}else{
					if(typeof result == 'string' && result == 'argsError'){
						result = {};
						result.err = 'Ops! Comando inválido!';
						result.msg = 'Digite o comando corretamente: {usage}';
					}
					result.msg = result.msg.replace('{usage}', '``'+command.usage()+'``');
					sendInfo.text = '<@!'+message.author.id+'>';
					sendInfo.option = new EmbedBuilder()
					.setAuthor({ name: bot_cfg.discordOptions.name, iconURL: global.super_admin_channel.guild.iconURL()})
					.setTitle(result.err)
					.setDescription(result.msg);
					isError = true;
				}
			}
		}else if(result !== true){
			sendInfo.text = result;
		}
		if(sendInfo.text || sendInfo.option){
			message.channel.send(sendInfo.text, sendInfo.option).then(messageSended => {
				if(!!sendInfo.timeout){
					messageSended.delete({timeout: sendInfo.timeout});
				}
			});
		}
		if(
			(isError && command.deleteMsgOnError)
			|| (!isError && command.deleteMsgOnSuccess)
			){
			message.delete();
		}
	}
	
	checkGuildPermission(message)
	{
		if(typeof message.channel.guild == 'undefined'){
			return false;
		}
		let guild_id = message.channel.guild.id;
		
		if(typeof bot_cfg['servers_allow'][guild_id] == 'undefined'){
			return false;
		}
		
		return true;
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