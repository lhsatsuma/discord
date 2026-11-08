import {v7 as uuidV7} from 'uuid';
import database_pg from '#includes/database/database_pg.ts';
import log from '#includes/log.ts';
import type { fieldInterface } from '../interfaces/fieldInterface.ts';
export default class model_base
{
    table: string;
    bindParams: any[] = [];
    fields: Record<string, fieldInterface> = {};
    constructor()
    {
        return this;
    }

	resetFields()
	{
		Object.assign(this, Object.fromEntries(
			Object.keys(this.fields).map((column) => [column, undefined])
		));
		return this;
	}

	protected getPrimaryKeyColumn(): string | undefined
	{
		return Object.keys(this.fields).find((column) => this.fields[column].pk);
	}

	protected getFieldValues(values: Record<string, any> = {}): Record<string, any>
	{
		const fields: Record<string, any> = {};
		for (const column of Object.keys(this.fields)) {
			const value = Object.prototype.hasOwnProperty.call(values, column)
				? values[column]
				: this[column];
			if (value !== undefined) {
				fields[column] = value;
			}
		}
		return fields;
	}

    async query(SQL: string, params: any[])
    {
		this.resetBind();
        let result = await database_pg.query(SQL, params);
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
			fields = this.getFieldValues(fields);
			const primaryKey = this.getPrimaryKeyColumn();
            if(primaryKey && !fields[primaryKey]){
                fields[primaryKey] = uuidV7();
            }

			fields = await this.beforeInsert(fields);

            await database_pg.query(`INSERT INTO ${this.table} (${Object.keys(fields).join(', ')}) VALUES (${Object.values(fields).map((_, i) => `$${i + 1}`).join(', ')})`, Object.values(fields));
			Object.assign(this, fields);
            return fields;
        }catch(e){
            log.warning('Error on database: '+e);
            return false;
        }
    }

	async update(fields: Record<string, any> = {}): Promise<any>
	{
		try{
			fields = this.getFieldValues(fields);
			const primaryKey = this.getPrimaryKeyColumn();
			if(!primaryKey || !fields[primaryKey]){
				log.warning(`Cannot update ${this.table}: primary key is missing.`);
				return false;
			}

			const updateFields = Object.entries(fields).filter(
				([column]) => column !== primaryKey && column !== 'date_modified' && column !== 'created_by'
			);
			if(!updateFields.length){
				log.warning(`Cannot update ${this.table}: no fields to update.`);
				return false;
			}

			const params = updateFields.map(([, value]) => value);
			const setClause = updateFields.map(([column], index) => `${column} = $${index + 1}`).join(', ');
			params.push(fields[primaryKey]);
			await database_pg.query(
				`UPDATE ${this.table} SET ${setClause} WHERE ${primaryKey} = $${params.length}`,
				params
			);
			const updatedFields = Object.fromEntries(updateFields);
			Object.assign(this, updatedFields);
			return {...updatedFields, [primaryKey]: fields[primaryKey]};
		}catch(e){
			log.warning('Error on database: '+e);
			return false;
		}
	}

	async save(fields: Record<string, any> = {}): Promise<any>
	{
		const values = this.getFieldValues(fields);
		const primaryKey = this.getPrimaryKeyColumn();
		return primaryKey && values[primaryKey]
			? await this.update(values)
			: await this.insert(values);
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