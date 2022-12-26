if(typeof entryPoint == 'undefined') { console.log('Access Denied!'); process.exit(); }

delete require.cache[require.resolve('./servers.js')];
global.bot_cfg = {
    "admin_channel_id": "<CHANNEL_ID_FOR_GENERAL_ADMIN_COMMANDS>",
    "log_dir": "./logs/",
    "log_options": {
        'default_op': {
            'level': 1, 'die': 0, 'echo': 1
        },
        'level_register': [
            // 1,
            2,
            3,
            4,
            5
        ]
    },
    "heartbeat": 1800, //-1 disabled, > 0 seconds to give a log with proof of running
    "discordOptions": {
        "name": "<NAME_OF_BOT>",
        "token": "<TOKEN_APP>",
        "description": "<DESCRIPTION_BOT>",
        "defaultHelpCommand": false //Keep false for default
    },
    "db": {
        "host": "<HOST_DB>",
        "user": "<USER_DB>",
        "pass": "<PWD_DB>",
        "db_name": "<DBNAME_DB>"
    },
    "servers_allow": require('./servers.js')
}