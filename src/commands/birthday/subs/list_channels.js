const BeanServers = getUtils().requireAgain(process.cwd()+'/src/models/Servers.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('list_channels')
            .setDescription('List channels to notify birthdays'),
    async execute(interaction) {
        let bean = new BeanServers();
        bean.server = interaction.guildId;

        await bean.selectActive();

        if(!bean.channels_birthday){
            await interaction.reply({
                content: 'There\'s no birthday notifications to this server',
                ephemeral: true
            });
            return false;
        }
        let channels_list = '<#'+bean.channels_birthday.join('> ,<#')+'>';


        let msg = `Current list of channels to notify birthdays: ${channels_list}`;
        await interaction.reply({
            content: msg,
            ephemeral: true
        });
        return true;
    },
}