const { ImgurClient } = require('imgur');
const BeanMemes = getUtils().requireAgain(process.cwd()+'/src/models/Memes.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName(translate('memes', 'CMD_ADD'))
            .setDescription(translate('memes', 'CMD_ADD_DESCRIPTION'))
            .addAttachmentOption(attachment =>
                attachment.setName('image')
                    .setDescription(translate('memes', 'CMD_ADD_OPTION_IMAGE'))
                    .setRequired(true)
            )
            .addStringOption(name =>
                name.setName('name')
                    .setDescription(translate('memes', 'CMD_ADD_OPTION_NAME'))
                    .setRequired(true)
            ),
    async execute(interaction) {
        let image = interaction.options.getAttachment('image');
        const name = interaction.options.getString('name').toString();
        let bean = new BeanMemes();
        bean.server = interaction.guildId;
        bean.url = image.url;
        bean.name = name;

        //Accept only this formats of attachments
        if(!bean.validateExtension(image.url.split('.').pop())){
            await interaction.reply({
                content: translate('memes', 'CMD_ADD_INVALID_FORMAT', bean.getAcceptFiles(true)),
                ephemeral: true
            });
            return false;
        }

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