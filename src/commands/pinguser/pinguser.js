const { SlashCommandBuilder} = require('discord.js');
const returned = client.create(
	new SlashCommandBuilder()
		.setName('pinguser')
		.setDescription('Ping user X times!')
		.addUserOption(option =>
			option
				.setName('target')
				.setDescription('The member to ping')
				.setRequired(true))
		.addIntegerOption(option =>
			option
				.setName('times')
				.setDescription('Times to ping')
				.setRequired(true)
				.setMinValue(1)
				.setMaxValue(10))
);

module.exports = {
	data: returned.data,
	subcommands: returned.subcommands,
	cooldown: 10,
	async execute(interaction) {
		const target = interaction.options.getUser('target');
		const times = interaction.options.getInteger('times');
		interaction.reply('Pingando usuario...');
		const channel = client.channels.cache.find(channel => channel.id === interaction.channelId);
		let messageSended = null;
		for(let i=0;i<times;i++){
		 	messageSended = await channel.send('<@'+target.id+'> Você foi pingado!');
			await sleep(2000);
			if(i<times-1) {
				await messageSended.delete();
			}
		}
	},
};