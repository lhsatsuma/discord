import { MessageFlags, SlashCommandSubcommandBuilder, type ChatInputCommandInteraction } from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import model_birthday_channels from '#models/birthday_channels.ts';

export default class birthday_remove_channel extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'birthday';
    name = 'remove_channel';

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
        const channelId = interaction.channelId;
        if (!serverId || !channelId) {
            await interaction.reply({
                content: lang.translate('globals', 'CHANNEL_NOT_ALLOWED'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const birthdayChannel = new model_birthday_channels();
        const registeredChannel = await birthdayChannel.selectActive({
            server: serverId,
            channel_id: channelId
        });

        if (registeredChannel === false) {
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        if (!registeredChannel) {
            await interaction.reply({
                content: lang.translate(this.parentName, 'SUBCMD_REMOVE_CHANNEL_NOT_FOUND'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const removed = await birthdayChannel.removeActive({
            server: serverId,
            channel_id: channelId
        });
        if (removed === false) {
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        await interaction.reply({
            content: lang.translate(this.parentName, 'SUBCMD_REMOVE_CHANNEL_SUCCESS', [channelId]),
            flags: [MessageFlags.Ephemeral]
        });
        return true;
    }
}
