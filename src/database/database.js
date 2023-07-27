class database
{
	constructor(origem)
	{
		this.host = bot_cfg.DB_HOST;
		this.host_user = bot_cfg.DB_USER;
		this.host_pwd = bot_cfg.DB_PASSWORD;
		this.db_name = bot_cfg.DB_NAME;
		this.db_port = bot_cfg.DB_PORT;
		this.origem = origem;
		this.last_error = '';
	}
	TestConnection()
	{
		return new Promise((resolve) => {
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
			'database': this.db_name,
		};
	}
}

module.exports = database;