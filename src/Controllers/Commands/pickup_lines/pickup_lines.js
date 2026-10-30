import { SlashCommandBuilder, EmbedBuilder} from 'discord.js';
import commandBase from '../../..//Includes/commandBase.js';

export default class command extends commandBase
{
    cooldown = 3;
    constructor()
    {
        super();
        this.commandBuilder = new SlashCommandBuilder()
        .setName(global.lang.translate('pickup_lines', 'CMD_PICKUP_LINES'))
        .setDescription(global.lang.translate('pickup_lines', 'CMD_PICKUP_LINES_DESCRIPTION'))
        .addUserOption(option =>
            option
                .setName('user')
                .setDescription(global.lang.translate('pickup_lines', 'CMD_PICKUP_LINES_OPTION_USER')))
    }

    async execute(interaction)
    {
        let path = process.cwd() + '/uploads/'+getLang().locale+'/pickup_lines.json';
        if(!fs.existsSync(path)){
            await interaction.reply({
                content: global.lang.translate('pickup_lines', 'NO_RECORDS', getLang().locale),
                ephemeral: true,
            });
            return false;
        }

        let user = interaction.options.getUser('user');
        let embedMsg = new EmbedBuilder()
        .setColor(getUtils().getColor('BLUE'));
        let textRet = '';

        let pickup_lines_prontas = require(path);
        let random_key = Math.floor(Math.random() * pickup_lines_prontas.length);
        let pickup_lines = pickup_lines_prontas[random_key];

        if(!!user){
            textRet += global.lang.translate('pickup_lines', 'CMD_PICKUP_SUCCESS_USER', interaction.user.id, user.id);
        }

        if(pickup_lines.search('https://') !== -1 || pickup_lines.search('http://') !== -1){
            //It's image
            embedMsg.setImage(pickup_lines);
        }else{
            //It's a text
            embedMsg.setTitle(pickup_lines);
        }

        await interaction.reply({
            content: textRet,
            embeds: [embedMsg]
        });
    }
}