const { EmbedBuilder} = require('discord.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName(translate('superadmin', 'CMD_CLEARLOGS'))
            .setDescription(translate('superadmin', 'CMD_CLEARLOGS_DESCRIPTION')),
    async execute(interaction) {
        if(!getUtils().channelSuperAdmin(interaction.channel.id)){
            await interaction.reply({
                content: translate('global', 'CHANNEL_NOT_ALLOWED'),
                ephemeral: true,
            });
            return false;
        }

        log.Info('Clearing logs...');
        const basePath = process.cwd()+'/logs/';
        const logsPaths = fs.readdirSync(basePath);
        let description = translate('superadmin', 'CMD_CLEARLOGS_SUCCESS' , logsPaths.length);
        try {
            for (const logPath of logsPaths) {
                log.Info('Clearing log path: '+logPath);
                fs.rmSync(basePath+logPath, { recursive: true});
            }
            log.Info(`Cleared ${logsPaths.length} logs`);
        }catch(e){
            log.Error('Failed to clear logs: '+e);
            description = translate('superadmin', 'CMD_CLEARLOGS_ERROR');
        }

        let embedMsg = new EmbedBuilder()
            .setColor(getUtils().getColor('GREEN'))
            .setTitle(translate('superadmin', 'CMD_CLEARLOGS'))
            .setAuthor(client.author)
            .setDescription(description)
            .setThumbnail(bot_cfg.BOT_ICON);
        await interaction.reply({
            embeds: [embedMsg],
            ephemeral: true,
        });
    },
};