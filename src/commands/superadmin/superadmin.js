const { SlashCommandBuilder, PermissionFlagsBits} = require('discord.js');


const returned = client.create(
    new SlashCommandBuilder()
        .setName('superadmin')
        .setDescription('[SUPERADMIN] Commands for SuperAdmin')
        .setDefaultMemberPermissions(PermissionFlagsBits.Administrator)
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands
};