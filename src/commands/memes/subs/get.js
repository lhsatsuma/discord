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
        let embedMsg = bean.mountEmbed();

        await interaction.reply({
            embeds: [embedMsg]
        });
        return true;
    },
}