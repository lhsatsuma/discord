import { SlashCommandSubcommandBuilder, EmbedBuilder, MessageFlags, Colors, ChatInputCommandInteraction} from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandInterface from '#interfaces/appSubCommandInterface.ts';
import model_memes from '#models/memes.ts';
export default class memes_get extends appSubCommandInterface
{
    cooldown = 3;
    parentName = 'memes';
    name = 'get';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
        .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`))
        .addStringOption(search =>
                search.setName('search')
                    .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_OPTION_SEARCH`))
                    .setRequired(true)
        );

        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        const searchStr = interaction.options.getString('search').toString();


        let embedMsg = null;
        let meme = await model_memes.search({server: interaction.guild.id}, searchStr);

        if(meme == false){
            interaction.reply({
                content: lang.translate('globals', `DB_ERROR`),
                flags: [MessageFlags.Ephemeral]
            });
            return false;
        }

        if(!meme){
            interaction.reply({
                content: lang.translate(this.parentName, `NO_RECORDS`),
                flags: [MessageFlags.Ephemeral]
            });
            return false;
        }
        
        embedMsg = {
            embeds: [
                new EmbedBuilder()
                .setColor('Random')
                .setImage(meme.content)
                .setFooter({
                    text: `#${meme.order_id} | ${meme.description}`
                })
                .setTimestamp(meme.date_entered)
            ]
        };
        await interaction.reply(embedMsg);
        return true;
    }
}