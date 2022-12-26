const { SlashCommandBuilder} = require('discord.js');

const status = requireAgain(process.cwd()+'/src/commands/jokenpo/subs/status.js');
const play = requireAgain(process.cwd()+'/src/commands/jokenpo/subs/play.js');

module.exports = {
    data: new SlashCommandBuilder()
    .setName('jokenpo')
    .setDescription('Play jokenpo against the bot!')
    .addSubcommand(status.data)
    .addSubcommand(play.data),
    subcommands: {
        'status': status,
        'play': play,
    },
    cooldown: 5,
    async execute(interaction) {
        await interaction.reply('Choose a subcommand to execute.');
    },
};