const { SlashCommandBuilder} = require('discord.js');

const returned = client.create(
    new SlashCommandBuilder()
        .setName(translate('birthday', 'CMD_BIRTHDAY'))
        .setDescription('Birthday notifications!'),
    'birthday'
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands
};