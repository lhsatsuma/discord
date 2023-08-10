const { SlashCommandBuilder, PermissionFlagsBits} = require('discord.js');
const returned = client.create(
	new SlashCommandBuilder()
		.setName('pinguser')
		.setDescription(translate('pinguser', 'CMD_PINGUSER'))
		.addUserOption(option =>
			option
				.setName('target')
				.setDescription(translate('pinguser', 'CMD_PINGUSER_OPTION_TARGET'))
				.setRequired(true))
		.addIntegerOption(option =>
			option
				.setName('times')
				.setDescription(translate('pinguser', 'CMD_PINGUSER_OPTION_TIMES'))
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
			content: translate('pinguser', 'CMD_PINGUSER_SUCCESS'),
			ephemeral: true,
		});
		let messageSended = null;
		for(let i=0;i<times;i++){
		 	messageSended = await interaction.channel.send(translate('pinguser', 'CMD_PINGUSER_SUCCESS_USER', target.id));
			await getUtils().sleep(2000);
			if(i<times-1) {
				await messageSended.delete();
			}
		}
	},
};