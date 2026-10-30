import config from './Includes/config.js';

import Logger from './Includes/log.js';
import {Client, GatewayIntentBits,  Partials} from 'discord.js';
import Discord from 'discord.js';
import lang from './Includes/lang.js';
import database_pg from './Includes/database/database_pg.js';

global.lang = null;
global.log = null;
global.db = null;
export default class entryPointApp extends Client
{
    constructor(entryMode)
    {
        global.entryMode = entryMode;
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

            //Global log class
            global.log = new Logger('app.log');

            //First initialization logs
            global.log.info("=".repeat(40));
            global.log.info(`Starting ${entryMode}`);
            global.log.info(`Node ${process.version} | Discord.JS v${Discord.version} | App v${process.env.npm_package_version}`);
            global.log.info("=".repeat(40));



            global.log.debug('Loading locale for: '+process.env.DISCORD_BOT_LOCALE);
            if(!await this.loadLocale())
            {
                global.log.fatal('Failed to load locale, aborting execution!');
                reject(false);
            }
            global.log.debug('Locale loaded successfully!');

            global.log.debug('Testing database connection...');

            if(!await this.dbTestConnection())
            {
                global.log.fatal('Database connection failed, aborting execution!');
                reject(false);
            }
            global.log.debug('Database connection successful!');


            this.once('clientReady', async () => {
                this.super_admin_channel = this.channels.cache.find(channel => channel.id === process.env.DISCORD_BOT_ADMIN_CHANNEL);

                this.user.setActivity({
                    name: process.env.DISCORD_BOT_DESCRIPTION,
                });

                resolve(true);
            });

            this.on('error', err => {
                global.log.fatal('Discord API Error: ' + err);
            });

            global.log.debug('Trying to authenticate into Discord');
            try{
                let logged_in = await this.login(process.env.DISCORD_BOT_TOKEN);
                if(logged_in){
                    global.log.debug('Logged in as ' + this.user.tag);
                }
            }catch(e){
                global.log.fatal('Error logging into Discord: ' + e);
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
        global.lang = new lang(process.env.DISCORD_BOT_LOCALE);

		if(!await global.lang.importLocales()){
            return false;
        }
        return true;
    }

    async dbTestConnection()
    {
        global.db = new database_pg(this.entryMode);
        let db_connected = await global.db.testConnection();
        if(!db_connected){
            global.log.fatal('Database connection failed!');
            return false;
        }
        return true;
    }
}