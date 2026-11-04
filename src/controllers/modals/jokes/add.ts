import { ModalSubmitInteraction, MessageFlags, LabelBuilder, TextInputBuilder, TextInputStyle} from 'discord.js';
import lang from '#includes/lang.js';
import appModalInterface from '#includes/modals/appModalInterface.js';
import model_jokes from '#models/jokes.js';
export default class modal_jokes_add extends appModalInterface
{
    cooldown = 3;
    parentName = 'jokes';
    name = 'add';

    async buildComponents()
    {
        let textLabel = new LabelBuilder()
                .setLabel(lang.translate(this.parentName, `MODAL_${this.name.toUpperCase()}_COMPONENT_LABEL_CONTENT`))
                .setDescription(lang.translate(this.parentName, `MODAL_${this.name.toUpperCase()}_COMPONENT_DESCRIPTION_CONTENT`))
                .setTextInputComponent(
                    new TextInputBuilder()
                        .setCustomId(`${this.name}_content`)
                        .setStyle(TextInputStyle.Paragraph)
                        .setMaxLength(1_000)
                        .setMinLength(10)
                );
        this.builded.addLabelComponents(textLabel);
        return this;
    }

    async execute(interaction: ModalSubmitInteraction)
    {
        let content = interaction.fields.getTextInputValue(`${this.name}_content`);

        let result = await model_jokes.insert({
            locale: lang.locale,
            content: content,
            created_by: interaction.user.id
        });

        if(result == false){
            await interaction.reply({
                content: lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_ERROR`),
                flags: [MessageFlags.Ephemeral]
            });
            return false;
        }

        await interaction.reply({
            content: lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_SUCCESS`),
            flags: [MessageFlags.Ephemeral]
        });
        
        return true;
    }
}