global.colorsSet = {
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

global.getColor = function(color) {
	
	if(typeof colorsSet[color] == 'undefined'){
		return color;
	}
	return colorsSet[color];
}

global.getRandColor = function() {
	let keys = Object.keys(colorsSet);
	
	return colorsSet[keys[ keys.length * Math.random() << 0]];
}


global.array_rand = function(array) {
	let keys = Object.keys(array);

	return array[keys[keys.length * Math.random() << 0]];
}
global.create_guid = function() {
  return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
    var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
    return v.toString(16);
  });
}
global.unserialize = function(serializedJavascript){
  return eval('(' + serializedJavascript + ')');
}

global.randomInt = function (min, max) { // min and max included 
	return Math.floor(Math.random() * (max - min + 1) + min);
}

global.adicionaZero = function(numero)
{
    if (numero <= 9) 
        return "0" + numero;
    else
        return numero; 
}

global.fileExists = function(path)
{
	try{
		return fs.existsSync(path);

	}catch(err){
		return false;
	}
}

global.requireAgain = function(path)
{
	delete require.cache[require.resolve(path)]
	return require(path);
}

global.sendHeartbeat = async () => {
	if(parseInt(global.bot_cfg.heartbeat) > 0 && !!global.client.log && global.super_admin_channel){
		if(global.last_message_heartbeat){
			await global.last_message_heartbeat.delete();
		}
		let dateNow = new Date();
		const { EmbedBuilder} = require("discord.js");
		const exampleEmbed = new EmbedBuilder()
			.setColor('#0099ff')
			.setTitle("Sending a heartbeat! I'm still alive!!!")
			.setAuthor(client.author)
			.setThumbnail(global.super_admin_channel.guild.iconURL())
			.setDescription("Data: "+dateNow.toLocaleString('pt-BR'));
		global.last_message_heartbeat = await global.super_admin_channel.send({ embeds: [exampleEmbed] });

		setTimeout(async () => {
			await sendHeartbeat();
		}, global.bot_cfg.heartbeat * 1000);
	}
}

global.sleep = (ms) => {
	return new Promise((resolve) => {
	  setTimeout(resolve, ms);
	});
}


const { getEmoji, getShortcode } = require("discord-emoji-converter");
global.strToEmoji = (str) => {
	return getEmoji(str);
}
global.emojiToStr = (emoji) => {
	return getShortcode(emoji);
}

global.strToNumber = (str) => {
	const strs = {'zero': 0, 'one':1, 'two': 2, 'three': 3, 'four': 4, 'five': 5, 'six': 6, 'seven': 7, 'eight': 8, 'nine': 9};
	return strs[str];
}

global.numberToStr = (str) => {
	const strs = {0: 'zero', 1:'one', 2:'two', 3:'three', 4:'four', 5:'five', 6:'six', 7:'seven', 8:'eight', 9:'nine'};
	return strs[str];
}

global.reacts = async (message, reacts) => {
	return new Promise((resolve, reject) => {
		reacts.forEach((emoji, idx) => {
			message.react(emoji).then(() => {
				if(idx == reacts.length-1){
					resolve(true);
				}
			});
		});
	});
}