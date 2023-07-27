const BeanBase = require('../utils/Bean.js');
class Servers extends BeanBase
{
    constructor()
    {
        super();

        this.dbh.table = 'servers';
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
            active: {
                type: 'bool',
            },
            name: {
                type: 'varchar',
            },
            channels_birthday: {
                type: 'json',
                default: [],
            },
        };
    }

    selectServer()
    {
        return this.select(`server = '${this.server}'`);
    }

    selectActive() {
        return this.select(`server = '${this.server}' AND active = 1`);
    }
}

module.exports = Servers;