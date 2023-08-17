const { SlashCommandBuilder} = require('discord.js');


const returned = client.create(
    new SlashCommandBuilder()
        .setName('memes')
        .setDescription('Memes of members!')
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands
};