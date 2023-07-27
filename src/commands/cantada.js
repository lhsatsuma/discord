const { SlashCommandBuilder, EmbedBuilder} = require('discord.js');

const returned = client.create(
    new SlashCommandBuilder()
        .setName('cantada')
        .setDescription('Cantadas Engraçadas!')
        .addUserOption(option =>
            option
                .setName('usuario')
                .setDescription('Membro para enviar a cantada'))
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    cooldown: 3,
    async execute(interaction) {
        let usuario = interaction.options.getUser('usuario');
        let embedMsg = new EmbedBuilder()
        .setColor(getUtils().getColor('BLUE'));
        let textRet = '';

        let cantadas_prontas = require(process.cwd() + '/uploads/cantadas.json');
        let random_key = Math.floor(Math.random() * cantadas_prontas.length);
        let cantada = cantadas_prontas[random_key];

        if(!!usuario){
            textRet += "**"+interaction.user.username+"** mandou uma cantada para **<@"+usuario.id+">**";
        }

        if(cantada.search('https://') !== -1 || cantada.search('http://') !== -1){
            //It's image
            embedMsg.setImage(cantada);
        }else{
            //It's a text
            embedMsg.setTitle(cantada);
        }

        await interaction.reply({
            content: textRet,
            embeds: [embedMsg]
        });
    },
};