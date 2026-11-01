import { SlashCommandSubcommandBuilder, EmbedBuilder, MessageFlags, Colors} from 'discord.js';
import lang from '#includes/lang.js';
import model_pickup_lines from '#models/pickup_lines.js';
import appSubCommandInterface from '#includes/commands/appSubCommandInterface.js';
export default class pickup_lines_rand extends appSubCommandInterface
{
    cooldown = 3;
    parentName = 'pickup_lines';
    name = 'rand';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
        .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`))
        .addUserOption(option =>
            option
                .setName('user')
                .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_OPTION_USER`)));

        return this;
    }

    async execute(interaction)
    {
        let pickup_lines = await model_pickup_lines.getRandom();
        
        if(pickup_lines == false){
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return false;
        }

        if(pickup_lines == null){
            await interaction.reply({
                content: lang.translate(this.parentName, 'NO_RECORDS'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        let user = interaction.options.getUser('user');
        let embedMsg = new EmbedBuilder()
        .setColor(Colors.Blue);
        let textRet = '';

        if(!!user){
            textRet += lang.translate(this.parentName, 'SUBCMD_RAND_SEND_USER', [interaction.user.id, user.id]);
        }

        if(pickup_lines.content.toString().search('https://') !== -1 || pickup_lines.content.toString().search('http://') !== -1){
            //It's image
            embedMsg.setImage(pickup_lines.content.toString());
        }else{
            //It's a text
            embedMsg.setTitle(pickup_lines.content.toString());
        }

        await interaction.reply({
            content: textRet,
            embeds: [embedMsg]
        });
    }
}