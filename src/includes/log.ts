import fs from 'fs';
import readLastLines from 'read-last-lines';
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
	error: string | undefined;
	max_log_files = 99;
	max_file_size = 10485760; //10MB
	logLevel: logLevelInterface;
    constructor(fileName: string)
    {
        this.fileName = fileName.toString() + '.log';
		this.logLevel = logLevelInterface[config.LOG_LEVEL as keyof typeof logLevelInterface];
    }

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
		let dirPath = config.LOG_DIR;
		if(dirPath.substring(dirPath.length - 1, dirPath.length) !== '/'){
			dirPath += '/';
		}
		this.basePath = process.cwd()+'/'+dirPath+'/'+this.datePath+'/';
		this.absolutPath = this.basePath+this.fileName;

		return this;
	}

    add(str: string, options: {level: string; echo: boolean; die: boolean} = {level: '', echo: false, die: false})
	{

		let date = new Date();
		
		str = date.toLocaleString(config.DISCORD_BOT_LOCALE) + '[' + process.pid.toString()+']['+options.level.padEnd(5, ' ')+'] '+str;

		this.setBasePath();

		if(!fs.existsSync(this.basePath)){
			fs.mkdirSync(this.basePath,{ recursive: true });
		}
		fs.appendFileSync(this.absolutPath, str+"\n");
		
		if(options.echo){
			console.log(str);
		}
		
		if(options.die){
			process.exit();
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
		if(this.logLevel < 8){
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

	async getLines(lines: number = 1): Promise<string>
	{
		return await readLastLines.read(this.absolutPath, lines);
	}
}
const instance = new log(global.entryMode);

export default instance;