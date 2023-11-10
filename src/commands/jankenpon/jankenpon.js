const { SlashCommandBuilder} = require('discord.js');


const returned = client.create(
    new SlashCommandBuilder()
    .setName(translate('jankenpon', 'CMD_JANKENPON'))
    .setDescription(translate('jankenpon', 'CMD_JANKENPON_DESCRIPTION')),
    'jankenpon'
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands
};