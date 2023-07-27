module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('setchannel')
            .setDescription('[SUPERADMIN] Set this channel with superadmin'),
    async execute(interaction) {
        if(!!client.super_admin_channel){
            interaction.reply({
                content: 'Superadmin channel is already set',
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
            content: 'Channel <#'+interaction.channelId+'> is now superadmin!',
            ephemeral: true,
        })
        return true;
    },
};