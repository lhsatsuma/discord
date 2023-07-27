const { SlashCommandBuilder} = require('discord.js');

const returned = client.create(
    new SlashCommandBuilder()
        .setName('forca')
        .setDescription('Plays a forca game!')
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    cooldown: 5,
    async execute(interaction) {
        await interaction.reply('Choose a subcommand to execute.');
    },
};