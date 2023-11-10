const { SlashCommandBuilder, PermissionFlagsBits} = require('discord.js');


const returned = client.create(
    new SlashCommandBuilder()
        .setName(translate('superadmin', 'CMD_SUPERADMIN'))
        .setDescription(translate('superadmin', 'CMD_SUPERADMIN_DESCRIPTION'))
        .setDefaultMemberPermissions(PermissionFlagsBits.Administrator),
    'superadmin'
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands
};