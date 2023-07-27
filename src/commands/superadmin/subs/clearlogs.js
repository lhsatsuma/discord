const { EmbedBuilder} = require('discord.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('clearlogs')
            .setDescription('[SUPERADMIN] Clear Logs'),
    async execute(interaction) {
        if(!getUtils().channelSuperAdmin(interaction.channel.id)){
            await interaction.reply({
                content: 'Not allowed to execute this command here.',
                ephemeral: true,
            });
            return false;
        }

        log.Info('Clearing logs...');
        const basePath = process.cwd()+'/logs/';
        const logsPaths = fs.readdirSync(basePath);
        let description = `Successfully cleared ${logsPaths.length} logs!`;
        try {
            for (const logPath of logsPaths) {
                log.Info('Clearing log path: '+logPath);
                fs.rmSync(basePath+logPath, { recursive: true});
            }
            log.Info(`Cleared ${logsPaths.length}`);
        }catch(e){
            log.Error('Failed to clear logs: '+e);
            description = 'Failed to clear logs!!!';
        }

        let embedMsg = new EmbedBuilder()
            .setColor(getUtils().getColor('GREEN'))
            .setTitle('Clear Logs')
            .setAuthor(client.author)
            .setDescription(description)
            .setThumbnail(bot_cfg.BOT_ICON);
        await interaction.reply({
            embeds: [embedMsg],
            ephemeral: true,
        });
    },
};