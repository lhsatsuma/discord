const { SlashCommandBuilder, EmbedBuilder, PermissionFlagsBits} = require('discord.js');
const ProcessRunning  = require('../utils/ProcessRunning.js');

const returned = client.create(
    new SlashCommandBuilder()
        .setName('pidkill')
        .setDescription('[SUPERADMIN] Kill PID BOT')
        .setDefaultMemberPermissions(PermissionFlagsBits.Administrator)
);

module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    cooldown: 3,
    async execute(interaction) {
        if(!getUtils().channelSuperAdmin(interaction.channel.id)){
            await interaction.reply({
                content: 'Not allowed to execute this command here.',
                ephemeral: true,
            });
            return false;
        }
        let running = new ProcessRunning();

        let embedError = new EmbedBuilder()
            .setColor(getUtils().getColor('RED'))
            .setAuthor(client.author)
            .setTitle('R.I.P BOT '+new Date().toLocaleString('pt-BR'))
            .setDescription('Foi bom enquanto durou, vou sentir sua falta!\n Nos vemos mais tarde... :wave: :wave:');
        await interaction.reply({
            embeds: [embedError]
        });

        log.Info(`${interaction.user.username} [#${interaction.user.id}] on ${interaction.guild.name} [#${interaction.guild.id}] used pidkill!`);

        await running.exit();
    },
};