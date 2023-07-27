const { EmbedBuilder} = require('discord.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('heartbeat')
            .setDescription('[SUPERADMIN] Change heartbeat seconds')
            .addIntegerOption(option =>
                option
                    .setName('seconds')
                    .setDescription('Seconds to send the heartbeat')
                    .setRequired(true)
                    .setMinValue(5)
                    .setMaxValue(9999))
            .addStringOption(option =>
                    option.setName('savecfg')
                        .setDescription('Save and reload CFG')
                        .addChoices(
                            { name: 'Yes', value: 'yes' },
                            { name: 'No', value: 'no' },
                        ),
            ),
    async execute(interaction) {
        if(!getUtils().channelSuperAdmin(interaction.channel.id)){
            await interaction.reply({
                content: 'Not allowed to execute this command here.',
                ephemeral: true,
            });
            return false;
        }

        const new_heartbeat = interaction.options.getInteger('seconds');
        const reloadcfg = interaction.options.getString('savecfg');
        let description = 'Successfully changed heartbeat to '+new_heartbeat+'!';

        try {
            let env_override = getUtils().getEnvOverride();
            env_override.HEARTBEAT = new_heartbeat;
            getUtils().saveEnvOverride(env_override, reloadcfg === 'yes');
            await getUtils().sendHeartbeat();
        }catch(e) {
            log.Error('Failed to set new heartbeat: ' + e);
        }

        let embedMsg = new EmbedBuilder()
            .setColor(getUtils().getColor('GREEN'))
            .setTitle('[SUPERADMIN] Change heartbeat seconds')
            .setAuthor(client.author)
            .setDescription(description)
            .setThumbnail(bot_cfg.BOT_ICON);
        await interaction.reply({
            embeds: [embedMsg],
            ephemeral: true,
        });
    },
};