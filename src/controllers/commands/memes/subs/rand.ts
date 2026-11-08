import { SlashCommandSubcommandBuilder, EmbedBuilder, MessageFlags, Colors, ChatInputCommandInteraction} from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandInterface from '#interfaces/appSubCommandInterface.ts';
import redditUtil from '#includes/redditUtil.ts';
import utils from '#includes/utils.ts';
import model_memes from '#models/memes.ts';
export default class memes_rand extends appSubCommandInterface
{
    cooldown = 3;
    parentName = 'memes';
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
        let search_db = true;
        let embedMsg = null;
        if(parseInt(process.env.REDDIT_MEMES_ODD) > 0){
            let randInt = utils.randomInt(1, 10);
            if(randInt <= parseInt(process.env.REDDIT_MEMES_ODD)){
                search_db = false;
                embedMsg = await redditUtil.random();
            }
        }
        

        //If don't have a meme from reddit or if the odds didn't hit, search the database for a meme
        if(!embedMsg || search_db){
            let meme = await model_memes.getRandom({server: interaction.guild.id});
            if(meme){
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
            }
        }


        if(!embedMsg){
            interaction.reply({
                content: lang.translate(this.parentName, `NO_RECORDS`),
                flags: [MessageFlags.Ephemeral]
            });
            return false;
        }
        await interaction.reply(embedMsg);
    }
}