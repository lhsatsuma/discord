class LogControl
{
	constructor(dirPath, fileName, options = {})
	{	
		this.path = '';
		this.logFile = '';
		this.error = '';
		this.max_log_files = 99;
		// this.max_file_size = 10; //10Bytes
		this.max_file_size = 10485760; //10MB
		this.level_types = {
			'1': 'DEBUG',
			'2': 'INFO',
			'3': 'ERROR',
			'4': 'WARNING',
			'5': 'FATAL',
		};
		this.level_register = [1,2,3,4,5];
		this.default_options = {
			'level': 1,
			'die': 0,
			'echo': 0
		};
		
		if(dirPath.substring(dirPath.length - 1, dirPath.length) !== '/'){
			dirPath += '/';
		}
		let date = new Date();
		let dateFormat = date.getFullYear()+(parseInt(date.getMonth())+1).toString().padStart(2, '0')+date.getDate().toString().padStart(2, '0');
		this.path = dirPath+dateFormat+'/';
		this.logFile = fileName;
		if(typeof options.default_op !== 'undefined'){
			for (var prop in this.default_options) {
				let new_val = this.default_options[prop];
				
				if(options.default_op[prop] !== 'undefined'){
					new_val = options.default_op[prop];
				}
				this.default_options[prop] = new_val;
			}
		}
		if(typeof options.level_register !== 'undefined'){
			this.level_register = options.level_register;
		}
	}

	async deleteLogs()
	{
		setTimeout(() => {
			if(fileExists(this.path+this.logFile)){
				try{
					fs.unlinkSync(this.path+this.logFile);
				}catch(err){
					//ignore
				}
			}
			let pathWithoutExt = this.logFile.substring(0, this.logFile.length-4);
			for(var i=1;i<=this.max_log_files;i++){
				let fileToCheck = this.path+pathWithoutExt+'_'+i+'.log';
				if(fileExists(fileToCheck)){
					fs.unlinkSync(fileToCheck);
				}
			}
		}, 10);
	}

	checkMaxSize()
	{
		if(fileExists(this.path+this.logFile)){
			let stats = fs.statSync(this.path+this.logFile);

			if(stats.size >= this.max_file_size){
				let pathWithoutExt = this.logFile.substring(0, this.logFile.length-4);
				for(var i=1;i<=this.max_log_files;i++){
					let fileToCheck = this.path+pathWithoutExt+'_'+i+'.log';
					if(!fileExists(fileToCheck)){
						fs.rename(this.path+this.logFile, fileToCheck, () => {});
						break;
					}
				}
			}
		}
	}
	
	Add(str, options_set = {})
	{
		this.checkMaxSize();
		let data = new Date();

		if(this.level_register.indexOf(options_set.level) == -1){
			return false;
		}
		let level = this.level_types[options_set.level];
		
		str = data.toLocaleString('pt-BR') + '[' + process.pid.toString()+']['+level.padEnd(7, ' ')+'] '+str;
		
		let options = this.default_options;
		for (var prop in options_set) {
			options[prop] = options_set[prop];
		}
		if(!fs.existsSync(this.path)){
			fs.mkdirSync(this.path);
		}
		fs.appendFileSync(this.path+this.logFile, str+"\n");
		
		if(options.echo){
			console.log(str);
		}
		
		if(options.die){
			process.exit();
		}
		return str;
	}
	
	Debug(str, die = 0, echo = 0)
	{
		
		let options = {};
		
		options.level = 1;
		if(die){
			options.die = 1;
		}
		if(echo){
			options.echo = 1;
		}

		return this.Add(str, options);
	}
	
	Info(str, die = 0, echo = 0)
	{
		
		let options = {};
		
		options.level = 2;
		if(die){
			options.die = 1;
		}
		if(echo){
			options.echo = 1;
		}
		
		return this.Add(str, options);
	}
	
	Error(str, die = 0, echo = 0)
	{
		
		let options = {};
		
		options.level = 3;
		if(die){
			options.die = 0;
		}
		if(echo){
			options.echo = 1;
		}
		
		return this.Add(str, options);
	}
	
	Warning(str, die = 0, echo = 0)
	{
		
		let options = {};
		
		options.level = 4;
		if(die){
			options.die = 0;
		}
		if(echo){
			options.echo = 1;
		}
		
		return this.Add(str, options);
	}
	
	Fatal(str, die = 0, echo = 0)
	{
		
		let options = {};
		
		options.level = 5;
		if(die){
			options.die = 1;
		}
		if(echo){
			options.echo = 1;
		}
		
		return this.Add(str, options);
	}
	
}
module.exports = LogControl;