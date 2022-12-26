const { SlashCommandBuilder, EmbedBuilder} = require('discord.js');

module.exports = {
    data: new SlashCommandBuilder()
        .setName('status')
        .setDescription('[ADMIN] Status of System BOT'),
    cooldown: 3,
    async execute(interaction) {

        const ProcessRunning = require('../../Process/ProcessRunning.js');
        let running = new ProcessRunning();
        let embedMsg = new EmbedBuilder()
            .setColor(getColor('GREEN'))
            .setTitle('Status '+bot_cfg.discordOptions.name)
            .setDescription(running.mount_str_check_run())
            .setThumbnail('https://cdn.discordapp.com/icons/710607431410909185/e1e9494ab23f245cf12619a65518738c.jpg?size=512');

        await interaction.reply({
            embeds: [embedMsg]
        });
    },
};