import {v7 as uuidV7} from 'uuid';
import database_pg from '#includes/database/database_pg.ts';
import log from '#includes/log.ts';
export default class model_base
{
    fields = [];
    table = '';
    bindParams: any[] = [];
    constructor()
    {
        return this;
    }
    init()
    {
        return this;
    }

    async query(SQL: string, params: any[])
    {
        let result = await database_pg.query(SQL, params);
        this.resetBind();
        return result;
    }

	async beforeInsert(fields: Record<string, any>)
	{

		if(!fields.date_entered){
			fields.date_entered = new Date();
		}

		if(!fields.date_modified){
			fields.date_modified = new Date();
		}

		if(!fields.created_by){
			fields.created_by = 'SYSTEM';
		}
		
		return fields;
	}

    async insert(fields: Record<string, any> = {}): Promise<any>
    {
        try{
            if(!fields.id){
                fields.id = uuidV7();
            }

			fields = await this.beforeInsert(fields);

            await database_pg.query(`INSERT INTO ${this.table} (${Object.keys(fields).join(', ')}) VALUES (${Object.values(fields).map((_, i) => `$${i + 1}`).join(', ')})`, Object.values(fields));
            return fields;
        }catch(e){
            log.warning('Error on database: '+e);
            return false;
        }
    }

	async select(fields: string = '*', inner_join: any[] = [], where: string = '', order_by: string = '', limit: number = null, group_by: string = ''): Promise<any>
    {
		try{
			let SQL = "SELECT "+fields+" FROM "+this.table;


			inner_join.forEach((ipt) => {
				SQL += ` ${ipt.type} ${ipt.table} ON ${ipt.on.join(' AND ')}`;
			});

			if (where) {
				if(!this.bindParams.length){
					log.warning('[SQL][SELECT] Warning: No bind parameters provided for WHERE clause. This may lead to SQL injection vulnerabilities.');
				}
				SQL += " WHERE " + where;
			}

			if (order_by) {
				SQL += " ORDER BY " + order_by;
			}

			if (group_by) {
				SQL += " GROUP BY " + group_by;
			}

			if (limit) {
				SQL += " LIMIT " + limit;
			}

			return await this.query(SQL, this.bindParams);
		}catch(e){
			log.warning('Error on database: '+e);
			throw new Error('Error on database: '+e);
		}
	}

	bind(bindValue: any)
	{
		this.bindParams.push(bindValue);
		return '$'+this.bindParams.length;
	}

	resetBind()
	{
		this.bindParams = [];
		return this;
	}
}