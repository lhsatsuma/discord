const { SlashCommandBuilder, PermissionFlagsBits, EmbedBuilder} = require('discord.js');

const returned = client.create(
    new SlashCommandBuilder()
        .setName('channelinfo')
        .setDescription('[ADMIN] Get info of current channel!')
        .setDefaultMemberPermissions(PermissionFlagsBits.Administrator)
);

module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    cooldown: 2,
    async execute(interaction) {
        let description = `**CHANNEL INFO**
        Server: ${interaction.guild.name} [#${interaction.guild.id}]
        Channel: ${interaction.channel.name} [#${interaction.channel.id}]
        Author: ${interaction.user.username} [#${interaction.user.id}]`;

        let embed = new EmbedBuilder()
            .setColor(getColor('GREEN'))
            .setAuthor(client.author)
            .setTitle('Status '+bot_cfg.discordOptions.name)
            .setDescription(description)
            .setThumbnail(bot_cfg.discordOptions.icon);

        await interaction.reply({
            embeds: [embed],
            ephemeral: true,
        });
    },
};