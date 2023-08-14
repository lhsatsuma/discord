const { SlashCommandBuilder} = require('discord.js');


const returned = client.create(
    new SlashCommandBuilder()
    .setName('jankenpon')
    .setDescription('Play jankenpon against the bot!')
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands
};