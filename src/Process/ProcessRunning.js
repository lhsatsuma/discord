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

		let platform = process.platform;
		const date = bean.dbh.formatField('datetime', new Date());
		let uptime = process.uptime();

		let days = Math.floor(uptime / (3600*24));
		let hours = Math.floor(uptime % (3600*24) / 3600);
		let minutes = Math.floor(uptime % 3600 / 60);
		let seconds = Math.floor(uptime % 60);
		uptime = (days ? days+' days ' : '')+(hours ? hours+ ' hours ' : '')+(minutes ? minutes+ ' minutes ' : '')+(seconds ? seconds+ ' seconds' : '');



		switch (process.platform) {
			case 'win32' : platform = 'Windows'; break;
			case 'darwin' : platform = 'Mac'; break;
			case 'linux' : platform = 'Linux'; break;
			default: break;
		}

		return `**DATE: ${date}**
		
		**PID:** ${process.pid}
		**OS:** ${platform}
		**UPTIME:** ${uptime}
		**HEARTBEAT:** ${bot_cfg.heartbeat} seconds
		
		**NPM Version:** ${process.version}
		**Discord.JS Version:** v${Discord.version}
		**App Version:** v${app_version}
		`;
	}

	calcUpTime
}
module.exports = ProcessRunning;