const { EmbedBuilder} = require('discord.js');
const BeanJokenpo = getUtils().requireAgain(process.cwd()+'/src/models/Jokenpo.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('reset')
            .setDescription('Reset your status!'),
    async execute(interaction) {
            let embedMsg = new EmbedBuilder()
                .setColor(getUtils().getColor('GREEN'))
                .setTitle('Status Jokenpo of '+interaction.user.username)
                .setDescription('**status reseted!**');

            let bean = new BeanJokenpo();

            bean.user_id = interaction.user.id;
            await bean.resetScore();
            await interaction.reply({
                embeds: [embedMsg]
            });
            return true;
    }
}