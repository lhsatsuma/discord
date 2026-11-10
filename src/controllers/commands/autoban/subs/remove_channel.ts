import { MessageFlags, PermissionFlagsBits, SlashCommandSubcommandBuilder, type ChatInputCommandInteraction } from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import model_channels_forbidden from '#models/channels_forbidden.ts';

export default class autoban_remove_channel extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'autoban';
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
        if (!interaction.memberPermissions?.has(PermissionFlagsBits.ManageGuild)) {
            await interaction.reply({
                content: lang.translate('globals', 'CHANNEL_NOT_ALLOWED'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const serverId = interaction.guildId;
        const channelId = interaction.channelId;
        if (!serverId || !channelId) {
            await interaction.reply({
                content: lang.translate('globals', 'CHANNEL_NOT_ALLOWED'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const forbiddenChannel = new model_channels_forbidden();
        const existingChannel = await forbiddenChannel.selectActive({
            server: serverId,
            channel_id: channelId
        });

        if (existingChannel === false) {
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        if (!existingChannel) {
            await interaction.reply({
                content: lang.translate(this.parentName, 'SUBCMD_REMOVE_CHANNEL_NOT_FOUND'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const removed = await forbiddenChannel.removeActive({
            server: serverId,
            channel_id: channelId
        });
        if (!removed) {
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
