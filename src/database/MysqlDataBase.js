const database = require("./database.js");
const MySQL = require('mysql2');

class MysqliDataBase extends database
{
	constructor(org)
	{
		super(org);
	}
	
	Connect()
	{
		return new Promise((resolve) => {
			if(this.connection){
				resolve({status: true, 'conn': this.connection});

				return true;
			}
			let conn = new MySQL.createConnection({
				host: this.host,
				user: this.host_user,
				password: this.host_pwd,
				database: this.db_name,
				port: this.db_port
			});
			
			try{
				conn.connect((err) => {
					if(err){
						this.last_error = 'Connection Error '+this.origem+' DB: '+err.message;
						resolve({status: false, 'err': this.last_error});
					}else{
						this.connection = conn;
						resolve({status: true, 'conn': this.connection});
						
					}
				});
				conn.on('error', async (err) => {
					if(err.code === 'PROTOCOL_CONNECTION_LOST') { // Connection to the MySQL server is usually

						await this.CloseConn();                         // lost due to either server restart, or a
					} else { // connnection idle timeout (the wait_timeout
						this.last_error = 'Connection Error '+this.origem+': '+err.message;
						resolve({status: false, 'err': this.last_error});
					}
				});
			}catch(err){
				this.last_error = 'Connection Error '+this.origem+': '+err.message;
				resolve({status: false, 'err': this.last_error});
			}
		});
	}
	
	async CloseConn()
	{
		if(this.connection){
			await this.connection.end();
			this.connection = null;
		}
		return true;
	}
	
	ErrorQuery(sql, err_msg = ''){
		log.Error('SQL Failed: '+sql+' : '+err_msg, 0, 1);
		this.last_error = 'SQL Failed: '+sql+' : '+err_msg;
	}
	
	Query(sql, show_sql = false)
	{
		if(bot_cfg.LOG_QUERY){
			log.Debug(sql);
		}
		return new Promise((resolve) => {
			this.Connect().then(async () => {
				if(this.connection){
					if(show_sql){
						console.log(sql);
					}
					this.connection.query(sql, async (err, result) => {
						try{
							if(err){
								this.ErrorQuery(sql, err.sqlMessage);
								await this.CloseConn();
								resolve(false);
							}else{
								resolve(result);
							}
						}catch(err){
							this.ErrorQuery(sql, err.sqlMessage);
							resolve(false);
						}
					});
				}else{
					resolve(false);
				}
			});
		});
	}
	
}

module.exports = MysqliDataBase;