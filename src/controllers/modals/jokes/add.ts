import { SlashCommandSubcommandBuilder, ModalBuilder, LabelBuilder, TextInputBuilder, TextInputStyle} from 'discord.js';
import lang from '#includes/lang.js';
import model_jokes from '#models/jokes.js';
import appSubCommandInterface from '#includes/commands/appSubCommandInterface.js';
export default class jokes_add extends appSubCommandInterface
{
    cooldown = 3;
    parentName = 'jokes';
    name = 'add';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
        .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`))

        return this;
    }

    async execute(interaction)
    {
        
        const modal = new ModalBuilder()
            .setCustomId('jokesAddModal')
            .setTitle('TESTEEEE');


        let textInput = new TextInputBuilder()
                .setCustomId('jokesAddContent')
                .setStyle(TextInputStyle.Paragraph)
                .setMaxLength(1_000)
                .setMinLength(10);

        
        let textLabel = new LabelBuilder()
                .setLabel('Labelado')
                .setDescription('alooo')
                .setTextInputComponent(textInput);

        modal.addLabelComponents(textLabel);

        await interaction.showModal(modal);

        return true;

        // let result = await model_jokes.insert({
        //     locale: lang.locale,
        //     content: content,
        //     created_by: interaction.user.id
        // });

        // if(result == false){
        //     await interaction.reply({
        //         content: lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_ERROR`),
        //         flags: [MessageFlags.Ephemeral]
        //     });
        //     return false;
        // }

        // await interaction.reply({
        //     content: lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_SUCCESS`),
        //     flags: [MessageFlags.Ephemeral]
        // });
        
        return true;
    }
}