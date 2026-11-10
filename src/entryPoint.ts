import config from '#includes/config.ts';
import processRunning from '#includes/processRunning.ts';
import lang from '#includes/lang.ts';
import db from '#includes/database/database_pg.ts';
import log from '#includes/log.ts';
import utils from '#includes/utils.ts';
import {Client, GatewayIntentBits,  Partials, EmbedBuilder, Colors} from 'discord.js';

export default class entryPoint extends Client
{
	author: {name: string; iconURL: string};
	super_admin_channel: any;
    heartbeatInterval: NodeJS.Timeout  | null = null;
    msgHeartbeat: Record<string,any> | null = null;
    runningPid: processRunning;
    constructor()
    {
        super({
			intents: [
				GatewayIntentBits.Guilds,
				GatewayIntentBits.GuildMessages,
				GatewayIntentBits.MessageContent,
				GatewayIntentBits.GuildMembers,
				GatewayIntentBits.DirectMessageReactions,
				GatewayIntentBits.GuildMessageReactions,
				GatewayIntentBits.GuildVoiceStates,
			],
			partials: [
				Partials.Message,
				Partials.Channel,
				Partials.Reaction
			]
		});

		this.author = {name: config.DISCORD_BOT_NAME, iconURL: config.DISCORD_BOT_ICON};
        this.runningPid = new processRunning(this, global.entryMode).init();
    }
    init()
    {
        return new Promise(async (resolve, reject) => {

            //First initialization logs

            let process_info = this.runningPid.processInfo;

            if(!process_info){
                resolve(false);
                return;
            }

            await this.runningPid.saveInfo();
            
            log.info("=".repeat(40));
            log.info(`Starting ${process_info.entryMode}`);
            log.info(`Node ${process_info.nodeVersion} | Discord.JS v${process_info.discordjsVersion} | App v${process_info.appVersion}`);
            log.info("=".repeat(40));
            
            log.debug('Loading locale for: '+config.DISCORD_BOT_LOCALE);
            if(!await this.loadLocale())
            {
                log.fatal('Failed to load locale, aborting execution!');
                reject(false);
            }
            log.info(lang.translate('system', 'LOCALE_SET', [config.DISCORD_BOT_LOCALE]));

            log.debug(lang.translate('system', 'START_LOADING_DATABASE'));

            if(!await this.dbTestConnection())
            {
                log.fatal(lang.translate('system', 'START_LOADING_DATABASE_ERR'));
                reject(false);
            }
            log.debug(lang.translate('system', 'START_LOADED_DATABASE'));

            this.once('clientReady', async () => {
                this.super_admin_channel = this.channels.cache.find(channel => channel.id === config.DISCORD_BOT_ADMIN_CHANNEL);

                this.user?.setActivity({
                    name: config.DISCORD_BOT_DESCRIPTION,
                });

                resolve(true);
            });

            log.debug(lang.translate('system', 'START_TRY_CONNECT_API'));
            try{
                let logged_in = await this.login(config.DISCORD_BOT_TOKEN);
                if(logged_in){
                    log.debug(lang.translate('system', 'START_CONNECTED_API', [this.user?.tag]));
                }
            }catch(e){
                log.fatal(lang.translate('system', 'START_TRY_CONNECT_API_ERR', [e]));
            }
        });
    }

    finishInit()
    {
        let load_time = Date.now() - global.startTimeApp.getTime();
        log.info("=".repeat(40));
        log.info(lang.translate('system', 'BOT_RUNNING'));
        log.info(lang.translate('system', 'LOAD_TIME', [load_time, utils.memoryUsage().total+'/'+utils.memoryUsage().used]));
        log.info("=".repeat(40));

        if (config.DISCORD_BOT_HEARTBEAT > 0) {
            this.sendHeartbeat();
        }
    }

    async loadLocale()
    {
		if(!await lang.importLocales()){
            return false;
        }
        return true;
    }

    async dbTestConnection()
    {
        let db_connected = await db.testConnection();
        if(!db_connected.status){
            log.fatal(db_connected.err);
            return false;
        }
        return true;
    }

    async sendHeartbeat()
    {
		if(!!this.heartbeatInterval) {
			log.info('Clearing interval of heartbeat');
			clearInterval(this.heartbeatInterval);
			this.msgHeartbeat = null;
		}

		this.heartbeatInterval = setInterval(async () => {
			if(config.DISCORD_BOT_HEARTBEAT > 0 && this.super_admin_channel){

				//Reset heartbeat to a new message.
				if(this.msgHeartbeat){
					if(new Date().toLocaleDateString(config.DISCORD_BOT_LOCALE) !== this.msgHeartbeat.date){
						this.msgHeartbeat = null;
					}
				}

				let dateNow = new Date();
				const exampleEmbed = new EmbedBuilder()
					.setColor(Colors.Blue)
					.setTitle(`Sent a heartbeat for ${global.entryMode}!`)
					.setAuthor(this.author)
					.setThumbnail(this.super_admin_channel.guild.iconURL())
					.setDescription("Last Update: "+dateNow.toLocaleString(config.DISCORD_BOT_LOCALE))
					.setTimestamp();

				if(this.msgHeartbeat){
					try{
						await this.msgHeartbeat.message.edit({ embeds: [exampleEmbed] });
						return true;
					}catch(e){
						log.err('Error updating heartbeat: ' + e);
					}
				}

				this.msgHeartbeat = {
                    date: new Date().toLocaleDateString(config.DISCORD_BOT_LOCALE)
                };
				this.msgHeartbeat.message = await this.super_admin_channel.send({ embeds: [exampleEmbed] });
			}
		}, config.DISCORD_BOT_HEARTBEAT * 1000);
	}
}