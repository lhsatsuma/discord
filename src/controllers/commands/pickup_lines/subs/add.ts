import { SlashCommandSubcommandBuilder, EmbedBuilder, MessageFlags, Colors} from 'discord.js';
import lang from '#includes/lang.ts';
import model_pickup_lines from '#models/pickup_lines.ts';
import appSubCommandInterface from '#includes/commands/appSubCommandInterface.ts';
export default class pickup_lines_add extends appSubCommandInterface
{
    cooldown = 3;
    parentName = 'pickup_lines';
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

        let result = await model_pickup_lines.insert({
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