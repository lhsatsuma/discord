import { Pool, type QueryResult, type QueryResultRow} from 'pg';
import log from '#includes/log.ts';

class database_pg
{
	host: string | undefined;
	host_user: string | undefined;
	host_pwd: string | undefined;
	db_name: string | undefined;
	db_port: string | undefined;
	last_error: string;
	pool?: Pool;
	connection: any;
	bindParams: any[] = [];

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

	async testConnection()
	{
		try{
			await this.createPool().connect();
			return {status: true};
		}catch(e){
			return {status: false, err: e.message};
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
		log.debug('[SQL][QUERY] '+text+(params ? ' | params: '+JSON.stringify(params ?? []): ''));
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