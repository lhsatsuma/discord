module.exports = {
    data: (subcommand) =>
        subcommand
            .setName(translate('superadmin', 'CMD_LOCALE'))
            .setDescription(translate('superadmin', 'CMD_LOCALE_DESCRIPTION'))
            .addStringOption(option => {
                    option.setName('locale')
                        .setDescription(translate('superadmin', 'CMD_LOCALE_OPTION_NAME'))
                        .setRequired(true);
                    getLang().availableLocales.forEach((ipt) => {
                        option.addChoices(ipt);
                    });
                    return option;
                }
            ),
    async execute(interaction) {
        if(!getUtils().channelSuperAdmin(interaction.channel.id)){
            await interaction.reply({
                content: translate('globals', 'CHANNEL_NOT_ALLOWED'),
                ephemeral: true,
            });
            return false;
        }

        const locale = interaction.options.getString('locale');
        if(!getLang().validateLocale(locale)){
            await interaction.reply({
                content: translate('superadmin', 'CMD_LOCALE_ERROR'),
                ephemeral: true
            });
            return false;
        }

        try {

            //Saving on overide
            let env_override = getUtils().getEnvOverride();
            env_override.BOT_LOCALE = locale;
            getUtils().saveEnvOverride(env_override, true);

            //Reseting locales and import again
            log.Info('Reloading locales');
            await getLang(true).importLocales();
            log.Info('Reloading locales COMPLETED!');

            log.Info('Reloading commands');
            await client.loadCommands(true);
            log.Info('Reloading commands COMPLETED!');

        }catch(e) {
            log.Error('Failed to set new locale: ' + e);
        }

        let locale_name = getLang().availableLocales.filter((available) => available.value === locale);
        await interaction.reply({
            content: translate('superadmin', 'CMD_LOCALE_SUCCESS', locale, locale_name[0].name),
            ephemeral: true,
        });
    },
};