const { ImgurClient } = require('imgur');
const BeanMemes = getUtils().requireAgain(process.cwd()+'/src/models/Memes.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName(translate('memes', 'CMD_ADD'))
            .setDescription(translate('memes', 'CMD_ADD_DESCRIPTION'))
            .addStringOption(url =>
                url.setName('url')
                    .setDescription(translate('memes', 'CMD_ADD_OPTION_URL'))
                    .setRequired(true)
            )
            .addStringOption(name =>
                name.setName('name')
                    .setDescription(translate('memes', 'CMD_ADD_OPTION_NAME'))
                    .setRequired(true)
            ),
    async execute(interaction) {
        let url_image = interaction.options.getString('url').toString();
        const name = interaction.options.getString('name').toString();
        if(url_image.substring(0, 7) !== 'http://' && url_image.substring(0, 8) !== 'https://'){
            await interaction.reply({
                content: translate('memes', 'CMD_ADD_INVALID_URL'),
                ephemeral: true
            });
            return false;
        }

        url_image = url_image.replace('format=webp', 'format=png');

        let bean = new BeanMemes();
        bean.server = interaction.guildId;
        bean.url = url_image;
        bean.name = name;

        const client = new ImgurClient({ clientId: bot_cfg.IMGUR_CLIENT_ID });

        const response = await client.upload({
            image: bean.url,
            title: name,
            description: 'Meme uploaded via API DBIKE BOT',
        });
        if(response.success && !!response.data.link){
            bean.url = response.data.link;
        }else{
            log.Error('Error uploading meme: '+response.data);
            await interaction.reply({
                content: translate('memes', 'CMD_ADD_ERROR_UPLOAD'),
                ephemeral: true
            });
            return false;
        }

        // let exists = await bean.checkExists();
        // exists = exists[0];
        // if(!!exists){
        //     await interaction.reply({
        //         content: translate('memes', 'CMD_ADD_ALREADY_EXISTS', exists.order_id),
        //         ephemeral: true
        //     });
        //     return true;
        // }

        let saved = await bean.save();

        if(!saved){
            await interaction.reply({
                content: translate('memes', 'CMD_ADD_ERROR'),
                ephemeral: true
            });
            return false;
        }

        let embedMsg = bean.mountEmbed();

        await interaction.reply({
            embeds: [embedMsg]
        });
        return true;
    },
}