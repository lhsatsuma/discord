class utils
{
	randomInt (min, max) { // min and max included
		return Math.floor(Math.random() * (max - min + 1) + min);
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
					.setDescription("Last Update: "+dateNow.toLocaleString('pt-BR'))
					.setTimestamp();
				if(this.msgHeartbeat){
					try{
						await this.msgHeartbeat.message.edit({ embeds: [exampleEmbed] });
						client.user.setActivity({
							name: bot_cfg.BOT_DESCRIPTION,
						});
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

	channelSuperAdmin = async (compare) => {
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

	memoryUsage()
	{
		return {
			total: (process.memoryUsage().rss / 1024 / 1024).toFixed(2)+'MB',
			used: ((process.memoryUsage().heapUsed + process.memoryUsage().arrayBuffers + process.memoryUsage().external) / 1024 / 1024).toFixed(2)+'MB',
		}
	}
}

const instance = new utils();
export default instance;