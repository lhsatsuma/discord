const { EmbedBuilder} = require('discord.js');
const BeanJankenpon = getUtils().requireAgain(process.cwd()+'/src/models/Jankenpon.js');

module.exports = {
    data: (subcommand) =>
    subcommand
    .setName('play')
    .setDescription('Play a match!')
    .addStringOption(option =>
        option.setName('choose')
            .setDescription('Choose your play')
            .setRequired(true)
            .addChoices(
                { name: 'Paper', value: 'paper' },
                { name: 'Scissors', value: 'scissors' },
                { name: 'Rock', value: 'rock' },
            )
    ),
    async execute(interaction) {
        const choose = interaction.options.getString('choose').toString();

        let options = ['paper', 'scissors', 'rock'];

        if(options.indexOf(choose) !== -1){

            let bean = new BeanJankenpon();

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
            embedMsg.setTitle(interaction.user.username+' played jankenpon!');
            let description = "You played: **"+choose.toUpperCase()+"**\n";
            let color = getUtils().getColor('ORANGE');


            description += "Bot played: **"+bot_choose.toUpperCase()+"**\n";

            if(result == 'draw'){
                await bean.plusDraw(choose);
                color = getUtils().getColor('ORANGE');
                description += "\n**IT'S A DRAW!** :thinking:";
            }else if(result == 'win'){
                await bean.plusWin(choose);
                color = getUtils().getColor('GREEN');
                description += "\n**YOU WIN!** :tada:";
            }else if(result == 'lose'){
                await bean.plusLose(choose);
                description += "\n**YOU LOSE! TRY AGAIN!** :cry:";
            }



            embedMsg.setDescription(description);
            embedMsg.setColor(color);
            await interaction.reply({
                embeds: [embedMsg]
            });
            return true;
        }


        await interaction.reply({
            content: 'Error while playing jankenpon',
            ephemeral: true,
        });
        return false;
    },
}