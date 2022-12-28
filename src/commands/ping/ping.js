const { SlashCommandBuilder} = require('discord.js');

const returned = client.create(
	new SlashCommandBuilder()
		.setName('ping')
		.setDescription('Replies with Pong!')
);

module.exports = {
	data: returned.data,
	subcommands: returned.subcommands,
	cooldown: 2,
	async execute(interaction) {
		await interaction.reply('Pong!');
	},
};