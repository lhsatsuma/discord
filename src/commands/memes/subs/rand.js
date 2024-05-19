const { EmbedBuilder} = require('discord.js');
const BeanMemes = getUtils().requireAgain(process.cwd()+'/src/models/Memes.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName(translate('memes', 'CMD_RAND'))
            .setDescription(translate('memes', 'CMD_RAND_DESCRIPTION'))
    ,
    cooldown: 5,
    async execute(interaction) {
        let bean = new BeanMemes();
        bean.server = interaction.guildId;
        let results = await bean.selectRandom();

        if(results === false){
            interaction.reply({
                content: translate('globals', 'DB_ERROR'),
                ephemeral: true
            });
            return false;
        }


        //Protection against random not found
        if(!bean.id){
            await interaction.reply({
                content: translate('memes', 'NOT_FOUND'),
                ephemeral: true
            });
            return true;
        }

        let embedMsg = new EmbedBuilder()
            .setColor(getUtils().getColor('BLUE'))
            .setImage(bean.url)
            .setFooter({text: '#'+bean.order_id.toString() + ' | '+translate('globals', 'CREATED_AT')+ ' '+bean.unformatField('datetime-locale', bean.date_entered)});

        await interaction.reply({
            content: bean.name,
            embeds: [embedMsg]
        });
    },
}