const pidusage = require('pidusage')
class ProcessRunning
{
	pidFile = './app.pid';
	pidName = 'app';
	self_check = true;
	constructor(pidName = '', self_check = true)
	{
		this.exec = require('child_process');
		if(pidName){
			this.pidFile = './'+pidName+'.pid';
			this.pidName = pidName;
		}
		this.self_check = self_check;
	}
	getContent()
	{
		if(getUtils().fileExists(this.pidFile)) {
			return JSON.parse(fs.readFileSync(this.pidFile, 'utf8'));
		}
		return null;
	}
	//ALL FUNCTIONS OF PROCESS RUNNING
	async check_running()
	{
		let content = this.getContent();
		if(content){
			if(await this.pidIsRunning(content.pid)){
				return true;
			}
		}

		return false;
	}

	startPid()
	{
		process.on('SIGINT', async () => {
			log.Warning('Processing exit...');
			await this.exit();
		});

		let info = this.getSysInfo();
		return fs.writeFileSync(this.pidFile, JSON.stringify(info));
	}

	async deletePid()
	{
		let pidContent = this.getContent();

		await fs.rmSync(this.pidFile);

		process.kill(pidContent.pid);

		return true;
	}

	async exit()
	{
		try{
			log.Info('Logout discord API...');
			await client.destroy();
		}catch(e){
			log.Fatal('Unable to logout into discord: '+e, 0, 1);
		}
		await this.deletePid();
		process.exit();
	}
	
	async pidIsRunning(pid) {
		try {
			process.kill(pid, 0);
			return true;
		} catch(e) {
			return false;
		}
	}
	getSysInfo()
	{
		if(this.self_check) {
			let platform;
			switch (process.platform) {
				case 'win32' :
					platform = 'Windows';
					break;
				case 'darwin' :
					platform = 'Mac';
					break;
				case 'linux' :
					platform = 'Linux';
					break;
				default:
					break;
			}
			return {
				pid: process.pid.toString(),
				platform: platform,
				heartbeat: bot_cfg.HEARTBEAT,
				nodeversion: process.version,
				discordjs: Discord.version,
				appversion: app_version
			}
		}else{
			return this.getContent();
		}
	}

	async getUptime()
	{
		let uptime;
		if(this.self_check) {
			uptime = process.uptime();
		}else{
			let content = this.getContent();
			const stats = await pidusage(content.pid);
			uptime = stats.elapsed / 1000;
		}

		let days = Math.floor(uptime / (3600*24));
		let hours = Math.floor(uptime % (3600*24) / 3600);
		let minutes = Math.floor(uptime % 3600 / 60);
		let seconds = Math.floor(uptime % 60);
		return (days ? days+' days ' : '')+(hours ? hours+ ' hours ' : '')+(minutes ? minutes+ ' minutes ' : '')+(seconds ? seconds+ ' seconds' : '');
	}
}
module.exports = ProcessRunning;