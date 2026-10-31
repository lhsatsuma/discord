import { Pool} from 'pg';
import log from '#includes/log.js';

class database_pg
{
	constructor()
	{
		this.host = process.env.DB_HOST;
		this.host_user = process.env.DB_USER;
		this.host_pwd = process.env.DB_PASSWORD;
		this.db_name = process.env.DB_NAME;
		this.db_port = process.env.DB_PORT;
		this.last_error = '';
	}
	createPool()
	{
		if(this.pool){
			return this.pool;
		}

		this.pool = new Pool({
			host: this.host,
			user: this.host_user,
			password: this.host_pwd,
			database: this.db_name,
			port: this.db_port
		});
		this.pool.on('error', (err, client) => {
			log.err('[DataBase] Error: '+err);
			delete this.pool;
		});
		return this.pool;
	}
	async testConnection()
	{
		try{
			await this.createPool().connect();
			return {status: true};
		}catch(e){
			return {status: false, err: e.message};
		}
	}

	getInfo()
	{
		return {
			host: this.host,
			host_user: this.host_user,
			host_pwd: this.host_pwd,
			database: this.db_name,
		};
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
		log.err('SQL Failed: '+sql+' : '+err_msg, 0, 1);
		this.last_error = 'SQL Failed: '+sql+' : '+err_msg;
	}

	async query(text, params)
	{
		log.debug('[SQL][QUERY] '+text+(params ? ' | params: '+JSON.stringify(params ?? []): ''));
		if(params){
			log.debug('[SQL][PARAM] '+JSON.stringify(params));
		}
		return await this.createPool().query(text, params);
	}
}

const instance = new database_pg(global.entryMode);
export default instance;