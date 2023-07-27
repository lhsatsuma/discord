const BeanServerMembers = getUtils().requireAgain(process.cwd()+'/src/models/ServerMembers.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('remove')
            .setDescription('Remove user birthday')
            .addUserOption(option =>
                option
                    .setName('usuario')
                    .setDescription('User member')
                    .setRequired(true)
            ),
    async execute(interaction) {

        let bean = new BeanServerMembers();
        bean.server = interaction.guildId;
        bean.user_id = interaction.user.id;
        await bean.selectActive();


        if(!bean.id){
            await interaction.reply({
                content: 'This user does not have a registered birthday',
                ephemeral: true
            });
            return false;
        }

        bean.birthdate = null;

        let removed = await bean.save();
        await interaction.reply({
            content: removed ? 'Removed birthdate of user <@'+bean.user_id+'>' : 'Error on removing birthdate',
            ephemeral: true
        });
        return removed;
    },
}