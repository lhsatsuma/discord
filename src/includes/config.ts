/**
 * DBIKE BOT CONFIG CLASS
 * @author: Luis Satsuma
 */
import fs from 'fs';
class config
{
    DISCORD_BOT_NAME: string = '';
    DISCORD_BOT_TOKEN: string = '';
    DISCORD_BOT_ID: string = '0';
    DISCORD_BOT_ICON: string = '';
    DISCORD_BOT_DESCRIPTION: string = '';
    DISCORD_BOT_SEND_COMMANDS_API: boolean = true;
    DISCORD_BOT_LOCALE: string = '';
    TZ: string = '';
    DISCORD_BOT_HEARTBEAT: number = 0;
    DISCORD_BOT_ADMIN_CHANNEL: string = '';

    DB_HOST: string = '';
    DB_USER: string = '';
    DB_PASSWORD: string = '';
    DB_NAME: string = '';
    DB_PORT: number = 0;
    REDIS_URL: string = 'redis://127.0.0.1:6379';
    REDIS_PASSWORD: string = '';

    LOG_DIR: string = 'logs/';
    LOG_LEVEL: string = 'debug';

    IMGUR_CLIENT_ID: string | undefined;
    IMGUR_CLIENT_SECRET: string | undefined;

    REDDIT_USER: string | undefined;
    REDDIT_PASSWORD: string | undefined;
    REDDIT_APP_ID: string | undefined;
    REDDIT_CLIENT_SECRET: string | undefined;
    constructor()
    {
        // Load environment variables from .env.override if it exists
        let overrideEnvVars = this.getEnvOverride();
        if(overrideEnvVars){
            for (const [key, value] of Object.entries(overrideEnvVars)) {
                process.env[key] = value;
            }
        }
        this.setEnvVars();
        return this;
    }

    setEnvVars()
    {
        this.DISCORD_BOT_NAME = process.env.DISCORD_BOT_NAME ?? '';
        this.DISCORD_BOT_TOKEN = process.env.DISCORD_BOT_TOKEN ?? '';
        this.DISCORD_BOT_ID = process.env.DISCORD_BOT_ID ?? '0';
        this.DISCORD_BOT_ICON = process.env.DISCORD_BOT_ICON ?? '';
        this.DISCORD_BOT_DESCRIPTION = process.env.DISCORD_BOT_DESCRIPTION ?? '';
        this.DISCORD_BOT_SEND_COMMANDS_API = process.env.DISCORD_BOT_SEND_COMMANDS_API === undefined
            ? true
            : process.env.DISCORD_BOT_SEND_COMMANDS_API.toLowerCase() === 'true';
        this.DISCORD_BOT_LOCALE = process.env.DISCORD_BOT_LOCALE ?? 'pt-BR';
        this.TZ = process.env.TZ ?? 'America/Sao_Paulo';
        this.DISCORD_BOT_HEARTBEAT = Number(process.env.DISCORD_BOT_HEARTBEAT ?? 0);
        this.DISCORD_BOT_ADMIN_CHANNEL = process.env.DISCORD_BOT_ADMIN_CHANNEL ?? '';

        this.DB_HOST = process.env.DB_HOST ?? '';
        this.DB_USER = process.env.DB_USER ?? '';
        this.DB_PASSWORD = process.env.DB_PASSWORD ?? '';
        this.DB_NAME = process.env.DB_NAME ?? '';
        this.DB_PORT = Number(process.env.DB_PORT ?? 0);
        this.REDIS_URL = process.env.REDIS_URL ?? 'redis://127.0.0.1:6379';
        this.REDIS_PASSWORD = process.env.REDIS_PASSWORD ?? '';

        this.LOG_DIR = process.env.LOG_DIR ?? 'logs/';
        this.LOG_LEVEL = process.env.LOG_LEVEL ?? 'debug';

        this.IMGUR_CLIENT_ID = process.env.IMGUR_CLIENT_ID;
        this.IMGUR_CLIENT_SECRET = process.env.IMGUR_CLIENT_SECRET;

        this.REDDIT_USER = process.env.REDDIT_USER;
        this.REDDIT_PASSWORD = process.env.REDDIT_PASSWORD;
        this.REDDIT_APP_ID = process.env.REDDIT_APP_ID;
        this.REDDIT_CLIENT_SECRET = process.env.REDDIT_CLIENT_SECRET;
        return this;
    }

    init()
    {
        let missing = this.checkRequiredEnvVars(['DISCORD_BOT_TOKEN', 'DISCORD_BOT_ID', 'DISCORD_BOT_ADMIN_CHANNEL', 'DB_HOST', 'DB_USER', 'DB_PASSWORD', 'DB_NAME', 'DB_PORT', 'TZ']);

        if(missing.length > 0){
            console.log('Missing required environment variables! Check your .env file and make sure all required variables are set!', missing);
            process.exit();
        }
        return this;
    }

    checkRequiredEnvVars(requiredVars: string[])
    {
        let missingVars: any[] = [];
        requiredVars.forEach((envVar) => {
            if(!process.env[envVar]){
                missingVars.push(envVar);
            }
        });
        return missingVars;
    }
    getEnvOverride()
    {
        let path_override = process.cwd()+'/.env.override';
        let env_override: Record<string, string> = {};
        if(fs.existsSync(path_override)) {
            env_override = JSON.parse(fs.readFileSync(process.cwd() + '/.env.override', 'utf8'));
        }
        return env_override;
    }
}

const instance = new config().init();
export default instance;