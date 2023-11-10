const { SlashCommandBuilder} = require('discord.js');
const {pagination, ButtonTypes, ButtonStyles} = require("@devraelfreeze/discordjs-pagination");

const returned = client.create(
    new SlashCommandBuilder()
        .setName(translate('help', 'CMD_HELP'))
        .setDescription(translate('help', 'CMD_HELP_DESCRIPTION'))
);

module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    cooldown: 2,
    async execute(interaction) {
        const commandsList = JSON.parse(JSON.stringify(client.commands));
        let resultsArr = [];
        commandsList.forEach((ipt) => {
            if(Object.keys(ipt.subcommands).length){
                //Command has subcommands
                //Go forEach on options
                ipt.data.options.forEach((ipt2) => {
                    resultsArr.push('``/'+ipt.data.name+' '+ipt2.name+'``\n*'+ipt2.description+'*');
                });
            }else{
                resultsArr.push('``/'+ipt.data.name+'``\n*'+ipt.data.description+'*');
            }
        });
        await pagination({
            embeds: getUtils().mountEmbedArrays(resultsArr, translate('help', 'CMD_HELP'), 10, 2), /** Array of embeds objects */
            author: interaction.member.user,
            interaction: interaction,
            ephemeral: true,
            time: 120000, /** 40 seconds */
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
};