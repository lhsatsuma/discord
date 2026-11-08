import { MessageFlags, SlashCommandSubcommandBuilder, type ChatInputCommandInteraction } from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import model_birthday_channels from '#models/birthday_channels.ts';

export default class birthday_add_channel extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'birthday';
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
        const existingChannel = await birthdayChannel.selectActive({
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

        birthdayChannel.server = serverId;
        birthdayChannel.channel_id = channelId;
        birthdayChannel.created_by = interaction.user.id;

        if (!await birthdayChannel.save()) {
            await interaction.reply({
                content: lang.translate(this.parentName, 'SUBCMD_ADD_CHANNEL_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        await interaction.reply({
            content: lang.translate(this.parentName, 'SUBCMD_ADD_CHANNEL_SUCCESS', [channelId]),
            flags: [MessageFlags.Ephemeral]
        });
        return true;
    }
}
