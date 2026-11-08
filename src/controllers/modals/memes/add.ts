import { ModalSubmitInteraction, EmbedBuilder, LabelBuilder, TextInputBuilder, TextInputStyle, FileUploadBuilder} from 'discord.js';
import lang from '#includes/lang.ts';
import log from '#includes/log.ts';
import appModalBase from '#includes/commands/appModalBase.ts';
import model_memes from '#models/memes.ts';
import config from '#includes/config.ts';
import ImgurClient from 'imgur';
export default class modal_memes_add extends appModalBase
{
    cooldown = 3;
    parentName = 'memes';
    name = 'add';

    async buildComponents()
    {
        const modal = this.builded;
        if (!modal) {
            throw new Error('Memes add modal must be initialized before building components.');
        }

        let textLabel = new LabelBuilder()
                .setLabel(lang.translate(this.parentName, `MODAL_${this.name.toUpperCase()}_COMPONENT_LABEL_DESCRIPTION`))
                .setDescription(lang.translate(this.parentName, `MODAL_${this.name.toUpperCase()}_COMPONENT_DESCRIPTION_DESCRIPTION`))
                .setTextInputComponent(
                    new TextInputBuilder()
                        .setCustomId(`${this.name}_description`)
                        .setStyle(TextInputStyle.Paragraph)
                        .setMaxLength(1_000)
                        .setMinLength(2)
                );
        modal.addLabelComponents(textLabel);

        let uploadLabel = new LabelBuilder()
                .setLabel(lang.translate(this.parentName, `MODAL_${this.name.toUpperCase()}_COMPONENT_LABEL_CONTENT`))
                .setDescription(lang.translate(this.parentName, `MODAL_${this.name.toUpperCase()}_COMPONENT_DESCRIPTION_CONTENT`))
                .setFileUploadComponent(
                    new FileUploadBuilder()
                        .setCustomId(`${this.name}_content`)
                        .setMinValues(1)
                );
        modal.addLabelComponents(uploadLabel);
        return this;
    }

    async execute(interaction: ModalSubmitInteraction)
    {
        let description = interaction.fields.getTextInputValue(`${this.name}_description`);
        const uploadedFile = interaction.fields
            .getUploadedFiles(`${this.name}_content`, true)
            .first();
        if (!uploadedFile) {
            log.err('No file was uploaded for the meme.');
            return false;
        }

        const client = new ImgurClient({ clientId: config.IMGUR_CLIENT_ID });
        const response = await client.upload({
            image: uploadedFile.url,
            title: description,
            type: 'url',
            description: 'Meme uploaded via API '+config.DISCORD_BOT_NAME,
        });

        if(!response.success){
            log.err('Error uploading to imgur: '+response.status+' | '+response.data);
            return false;
        }


        let result = await model_memes.insert({
            server: interaction.guild?.id,
            description: description,
            content: response.data.link,
            created_by: interaction.user.id
        });

        await interaction.reply({
            content: lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_SUCCESS`),
            embeds: [
                new EmbedBuilder()
                    .setColor('Random')
                    .setImage(result.content)
                    .setFooter({
                        text: `#${result.order_id} | ${result.description}`
                    })
                    .setTimestamp(result.date_entered)
            ]
        });
        return true;
    }
}