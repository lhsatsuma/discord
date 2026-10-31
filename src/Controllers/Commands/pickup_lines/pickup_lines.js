import { SlashCommandBuilder, EmbedBuilder, MessageFlags, Colors} from 'discord.js';
import commandBase from '#includes/commands/commandBase.js';
import lang from '#includes/lang.js';
import model_pickup_lines from '#src/models/pickup_lines.js';
import fs from 'fs';
export default class command extends commandBase
{
    cooldown = 3;
    constructor()
    {
        super();
        this.commandBuilder = new SlashCommandBuilder()
        .setName(lang.translate('pickup_lines', 'CMD_PICKUP_LINES'))
        .setDescription(lang.translate('pickup_lines', 'CMD_PICKUP_LINES_DESCRIPTION'))
        .addUserOption(option =>
            option
                .setName('user')
                .setDescription(lang.translate('pickup_lines', 'CMD_PICKUP_LINES_OPTION_USER')))
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
                content: lang.translate('pickup_lines', 'NO_RECORDS'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        let user = interaction.options.getUser('user');
        let embedMsg = new EmbedBuilder()
        .setColor(Colors.Blue);
        let textRet = '';

        if(!!user){
            textRet += lang.translate('pickup_lines', 'CMD_PICKUP_SUCCESS_USER', [interaction.user.id, user.id]);
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