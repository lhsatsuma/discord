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
        if(!client.channelSuperAdmin(interaction.channel.id)){
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
            bot_cfg.heartbeat = new_heartbeat;
            if (reloadcfg === 'yes') {
                const new_json = JSON.stringify(bot_cfg, null, 4);
                fs.writeFileSync(process.cwd()+'/config/config.json', new_json);
                client.log.Info('Reloading config.json');
                global.bot_cfg = requireAgain(process.cwd() + '/config/config.json');
                client.log.Info('Reloaded config.json');
            }
        }catch(e) {
            client.log.Error('Failed to set new heartbeat: ' + e);
        }
        let embedMsg = new EmbedBuilder()
            .setColor(getColor('GREEN'))
            .setTitle('[SUPERADMIN] Change heartbeat seconds')
            .setAuthor(client.author)
            .setDescription(description)
            .setThumbnail(bot_cfg.discordOptions.icon);
        await interaction.reply({
            embeds: [embedMsg],
            ephemeral: true,
        });
    },
};