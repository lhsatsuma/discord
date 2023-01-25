const { EmbedBuilder} = require('discord.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('reloadcfg')
            .setDescription('[SUPERADMIN] Reload CFG'),
    async execute(interaction) {
        if(!client.channelSuperAdmin(interaction.channel.id)){
            await interaction.reply({
                content: 'Not allowed to execute this command here.',
                ephemeral: true,
            });
            return false;
        }

        client.log.Info('Reloading config.json');
        let description = 'Successfully reloaded CFG file!';
        try {
            global.bot_cfg = requireAgain(process.cwd()+'/config/config.json');
        }catch(e){
            client.log.Error('Failed to reload config.json: '+e);
            description = 'Failed to reload CFG file!!!';
        }
        client.log.Info('Reloaded config.json');

        let embedMsg = new EmbedBuilder()
            .setColor(getColor('GREEN'))
            .setTitle('Reload CFG')
            .setAuthor(client.author)
            .setDescription(description)
            .setThumbnail(bot_cfg.discordOptions.icon);
        await interaction.reply({
            embeds: [embedMsg],
            ephemeral: true,
        });
    },
};