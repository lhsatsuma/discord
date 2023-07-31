const { SlashCommandBuilder, EmbedBuilder} = require('discord.js');

const returned = client.create(
    new SlashCommandBuilder()
        .setName('pickup_lines')
        .setDescription('Funny Pick-up lines!')
        .addUserOption(option =>
            option
                .setName('user')
                .setDescription('Member to send a pick-up line'))
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    cooldown: 3,
    async execute(interaction) {
        let usuario = interaction.options.getUser('user');
        let embedMsg = new EmbedBuilder()
        .setColor(getUtils().getColor('BLUE'));
        let textRet = '';

        let pickup_lines_prontas = require(process.cwd() + '/uploads/pickup_lines.json');
        let random_key = Math.floor(Math.random() * pickup_lines_prontas.length);
        let pickup_lines = pickup_lines_prontas[random_key];

        if(!!usuario){
            textRet += "**"+interaction.user.username+"** sended a pick-up line to **<@"+usuario.id+">**";
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
    },
};