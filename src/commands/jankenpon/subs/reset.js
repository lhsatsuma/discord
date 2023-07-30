const { EmbedBuilder} = require('discord.js');
const BeanJankenpon = getUtils().requireAgain(process.cwd()+'/src/models/Jankenpon.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('reset')
            .setDescription('Reset your status!'),
    async execute(interaction) {
            let embedMsg = new EmbedBuilder()
                .setColor(getUtils().getColor('GREEN'))
                .setTitle('Status Jankenpon of '+interaction.user.username)
                .setDescription('**status reseted!**');

            let bean = new BeanJankenpon();

            bean.user_id = interaction.user.id;
            await bean.resetScore();
            await interaction.reply({
                embeds: [embedMsg]
            });
            return true;
    }
}