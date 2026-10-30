import config from './Includes/config.js';

import Logger from './Includes/log.js';
import {Client, GatewayIntentBits,  Partials} from 'discord.js';
import Discord from 'discord.js';
import lang from './Includes/lang.js';
import db from './Includes/database/database_pg.js';
import log from './Includes/log.js';

global.db = null;
export default class entryPointApp extends Client
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
				GatewayIntentBits.GuildMessageReactions,
				GatewayIntentBits.GuildVoiceStates,
			],
			partials: [
				Partials.Message,
				Partials.Channel,
				Partials.Reaction
			]
		});

		this.author = {name: process.env.DISCORD_BOT_NAME, iconURL: process.env.DISCORD_BOT_ICON};
    }
    init()
    {
        return new Promise(async (resolve, reject) => {

            //Load Configs first
            this.loadConfig();

            //First initialization logs
            log.info("=".repeat(40));
            log.info(`Starting ${entryMode}`);
            log.info(`Node ${process.version} | Discord.JS v${Discord.version} | App v${process.env.npm_package_version}`);
            log.info("=".repeat(40));



            log.debug('Loading locale for: '+process.env.DISCORD_BOT_LOCALE);
            if(!await this.loadLocale())
            {
                log.fatal('Failed to load locale, aborting execution!');
                reject(false);
            }
            log.info(lang.translate('system', 'LOCALE_SET', [process.env.DISCORD_BOT_LOCALE]));

            log.debug(lang.translate('system', 'START_LOADING_DATABASE'));

            if(!await this.dbTestConnection())
            {
                log.fatal(lang.translate('system', 'START_LOADING_DATABASE_ERR'));
                reject(false);
            }
            log.debug(lang.translate('system', 'START_LOADED_DATABASE'));


            this.once('clientReady', async () => {
                this.super_admin_channel = this.channels.cache.find(channel => channel.id === process.env.DISCORD_BOT_ADMIN_CHANNEL);

                this.user.setActivity({
                    name: process.env.DISCORD_BOT_DESCRIPTION,
                });

                resolve(true);
            });

            this.on('error', err => {
                log.fatal('Discord API Error: ' + err);
            });

            log.debug(lang.translate('system', 'START_TRY_CONNECT_API'));
            try{
                let logged_in = await this.login(process.env.DISCORD_BOT_TOKEN);
                if(logged_in){
                    log.debug(lang.translate('system', 'START_CONNECTED_API', [this.user.tag]));
                }
            }catch(e){
                log.fatal(lang.translate('system', 'START_TRY_CONNECT_API_ERR', [e]));
            }
        });
    }

    loadConfig()
    {
        var config_ = new config();
        config_.init();
        return this;
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
}