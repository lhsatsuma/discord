const { SlashCommandBuilder, PermissionFlagsBits, EmbedBuilder} = require('discord.js');

const returned = client.create(
    new SlashCommandBuilder()
        .setName(translate('channelinfo', 'CMD_CHANNELINFO'))
        .setDescription(translate('channelinfo', 'CMD_CHANNELINFO_DESCRIPTION'))
        .setDefaultMemberPermissions(PermissionFlagsBits.Administrator)
);

module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    cooldown: 2,
    async execute(interaction) {

        let embed = new EmbedBuilder()
            .setColor(getUtils().getColor('GREEN'))
            .setAuthor(client.author)
            .setTitle(translate('channelinfo', 'CMD_CHANNELINFO', interaction.channelId))
            .setDescription(description)
            .setFields([
                {
                    name: 'Guild ID',
                    value: interaction.guildId,
                    inline: true
                },
                {
                    name: 'Channel',
                    value: interaction.channelId,
                    inline: true
                },
                {
                    name: 'Author',
                    value: interaction.user.id,
                    inline: true
                },
            ])
            .setThumbnail(bot_cfg.BOT_ICON);

        await interaction.reply({
            embeds: [embed],
            ephemeral: true,
        });
    },
};