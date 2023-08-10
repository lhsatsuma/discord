const { SlashCommandBuilder } = require('discord.js');

const returned = client.create(
    new SlashCommandBuilder()
        .setName('jokes')
        .setDescription(translate('jokes', 'CMD_JOKES'))
);

module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    cooldown: 2,
    async execute(interaction) {
        let jokes = require(process.cwd() + '/uploads/'+getLang().locale+'/jokes.json');
        let random_key = Math.floor(Math.random() * jokes.length);
        let joke = jokes[random_key];
        let reply = '**'+joke['question']+'**';
        reply += "\n"+joke['answer'];
        await interaction.reply(reply);
    },
};