const { EmbedBuilder} = require('discord.js');
const {pagination, ButtonTypes, ButtonStyles} = require("@devraelfreeze/discordjs-pagination");
const BeanBase = require("../../../utils/Bean");
const {get} = require("pidusage/lib/history");
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

        const BeanBase = getUtils().requireAgain(process.cwd()+'/src/utils/Bean.js');
        const bean = new BeanBase();
        const date = bean.unformatField('datetime-locale', new Date());
        const ProcessRunning = require('../../../utils/ProcessRunning.js');


        let running = new ProcessRunning();
        let runningScheduler = new ProcessRunning('scheduler', false);
        let appInfo = await running.getSysInfo();
        let appUptime = await running.getUptime();

        let arrayEmbeds = [];
        let embedMsg = new EmbedBuilder()
            .setTitle('Status app')
            .setThumbnail(bot_cfg.BOT_ICON)
            .setDescription(`**${date}**\n\nUptime: ${appUptime}`)
            .addFields([
                { name: 'PID', value: appInfo.pid, inline: true},
                { name: 'Node Version', value: appInfo.nodeversion, inline: true},
                { name: 'DiscordJS Version', value: appInfo.discordjs, inline: true},
                { name: 'App Version', value: appInfo.appversion, inline: true},
            ])
            .setColor(getUtils().getColor('GREEN'));
        arrayEmbeds.push(embedMsg);

        if(await runningScheduler.check_running()) {
            let schedulerInfo = await runningScheduler.getSysInfo();
            let schedulerUptime = await runningScheduler.getUptime();
            embedMsg = new EmbedBuilder()
                .setTitle('Status scheduler')
                .setThumbnail(bot_cfg.BOT_ICON)
                .setDescription(`**${date}**\n\nUptime: ${schedulerUptime}`)
                .addFields([
                    { name: 'PID', value: schedulerInfo.pid, inline: true},
                    { name: 'Node Version', value: schedulerInfo.nodeversion, inline: true},
                    { name: 'DiscordJS Version', value: schedulerInfo.discordjs, inline: true},
                    { name: 'App Version', value: schedulerInfo.appversion, inline: true},
                ])
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