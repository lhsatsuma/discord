const cron = require('node-cron');
const BeanServerMembers = getUtils().requireAgain(process.cwd()+'/src/models/ServerMembers.js');

class BirthdaySchedule
{
    interval = '0 8 * * *';
    active = true;
    constructor() {

    }

    schedule()
    {
        return cron.schedule(this.interval, this.execute);
    }

    async execute()
    {
        try {
            log.Info('Start schedule birthday');
            let bean = new BeanServerMembers();
            await bean.checkBirthdayNotifications();
            log.Info('Finished schedule birthday');

            return true;
        }catch(e){
            console.log(e);
            log.Error('Unable to run schedule birthday: '+e);
            return false;
        }
    }
}

module.exports = BirthdaySchedule;