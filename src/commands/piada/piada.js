const { SlashCommandBuilder } = require('discord.js');

const returned = client.create(
    new SlashCommandBuilder()
        .setName('piada')
        .setDescription('Piadas/Trocadilhos ruins!')
);

module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    cooldown: 2,
    async execute(interaction) {
        let piadas_prontas = require(process.cwd() + '/uploads/trocadilhos.json');
        let random_key = Math.floor(Math.random() * piadas_prontas.length);
        let piada = piadas_prontas[random_key];
        let reply = '**'+piada['pergunta']+'**';
        reply += "\n"+piada['resposta'];
        await interaction.reply(reply);
    },
};