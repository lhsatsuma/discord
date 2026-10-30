import fs from 'fs';
class log
{
    fileName;
	basePath;
	datePath;
	absolutPath;
	error;
	max_log_files = 99;
	max_file_size = 10485760; //10MB
    constructor(fileName)
    {
        this.fileName = fileName;
    }

    getDatePath()
	{
		let date = new Date();
		return date.getFullYear()+(parseInt(date.getMonth())+1).toString().padStart(2, '0')+date.getDate().toString().padStart(2, '0');
	}
    setBasePath()
	{
		if(this.datePath === this.getDatePath()){
			return this;
		}

		this.datePath = this.getDatePath();
		let dirPath = process.env.LOG_DIR;
		if(dirPath.substring(dirPath.length - 1, dirPath.length) !== '/'){
			dirPath += '/';
		}
		this.basePath = process.cwd()+'/'+dirPath+'/'+this.datePath+'/';
		this.absolutPath = this.basePath+this.fileName;

		return this;
	}

    add(str, options = {})
	{

		let date = new Date();
		
		str = date.toLocaleString(process.env.DISCORD_BOT_LOCALE) + '[' + process.pid.toString()+']['+options.level.padEnd(5, ' ')+'] '+str;

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

    debug(str)
	{
		return this.add(str, {
            level: 'DEBUG',
            echo: true,
            die: false
        });
	}
	
	info(str)
	{		
		return this.add(str, {
            level: 'INFO',
            echo: true,
            die: false
        });
	}
	
	warning(str)
	{
		return this.add(str, {
            level: 'WARN',
            echo: true,
            die: false
        });
	}
	
	fatal(str)
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