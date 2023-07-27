const { EmbedBuilder} = require('discord.js');
const BeanMemes = getUtils().requireAgain(process.cwd()+'/src/models/Memes.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('show')
            .setDescription('Show an meme with ID')
            .addStringOption(search =>
                search.setName('search')
                    .setDescription('ID/Nome do meme')
                    .setRequired(true)
            ),
    async execute(interaction) {
        const searchStr = interaction.options.getString('search').toString();

        let bean = new BeanMemes();
        bean.server = interaction.guild.id;

        await bean.searchMeme(searchStr);

        if(!bean.id){
            await interaction.reply({
                content: `Meme not found!`,
                ephemeral: true
            });
            return true;
        }

        let embedMsg = new EmbedBuilder()
            .setColor(getUtils().getColor('BLUE'))
            .setImage(bean.url);

        await interaction.deferReply();
        await interaction.deleteReply();

        await interaction.channel.send({
            content: `[${bean.order_id}] ${bean.name}`,
            embeds: [embedMsg]
        });
        return true;
    },
}