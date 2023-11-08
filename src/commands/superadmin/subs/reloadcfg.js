const { EmbedBuilder} = require('discord.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName(translate('superadmin', 'CMD_RELOADCFG'))
            .setDescription(translate('superadmin', 'CMD_RELOADCFG_DESCRIPTION')),
    async execute(interaction) {
        if(!getUtils().channelSuperAdmin(interaction.channel.id)){
            await interaction.reply({
                content: translate('globals', 'CHANNEL_NOT_ALLOWED'),
                ephemeral: true,
            });
            return false;
        }

        log.Info('Reloading config');
        let description = translate('superadmin', 'CMD_RELOADCFG_SUCCESS');
        try {
            global.bot_cfg = getUtils().requireAgain(process.cwd()+'/src/utils/config.js');
        }catch(e){
            log.Error('Failed to reload config.json: '+e);
            description = translate('superadmin', 'CMD_RELOADCFG_ERROR');
        }
        log.Info('Reloaded config');

        let embedMsg = new EmbedBuilder()
            .setColor(getUtils().getColor('GREEN'))
            .setTitle(translate('superadmin', 'CMD_RELOADCFG'))
            .setAuthor(client.author)
            .setDescription(description)
            .setThumbnail(bot_cfg.BOT_ICON);
        await interaction.reply({
            embeds: [embedMsg],
            ephemeral: true,
        });
    },
};