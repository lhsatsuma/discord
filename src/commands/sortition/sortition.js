const { SlashCommandBuilder, EmbedBuilder } = require('discord.js');
const returned = client.create(
    new SlashCommandBuilder()
        .setName(translate('sortition', 'CMD_SORTITION'))
        .setDescription(translate('sortition', 'CMD_SORTITION_DESCRIPTION'))
        .addIntegerOption(option =>
            option
                .setName('min')
                .setDescription(translate('sortition', 'CMD_SORTITION_OPTION_MIN'))
                .setRequired(true)
                .setMinValue(1)
                .setMaxValue(9999999)
        )
        .addIntegerOption(option =>
            option
                .setName('max')
                .setDescription(translate('sortition', 'CMD_SORTITION_OPTION_MAX'))
                .setRequired(true)
                .setMinValue(1)
                .setMaxValue(9999999)
        )
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    cooldown: 2,
    async execute(interaction) {
        let min = interaction.options.getInteger('min');
        let max = interaction.options.getInteger('max');
        if (max < min) {
            await interaction.reply({
                content: translate('sortition', 'CMD_SORTITION_INVALID_MAX'),
                ephemeral: true
            });
            return true;
        }

        let rand = getUtils().randomInt(min, max);
        let embedMsg = new EmbedBuilder()
        .setTitle(translate('sortition', 'CMD_SORTITION_TITLE', interaction.user.username, min, max))
        .setDescription(translate('sortition', 'CMD_SORTITION_SUCCESS', rand))
        .setColor(getUtils().getColor('GREEN'));
        await interaction.reply({
            embeds: [embedMsg]
        });

        return true;
    }
}