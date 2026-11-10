import { MessageFlags, PermissionFlagsBits, SlashCommandSubcommandBuilder, type ChatInputCommandInteraction } from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import model_admin_channels from '#models/admin_channels.ts';

export default class admin_add_channel extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'admin';
    name = 'add_channel';

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

        const adminChannel = new model_admin_channels();
        const existingChannel = await adminChannel.selectActive({
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

        if (existingChannel) {
            await interaction.reply({
                content: lang.translate(this.parentName, 'SUBCMD_ADD_CHANNEL_DUPLICATE', [channelId]),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        adminChannel.server = serverId;
        adminChannel.channel_id = channelId;
        adminChannel.created_by = interaction.user.id;

        if (!await adminChannel.save()) {
            await interaction.reply({
                content: lang.translate(this.parentName, 'SUBCMD_ADD_CHANNEL_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        await adminChannel.invalidateCache(serverId);
        await interaction.reply({
            content: lang.translate(this.parentName, 'SUBCMD_ADD_CHANNEL_SUCCESS', [channelId]),
            flags: [MessageFlags.Ephemeral]
        });
        return true;
    }
}
