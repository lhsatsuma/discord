global.entryPoint = 'app';
global.startAppTime = new Date();
global.fs = require('fs');

//Using dotenv to get config
require('./src/utils/config');

const logControl = require("./src/utils/LogControl");
global.log = new logControl('app.log', {level_register: bot_cfg.LOG_REGISTER});

discordAppClient = require('./src/InitApp.js');
global.client = new discordAppClient();

try {
	client.init();
}catch(e){
	log.Fatal('Error loading super class: '+e, 1, 1);
}