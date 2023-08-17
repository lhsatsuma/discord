class HelperDataBase
{
	constructor(db)
	{
		this.db = db;
		this.table = '';
		this.resetOptions();
	}
	
	Select(show_sql = false){

		return new Promise((resolve) => {
			let SQL = "SELECT "+this.fields+" FROM "+this.table;


			this.inner_join.forEach((ipt) => {
				SQL += " " + ipt.type + " " + ipt.table + " ON " + ipt.on;
			});

			if (this.where) {
				SQL += " WHERE " + this.where;
			}

			if (this.order_by) {
				SQL += " ORDER BY " + this.order_by;
			}

			if (this.group_by) {
				SQL += " GROUP BY " + this.group_by;
			}

			if (this.limit) {
				SQL += " LIMIT " + this.limit;
			}

			this.db.Query(SQL, show_sql).then((result) => {
				if(result === false){
					log.Fatal(this.db.last_error, 0, 1);
					resolve(false);
				}else{
					resolve(result);
				}
			});
		});
	}

	Insert(insert_tables = {}, show_sql = false)
	{
		return new Promise((resolve) => {
			var countObj = 0;
			for(var table in insert_tables){
				countObj++;
			}
			var keyObj = 0;
			for(var table in insert_tables){
				keyObj++;
				let SQL = "INSERT INTO "+table+" (";
				
				let columns = '';
				let values = '';
				let c_fields = '';
				for(var field in insert_tables[table]){
					let val = insert_tables[table][field];
					columns += c_fields+field;
					if(val !== null){
						if(typeof val == 'string'){
							val = val.replaceAll("'", "''");
						}
						val = "'"+val+"'";
					}
					values += c_fields+""+val;
					c_fields = ',';	
				}
				SQL += columns;
				SQL += ") VALUES (";
				SQL += values;
				SQL += ")";
				this.db.Query(SQL, show_sql).then((result) => {
					if(result === false){
						log.Fatal(this.db.last_error, 0, 1);
						resolve(false);
					}else{
						if(keyObj == countObj){
							resolve(true);
						}
					}
				});
			}
		});
	}
	
	Update(update_tables = {}, show_sql = false){
		return new Promise((resolve) => {
			var countObj = 0;
			for(var table in update_tables){
				countObj++;
			}
			var keyObj = 0;
			for(var table in update_tables){
				keyObj++;
				let SQL = "UPDATE "+table+" SET ";
				let columns = '';
				let c_fields = '';
				let args = update_tables[table];
				for(var field in args['fields']){
					let val = args['fields'][field];
					if(val !== null){
						if(typeof val == 'string'){
							val = val.replaceAll("'", "''");
						}
						val = "'"+val+"'";
					}
					columns += c_fields+field+" = "+val+"";
					c_fields = ",";
				}
				
				SQL += columns;
				if (args['where']) {
					SQL += " WHERE "+args['where'];
				}
				this.db.Query(SQL, show_sql).then((result) => {
					if(result === false){
						log.Fatal(this.db.last_error, 0, 1);
						resolve(false);
					}else{
						if(keyObj == countObj){
							resolve(true);
						}
					}
				});
			}
		});
	}
	
	Delete(delete_tables = {}, show_sql = false){
		return new Promise((resolve) => {
			var countObj = 0;
			for(var table in delete_tables){
				countObj++;
			}
			var keyObj = 0;
			for(var table in delete_tables){
				keyObj++;
				let SQL = "DELETE FROM "+table;
				
				let where = delete_tables[table];
				
				if(where){
					SQL += " WHERE "+where;
				}
				this.db.Query(SQL, show_sql).then((result) => {
					if(result === false){
						log.Fatal(this.db.last_error, 0, 1);
						resolve(false);
					}else{
						if(keyObj == countObj){
							resolve(true);
						}
					}
				});
			}
		});
	}

	formatField(type, value)
	{
		switch(type){
			case 'date':
				if(value instanceof Date){
					value = value.getFullYear()+'-'+getUtils().padZeroLeft(value.getMonth()+1)+'-'+getUtils().padZeroLeft(value.getDate());
				}
				break;
			case 'datetime':
				if(value instanceof Date){
					value = value.getFullYear()+'-'+getUtils().padZeroLeft(value.getMonth()+1)+'-'+getUtils().padZeroLeft(value.getDate())+' '+getUtils().padZeroLeft(value.getHours())+':'+getUtils().padZeroLeft(value.getMinutes())+':'+getUtils().padZeroLeft(value.getSeconds());
				}
				break;
			case 'json':
				value = JSON.stringify(value);
				break;
			case 'int':
				value = (!isNaN(value)) ? parseInt(value) : 0;
				break;
			case 'bool':
				value = value ? 1 : 0;
				break;
			default:
				break;
		}
		return value;
	}

	resetOptions()
	{
		this.fields = '*';
		this.inner_join = [];
		this.where = '';
		this.order_by = '';
		this.limit = '';
		this.group_by = '';

		return this;
	}
}
module.exports = HelperDataBase;