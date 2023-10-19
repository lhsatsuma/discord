const BeanBase = require('../utils/Bean.js');
class BeanMemes extends BeanBase
{
	constructor()
	{
		super();

		this.dbh.table = 'memes';
        this.fields = {
            id: {
                type: 'id',
            },
            date_entered: {
                type: 'datetime',
            },
            date_modified: {
                type: 'datetime',
            },
            server: {
                type: 'varchar',
            },
            order_id: {
                type: 'int',
            },
            name: {
                type: 'varchar',
            },
            url: {
                type: 'varchar',
            },
        };
	}
    selectRandom()
    {
        // this.dbh.order_by = 'counter ASC,rand()';
        // return this.select(`server = '${this.server}' AND counter <= COALESCE((SELECT CAST(SUM(counter)/count(id) as UNSIGNED) as media FROM ${this.dbh.table} WHERE server = '${this.server}'), 0)`);
        this.dbh.order_by = 'rand()';
        return this.select(`server = '${this.server}'`);
    }
    searchMeme(search)
    {
        let where = `name LIKE '%${search}%'`;

        if(parseInt(search)){
            where = `order_id = ${search}`;
        }
        return this.select(`server = '${this.server}' AND ${where}`);
    }

    async getList()
    {
        this.dbh.order_by = 'order_id ASC';
        this.dbh.where = `server = '${this.server}'`;
        return await this.dbh.Select();
    }

    async getNextOrder()
    {
        this.dbh.order_by = 'order_id ASC';
        this.dbh.fields = "MAX(COALESCE(order_id, 0))+1 as order_max";
        this.dbh.where = `server = '${this.server}'`;
        this.dbh.limit = 1;
        return await this.dbh.Select();

    }

    async checkExists()
    {
        this.dbh.fields = "id, order_id";
        this.dbh.where = `server = '${this.server}' AND url = '${this.url}'`;
        this.dbh.limit = 1;
        return await this.dbh.Select();
    }

    async save()
    {
        if(!this.order_id) {
            let last_order = await this.getNextOrder();
            this.order_id = last_order[0].order_max;
            if (isNaN(this.order_id) || this.order_id === null) {
                this.order_id = 1;
            }
        }
        return await super.save();
    }
}

module.exports = BeanMemes;