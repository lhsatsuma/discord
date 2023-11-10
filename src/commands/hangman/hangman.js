const { SlashCommandBuilder} = require('discord.js');

const returned = client.create(
    new SlashCommandBuilder()
        .setName(translate('hangman', 'CMD_HANGMAN'))
        .setDescription(translate('hangman', 'CMD_HANGMAN_DESCRIPTION')),
    'hangman'
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands
};