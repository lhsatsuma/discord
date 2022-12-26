class DataBase
{
	constructor(origem, params)
	{
		this.host = params['host'];
		this.host_user = params['user'];
		this.host_pwd = params['pass'];
		this.database = params['db_name'];
		this.origem = origem;
		this.last_error = '';
	}
	TestConnection()
	{
		return new Promise((resolve, reject) => {
			this.Connect().then(async (return_conn) => {
				await this.CloseConn();
				resolve(return_conn);
			});
		});
	}
	
	GetInfoCon()
	{
		return {
			'host': this.host,
			'host_user': this.host_user,
			'host_pwd': this.host_pwd,
			'database': this.database,
		};
	}
}

module.exports = DataBase;