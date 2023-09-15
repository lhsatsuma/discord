const BeanServerMembers = getUtils().requireAgain(process.cwd()+'/src/models/ServerMembers.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('remove')
            .setDescription(translate('birthday', 'CMD_REMOVE'))
            .addUserOption(option =>
                option
                    .setName('user')
                    .setDescription(translate('birthday', 'CMD_REMOVE_OPTION_USER'))
            ),
    async execute(interaction) {

        let bean = new BeanServerMembers();
        bean.server = interaction.guildId;
        bean.user_id = interaction.options.getUser('user') ? interaction.options.getUser('user').id : interaction.user.id;
        await bean.selectActive();


        if(!bean.id){
            await interaction.reply({
                content: translate('birthday', 'CMD_REMOVE_NO_USER'),
                ephemeral: true
            });
            return false;
        }

        bean.birthdate = null;

        let removed = await bean.save();
        await interaction.reply({
            content: removed ? translate('birthday', 'CMD_REMOVE_SUCCESS', bean.user_id) : translate('birthday', 'CMD_REMOVE_ERROR'),
            ephemeral: true
        });
        return removed;
    },
}