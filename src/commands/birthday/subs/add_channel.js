const BeanServers = getUtils().requireAgain(process.cwd()+'/src/models/Servers.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('add_channel')
            .setDescription('Add this channel to notify birthdays'),
    async execute(interaction) {
        let bean = new BeanServers();
        bean.server = interaction.guildId;
        await bean.selectActive();

        if(bean.channels_birthday === null){
            bean.channels_birthday = [];
        }

        if(bean.channels_birthday.indexOf(interaction.channelId) != -1){
            await interaction.reply({
                content: 'Channel is already set to notify birthdays',
                ephemeral: true
            });
            return false;
        }

        bean.channels_birthday.push(interaction.channelId);

        let added = await bean.save();

        let msg = added ? `Added <#${interaction.channelId}> to notify birthdays` : 'Error on add channel to notify birthdays';
        await interaction.reply({
            content: msg,
            ephemeral: true
        });
        return added;
    },
}