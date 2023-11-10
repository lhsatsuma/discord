const { SlashCommandBuilder} = require('discord.js');

const returned = client.create(
    new SlashCommandBuilder()
        .setName(translate('ttt', 'CMD_TTT'))
        .setDescription(translate('ttt', 'CMD_TTT_DESCRIPTION')),
    'ttt'
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands
};