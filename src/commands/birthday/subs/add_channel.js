const BeanServers = getUtils().requireAgain(process.cwd()+'/src/models/Servers.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName(translate('birthday', 'CMD_ADD_CHANNEL'))
            .setDescription(translate('birthday', 'CMD_ADD_CHANNEL_DESCRIPTION')),
    async execute(interaction) {
        let bean = new BeanServers();
        bean.server = interaction.guildId;
        await bean.selectActive();

        if(bean.channels_birthday === null){
            bean.channels_birthday = [];
        }

        if(bean.channels_birthday.indexOf(interaction.channelId) != -1){
            await interaction.reply({
                content: translate('birthday', 'CMD_ADD_CHANNEL_ALREADY_REGISTERED'),
                ephemeral: true
            });
            return false;
        }

        bean.channels_birthday.push(interaction.channelId);

        let added = await bean.save();

        let msg = added ? translate('birthday', 'CMD_ADD_CHANNEL_SUCCESS', interaction.channelId) : translate('birthday', 'CMD_ADD_CHANNEL_ERROR');
        await interaction.reply({
            content: msg,
            ephemeral: true
        });
        return added;
    },
}