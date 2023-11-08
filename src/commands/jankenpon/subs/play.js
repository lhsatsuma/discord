const { EmbedBuilder} = require('discord.js');
const BeanJankenpon = getUtils().requireAgain(process.cwd()+'/src/models/Jankenpon.js');

module.exports = {
    data: (subcommand) =>
    subcommand
    .setName(translate('jankenpon', 'CMD_PLAY'))
    .setDescription(translate('jankenpon', 'CMD_PLAY_DESCRIPTION'))
    .addStringOption(option =>
        option.setName('choose')
            .setDescription(translate('jankenpon', 'CMD_PLAY_OPTION_CHOOSE'))
            .setRequired(true)
            .addChoices(
                { name: translate('jankenpon', 'PAPER'), value: 'paper' },
                { name: translate('jankenpon', 'SCISSORS'), value: 'scissors' },
                { name: translate('jankenpon', 'ROCK'), value: 'rock' },
            )
    ),
    async execute(interaction) {
        const choose = interaction.options.getString('choose').toString();

        let options = ['paper', 'scissors', 'rock'];

        let bean = new BeanJankenpon();

        bean.server = interaction.guildId;
        bean.user_id = interaction.user.id;
        let random = Math.floor(Math.random() * options.length);
        let bot_choose = options[random].toString();
        let result = '';

        if(
            (choose == 'paper' && bot_choose == 'paper')
            || (choose == 'scissors' && bot_choose == 'scissors')
            || (choose == 'rock' && bot_choose == 'rock')
        ){
            result = 'draw';
        }else if(
            (choose == 'paper' && bot_choose == 'rock')
            || (choose == 'scissors' && bot_choose == 'paper')
            || (choose == 'rock' && bot_choose == 'scissors')
        ){
            result = 'win';
        }else if(
            (choose == 'paper' && bot_choose == 'scissors')
            || (choose == 'scissors' && bot_choose == 'rock')
            || (choose == 'rock' && bot_choose == 'paper')
        ){
            result = 'lose';
        }

        let embedMsg = new EmbedBuilder();
        embedMsg.setTitle(translate('jankenpon', 'CMD_PLAY_SUCCESS', interaction.user.username));
        let description = translate('jankenpon', 'CMD_PLAY_PLAYED')+": **"+translate('jankenpon', choose.toUpperCase())+"**\n";
        let color = getUtils().getColor('ORANGE');


        description += translate('jankenpon', 'CMD_PLAY_PLAYED')+": **"+translate('jankenpon', bot_choose.toUpperCase())+"**\n";

        if(result == 'draw'){
            await bean.plusDraw(choose);
            color = getUtils().getColor('ORANGE');
            description += `\n**${translate('jankenpon', 'CMD_PLAY_DRAW')}** :thinking:`;
        }else if(result == 'win'){
            await bean.plusWin(choose);
            color = getUtils().getColor('GREEN');
            description += `\n**${translate('jankenpon', 'CMD_PLAY_WIN')}** :tada:`;
        }else if(result == 'lose'){
            await bean.plusLose(choose);
            description += `\n**${translate('jankenpon', 'CMD_PLAY_LOSE')}** :cry:`;
        }



        embedMsg.setDescription(description);
        embedMsg.setColor(color);
        await interaction.reply({
            embeds: [embedMsg]
        });
        return true;
    },
}