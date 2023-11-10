const BeanJankenpon = getUtils().requireAgain(process.cwd()+'/src/models/Jankenpon.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName(translate('jankenpon', 'CMD_RESET'))
            .setDescription(translate('jankenpon', 'CMD_RESET_DESCRIPTION')),
    async execute(interaction) {
            let bean = new BeanJankenpon();

            bean.server = interaction.guildId;
            bean.user_id = interaction.user.id;
            await bean.resetScore();
            await interaction.reply({
                content: translate('jankenpon', 'CMD_RESET_SUCCESS')
            });
            return true;
    }
}