const { SlashCommandBuilder} = require('discord.js');

const returned = client.create(
    new SlashCommandBuilder()
        .setName('ttt')
        .setDescription('Plays a tic-tac-toe game')
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands
};