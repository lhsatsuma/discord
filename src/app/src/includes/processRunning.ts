/*
 * Copyright (C) 2025 Luis Satsuma
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

import entryPoint from "#src/entryPoint.ts";
import * as Discord from 'discord.js';
import fs from 'fs';
import pidusage from 'pidusage';
import config from '#includes/config.ts';
export default class processRunning
{
    name: string;
    main: entryPoint;
    basePath: string;
    filePath: string;
    processInfo: Record<string,any> | undefined;
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

    startHeartbeat()
    {
        const heartbeat = setInterval(() => {
            void this.saveInfo().catch((error) => {
                console.error(`Could not update ${this.name} process heartbeat:`, error);
            });
        }, 15000);
        heartbeat.unref();
        return heartbeat;
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
            heartbeatInterval: config.DISCORD_BOT_HEARTBEAT,
            lastHeartbeatAt: new Date().toISOString(),
        }   
    }

    checkRunningPid()
    {
        try {
			process.kill(this.processInfo?.pid, 0);
			return true;
		} catch(e) {
			return false;
		}
    }

    async getUptime()
    {
        let uptime = 0;
        try{
            const stats = await pidusage([this.processInfo?.pid]);
            uptime = stats[this.processInfo?.pid].elapsed / 1000;
        }catch(e){
            return '';
        }

        let days = Math.floor(uptime / (3600*24));
        let hours = Math.floor(uptime % (3600*24) / 3600);
        let minutes = Math.floor(uptime % 3600 / 60);
        let seconds = Math.floor(uptime % 60);
        return (days ? days+' days ' : '')+(hours ? hours+ ' hours ' : '')+(minutes ? minutes+ ' minutes ' : '')+(seconds ? seconds+ ' seconds' : '');
    }
}
