global.entryPoint = 'app';
global.app_version = '3.6.2';

global.startAppTime = new Date();
try {
	global.bot_cfg = require('./config/config.json');
}catch(e){
	console.log('Unable to Load config.json');
	process.exit();
}

global.fs = require('fs');

discordAppClient = require('./src/InitApp.js');

global.client = new discordAppClient();
global.super_admin_channel = null;
try {
	client.load_class().then((res) => {
		if (res) {
			client.on('error', err => {
				console.error(err);
			});
			client.once('ready', async () => {
				let channel_admin = typeof bot_cfg.admin_channel_id === 'string' ? bot_cfg.admin_channel_id : bot_cfg.admin_channel_id[0];
				global.super_admin_channel = client.channels.cache.find(channel => channel.id === channel_admin);
				client.log.Info("--------------------------");
				client.log.Info('BOT IS UP AND RUNNING!');
				client.log.Info("--------------------------");
				if (parseInt(bot_cfg.heartbeat) > 0) {
					setTimeout(() => {
						sendHeartbeat();
					}, bot_cfg.heartbeat * 1000);
				}
			});
			client.log.Debug('Trying to connect into Discord');
			client.login(bot_cfg.discordOptions.token).catch(e => {
				client.log.Fatal('Unable to login into Discord API: ' + e, 1, 1);

			});
			client.log.Debug('Connection estabilished!');
		} else {
			client.log.Fatal('Error loading class discordAppClient', 1, 1);
		}
	});
}catch(e){
	client.log.Fatal('Error loading super class: '+e, 1, 1);
}