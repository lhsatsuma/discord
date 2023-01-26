class ProcessRunning
{
	constructor()
	{
		this.exec = require('child_process');
		
	}
	//ALL FUNCTIONS OF PROCESS RUNNING
	async check_running()
	{
		var running = {};
		
		if(fileExists('./processRunning.pid')){
			let pidContent = fs.readFileSync('./processRunning.pid', 'utf8');
			await this.pidIsRunning(pidContent).then((result) => {
				if(result){
					running.pid = pidContent;
				}
			});
		}
		return running;
	}

	startPid()
	{
		process.on('exit', async (code) => {
			console.log('Exiting process with code: '+code.toString());
			await this.deletePid();
		});
		return fs.writeFileSync('./processRunning.pid', process.pid.toString());
	}

	async deletePid(pid=0)
	{
		await fs.rmSync('./processRunning.pid');
		if(pid) {
			process.kill(pid, 0);
		}

		return true;
	}
	exit()
	{
		process.exit();
	}
	
	async pidIsRunning(pid) {
		try {
			await this.deletePid(pid);
			return true;
		} catch(e) {
			return false;
		}
	}
	mount_str_check_run()
	{
		let BeanBase = require('../Bean.js');
		let bean = new BeanBase();
		
		let returnStr = '**DATE: '+bean.dbh.formatField('datetime', new Date())+'**';

		returnStr += "\n\n**===>DBIKE BOT:<===**\n";
		returnStr += "STATUS: **RUNNING ON PID: "+process.pid+"**\n";
		returnStr += "UPTIME: **"+parseInt(process.uptime())+" seconds**\n";
		returnStr += "HEARTBEAT: **"+bot_cfg.heartbeat+" seconds**\n";
		return returnStr;
	}

	calcUpTime
}
module.exports = ProcessRunning;