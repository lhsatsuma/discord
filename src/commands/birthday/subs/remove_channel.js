const BeanServers = getUtils().requireAgain(process.cwd()+'/src/models/Servers.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('remove_channel')
            .setDescription(translate('birthday', 'CMD_REMOVE_CHANNEL')),
    async execute(interaction) {
        let bean = new BeanServers();
        bean.server = interaction.guildId;
        await bean.selectActive();

        if(!bean.channels_birthday){
            await interaction.reply({
                content: translate('birthday', 'CMD_REMOVE_CHANNEL_EMPTY_CHANNELS'),
                ephemeral: true
            });
            return true;
        }else if(bean.channels_birthday.indexOf(interaction.channelId) == -1){
            await interaction.reply({
                content: translate('birthday', 'CMD_REMOVE_CHANNEL_NO_CHANNEL'),
                ephemeral: true
            });
            return true;
        }

        delete bean.channels_birthday.splice(bean.channels_birthday.indexOf(interaction.channelId), 1);

        let added = await bean.save();

        let msg = added ? translate('birthday', 'CMD_REMOVE_CHANNEL_SUCCESS', interaction.channelId) : translate('birthday', 'CMD_REMOVE_CHANNEL_ERROR');
        await interaction.reply({
            content: msg,
            ephemeral: true
        });
        return added;
    },
}