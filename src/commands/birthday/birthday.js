const { SlashCommandBuilder} = require('discord.js');

const returned = client.create(
    new SlashCommandBuilder()
        .setName('birthday')
        .setDescription('Birthday notifications!')
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands
};