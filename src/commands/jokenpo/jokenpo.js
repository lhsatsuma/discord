const { SlashCommandBuilder} = require('discord.js');


const returned = client.create(
    new SlashCommandBuilder()
    .setName('jokenpo')
    .setDescription('Play jokenpo against the bot!')
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    cooldown: 5,
    async execute(interaction) {
        await interaction.reply('Choose a subcommand to execute.');
    },
};