module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('setchannel')
            .setDescription(translate('superadmin', 'CMD_SETCHANNEL')),
    async execute(interaction) {
        if(!!client.super_admin_channel){
            interaction.reply({
                content: translate('superadmin', 'CMD_SETCHANNEL_ALREADY_SET'),
                ephemeral: true,
            })
            return true;
        }

        //Saving to .env.override
        let env_override = getUtils().getEnvOverride();

        env_override.ADMIN_CHANNEL_ID = interaction.channelId;
        client.super_admin_channel = interaction.channel;

        getUtils().saveEnvOverride(env_override, true);

        interaction.reply({
            content: translate('superadmin', 'CMD_SETCHANNEL_SUCCESS', interaction.channelId),
            ephemeral: true,
        })
        return true;
    },
};