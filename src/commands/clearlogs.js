const { SlashCommandBuilder, EmbedBuilder,PermissionFlagsBits} = require('discord.js');
const returned = client.create(
    new SlashCommandBuilder()
        .setName('clearlogs')
        .setDescription('[SUPERADMIN] Clear Logs')
        .setDefaultMemberPermissions(PermissionFlagsBits.Administrator)
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    cooldown: 3,
    async execute(interaction) {
        if(!client.channelSuperAdmin(interaction.channel.id)){
            await interaction.reply({
                content: 'Not allowed to execute this command here.',
                ephemeral: true,
            });
            return false;
        }
        let description = 'Successfully reloaded CFG file!';

        client.log.Info('Clearing logs...');
        const basePath = process.cwd()+'/logs/';
        const logsPaths = fs.readdirSync(basePath);
        try {
            for (const logPath of logsPaths) {
                client.log.Info('Clearing log path: '+logPath);
                fs.rmSync(basePath+logPath, { recursive: true});
            }
            client.log.Info(`Cleared ${logsPaths.length}`);
        }catch(e){
            client.log.Error('Failed to clear logs: '+e);
            description = 'Failed to clear logs!!!';
        }

        let embedMsg = new EmbedBuilder()
            .setColor(getColor('GREEN'))
            .setTitle('Clear Logs')
            .setAuthor(client.author)
            .setDescription(description)
            .setThumbnail(bot_cfg.discordOptions.icon);
        await interaction.reply({
            embeds: [embedMsg],
            ephemeral: true,
        });
    },
};