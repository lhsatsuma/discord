const { EmbedBuilder} = require('discord.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('reloadcfg')
            .setDescription('[SUPERADMIN] Reload CFG'),
    async execute(interaction) {
        if(!getUtils().channelSuperAdmin(interaction.channel.id)){
            await interaction.reply({
                content: 'Not allowed to execute this command here.',
                ephemeral: true,
            });
            return false;
        }

        log.Info('Reloading config');
        let description = 'Successfully reloaded CFG file!';
        try {
            global.bot_cfg = getUtils().requireAgain(process.cwd()+'/src/utils/config.js');
        }catch(e){
            log.Error('Failed to reload config.json: '+e);
            description = 'Failed to reload CFG file!!!';
        }
        log.Info('Reloaded config');

        let embedMsg = new EmbedBuilder()
            .setColor(getUtils().getColor('GREEN'))
            .setTitle('Reload CFG')
            .setAuthor(client.author)
            .setDescription(description)
            .setThumbnail(bot_cfg.BOT_ICON);
        await interaction.reply({
            embeds: [embedMsg],
            ephemeral: true,
        });
    },
};