const { EmbedBuilder} = require('discord.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName(translate('superadmin', 'CMD_HEARTBEAT'))
            .setDescription(translate('superadmin', 'CMD_HEARTBEAT_DESCRIPTION'))
            .addIntegerOption(option =>
                option
                    .setName('seconds')
                    .setDescription(translate('superadmin', 'CMD_HEARTBEAT_OPTION_SECONDS'))
                    .setRequired(true)
                    .setMinValue(5)
                    .setMaxValue(9999))
            .addStringOption(option =>
                    option.setName('savecfg')
                        .setDescription(translate('superadmin', 'CMD_HEARTBEAT_OPTION_SAVECFG'))
                        .addChoices(
                            { name: translate('globals', 'YES'), value: 'yes' },
                            { name: translate('globals', 'NO'), value: 'no' },
                        ),
            ),
    async execute(interaction) {
        if(!getUtils().channelSuperAdmin(interaction.channel.id)){
            await interaction.reply({
                content: translate('globals', 'CHANNEL_NOT_ALLOWED'),
                ephemeral: true,
            });
            return false;
        }

        const new_heartbeat = interaction.options.getInteger('seconds');
        const reloadcfg = interaction.options.getString('savecfg');
        let description = translate('superadmin', 'CMD_HEARTBEAT_SUCCESS', new_heartbeat);

        try {
            let env_override = getUtils().getEnvOverride();
            env_override.HEARTBEAT = new_heartbeat;
            getUtils().saveEnvOverride(env_override, reloadcfg === 'yes');
            if(reloadcfg === 'yes') {
                await getUtils().sendHeartbeat();
            }
        }catch(e) {
            log.Error('Failed to set new heartbeat: ' + e);
        }

        let embedMsg = new EmbedBuilder()
            .setColor(getUtils().getColor('GREEN'))
            .setTitle(translate('superadmin', 'CMD_HEARTBEAT'))
            .setAuthor(client.author)
            .setDescription(description)
            .setThumbnail(bot_cfg.BOT_ICON);
        await interaction.reply({
            embeds: [embedMsg],
            ephemeral: true,
        });
    },
};