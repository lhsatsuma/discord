const { SlashCommandBuilder, EmbedBuilder } = require('discord.js');
const returned = client.create(
    new SlashCommandBuilder()
        .setName('sorteio')
        .setDescription('Sorteio de um número!')
        .addIntegerOption(option =>
            option
                .setName('numero_min')
                .setDescription('Número mínimo para o sorteio')
                .setRequired(true)
                .setMinValue(1)
                .setMaxValue(9999999))
        .addIntegerOption(option =>
            option
                .setName('numero_max')
                .setDescription('Número máximo para o sorteio')
                .setRequired(true)
                .setMinValue(1)
                .setMaxValue(9999999))
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    cooldown: 2,
    async execute(interaction) {
        let min = interaction.options.getInteger('numero_min');
        let max = interaction.options.getInteger('numero_max');
        if (max < min) {
            await interaction.reply({
                content: 'O número máximo não pode ser menor que o número mínimo!',
                ephemeral: true
            });
            return false;
        }

        let rand = getUtils().randomInt(min, max);
        let embedMsg = new EmbedBuilder()
        .setTitle(interaction.user.username+' fez um sorteio de '+min+' até '+max+'!')
        .setDescription('*O número sorteado foi*: **'+rand+'**')
        .setColor(getUtils().getColor('GREEN'));
        await interaction.reply({
            embeds: [embedMsg]
        });
    }
}