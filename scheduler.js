global.entryPoint = 'schedule';
global.startAppTime = new Date();
global.fs = require('fs');

//Using dotenv to get config
require('./src/utils/config');

const logControl = require("./src/utils/LogControl");
global.log = new logControl(bot_cfg.LOG_DIR, 'scheduler.log', {level_register: bot_cfg.LOG_REGISTER});

const scheduler = require('./src/scheduler');

try{
    cron_scheduler = new scheduler();
    cron_scheduler.init();
}catch(e){
    log.Fatal('Error starting scheduler: '+e, 1, 1);
}