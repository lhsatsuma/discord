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

import fs from 'fs';
import path from 'node:path';
import config from '#includes/config.ts';
export const logLevelInterface ={
	debug: 1,
	info: 2,
	warn: 4,
	error: 8,
	fatal: 16
}
export type logLevelInterface = typeof logLevelInterface[keyof typeof logLevelInterface];

class log
{
    fileName: string;
	basePath = '';
	datePath = '';
	absolutPath = '';
	logLevel: logLevelInterface;
	private readonly pendingWrites = new Map<string, string[]>();
	private writeQueue: Promise<void> = Promise.resolve();
	private flushScheduled = false;
    constructor(fileName: string)
    {
        this.fileName = fileName.toString() + '.log';
		this.logLevel = logLevelInterface[config.LOG_LEVEL as keyof typeof logLevelInterface];
		process.once('SIGINT', this.flushBeforeExit);
		process.once('SIGTERM', this.flushBeforeExit);
    }

	private flushBeforeExit = (): void => {
		this.flushWrites();
		void this.writeQueue.finally(() => process.exit(0));
	};

    getDatePath()
	{
		let date = new Date();
		return date.getFullYear()+(date.getMonth()+1).toString().padStart(2, '0')+date.getDate().toString().padStart(2, '0');
	}
    setBasePath()
	{
		if(this.datePath === this.getDatePath()){
			return this;
		}

		this.datePath = this.getDatePath();
		this.basePath = path.resolve(process.cwd(), config.LOG_DIR, this.datePath) + path.sep;
		this.absolutPath = path.join(this.basePath, this.fileName);

		return this;
	}

	private scheduleFlush(): void
	{
		if (this.flushScheduled) return;
		this.flushScheduled = true;
		setImmediate(() => this.flushWrites());
	}

	private flushWrites(): void
	{
		this.flushScheduled = false;
		const batches = [...this.pendingWrites.entries()];
		this.pendingWrites.clear();

		for (const [filePath, lines] of batches) {
			const content = lines.join('');
			this.writeQueue = this.writeQueue.then(async () => {
				await fs.promises.mkdir(path.dirname(filePath), {recursive: true});
				await fs.promises.appendFile(filePath, content, 'utf8');
			}).catch((error: unknown) => {
				console.error('Could not write the bot log file:', error);
			});
		}
	}

	async flush(): Promise<void>
	{
		this.flushWrites();
		await this.writeQueue;
	}

    add(str: string, options: {level: string; echo: boolean; die: boolean} = {level: '', echo: false, die: false})
	{

		let date = new Date();
		
		str = date.toLocaleString(config.DISCORD_BOT_LOCALE) + '[' + process.pid.toString()+']['+options.level.padEnd(5, ' ')+'] '+str;

		this.setBasePath();
		const lines = this.pendingWrites.get(this.absolutPath) ?? [];
		lines.push(str + '\n');
		this.pendingWrites.set(this.absolutPath, lines);
		this.scheduleFlush();
		
		if(options.echo){
			console.log(str);
		}
		
		if(options.die){
			this.flushWrites();
			void this.writeQueue.finally(() => process.exit(1));
		}
		return str;
	}

    debug(str: string)
	{
		if(this.logLevel >= 2){
			return true;
		}
		return this.add(str, {
            level: 'DEBUG',
            echo: true,
            die: false
        });
	}
	
	info(str: string)
	{
		if(this.logLevel >= 4){
			return true;
		}
		return this.add(str, {
            level: 'INFO',
            echo: true,
            die: false
        });
	}
	
	warning(str: string)
	{
		if(this.logLevel >= 8){
			return true;
		}
		return this.add(str, {
            level: 'WARN',
            echo: true,
            die: false
        });
	}
	
	err(str: string)
	{
		if(this.logLevel > logLevelInterface.error){
			return true;
		}
		return this.add(str, {
            level: 'ERROR',
            echo: true,
            die: false
        });
	}
	
	fatal(str: string)
	{
		return this.add(str, {
            level: 'FATAL',
            echo: true,
            die: true
        });
	}

}
const instance = new log(global.entryMode);

export default instance;
