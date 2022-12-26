const BeanBase = require('../Bean.js');
class BeanVelha extends BeanBase
{
	constructor()
	{
		super();

		this.dbh.table = 'jdv';
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
            against: {
                type: 'varchar',
            },
            level: {
                type: 'varchar',
            },
            last_msg_id: {
                type: 'varchar',
            },
            status: {
                type: 'varchar',
            },
            win: {
                type: 'varchar',
            },
            played_spots: {
                type: 'serialize',
                default: [null,null,null,null,null,null,null,null,null],
            },
        };
        this.mountDefaultFieldsObj();
        this.reactions_spots = [
            '1⃣',
            '2⃣',
            // '3⃣',
            // '4⃣',
            // '5⃣',
            // '6⃣',
            // '7⃣',
            // '8⃣',
            // '9⃣'
        ]
	}

    async selectGame()
    {
        this.dbh.where = `last_msg_id = '${this.last_msg_id}'`;

        let result = await this.dbh.Select();
		if(typeof result[0] !== 'undefined'){
			this.mountFieldsObj(result[0]);
		}
		return this;
    }
    mountSpots()
	{
		let spots = [];
        
		this.played_spots.forEach((played, spot) => {
			if(!!this.user_id && played == this.user_id){
				spots[spot] = '❎';
			}else if(!!this.against && played == this.against){
				spots[spot] = '🟤';
			}else{
				spots[spot] = '❓';
			}
		});

		
		let str = '';
		str += spots[0]+'  |  '+spots[1]+'  |  '+spots[2];
		str += "\n\n"+spots[3]+'  |  '+spots[4]+'  |  '+spots[5];
		str += "\n\n"+spots[6]+'  |  '+spots[7]+'  |  '+spots[8];
		
		return str;
	}
}

module.exports = BeanVelha;