const { SlashCommandBuilder, EmbedBuilder} = require('discord.js');

const returned = client.create(
    new SlashCommandBuilder()
        .setName(translate('mf', 'CMD_MF'))
        .setDescription(translate('mf', 'CMD_MF_DESCRIPTION'))
        .addUserOption(user =>
            user.setName('user')
                .setDescription(translate('mf', 'CMD_MF_OPTION_NAME'))
        )
);

module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    cooldown: 2,
    async execute(interaction) {
        let user = interaction.options.getUser('user') ? interaction.options.getUser('user').id : interaction.user.id;

        let random = getUtils().randomInt(0, 100);
        let type = '';
        if(random == 0){
            type = '0';
        }else if(random < 20){
            type = '1';
        }else if(random < 50){
            type = '2';
        }else if(random < 90){
            type = '3';
        }else if(random < 99){
            type = '4';
        }else{
            type = '100';
        }

        let description = translate('mf', 'CMD_MF_SUCCESS_DESCRIPTION', user, random)+`\n\n`+translate('mf', 'CMD_MF_SUCCESS_TYPE_'+type);

        let embed = new EmbedBuilder()
            .setTimestamp()
            .setTitle(translate('mf', 'CMD_MF_SUCCESS_TITLE'))
            .setDescription(description);

        await interaction.reply({
            embeds: [embed]
        });

        return true;
    },
};