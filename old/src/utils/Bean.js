class BeanBase
{
	fields = {};
	constructor()
	{
		const HelperDataBase = require('../database/Helper.js');
		
		this.dbh = new HelperDataBase(db);
		
		this.dbh.table = '';
		this.user_id = '';
	}
	
	mountDefaultFieldsObj()
	{
		if(!!this.fields){
			for(var field in this.fields){
				if(typeof this.fields[field]['default'] !== 'undefined'){
					this[field] = this.fields[field]['default'];
				}
			}
		}
	}
	
	mountFieldsObj(vals)
	{
		for(let field in this.fields){
			if(vals[field] !== undefined){
				this[field] = this.unformatField(this.fields[field]['type'], vals[field]);
			}else{
				this[field] = null;
			}
		}
	}
	
	async select(where = null)
	{
		if(!where && this.user_id){
			this.dbh.where = "user_id = '"+this.user_id+"'";
		}else{
			this.dbh.where = where;
		}
		this.dbh.limit = 1; //If select by bean, return with limit 1
		let result = await this.dbh.Select();
		if(typeof result[0] !== 'undefined'){
			this.mountFieldsObj(result[0]);
		}
		return this;
	}
	
	selectActive()
	{
		return this.select(`server = '${this.server}' AND user_id = '${this.user_id}' AND status <> 'done'`);
	}
	
	async save()
	{
		let dataSave = {};
		
		let isInsert = true;
		if(!!this.id){
			this.date_modified = new Date();
			isInsert = false;
		}else{
			this.id = getUtils().create_guid();
			this.date_entered = new Date();
			this.date_modified = new Date();
		}
		for(let field in this.fields){
			if(this[field] !== undefined){
				dataSave[field] = this.dbh.formatField(this.fields[field]['type'], this[field]);
			}
		}

		if(!isInsert){
			if(!await this.beforeUpdate()){
				log.Error(`[${this.constructor.name}] Error executing beforeUpdate`);
				return false;
			}
			if(await this.update(dataSave)) {
				if (!await this.afterUpdate()) {
					log.Error(`[${this.constructor.name}] Error executing afterUpdate`);
					return false;
				}
				return true;
			}
		}else{
			if(!await this.beforeInsert()){
				log.Error(`[${this.constructor.name}] Error executing beforeInsert`);
				return false;
			}

			if(await this.insert(dataSave)) {
				if (!await this.afterInsert()) {
					log.Error(`[${this.constructor.name}] Error executing afterInsert`);
					return false;
				}
				return true;
			}
		}

		return false;
	}

	async update(data)
	{
		let UpdateTables = {};
		UpdateTables[this.dbh.table] = {
			fields: data,
			where: `id = '${data.id}'`,
		};
		return await this.dbh.Update(UpdateTables);
	}

	async delete()
	{
		let DeleteTables = {};
		DeleteTables[this.dbh.table] = `id = '${this.id}'`;

		return await this.dbh.Delete(DeleteTables);
	}

	async insert(data)
	{
		let InsertTables = {};
		InsertTables[this.dbh.table] = data;
		return await this.dbh.Insert(InsertTables);
	}
	unformatField(type, value)
	{
		switch(type){
			case 'date':
			case 'datetime':
				if(typeof value == 'string'){
					value = new Date(value);
				}
				break;
			case 'date-locale':
				if(value instanceof Date){
					value = getUtils().padZeroLeft(value.getDate())+'/'+getUtils().padZeroLeft(value.getMonth()+1)+'/'+value.getFullYear();
				}
				break;
			case 'datetime-locale':
				if(value instanceof Date){
					value = getUtils().padZeroLeft(value.getDate())+'/'+getUtils().padZeroLeft(value.getMonth()+1)+'/'+value.getFullYear()+' '+getUtils().padZeroLeft(value.getHours())+':'+getUtils().padZeroLeft(value.getMinutes())+':'+getUtils().padZeroLeft(value.getSeconds());
				}
				break;
			case 'json':
				value = JSON.parse(value);
				break;
			case 'int':
				value = parseInt(value);
				break;
			case 'bool':
				value = !!value;
				break;
			default:
				break;
		}
		return value;
	}

	async beforeInsert()
	{
		return true;
	}

	async beforeUpdate()
	{
		return true;
	}

	async afterInsert()
	{
		return true;
	}

	async afterUpdate()
	{
		return true;
	}
}

module.exports = BeanBase;