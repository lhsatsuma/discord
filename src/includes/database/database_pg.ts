import { Pool, type QueryResult, type QueryResultRow} from 'pg';
import log from '#includes/log.ts';
import config from '#includes/config.ts';

class database_pg
{
	host: string;
	host_user: string;
	host_pwd: string;
	db_name: string;
	db_port: number;
	last_error: string;
	pool?: Pool;
	connection: any;
	bindParams: any[] = [];

	constructor()
	{
		this.host = config.DB_HOST;
		this.host_user = config.DB_USER;
		this.host_pwd = config.DB_PASSWORD;
		this.db_name = config.DB_NAME;
		this.db_port = config.DB_PORT;
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
			port: this.db_port ? Number(this.db_port) : undefined,
			connectionTimeoutMillis: 5000,
			idleTimeoutMillis: 15000,
		});
		this.pool.on('error', (err, client) => {
			log.err('[DataBase] Error: '+err);
			delete this.pool;
		});
		return this.pool;
	}

	async testConnection(): Promise <any>
	{
		try{
			(await this.createPool().connect()).release();
			return {status: true};
		}catch(e){
			return {status: false, err: e};
		}
	}

	getInfo(): Object
	{
		return {
			host: this.host,
			host_user: this.host_user,
			host_pwd: this.host_pwd,
			database: this.db_name,
		};
	}

	async query(text: string, params?: any[])
	{
		log.debug('[SQL][QUERY] '+text);
		if(params){
			log.debug('[SQL][PARAM] '+JSON.stringify(params));
		}
		const res = await this.createPool().query(text, params);
		log.debug('[SQL][QUERY] Total rows affected: '+res.rowCount);
		return res;
	}
}

const instance = new database_pg();
export default instance;