const { ImgurClient } = require('imgur');
const BeanMemes = getUtils().requireAgain(process.cwd()+'/src/models/Memes.js');

let bean_memes = new BeanMemes();
module.exports = {
    data: (subcommand) =>
        subcommand
            .setName(translate('memes', 'CMD_ADD'))
            .setDescription(translate('memes', 'CMD_ADD_DESCRIPTION'))
            .addAttachmentOption(attachment =>
                attachment.setName('meme')
                    .setDescription(translate('memes', 'CMD_ADD_OPTION_MEME', bean_memes.getAcceptFiles(true)))
                    .setRequired(true)
            )
            .addStringOption(name =>
                name.setName('name')
                    .setDescription(translate('memes', 'CMD_ADD_OPTION_NAME'))
                    .setRequired(true)
            ),
    async execute(interaction) {
        let image = interaction.options.getAttachment('meme');
        const name = interaction.options.getString('name').toString();
        let bean = new BeanMemes();
        bean.server = interaction.guildId;
        bean.url = image.url;
        bean.name = name;

        //Accept only this formats of attachments
        if(!bean.validateExtension(image.url.split('.').pop().split('?')[0])){
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
            type: 'url',
            description: 'Meme uploaded via API '+bot_cfg.BOT_NAME,
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
        await interaction.reply(embedMsg);

        return true;
    },
}