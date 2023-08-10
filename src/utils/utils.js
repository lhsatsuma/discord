var globalClassUtils = null;

const { getEmoji, getShortcode } = require("discord-emoji-converter");
const {EmbedBuilder} = require("discord.js");
var moment = require('moment');
global.getUtils = () => {
	if(globalClassUtils == null){
		globalClassUtils = new Utils();
	}

	return globalClassUtils;
}
class Utils{
	colorsSet = {
		DEFAULT: 0,
		AQUA: 1752220,
		GREEN: 3066993,
		BLUE: 3447003,
		PURPLE: 10181046,
		GOLD: 15844367,
		ORANGE: 15105570,
		RED: 15158332,
		GREY: 9807270,
		DARKER_GREY: 8359053,
		NAVY: 3426654,
		DARK_AQUA: 1146986,
		DARK_GREEN: 2067276,
		DARK_BLUE: 2123412,
		DARK_PURPLE: 7419530,
		DARK_GOLD: 12745742,
		DARK_ORANGE: 11027200,
		DARK_RED: 10038562,
		DARK_GREY: 9936031,
		LIGHT_GREY: 12370112,
		DARK_NAVY: 2899536,
		LUMINOUS_VIVID_PINK: 16580705,
		DARK_VIVID_PINK: 12320855
	}
	heartbeatInterval = null;

	getColor(color) {

		if(typeof this.colorsSet[color] == 'undefined'){
			return color;
		}
		return this.colorsSet[color];
	}

	getRandColor() {
		let keys = Object.keys(this.colorsSet);

		return this.colorsSet[keys[ keys.length * Math.random() << 0]];
	}


	array_rand(array) {
		let keys = Object.keys(array);

		return array[keys[keys.length * Math.random() << 0]];
	}
	create_guid() {
		return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
			var r = Math.random() * 16 | 0, v = c === 'x' ? r : (r & 0x3 | 0x8);
			return v.toString(16);
		});
	}

	randomInt (min, max) { // min and max included
		return Math.floor(Math.random() * (max - min + 1) + min);
	}

	padZeroLeft(number)
	{
		if (number <= 9)
			return "0" + number;
		else
			return number;
	}

	fileExists(path)
	{
		try{
			return fs.existsSync(path);

		}catch(err){
			return false;
		}
	}

	requireAgain(path)
	{
		delete require.cache[require.resolve(path)]
		return require(path);
	}
	sendHeartbeat = async () => {
		if(!!this.heartbeatInterval) {
			log.Info('Clearing interval of heartbeat');
			clearInterval(this.heartbeatInterval);
			this.msgHeartbeat = null;
		}
		this.heartbeatInterval = setInterval(async () => {
			if(bot_cfg.HEARTBEAT > 0 && client.super_admin_channel){

				//Reset heartbeat to a new message.
				if(this.msgHeartbeat){
					if(moment().format('YYYYMMDD') !== this.msgHeartbeat.date){
						this.msgHeartbeat = null;
					}
				}
				let dateNow = new Date();
				const { EmbedBuilder} = require("discord.js");
				const exampleEmbed = new EmbedBuilder()
					.setColor('#0099ff')
					.setTitle('Sent a heartbeat!')
					.setAuthor(client.author)
					.setThumbnail(client.super_admin_channel.guild.iconURL())
					.setDescription("Last Update: "+dateNow.toLocaleString('pt-BR'));
				if(this.msgHeartbeat){
					try{
						await this.msgHeartbeat.message.edit({ embeds: [exampleEmbed] });
						return true;
					}catch(e){
						log.Error('Error updating heartbeat: ' + e);
					}
				}
				this.msgHeartbeat = {};
				this.msgHeartbeat.date = moment().format('YYYYMMDD');
				this.msgHeartbeat.message = await client.super_admin_channel.send({ embeds: [exampleEmbed] });
			}
		}, bot_cfg.HEARTBEAT * 1000);
	}

	sleep = (ms) => {
		return new Promise((resolve) => {
			setTimeout(resolve, ms);
		});
	}
	strToEmoji = (convert) => {
		if(typeof convert == 'object'){
			let return_array = [];
			convert.forEach(emoji => {
				return_array.push(getEmoji(emoji));
			});
			return return_array;
		}
		return getEmoji(convert);
	}
	emojiToStr = (emoji) => {
		return getShortcode(emoji);
	}

	strToNumber = (str) => {
		const strs = {'zero': 0, 'one':1, 'two': 2, 'three': 3, 'four': 4, 'five': 5, 'six': 6, 'seven': 7, 'eight': 8, 'nine': 9};
		return strs[str];
	}

	numberToStr = (str) => {
		const strs = {0: 'zero', 1:'one', 2:'two', 3:'three', 4:'four', 5:'five', 6:'six', 7:'seven', 8:'eight', 9:'nine'};
		return strs[str];
	}

	reacts = async (message, reacts) => {
		return new Promise((resolve) => {
			reacts.forEach((emoji, idx) => {
				message.react(emoji).then(() => {
					if(idx === reacts.length-1){
						resolve(true);
					}
				});
			});
		});
	}
	validateDate = (date) => {
		if(date.length !== 10){
			return false;
		}
		let date_regex = /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/;
		return date_regex.test(date);
	}

	channelSuperAdmin = (compare) => {
		return bot_cfg.ADMIN_CHANNEL_ID === compare;
	}

	mountEmbedArrays = (data, title, perPage = 10, qtyNewLine = 1) => {
		let embedDescription = '';
		let page = 1;
		let arrayEmbeds = [];
		let arrayCount = 0;
		const newLine = '\n'.repeat(qtyNewLine);

		data.forEach((ipt) => {
			arrayCount++;
			embedDescription += `${ipt}${newLine}`;
			if(arrayCount >= perPage){
				let embedMsg = new EmbedBuilder()
					.setTitle(title)
					.setDescription(embedDescription)
					.setColor(getUtils().getColor('GREEN'));
				arrayEmbeds.push(embedMsg);
				embedDescription = '';
				arrayCount = 0;
				page++;
			}
		});

		if(embedDescription){
			let embedMsg = new EmbedBuilder()
				.setTitle(title)
				.setDescription(embedDescription)
				.setColor(getUtils().getColor('GREEN'));
			arrayEmbeds.push(embedMsg);
		}

		return arrayEmbeds;
	}

	getEnvOverride()
	{
		let path_override = process.cwd()+'/.env.override';
		let env_override = {};
		if(fs.existsSync(path_override)) {
			env_override = JSON.parse(fs.readFileSync(process.cwd() + '/.env.override'));
		}
		return env_override;
	}

	saveEnvOverride(cfg, reload = false)
	{
		fs.writeFileSync(process.cwd()+'/.env.override', JSON.stringify(cfg));
		if(reload){
			log.Info('Reloading config');
			getUtils().requireAgain(process.cwd()+'/src/utils/config.js');
		}
		return true;
	}
}