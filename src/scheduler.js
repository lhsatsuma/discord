const discordAppClient = require('./InitApp.js');
const mySqlDb = require("./database/MysqlDataBase");
const ProcessRunning = require("./utils/ProcessRunning");
const cronstrue = require('cronstrue');
require('cronstrue/locales/pt_BR');

global.client = new discordAppClient();

class scheduler{
    constructor() {
       //Nothing to do
    }

    async init() {

        client.logInit();

        await this.checkRunningStartVars();

        log.Debug('Initializing database class');

        global.db = new mySqlDb(entryPoint);

        let connected_db = await db.TestConnection();

        if(!connected_db.status){
            log.Fatal('Error connecting to database: '+connected_db.err, 1, 1);
            return false;
        }

        //Try to login to Discord API
        try{
            log.Debug('Loading locales for: '+bot_cfg.BOT_LOCALE);

            await getLang().importLocales();

            log.Debug('Loaded locales');

            log.Debug('Loading schedules files');
            await this.loadSchedules();
            log.Debug('Loading schedules files COMPLETED!');

            log.Debug('Trying to connect into Discord');
            let logged_in = await client.login();
            if(!logged_in) {
                return false;
            }
            log.Debug('Connection estabilished!');

            log.Info("----------------------------");
            log.Info('SCHEDULER IS UP AND RUNNING!');
            log.Info("----------------------------");

        }catch(e){
            log.Fatal('Unable to start scheduler: ' + e, 1, 1);
        }
    }

    async checkRunningStartVars()
    {
        log.Debug('Checking process running');
        let running = new ProcessRunning('scheduler');

        let result = await running.check_running();
        if(result){
            log.Fatal("Aborting execute: already running!",1,1);
        }
        running.startPid();
    }
    async loadSchedules()
    {
        const basePath = process.cwd() + '/src/schedules/';
        const dirs = fs.readdirSync(basePath);
        for (const scheduleName of dirs) {
            let absolutePath = basePath + scheduleName;

            if (!fs.existsSync(absolutePath)) {
                log.Error('CommandDir: ' + scheduleName + ' dont have JS');
                continue;
            }

            log.Debug('Loading schedule: ' + scheduleName);
            let scheduleClass = getUtils().requireAgain(absolutePath);
            scheduleClass = new scheduleClass();
            if(!scheduleClass.active){
                log.Debug('Schedule '+scheduleName+' is inactive. Skipping...');
                continue;
            }
            log.Debug('Scheduling '+scheduleName+' | '+cronstrue.toString(scheduleClass.interval, { use24HourTimeFormat: true, locale: getLang().locale }));
            scheduleClass.schedule();


            log.Debug('Loaded schedule: ' + scheduleName);
        }
    }
}

module.exports = scheduler;