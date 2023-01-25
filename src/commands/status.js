const { SlashCommandBuilder, EmbedBuilder,PermissionFlagsBits} = require('discord.js');
const returned = client.create(
    new SlashCommandBuilder()
        .setName('status')
        .setDescription('[SUPERADMIN] Status of System BOT')
        .setDefaultMemberPermissions(PermissionFlagsBits.Administrator)
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    cooldown: 3,
    async execute(interaction) {
        if(!client.channelSuperAdmin(interaction.channel.id)){
            await interaction.reply({
                content: 'Not allowed to execute this command here.',
                ephemeral: true,
            });
            return false;
        }
        const ProcessRunning = require('../Process/ProcessRunning.js');
        let running = new ProcessRunning();
        let embedMsg = new EmbedBuilder()
            .setColor(getColor('GREEN'))
            .setTitle('Status '+bot_cfg.discordOptions.name)
            .setDescription(running.mount_str_check_run())
            .setThumbnail(bot_cfg.discordOptions.icon);
        await interaction.reply({
            embeds: [embedMsg]
        });
    },
};