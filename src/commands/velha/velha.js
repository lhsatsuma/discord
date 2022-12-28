const { SlashCommandBuilder, PermissionFlagsBits} = require('discord.js');

const returned = client.create(
    new SlashCommandBuilder()
        .setName('velha')
        .setDescription('Plays a tic-tac-toe game')
        .setDefaultMemberPermissions(PermissionFlagsBits.Administrator)
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    inactive: true,
    cooldown: 5,
    async execute(interaction) {
        await interaction.reply('Choose a subcommand to execute.');
    },
};