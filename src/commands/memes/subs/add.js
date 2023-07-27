const { EmbedBuilder} = require('discord.js');
const BeanMemes = getUtils().requireAgain(process.cwd()+'/src/models/Memes.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('add')
            .setDescription('Adicione uma nova imagem de meme')
            .addStringOption(url =>
                url.setName('url')
                    .setDescription('URL image')
                    .setRequired(true)
            )
            .addStringOption(name =>
                name.setName('name')
                    .setDescription('Description')
                    .setRequired(true)
            ),
    async execute(interaction) {
        const url_image = interaction.options.getString('url').toString();
        const name = interaction.options.getString('name').toString();
        if(url_image.substring(0, 7) !== 'http://' && url_image.substring(0, 8) !== 'https://'){
            await interaction.reply({
                content: 'URL invalid!',
                ephemeral: true
            });
            return false;
        }

        let bean = new BeanMemes();
        bean.server = interaction.guild.id;
        bean.url = url_image;

        let exists = await bean.checkExists();
        exists = exists[0];
        if(!!exists){
            await interaction.reply({
                content: `Meme already exists! ID: ${exists.order_id}`,
                ephemeral: true
            });
            return true;
        }

        bean.name = name;

        let saved = await bean.save();

        if(!saved){
            await interaction.reply({
                content: 'Error on saving new meme',
                ephemeral: true
            });
            return false;
        }

        let embedMsg = new EmbedBuilder()
            .setColor(getUtils().getColor('BLUE'))
            .setImage(url_image);

        await interaction.deferReply();
        await interaction.deleteReply();
        await interaction.channel.send({
            content: `[${bean.order_id}] ${bean.name}`,
            ephemeral: true,
            embeds: [embedMsg]
        });
        return true;
    },
}