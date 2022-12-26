const { SlashCommandBuilder, EmbedBuilder,PermissionFlagsBits} = require('discord.js');

module.exports = {
    data: new SlashCommandBuilder()
        .setName('status')
        .setDescription('[ADMIN] Status of System BOT')
        .setDefaultMemberPermissions(PermissionFlagsBits.Administrator),
    cooldown: 3,
    async execute(interaction) {

        const ProcessRunning = require('../../Process/ProcessRunning.js');
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