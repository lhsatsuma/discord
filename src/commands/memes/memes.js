const { SlashCommandBuilder} = require('discord.js');


const returned = client.create(
    new SlashCommandBuilder()
        .setName(translate('memes', 'CMD_MEMES'))
        .setDescription(translate('memes', 'CMD_MEMES_DESCRIPTION')),
    'memes'
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands
};