import { SlashCommandSubcommandBuilder, EmbedBuilder, MessageFlags, type ChatInputCommandInteraction} from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import redditUtil from '#includes/redditUtil.ts';
import model_memes from '#models/memes.ts';
import log from '#includes/log.ts';
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
        await interaction.deferReply();

        let search_db = true;
        let embedMsg = null;
        const serverId = interaction.guildId;
        if (serverId) {
            try {
                embedMsg = await redditUtil.random(serverId);
            } catch (error) {
                log.warning(`Error fetching a Reddit meme for server ${serverId}: ${error}`);
            }
            search_db = !embedMsg;
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
            await interaction.deleteReply();
            await interaction.followUp({
                content: lang.translate(this.parentName, `NO_RECORDS`),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }
        await interaction.editReply(embedMsg);
        return true;
    }
}