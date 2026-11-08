import { SlashCommandSubcommandBuilder, EmbedBuilder, MessageFlags, Colors, ChatInputCommandInteraction} from 'discord.js';
import lang from '#includes/lang.ts';
import model_jokes from '#models/jokes.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
export default class jokes_rand extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'jokes';
    name = 'rand';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
        .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`));

        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        let jokes = await model_jokes.getRandom({locale: lang.locale});
        
        if(jokes == false){
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return false;
        }

        if(jokes == null){
            await interaction.reply({
                content: lang.translate(this.parentName, 'NO_RECORDS'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        let replyData: Record<string, any> = {};

        if(jokes.content.toString().search('https://') !== -1 || jokes.content.toString().search('http://') !== -1){
            //It's image

            replyData.embeds = [new EmbedBuilder()
            .setColor(Colors.Blue)
            .setImage(jokes.content.toString())];
        }else{
            //It's a text
            replyData.content = jokes.content.replace(/\\n/g, '\n');
        }

        await interaction.reply(replyData);
        return true;
    }
}