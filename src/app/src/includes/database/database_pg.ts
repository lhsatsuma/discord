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

import { Pool } from 'pg';
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

		const pool = new Pool({
			host: this.host,
			user: this.host_user,
			password: this.host_pwd,
			database: this.db_name,
			port: this.db_port ? Number(this.db_port) : undefined,
			connectionTimeoutMillis: 5000,
			idleTimeoutMillis: 15000,
		});
		pool.on('error', (err) => {
			log.err('[DataBase] Error: '+err);
		});
		this.pool = pool;
		return pool;
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
