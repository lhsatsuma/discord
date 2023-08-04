const { EmbedBuilder} = require('discord.js');
const BeanMemes = getUtils().requireAgain(process.cwd()+'/src/models/Memes.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('rand')
            .setDescription('Random meme')
    ,
    async execute(interaction) {

        let embedMsg = new EmbedBuilder()
            .setColor(getUtils().getColor('BLUE'));

        let bean = new BeanMemes();
        bean.server = interaction.guildId;
        await bean.selectRandom();


        //Protection against random not found
        if(!bean.id){
            await interaction.reply({
                content: `Meme not found!`,
                ephemeral: true
            });
            return true;
        }

        if(bean.url){
            embedMsg.setImage(bean.url);
        }

        //Update counter of random showed
        await bean.plusCounter();

        await interaction.deferReply();
        await interaction.deleteReply();
        await interaction.channel.send({
            content: `[${bean.order_id}] ${bean.name}`,
            embeds: [embedMsg]
        });
    },
}