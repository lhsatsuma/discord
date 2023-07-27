const BeanServers = getUtils().requireAgain(process.cwd()+'/src/models/Servers.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('remove_channel')
            .setDescription('Remove this channel to notify birthdays'),
    async execute(interaction) {
        let bean = new BeanServers();
        bean.server = interaction.guildId;
        await bean.selectActive();

        if(!bean.channels_birthday){
            await interaction.reply({
                content: 'There\'s no birthday notifications to this server',
                ephemeral: true
            });
            return true;
        }else if(bean.channels_birthday.indexOf(interaction.channelId) == -1){
            await interaction.reply({
                content: 'This channel is not enabled to receive birthday notifications',
                ephemeral: true
            });
            return true;
        }

        delete bean.channels_birthday.splice(bean.channels_birthday.indexOf(interaction.channelId), 1);

        let added = await bean.save();

        let msg = added ? `Removed <#${interaction.channelId}> of notify birthdays` : 'Error on remove channel';
        await interaction.reply({
            content: msg,
            ephemeral: true
        });
        return added;
    },
}