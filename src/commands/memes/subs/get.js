const { EmbedBuilder} = require('discord.js');
const BeanMemes = getUtils().requireAgain(process.cwd()+'/src/models/Memes.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName(translate('memes', 'CMD_GET'))
            .setDescription(translate('memes', 'CMD_GET_DESCRIPTION'))
            .addStringOption(search =>
                search.setName('search')
                    .setDescription(translate('memes', 'CMD_GET_OPTION_SEARCH'))
                    .setRequired(true)
            ),
    async execute(interaction) {
        const searchStr = interaction.options.getString('search').toString();

        let bean = new BeanMemes();
        bean.server = interaction.guildId;

        await bean.searchMeme(searchStr);

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
        return true;
    },
}