class HelperDataBase
{
	constructor(db)
	{
		this.db = db;
		this.table = '';
		this.fields = '*';
		this.inner_join = {};
		this.where = '';
		this.order_by = '';
		this.limit = '';
		this.group_by = '';
	}
	
	Select(show_sql = false){

		return new Promise((resolve, reject) => {
			let SQL = "SELECT "+this.fields+" FROM "+this.table;
			
			for(var key in this.inner_join){
				let args = this.inner_join[key];
				SQL += "\n" + args['type'] + " " + args['table'] + " ON " + args['on'];
			}

			if (this.where) {
				SQL += "\n WHERE " + this.where;
			}

			if (this.order_by) {
				SQL += "\n ORDER BY " + this.order_by;
			}

			if (this.group_by) {
				SQL += "\n GROUP BY " + this.group_by;
			}

			if (this.limit) {
				SQL += "\n LIMIT " + this.limit;
			}
			let query = this.db.Query(SQL, show_sql).then((result) => {
				if(result === false){
					client.log.Fatal(this.db.last_error, 0, 1);
					resolve(false);
				}else{
					resolve(result);
				}
			});
		});
	}

	Insert(insert_tables = {}, show_sql = false)
	{
		return new Promise((resolve, reject) => {
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
					columns += c_fields+"\n"+field;
					if(val !== null){
						val = "'"+val+"'";
					}
					values += c_fields+""+val+"\n";
					c_fields = ',';	
				}
				SQL += columns;
				SQL += ") VALUES (";
				SQL += values;
				SQL += ")";
				let query = this.db.Query(SQL, show_sql).then((result) => {
					if(result === false){
						client.log.Fatal(this.db.last_error, 0, 1);
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
		return new Promise((resolve, reject) => {
			var countObj = 0;
			for(var table in update_tables){
				countObj++;
			}
			var keyObj = 0;
			for(var table in update_tables){
				keyObj++;
				let SQL = "UPDATE "+table+" SET";
				let columns = '';
				let values = '';
				let c_fields = '';
				let args = update_tables[table];
				for(var field in args['fields']){
					let val = args['fields'][field];
					if(val !== null){
						val = "'"+val+"'";
					}
					columns += c_fields+"\n"+field+" = "+val+"";
					c_fields = ",";
				}
				
				SQL += columns;
				if (args['where']) {
					SQL += "\nWHERE "+args['where'];
				}
				let query = this.db.Query(SQL, show_sql).then((result) => {
					if(result === false){
						client.log.Fatal(this.db.last_error, 0, 1);
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
		return new Promise((resolve, reject) => {
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
				let query = this.db.Query(SQL, show_sql).then((result) => {
					if(result === false){
						client.log.Fatal(this.db.last_error, 0, 1);
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
			case 'value':
				if(value instanceof Date){
					value = value.getFullYear()+'-'+adicionaZero(value.getMonth()+1)+'-'+adicionaZero(value.getDate());
				}
				break;
			case 'datetime':
				if(value instanceof Date){
					value = value.getFullYear()+'-'+adicionaZero(value.getMonth()+1)+'-'+adicionaZero(value.getDate())+' '+adicionaZero(value.getHours())+':'+adicionaZero(value.getMinutes())+':'+adicionaZero(value.getSeconds());
				}
				break;
			case 'serialize':
				if(typeof value == 'object' || typeof value == 'array'){
					const {serialize, unserialize} = require('php-serialize');
					value = serialize(value);
				}
				break;
			case 'int':
				if(typeof value !== 'int'){
					value = parseInt(value);
				}
				break;
			default:
				break;
		}
		return value;
	}
}
module.exports = HelperDataBase;