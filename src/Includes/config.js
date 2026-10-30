/**
 * DBIKE BOT CONFIG CLASS
 * @author: Luis Satsuma
 */
import fs from 'fs';
export default class config
{
    constructor()
    {
        // Load environment variables from .env.override if it exists
        let overrideEnvVars = this.getEnvOverride();
        if(overrideEnvVars){
            for (const [key, value] of Object.entries(overrideEnvVars)) {
                process.env[key] = value;
            }
        }
    }

    init()
    {
        if(this.checkRequiredEnvVars(['DISCORD_BOT_TOKEN', 'DISCORD_BOT_ID', 'DISCORD_BOT_ADMIN_CHANNEL']).length > 0){
            console.log('Missing required environment variables! Check your .env file and make sure all required variables are set!');
            process.exit();
        }
    }

    checkRequiredEnvVars(requiredVars)
    {
        let missingVars = [];
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
        let env_override = {};
        if(fs.existsSync(path_override)) {
            env_override = JSON.parse(fs.readFileSync(process.cwd() + '/.env.override'));
        }
        return env_override;
    }
}