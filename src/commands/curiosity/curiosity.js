const { SlashCommandBuilder, EmbedBuilder} = require('discord.js');

const returned = client.create(
    new SlashCommandBuilder()
        .setName(translate('curiosity', 'CMD_CURIOSITY'))
        .setDescription(translate('curiosity', 'CMD_CURIOSITY_DESCRIPTION'))
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    cooldown: 3,
    async execute(interaction) {
        let path = process.cwd() + '/uploads/'+getLang().locale+'/curiosity.json';
        if(!fs.existsSync(path)){
            await interaction.reply({
                content: translate('curiosity', 'NO_RECORDS', getLang().locale),
                ephemeral: true,
            });
            return false;
        }

        let embedMsg = new EmbedBuilder()
            .setColor(getUtils().getColor('BLUE'));
        let textRet = '';

        let curiosities = require(path);
        let random_key = Math.floor(Math.random() * curiosities.length);
        let curiosity_category = curiosities[random_key];


        random_key = Math.floor(Math.random() * curiosity_category.curiosities.length);
        let curiosity = curiosity_category.curiosities[random_key];

        embedMsg.setTitle(translate('curiosity', 'CMD_CURIOSITY_TITLE', curiosity_category.category))
        embedMsg.setDescription(curiosity);

        await interaction.reply({
            content: textRet,
            embeds: [embedMsg]
        });
    },
};