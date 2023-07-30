const BeanVelha = getUtils().requireAgain(process.cwd()+'/src/models/Ttt.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('stop')
            .setDescription('Stop a current match!'),
    async execute(interaction) {
        let bean = new BeanVelha();
        bean.user_id = interaction.user.id;
        bean.server = interaction.guildId;
        await bean.selectActive();

        if(!bean.id){
            await interaction.reply({
                content: 'No running game found!',
                ephemeral: true
            });
            return false;
        }
        bean.status = 'done';
        await bean.save();

        await interaction.reply('Stopped running game!');
    },
}