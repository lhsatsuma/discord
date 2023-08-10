const BeanServers = getUtils().requireAgain(process.cwd()+'/src/models/Servers.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('list_channels')
            .setDescription(translate('birthday', 'CMD_LIST_CHANNELS')),
    async execute(interaction) {
        let bean = new BeanServers();
        bean.server = interaction.guildId;

        await bean.selectActive();

        if(!bean.channels_birthday){
            await interaction.reply({
                content: translate('birthday', 'CMD_LIST_CHANNELS_NO_CHANNELS'),
                ephemeral: true
            });
            return false;
        }
        let channels_list = '<#'+bean.channels_birthday.join('> ,<#')+'>';


        let msg = translate('birthday', 'CMD_LIST_CHANNELS_SUCCESS', channels_list);
        await interaction.reply({
            content: msg,
            ephemeral: true
        });
        return true;
    },
}