const BeanBase = require('../utils/Bean.js');
class BeanJokenpo extends BeanBase
{
	constructor()
	{
		super();
		this.dbh.table = 'jokenpo';
        this.fields = {
            id: {
                type: 'id',
                default: null,
            },
            date_entered: {
                type: 'datetime',
                default: null,
            },
            date_modified: {
                type: 'datetime',
                default: null,
            },
            user_id: {
                type: 'varchar',
                default: null,
            },
            played_rock: {
                type: 'int',
                default: 0,
            },
            played_scissors: {
                type: 'int',
                default: 0,
            },
            played_paper: {
                type: 'int',
                default: 0,
            },
            win_rock: {
                type: 'int',
                default: 0,
            },
            win_scissors: {
                type: 'int',
                default: 0,
            },
            win_paper: {
                type: 'int',
                default: 0,
            },
            lose_rock: {
                type: 'int',
                default: 0,
            },
            lose_scissors: {
                type: 'int',
                default: 0,
            },
            lose_paper: {
                type: 'int',
                default: 0,
            },
            draw_rock: {
                type: 'int',
                default: 0,
            },
            draw_scissors: {
                type: 'int',
                default: 0,
            },
            draw_paper: {
                type: 'int',
                default: 0,
            },
        };
        this.mountDefaultFieldsObj();
        this.stats_play = {
            'rock': {
                'perc': {
                    'total': 0,
                    'win': 0,
                    'lose': 0,
                    'draw': 0,
                },
            },
            'paper': {
                'perc': {
                    'total': 0,
                    'win': 0,
                    'lose': 0,
                    'draw': 0,
                },
            },
            'scissors': {
                'perc': {
                    'total': 0,
                    'win': 0,
                    'lose': 0,
                    'draw': 0,
                },
            },
        };
        this.stats = {
            'win': {
                'total': 0,
                'perc': 0,
            },
            'lose': {
                'total': 0,
                'perc': 0,
            },
            'draw': {
                'total': 0,
                'perc': 0,
            },
        };
	}

    calc_total_played()
	{
		this.total_played = 0;
		let options = ['rock', 'paper', 'scissors'];
		options.forEach((option) =>{
            let played_card = 'played_'+option;
			this.total_played += this[played_card];
        });
	}

    getStats()
	{
		this.calc_total_played();
		for(var type in this.stats){
			this.stats[type]['total'] = 0;
			this.stats[type]['perc'] = 0;
			
			let paper = type+'_paper';
			let rock = type+'_rock';
			let scissors = type+'_scissors';
			this.stats[type]['total'] += this[paper];
			this.stats[type]['total'] += this[rock];
			this.stats[type]['total'] += this[scissors];
			
			if(this.stats[type]['total'] > 0){
				this.stats[type]['perc'] = parseInt(this.stats[type]['total'] * 100);
				this.stats[type]['perc'] = parseFloat(this.stats[type]['perc'] / this.total_played).toFixed(2);
			}
		}
	}

    getStatsPlay()
	{
		this.calc_total_played();

        for(var type in this.stats_play){
			this.stats_play[type]['perc']['total'] = 0;
			this.stats_play[type]['perc']['win'] = 0;
			this.stats_play[type]['perc']['lose'] = 0;
			this.stats_play[type]['perc']['draw'] = 0;
			
			let win = 'win_'+type;
			let lose = 'lose_'+type;
			let draw = 'draw_'+type;
			let played_card = 'played_'+type;
            
			if(this[played_card] > 0){
				this.stats_play[type]['perc']['total'] = parseInt(this[played_card] * 100);
				this.stats_play[type]['perc']['total'] = parseFloat(this.stats_play[type]['perc']['total'] / this.total_played).toFixed(2);
				this.stats_play[type]['perc']['win'] = parseInt(this[win] * 100);
				this.stats_play[type]['perc']['win'] = parseFloat(this.stats_play[type]['perc']['win'] / this[played_card]).toFixed(2);
				this.stats_play[type]['perc']['lose'] = parseInt(this[lose] * 100);
				this.stats_play[type]['perc']['lose'] = parseFloat(this.stats_play[type]['perc']['lose'] / this[played_card]).toFixed(2);
				this.stats_play[type]['perc']['draw'] = parseInt(this[draw] * 100);
				this.stats_play[type]['perc']['draw'] = parseFloat(this.stats_play[type]['perc']['draw'] / this[played_card]).toFixed(2);
			}else{
				this.stats_play[type]['perc']['total'] = 0;
			}
		}
	}
    async resetScore()
	{
		await this.select();
		this.played_rock = 0;
		this.played_paper = 0;
		this.played_scissors = 0;
		this.win_rock = 0;
		this.win_paper = 0;
		this.win_scissors = 0;
		this.lose_rock = 0;
		this.lose_paper = 0;
		this.lose_scissors = 0;
		this.draw_rock = 0;
		this.draw_paper = 0;
		this.draw_scissors = 0;
		this.save();
	}

    async plusWin(card)
	{
		await this.select();
		let played_card = 'played_'+card;
		let win_card = 'win_'+card;
		this[played_card]++;
		this[win_card]++;
		this.save();
	}
	
	async plusLose(card)
	{
		await this.select();
		let played_card = 'played_'+card;
		let lose_card = 'lose_'+card;
		this[played_card]++;
		this[lose_card]++;
		this.save();
	}
	
	async plusDraw(card)
	{
		await this.select();
		let played_card = 'played_'+card;
		let draw_card = 'draw_'+card;
		this[played_card]++;
		this[draw_card]++;
		this.save();
	}
}

module.exports = BeanJokenpo;