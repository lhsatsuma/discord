import { ChatInputCommandInteraction, Collection, SlashCommandSubcommandBuilder } from 'discord.js';
import lang from '#includes/lang.js';
import appSubCommandInterface from '#includes/commands/appSubCommandInterface.js';
import model_memes from '#models/memes.js';
export default class memes_list extends appSubCommandInterface
{
    cooldown = 3;
    parentName = 'memes';
    name = 'list';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
        .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`));

        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        let memes_found = await model_memes.listAll(interaction.guild.id);
        if(memes_found == false){
            interaction.reply({
                content: lang.translate('system', 'DB_ERROR')
            });
            return true;
        }
        memes_found = memes_found.map((meme_found) => { return `#${meme_found.order_id} | ${meme_found.description}`});
        
        let pag_builded = this.buildPagination(interaction, {limit: 20});
        pag_builded.setDescriptions(memes_found);
        pag_builded.render();
        return true;
    }
}