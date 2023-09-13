const BeanHangman = getUtils().requireAgain(process.cwd()+'/src/models/Hangman.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('stop')
            .setDescription(translate('hangman', 'CMD_STOP')),
    async execute(interaction) {
        let bean = new BeanHangman();
        bean.server = interaction.guildId;
        bean.user_id = interaction.user.id;
        let results = await bean.selectActive();

        if(results === false){
            interaction.reply({
                content: translate('globals', 'DB_ERROR'),
                ephemeral: true
            });
            return false;
        }

        if(!bean.id){
            await interaction.reply({
                content: translate('hangman', 'CMD_STOP_NO_GAME'),
                ephemeral: true
            });
            return false;
        }

        bean.status = 'done';
        await bean.save();

        await interaction.reply({
            content: translate('hangman', 'CMD_STOP_SUCCESS'),
            ephemeral: true
        });
        return true;
    },
}