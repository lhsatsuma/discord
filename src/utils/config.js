/**
 * x.y.zt
 * x - Global App Version
 * y - Release Version
 * z - Build Version
 * t - Type Version
 * @type {string}
 */
global.app_version = '1.3.2r';


/**
 *
 * @type {{DB_PORT: number, DB_USER: string, BOT_SEND_COMMANDS_API: boolean, DB_NAME: string, LOG_REGISTER: number[], LOG_QUERY: boolean, DB_HOST: string, HEARTBEAT: number, BOT_TOKEN: string, LOG_DIR: string, ADMIN_CHANNEL_ID: string, BOT_DESCRIPTION: string, BOT_NAME: string, BOT_ID: string, BOT_LOCALE: string, BOT_ICON: string, DB_PASSWORD: string}}
 */
global.bot_cfg = {
    ADMIN_CHANNEL_ID: '',
    BOT_NAME: '',
    BOT_ID: '',
    BOT_TOKEN: '',
    BOT_ICON: '',
    BOT_DESCRIPTION: '',
    BOT_SEND_COMMANDS_API: true,
    BOT_LOCALE: 'pt_BR',

    DB_HOST: 'localhost',
    DB_USER: 'root',
    DB_PASSWORD: '',
    DB_NAME: 'discord',
    DB_PORT: 3306,

    LOG_DIR: 'logs/',
    LOG_REGISTER: [1, 2, 3, 4, 5],
    LOG_QUERY: true,

    HEARTBEAT: 300,
};


const dotenv = require('dotenv');
require('./utils.js');
dotenv.config();
let env_override = getUtils().getEnvOverride();
dotenv.populate(process.env, env_override,{ override: true });


/**
 * Lets format all variables
 */
for (let config_name in bot_cfg) {
    if (typeof process.env[config_name] !== 'undefined') {
        let type = typeof bot_cfg[config_name];
        let value_to = process.env[config_name].toString();
        switch (type) {
            case 'number':
                value_to = parseInt(value_to);
                break;
            case 'object':
                value_to = value_to.split(',');
                break;
            case 'boolean':
                value_to = value_to === 'true';
                break;
            default:
                break;
        }
        bot_cfg[config_name] = value_to;
    }
}

let required_envs = [
    'BOT_TOKEN',
    'BOT_ID',
    'BOT_LOCALE',
];

required_envs.forEach((ipt) => {

    if(!bot_cfg[ipt]){
        console.log(ipt+' is empty on .env');
        process.exit();
    }
});