const { SlashCommandBuilder, PermissionFlagsBits} = require('discord.js');
const returned = client.create(
	new SlashCommandBuilder()
		.setName('pinguser')
		.setDescription('[ADMIN] Ping user X times')
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
		.setDefaultMemberPermissions(PermissionFlagsBits.Administrator)
);

module.exports = {
	data: returned.data,
	subcommands: returned.subcommands,
	cooldown: 30,
	async execute(interaction) {
		const target = interaction.options.getUser('target');
		const times = interaction.options.getInteger('times');
		interaction.reply({
			content: 'Pinging user...',
			ephemeral: true,
		});
		let messageSended = null;
		for(let i=0;i<times;i++){
		 	messageSended = await interaction.channel.send('<@'+target.id+'> You were pinged!');
			await getUtils().sleep(2000);
			if(i<times-1) {
				await messageSended.delete();
			}
		}
	},
};