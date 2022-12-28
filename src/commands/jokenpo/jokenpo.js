const { SlashCommandBuilder} = require('discord.js');

const status = requireAgain(process.cwd()+'/src/commands/jokenpo/subs/status.js');
const play = requireAgain(process.cwd()+'/src/commands/jokenpo/subs/play.js');
const reset = requireAgain(process.cwd()+'/src/commands/jokenpo/subs/reset.js');

module.exports = {
    data: new SlashCommandBuilder()
    .setName('jokenpo')
    .setDescription('Play jokenpo against the bot!')
    .addSubcommand(status.data)
    .addSubcommand(play.data)
    .addSubcommand(reset.data),
    subcommands: {
        'status': status,
        'play': play,
        'reset': reset,
    },
    cooldown: 5,
    async execute(interaction) {
        await interaction.reply('Choose a subcommand to execute.');
    },
};