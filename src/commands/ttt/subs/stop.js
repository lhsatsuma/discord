const BeanVelha = getUtils().requireAgain(process.cwd()+'/src/models/Ttt.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName(translate('ttt', 'CMD_STOP'))
            .setDescription(translate('ttt', 'CMD_STOP_DESCRIPTION')),
    async execute(interaction) {
        let bean = new BeanVelha();
        bean.user_id = interaction.user.id;
        bean.server = interaction.guildId;
        await bean.selectActive();

        if(!bean.id){
            await interaction.reply({
                content: translate('ttt', 'CMD_STOP_NO_GAME'),
                ephemeral: true
            });
            return false;
        }
        bean.status = 'done';
        await bean.save();

        await interaction.reply(translate('ttt', 'CMD_STOP_SUCCESS'));
    },
}