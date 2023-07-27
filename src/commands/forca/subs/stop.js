const BeanForca = getUtils().requireAgain(process.cwd()+'/src/models/Forca.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('stop')
            .setDescription('Stop a current match!'),
    async execute(interaction) {
        let bean = new BeanForca();
        bean.user_id = interaction.user.id;
        await bean.selectActive();

        if(!bean.id){
            await interaction.reply({
                content: 'You don\'t have a current game to stop!',
                ephemeral: true
            });
            return false;
        }

        bean.status = 'done';
        await bean.save();

        await interaction.reply({
            content: 'Game stopped!',
            ephemeral: true
        });
        return true;
    },
}