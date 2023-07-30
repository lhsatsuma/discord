const BeanBase = require('../utils/Bean.js');
class BeanVelha extends BeanBase
{
	constructor()
	{
		super();

		this.dbh.table = 'tic_tac_toe';
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
            user_id: {
                type: 'varchar',
            },
            against: {
                type: 'varchar',
            },
            level: {
                type: 'varchar',
            },
            status: {
                type: 'varchar',
            },
            win: {
                type: 'varchar',
            },
            played_spots: {
                type: 'json',
                default: [null,null,null,null,null,null,null,null,null],
            },
        };
        this.wins_spots = [
            //Linhas
            [0, 1, 2],
            [3, 4, 5],
            [6, 7, 8],
            //Retas
            [0, 3, 6],
            [1, 4, 7],
            [2, 5, 8],
            //Diagonais
            [0, 4, 8],
            [2, 4, 6],
        ];
        this.almost_wins_spots = [
            //Linhas
            {0:0, 1:0, 2:999},
            {3:0, 4:0, 5: 999},
            {6:0, 7:0, 8: 999},
            {0:0, 1: 999, 2:0},
            {3:0, 4: 999, 5:0},
            {6:0, 7: 999, 8:0},
            {0: 999, 1:0, 2:0},
            {3: 999, 4:0, 5:0},
            {6: 999, 7:0, 8:0},

            //Retas
            {0:0, 3:0, 6: 999},
            {1:0, 4:0, 7: 999},
            {2:0, 5:0, 8: 999},
            {0:0, 3: 999, 6:0},
            {1:0, 4: 999, 7:0},
            {2:0, 5: 999, 8:0},
            {0: 999, 3:0, 6:0},
            {1: 999, 4:0, 7:0},
            {2: 999, 5:0, 8:0},

            //Diagonais
            {0:0, 4:0, 8: 999},
            {2:0, 4:0, 6: 999},
            {0:0, 4: 999, 8:0},
            {2:0, 4: 999, 6:0},
            {0: 999, 4:0, 8:0},
            {2: 999, 4:0, 6:0}
        ]
        this.options = [0,1,2,3,4,5,6,7,8];
        this.mountDefaultFieldsObj();
	}
    selectActive()
    {
        this.mountDefaultFieldsObj();
        return this.select("user_id = '"+this.user_id+"' AND status <> 'done'");
    }
    mountSpots()
	{
		let spots = [];
        
		this.played_spots.forEach((played, spot) => {
			if(!!this.user_id && played == this.user_id){
				spots[spot] = ':negative_squared_cross_mark:';
			}else if(!!this.against && played == this.against){
				spots[spot] = ':brown_circle:';
			}else{
				spots[spot] = ':'+getUtils().numberToStr(spot)+':';
			}
		});

		
		let str = '';
		str += `${spots[0]}  |  ${spots[1]}  |  ${spots[2]}\n\n`+
               `${spots[3]}  |  ${spots[4]}  |  ${spots[5]}\n\n`+
               `${spots[6]}  |  ${spots[7]}  |  ${spots[8]}`;
		
		return str;
	}

    checkWin()
    {

        if(this.checkWinSpots(this.against)){
            return this.against;
        }else if(this.checkWinSpots(this.user_id)){
            return this.user_id;
        }else if(this.checkDrawSpots()){
            return 'draw';
        }

        //No one wins yet
        return '';
    }

    checkWinSpots(player_id)
    {
        let winned = false;
        this.wins_spots.forEach(spots => {
            let count = 0;
            let count_to_win = spots.length;
            spots.forEach(spot => {
                if(this.played_spots[spot] == player_id){
                    count++;
                }
            });
            if(count_to_win == count){
                winned = true;
                return;
            }
        });
        return winned;
    }

    checkAlmostWinSpots(player_id)
    {
        let winned = false;
        this.almost_wins_spots.forEach(spots => {
            let count = 0;
            let count_to_win = 0;
            let win_spot = null;
            for(let spot in spots){
                count_to_win++;
                if(spots[spot] == 999){
                    win_spot = spot;
                }
                if(this.played_spots[spot] == player_id || spots[spot] == 999){
                    count++;
                }
            }
            if(count == count_to_win) {
                winned = win_spot;
                return;
            }
        });
        return winned;
    }

    checkDrawSpots()
    {
        if(this.played_spots[0]
        && this.played_spots[1]
        && this.played_spots[2]
        && this.played_spots[3]
        && this.played_spots[4]
        && this.played_spots[5]
        && this.played_spots[6]
        && this.played_spots[7]
        && this.played_spots[8]
        ){
            return true;
        }else{
            return false;
        }
    }

    randBot()
    {
        const options_available = this.getAvailables();
        let key_rand = null;
        if(this.level == 'easy'){
            //random
            key_rand = getUtils().array_rand(options_available);
        }else if(this.level == 'medium'){
            //Check if player will win in next round
            key_rand = this.checkAlmostWinSpots(this.user_id);
        }else if(this.level == 'hard'){
            //Check if bot can win in this round
            let key_rand_check = this.checkAlmostWinSpots(this.against);
            if(key_rand_check !== false){
                key_rand = key_rand_check;
            }else{
                //Checar se o cara está prestes a ganhar
                key_rand = this.checkAlmostWinSpots(this.user_id);
            }
        }
        if(typeof options_available[key_rand] == 'undefined'){
            //Se der algum erro acima, pega um spot random
            key_rand = getUtils().array_rand(options_available);
        }

        return options_available[key_rand];
    }

    getAvailables()
    {
        let options_available = {};
        this.options.forEach(option => {
            if(!this.played_spots[option]) {
                options_available[option] = option;
            }
        });
        return options_available;
    }

    markBot(spot)
    {
        if(!!this.played_spots[spot]){
            return false;
        }
        this.played_spots[spot] = this.against;

        return true;
    }
}

module.exports = BeanVelha;