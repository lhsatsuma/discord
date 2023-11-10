const { SlashCommandBuilder } = require('discord.js');

const returned = client.create(
    new SlashCommandBuilder()
        .setName(translate('jokes', 'CMD_JOKES'))
        .setDescription(translate('jokes', 'CMD_JOKES_DESCRIPTION'))
);

module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    cooldown: 2,
    async execute(interaction) {
        let path = process.cwd() + '/uploads/'+getLang().locale+'/jokes.json';
        if(!fs.existsSync(path)){
            await interaction.reply({
                content: translate('jokes', 'NO_RECORDS', getLang().locale),
                ephemeral: true,
            });
            return false;
        }
        let jokes = require(path);
        let random_key = Math.floor(Math.random() * jokes.length);
        let joke = jokes[random_key];
        let reply = '**'+joke['question']+'**';
        reply += "\n"+joke['answer'];
        await interaction.reply(reply);
    },
};