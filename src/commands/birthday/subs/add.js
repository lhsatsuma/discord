const BeanServerMembers = getUtils().requireAgain(process.cwd()+'/src/models/ServerMembers.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('add')
            .setDescription('Add a new user birthday')
            .addUserOption(option =>
                option
                    .setName('usuario')
                    .setDescription('User member')
                    .setRequired(true)
            )
            .addStringOption(option =>
                option.setName('birthdate')
                    .setDescription('Data de nascimento (dd/mm/YYYY) (Ano Opcional)')
                    .setRequired(true)
            ),
    async execute(interaction) {

        let user = interaction.options.getUser('usuario');
        let birthdateOrg = interaction.options.getString('birthdate');
        let birthdate = birthdateOrg;
        birthdate = birthdate.split('/');

        //Validate date
        if(birthdate.length !== 3 && birthdate.length !== 2){
            await interaction.reply({
                content: 'Birthdate invalid!',
                ephemeral: true
            });
            return false;
        }

        if(birthdate.length == 3){
            birthdate = birthdate[2]+'-'+birthdate[1]+'-'+birthdate[0];
        }else{
            //If there's no year, assume the year of birth 1500
            birthdate = '1500-'+birthdate[1]+'-'+birthdate[0];
        }

        if(!birthdate || !getUtils().validateDate(birthdate)){
            await interaction.reply({
                content: 'Birthdate invalid!',
                ephemeral: true
            });
            return false;
        }

        let bean = new BeanServerMembers();
        bean.server = interaction.guildId;
        bean.user_id = user.id;

        await bean.selectActive();

        bean.username = user.username;
        bean.birthdate = birthdate;

        let added = await bean.save();
        await interaction.reply({
            content: added ? 'Added birthdate ``'+birthdateOrg+'`` to user <@'+bean.user_id+'>' : 'Error on add birthdate',
            ephemeral: true
        });
        return added;
    },
}