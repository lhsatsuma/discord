import { SlashCommandSubcommandBuilder, EmbedBuilder, MessageFlags, Colors, ChatInputCommandInteraction} from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import config from '#includes/config.ts';
import processRunning from '#includes/processRunning.ts';
export default class superadmin_status extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'superadmin';
    name = 'status';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
        .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`));

        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        if(config.DISCORD_BOT_ADMIN_CHANNEL != interaction.channel?.id){
            await interaction.reply({
                content: lang.translate('globals', 'CHANNEL_NOT_ALLOWED'),
                flags: [MessageFlags.Ephemeral]
            });
            return false;
        }

        const uptime = await this.main.runningPid.getUptime();
        const file_info = this.main.runningPid.getFileInfo();
        const date = new Date().toLocaleDateString(config.DISCORD_BOT_LOCALE);

        const runningPidScheduler = new processRunning(this.main, 'scheduler').init();
        const uptime_scheduler = await runningPidScheduler.getUptime();
        const file_info_scheduler = runningPidScheduler.getFileInfo();


        const pagEmbed = this.buildPagination(interaction, {limit: 1});
        pagEmbed.addEmbeds([
            new EmbedBuilder()
                .setTitle(lang.translate('superadmin', `SUBCMD_${this.name.toUpperCase()}_APP`))
                .setThumbnail(config.DISCORD_BOT_ICON)
                .setDescription(`**${date}**\n\nUptime: ${uptime}`)
                .addFields([
                    { name: 'OS', value: String(file_info.platform ?? 'N/A'), inline: true},
                    { name: 'PID', value: String(file_info.pid ?? 'N/A'), inline: true},
                    { name: 'Node Version', value: String(file_info.nodeVersion ?? 'N/A'), inline: true},
                    { name: 'DiscordJS Version', value: String(file_info.discordjsVersion ?? 'N/A'), inline: true},
                    { name: 'App Version', value: String(file_info.appVersion ?? 'N/A'), inline: true},
                ])
                .setColor(Colors.Blue),
            new EmbedBuilder()
                .setTitle(lang.translate('superadmin', `SUBCMD_${this.name.toUpperCase()}_SCHEDULER`))
                .setThumbnail(config.DISCORD_BOT_ICON)
                .setDescription(`**${date}**\n\nUptime: ${uptime_scheduler}`)
                .addFields([
                    { name: 'OS', value: String(file_info_scheduler.platform ?? 'N/A'), inline: true},
                    { name: 'PID', value: String(file_info_scheduler.pid ?? 'N/A'), inline: true},
                    { name: 'Node Version', value: String(file_info_scheduler.nodeVersion ?? 'N/A'), inline: true},
                    { name: 'DiscordJS Version', value: String(file_info_scheduler.discordjsVersion ?? 'N/A'), inline: true},
                    { name: 'App Version', value: String(file_info_scheduler.appVersion ?? 'N/A'), inline: true},
                ])
                .setColor(Colors.Blue)
        ],
    );
        pagEmbed.render();
        return true;
    }
}