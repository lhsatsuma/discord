import { MessageFlags, PermissionFlagsBits, SlashCommandSubcommandBuilder, type ChatInputCommandInteraction } from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import model_servers from '#models/server.ts';
import modal_memes_config from '#modals/memes/config.ts';

export default class memes_config extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'memes';
    name = 'config';

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

        const settings = await new model_servers().getRedditSettings(serverId);
        if (settings === false) {
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const subredditList = settings.subreddits_memes.join(', ');
        if (subredditList.length > 4000) {
            await interaction.reply({
                content: lang.translate(this.parentName, 'SUBCMD_CONFIG_LIST_TOO_LONG'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const modal = new modal_memes_config(this.main);
        modal.odds = settings.reddit_odd_memes;
        modal.subreddits = subredditList;
        await modal.init();
        if (!modal.builded) {
            throw new Error('Memes configuration modal was not built.');
        }

        await interaction.showModal(modal.builded);
        return true;
    }
}
