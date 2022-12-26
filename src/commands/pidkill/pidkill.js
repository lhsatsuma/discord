const { SlashCommandBuilder, EmbedBuilder, PermissionFlagsBits} = require('discord.js');
const ProcessRunning  = require('../../Process/ProcessRunning.js');
module.exports = {
    data: new SlashCommandBuilder()
        .setName('pidkill')
        .setDescription('[ADMIN] Kill PID BOT')
        .setDefaultMemberPermissions(PermissionFlagsBits.Administrator),
    cooldown: 3,
    async execute(interaction) {
        if(interaction.channelId !== bot_cfg.admin_channel_id){
            await interaction.reply({
                content: 'Not allowed to execute this command here.',
                ephemeral: true,
            });
            return false;
        }
        let running = new ProcessRunning();

        let embedError = new EmbedBuilder()
            .setColor(getColor('RED'))
            .setAuthor(client.author)
            .setTitle('R.I.P BOT '+new Date().toLocaleString('pt-BR'))
            .setDescription('Foi bom enquanto durou, vou sentir sua falta!\n Nos vemos mais tarde... :wave: :wave:');
        await interaction.reply({
            embeds: [embedError]
        });

        client.log.Info(interaction.user.username+' used pidkill!');

        await running.exit();
    },
};