import { SlashCommandSubcommandBuilder, EmbedBuilder, MessageFlags, Colors, ChatInputCommandInteraction} from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import redditUtil from '#includes/redditUtil.ts';
import utils from '#includes/utils.ts';
import model_memes from '#models/memes.ts';
import config from '#includes/config.ts';
export default class memes_rand extends appSubCommandBase
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
        if(config.REDDIT_MEMES_ODD > 0){
            let randInt = utils.randomInt(1, 10);
            if(randInt <= config.REDDIT_MEMES_ODD){
                search_db = false;
                embedMsg = await redditUtil.random();
            }
        }
        

        //If don't have a meme from reddit or if the odds didn't hit, search the database for a meme
        if(!embedMsg || search_db){
            let meme = await model_memes.getRandom({server: interaction.guild?.id});
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
        return true;
    }
}