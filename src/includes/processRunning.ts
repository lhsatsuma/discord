import entryPoint from "../entryPoint.ts";
import * as Discord from 'discord.js';
import fs from 'fs';
import * as pidusage from 'pidusage';
export default class processRunning
{
    name: string;
    main: entryPoint;
    basePath: string;
    filePath: string;
    processInfo: Record<string,any>;
    constructor(main: entryPoint, entryMode: string)
    {
        this.main = main;
        this.basePath = process.cwd()+'/pids/';
        this.name = entryMode;
        this.filePath = this.basePath+this.name+'.json';
    }

    init()
    {
        if(this.name != globalThis.entryMode){
            this.processInfo = this.getFileInfo();
        }else{
            this.processInfo = this.getRunningInfo();
        }

        return this;
    }

    getFileInfo()
    {
        if(fs.existsSync(this.filePath)){
            return JSON.parse(fs.readFileSync(this.filePath, 'utf8'));
        }
        return false;
    }

    async saveInfo()
    {
        if(!fs.existsSync(this.basePath)){
            fs.mkdirSync(this.basePath,{ recursive: true });
        }
        return fs.writeFileSync(this.filePath, JSON.stringify(this.getRunningInfo()));
    }

    getRunningInfo()
    {
        let platform: string = 'N/A';
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
            entryMode: global.entryMode,
            pid: process.pid,
            platform: platform,
            nodeVersion: process.version,
            discordjsVersion: Discord.version,
            appVersion: process.env.npm_package_version,
            startAppTime: global.startTimeApp,
            heartbeatInterval: parseInt(process.env.DISCORD_BOT_HEARTBEAT),
        }   
    }

    checkRunningPid()
    {
        try {
			process.kill(this.processInfo.pid, 0);
			return true;
		} catch(e) {
			return false;
		}
    }

    async getUptime()
    {
        const stats = await pidusage.default([process.pid]);
        let uptime = stats[process.pid].elapsed / 1000;

        let days = Math.floor(uptime / (3600*24));
        let hours = Math.floor(uptime % (3600*24) / 3600);
        let minutes = Math.floor(uptime % 3600 / 60);
        let seconds = Math.floor(uptime % 60);
        return (days ? days+' days ' : '')+(hours ? hours+ ' hours ' : '')+(minutes ? minutes+ ' minutes ' : '')+(seconds ? seconds+ ' seconds' : '');
    }
}