import { MessageFlags, PermissionFlagsBits, SlashCommandSubcommandBuilder, type ChatInputCommandInteraction } from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import model_autoban_config from '#models/autoban_config.ts';
import modal_admin_config_autoban from '#modals/admin/config_autoban.ts';

export default class admin_config_autoban extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'admin';
    name = 'config_autoban';

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
        if (!serverId) {
            await interaction.reply({
                content: lang.translate('globals', 'CHANNEL_NOT_ALLOWED'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const currentPeriod = await new model_autoban_config().getDeletePeriod(serverId);
        if (currentPeriod === false) {
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const modal = new modal_admin_config_autoban(this.main);
        modal.currentPeriod = currentPeriod;
        await modal.init();
        if (!modal.builded) {
            throw new Error('Autoban configuration modal was not built.');
        }

        await interaction.showModal(modal.builded);
        return true;
    }
}
