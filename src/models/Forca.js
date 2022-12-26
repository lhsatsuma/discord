const BeanBase = require('../Bean.js');
class BeanForca extends BeanBase
{
	constructor()
	{
		super();

		this.dbh.table = 'forca';
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
            user_id: {
                type: 'varchar',
            },
            last_msg_id: {
                type: 'varchar',
            },
            status: {
                type: 'varchar',
            },
            palavra: {
                type: 'varchar'
            },
            win: {
                type: 'int',
            },
            letras: {
                type: 'serialize',
            },
            guessed: {
                type: 'serialize',
            },
            dicas: {
                type: 'serialize',
            },
        };
	}
}

module.exports = BeanForca;