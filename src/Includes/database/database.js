export default class database
{
	constructor()
	{
		this.host = process.env.DB_HOST;
		this.host_user = process.env.DB_USER;
		this.host_pwd = process.env.DB_PASSWORD;
		this.db_name = process.env.DB_NAME;
		this.db_port = process.env.DB_PORT;
		this.last_error = '';
	}
	testConnection()
	{
		return new Promise((resolve) => {
			this.Connect().then(async (return_conn) => {
				await this.CloseConn();
				resolve(return_conn);
			});
		});
	}
	
	getInfo()
	{
		return {
			host: this.host,
			host_user: this.host_user,
			host_pwd: this.host_pwd,
			database: this.db_name,
		};
	}
}