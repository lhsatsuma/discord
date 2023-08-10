const { SlashCommandBuilder} = require('discord.js');


const returned = client.create(
    new SlashCommandBuilder()
        .setName('memes')
        .setDescription('Memes of members!')
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    cooldown: 2,
    async execute(interaction) {
        await interaction.reply('Choose a subcommand to execute.');
    },
};