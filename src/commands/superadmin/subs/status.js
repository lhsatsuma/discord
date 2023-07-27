const { EmbedBuilder} = require('discord.js');
const {pagination, ButtonTypes, ButtonStyles} = require("@devraelfreeze/discordjs-pagination");
module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('status')
            .setDescription('[SUPERADMIN] Status of System BOT'),
    async execute(interaction) {
        if(!getUtils().channelSuperAdmin(interaction.channel.id)){
            await interaction.reply({
                content: 'Not allowed to execute this command here.',
                ephemeral: true,
            });
            return false;
        }
        const ProcessRunning = require('../../../utils/ProcessRunning.js');
        let running = new ProcessRunning();
        let runningScheduler = new ProcessRunning('scheduler', false);
        let embedMsg;

        let arrayEmbeds = [];
        embedMsg = new EmbedBuilder()
            .setTitle('Status app')
            .setThumbnail(bot_cfg.BOT_ICON)
            .setDescription(await running.mount_str_check_run())
            .setColor(getUtils().getColor('GREEN'));
        arrayEmbeds.push(embedMsg);

        if(await runningScheduler.check_running()) {
            embedMsg = new EmbedBuilder()
                .setTitle('Status scheduler')
                .setThumbnail(bot_cfg.BOT_ICON)
                .setDescription(await runningScheduler.mount_str_check_run())
                .setColor(getUtils().getColor('GREEN'));
            arrayEmbeds.push(embedMsg);
        }



        await pagination({
            embeds: arrayEmbeds, /** Array of embeds objects */
            author: interaction.member.user,
            interaction: interaction,
            ephemeral: true,
            time: 200*100, /** 40 seconds */
            disableButtons: false, /** Remove buttons after timeout */
            fastSkip: false,
            pageTravel: false,
            buttons: [
                {
                    type: ButtonTypes.previous,
                    label: 'Anterior',
                    style: ButtonStyles.Primary
                },
                {
                    type: ButtonTypes.next,
                    label: 'Próximo',
                    style: ButtonStyles.Success
                }
            ]
        });
        return true;
    },
};