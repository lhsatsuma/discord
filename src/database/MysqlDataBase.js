const database = require("./database.js");
const MySQL = require('mysql');

class MysqliDataBase extends database
{
	constructor(org, params)
	{
		super(org, params);
	}
	
	Connect()
	{
		return new Promise((resolve, reject) => {
			let conn = new MySQL.createConnection({
				host: this.host,
				user: this.host_user,
				password: this.host_pwd,
				database: this.database
			});
			
			try{
				conn.connect((err) => {
					if(err){
						this.last_error = 'Connection Error '+this.origem+' DB: '+err.sqlMessage;
						resolve({status: false, 'err': this.last_error});
					}else{
						this.connection = conn;
						resolve({status: true, 'conn': this.connection});
						
					}
				});
				conn.on('error', function(err) {
					if(err.code === 'PROTOCOL_CONNECTION_LOST') { // Connection to the MySQL server is usually
						this.CloseConn();                         // lost due to either server restart, or a
					} else {                                      // connnection idle timeout (the wait_timeout
						throw err;                                  // server variable configures this)
					}
				});
			}catch(err){
				console.log(err.message);
				this.last_error = 'Connection Error '+this.origem+': '+err.message;
				resolve({status: false, 'err': this.last_error});
			}
		});
	}
	
	async CloseConn()
	{
		if(this.connection){
			await this.connection.end();
		}
		return true;
	}
	
	ErrorQuery(sql, err_msg = ''){
		client.log.Error('SQL Failed: '+sql+' : '+err_msg, 0, 1);
		this.last_error = 'SQL Failed: '+sql+' : '+err_msg;
	}
	
	Query(sql, show_sql = false)
	{
		return new Promise((resolve, reject) => {
			this.Connect().then((statusConn) => {
				if(this.connection){
					if(show_sql){
						console.log(sql);
					}
					let result = this.connection.query(sql, (err, result) => {
						try{
							if(err){
								console.log(err, result);
								this.ErrorQuery(sql, err.sqlMessage);
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