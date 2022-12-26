class BeanBase
{
	fields = {};
	constructor()
	{
		const HelperDataBase = require('./DataBase/Helper.js');
		
		this.dbh = new HelperDataBase(client.db);
		
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
			console.log(vals[field]);
			if(vals[field] !== undefined){
				this[field] = this.unformatField(this.fields[field]['type'], vals[field]);
			}
		}
	}
	
	async select(where = null)
	{
		if(!where){
			this.dbh.where = "user_id = '"+this.user_id+"'";
		}else{
			this.dbh.where = where;
		}
		let result = await this.dbh.Select();
		if(typeof result[0] !== 'undefined'){
			this.mountFieldsObj(result[0]);
		}
		return this;
	}
	
	selectActive()
	{
		return this.select("user_id = '"+this.user_id+"' AND status <> 'done'");
	}
	
	save()
	{
		let dataSave = {};
		
		let isInsert = true;
		if(!!this.id){
			this.date_modified = new Date();
			isInsert = false;
		}else{
			this.id = create_guid();
			this.date_entered = new Date();
			this.date_modified = new Date();
		}
		for(let field in this.fields){
			if(this[field] !== undefined){
				dataSave[field] = this.dbh.formatField(this.fields[field]['type'], this[field]);
			}
		}
		if(!isInsert){
			return this.update(dataSave);
		}else{
			return this.insert(dataSave);
		}
	}

	update(data)
	{
		let UpdateTables = {};
		UpdateTables[this.dbh.table] = {
			fields: data,
			where: `id = '${data.id}'`,
		};
		return this.dbh.Update(UpdateTables);
	}

	insert(data)
	{
		let InsertTables = {};
		InsertTables[this.dbh.table] = data;
		return this.dbh.Insert(InsertTables);
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
			case 'serialize':
				const {serialize, unserialize} = require('php-serialize');
				value = unserialize(value);
				break;
			case 'int':
				value = parseInt(value);
				break;
			default:
				break;
		}
		return value;
	}
}

module.exports = BeanBase;