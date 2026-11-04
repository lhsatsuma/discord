import { SlashCommandSubcommandBuilder, EmbedBuilder, MessageFlags, Colors} from 'discord.js';
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
        .addStringOption(option =>
            option
                .setName('content')
                .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_OPTION_CONTENT`))
                .setRequired(true)
                .setMinLength(2)
        )

        return this;
    }

    async execute(interaction)
    {
        let content = interaction.options.getString('content');

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