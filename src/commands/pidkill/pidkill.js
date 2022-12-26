const { SlashCommandBuilder, EmbedBuilder} = require('discord.js');
const ProcessRunning = require("../../Process/ProcessRunning");

module.exports = {
    data: new SlashCommandBuilder()
        .setName('pidkill')
        .setDescription('[ADMIN] Kill PID BOT'),
    cooldown: 3,
    async execute(interaction) {
        const ProcessRunning = require('../../Process/ProcessRunning.js');
        let running = new ProcessRunning();


        const channel = client.channels.cache.find(channel => channel.id === interaction.channelId);

        let embedError = new EmbedBuilder()
            .setColor(getColor('RED'))
            .setAuthor({name: bot_cfg.discordOptions.name, iconURL: channel.guild.iconURL()})
            .setTitle('R.I.P BOT '+new Date().toLocaleString('pt-BR'))
            .setDescription('Foi bom enquanto durou, vou sentir sua falta!\n Nos vemos mais tarde... :wave: :wave:');
        await interaction.reply({
            embeds: [embedError]
        });

        client.log.Info(interaction.user.username+' used pidkill!');

        await running.exit();
    },
};