import { SlashCommandSubcommandBuilder, EmbedBuilder, MessageFlags, Colors, ChatInputCommandInteraction} from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import config from '#includes/config.ts';
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

        const pagEmbed = this.buildPagination(interaction, {});
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
                .setColor(Colors.Blue)
        ]);
        pagEmbed.render();
        return true;
    }
}