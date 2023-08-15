const BeanMemes = getUtils().requireAgain(process.cwd()+'/src/models/Memes.js');
const {pagination, ButtonTypes, ButtonStyles} = require('@devraelfreeze/discordjs-pagination');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('list')
            .setDescription(translate('memes', 'CMD_LIST'))
    ,
    async execute(interaction) {

        let bean = new BeanMemes();
        bean.server = interaction.guildId;
        let results = await bean.getList();
        if(!results.length){
            interaction.reply({
                content: translate('memes', 'CMD_LIST_NO_MEMES'),
                ephemeral: true
            })
            return true;
        }

        let resultsArr = [];
        results.forEach((ipt) => {
            resultsArr.push(`[${ipt.order_id}] ${ipt.name}`);
        });

        await pagination({
            embeds: getUtils().mountEmbedArrays(resultsArr, translate('memes', 'CMD_LIST'), 20), /** Array of embeds objects */
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
                    label: translate('globals', 'PREVIOUS'),
                    style: ButtonStyles.Primary
                },
                {
                    type: ButtonTypes.next,
                    label: translate('globals', 'NEXT'),
                    style: ButtonStyles.Success
                }
            ]
        });
        return true;
    },
}