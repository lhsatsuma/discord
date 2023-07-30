global.app_version = '1.1.0a';

/**
 *
 * @type {{DB_USER: string, BOT_SEND_COMMANDS_API: boolean, DB_NAME: string, LOG_REGISTER: number[], DB_HOST: string, HEARTBEAT: number, BOT_TOKEN: string, LOG_DIR: string, ADMIN_CHANNEL_ID: *[], BOT_DESCRIPTION: string, BOT_NAME: string, BOT_ID: string, BOT_ICON: string, DB_PASSWORD: string, LOG_QUERY: boolean, DB_PORT: number}}
 */
global.bot_cfg = {
    'ADMIN_CHANNEL_ID': '',
    'BOT_NAME': '',
    'BOT_ID': '',
    'BOT_TOKEN': '',
    'BOT_ICON': '',
    'BOT_DESCRIPTION': '',
    'BOT_SEND_COMMANDS_API': true,

    'DB_HOST': 'localhost',
    'DB_USER': 'root',
    'DB_PASSWORD': '',
    'DB_NAME': 'discord',
    'DB_PORT': 3306,

    'LOG_DIR': './logs/',
    'LOG_REGISTER': [1, 2, 3, 4, 5],
    'LOG_QUERY': true,

    'HEARTBEAT': 300,
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