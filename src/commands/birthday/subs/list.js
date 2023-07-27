const {pagination, ButtonTypes, ButtonStyles} = require("@devraelfreeze/discordjs-pagination");
const BeanServerMembers = getUtils().requireAgain(process.cwd()+'/src/models/ServerMembers.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('list')
            .setDescription('List of birthdays')
    ,
    async execute(interaction) {

        let bean = new BeanServerMembers();
        bean.server = interaction.guildId;

        let results = await bean.getMembersBirthdays();

        if(!results){
            await interaction.reply({
                content: 'No birthday registered to members!',
                ephemeral: true
            });
            return true;
        }

        let resultsArr = [];
        results.forEach((ipt) => {
            if(ipt.birthdate.getFullYear() == '1500'){
                //User has set only day and month
                resultsArr.push('<@'+ipt.user_id+'> '+getUtils().padZeroLeft(ipt.birthdate.getDate())+'/'+getUtils().padZeroLeft(ipt.birthdate.getMonth()+1));
            }else{
                resultsArr.push('<@'+ipt.user_id+'> '+bean.unformatField('date-locale', ipt.birthdate));
            }
        });

        await pagination({
            embeds: getUtils().mountEmbedArrays(resultsArr, 'Members Birthday list'), /** Array of embeds objects */
            author: interaction.member.user,
            interaction: interaction,
            ephemeral: true,
            time: 40000, /** 40 seconds */
            disableButtons: false, /** Remove buttons after timeout */
            fastSkip: false,
            pageTravel: false,
            buttons: [
                {
                    type: ButtonTypes.previous,
                    label: 'Anterior',
                    style: ButtonStyles.Primary
                },
                {
                    type: ButtonTypes.next,
                    label: 'Próximo',
                    style: ButtonStyles.Success
                }
            ]
        });
        return true;
    },
}