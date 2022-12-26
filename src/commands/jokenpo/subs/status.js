module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('status')
            .setDescription('Your status!'),
    async execute(interaction) {
        await interaction.reply('Working in progress! Sorry');
    },
}