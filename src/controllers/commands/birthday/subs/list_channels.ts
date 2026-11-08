import { MessageFlags, SlashCommandSubcommandBuilder, type ChatInputCommandInteraction } from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import model_birthday_channels from '#models/birthday_channels.ts';

export default class birthday_list_channels extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'birthday';
    name = 'list_channels';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
            .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
            .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`));

        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        const serverId = interaction.guildId;
        if (!serverId) {
            await interaction.reply({
                content: lang.translate('globals', 'CHANNEL_NOT_ALLOWED'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const birthdayChannel = new model_birthday_channels();
        const channels = await birthdayChannel.listByServer({server: serverId});
        if (channels === false) {
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        if (!channels.length) {
            await interaction.reply({
                content: lang.translate(this.parentName, 'SUBCMD_LIST_CHANNELS_EMPTY'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const channelMentions = channels.map((channelId) => `<#${channelId}>`).join(', ');
        await interaction.reply({
            content: lang.translate(this.parentName, 'SUBCMD_LIST_CHANNELS_SUCCESS', [channelMentions]),
            flags: [MessageFlags.Ephemeral]
        });
        return true;
    }
}
