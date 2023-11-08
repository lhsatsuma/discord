const BeanServerMembers = getUtils().requireAgain(process.cwd()+'/src/models/ServerMembers.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName(translate('birthday', 'CMD_ADD'))
            .setDescription(translate('birthday', 'CMD_ADD_DESCRIPTION'))
            .addUserOption(option =>
                option
                    .setName('user')
                    .setDescription(translate('birthday', 'CMD_ADD_OPTION_USER'))
                    .setRequired(true)
            )
            .addStringOption(option =>
                option.setName('day')
                    .setDescription(translate('birthday', 'CMD_ADD_OPTION_DAY'))
                    .setRequired(true)
                    .setMinLength(2)
            )
            .addStringOption(option =>
                option.setName('month')
                    .setDescription(translate('birthday', 'CMD_ADD_OPTION_MONTH'))
                    .setRequired(true)
                    .setMinLength(2)
            )
            .addStringOption(option =>
                option.setName('year')
                    .setDescription(translate('birthday', 'CMD_ADD_OPTION_YEAR'))
                    .setMinLength(4)
            ),
    async execute(interaction) {

        let user = interaction.options.getUser('user');
        let day = interaction.options.getString('day');
        let month = interaction.options.getString('month');
        let year = interaction.options.getString('year') ?? 1500;
        let birthdate = year+'-'+month+'-'+day;
        let birthdateOrg = day+'/'+month;
        if(year != 1500){
            birthdateOrg += '/'+year;
        }

        if(!birthdate || !getUtils().validateDate(birthdate)){
            await interaction.reply({
                content: translate('birthday', 'CMD_ADD_INVALID_BIRTHDATE'),
                ephemeral: true
            });
            return false;
        }

        let bean = new BeanServerMembers();
        bean.server = interaction.guildId;
        bean.user_id = user.id;

        let results = await bean.selectActive();

        if(results === false){
            interaction.reply({
                content: translate('globals', 'DB_ERROR'),
                ephemeral: true
            });
            return false;
        }

        bean.username = user.username;
        bean.birthdate = birthdate;

        let added = await bean.save();
        await interaction.reply({
            content: added ? translate('birthday', 'CMD_ADD_SUCCESS', birthdateOrg, bean.user_id) : translate('birthday', 'CMD_ADD_ERROR'),
            ephemeral: true
        });
        return added;
    },
}