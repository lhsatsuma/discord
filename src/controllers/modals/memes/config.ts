import {
    LabelBuilder,
    MessageFlags,
    ModalSubmitInteraction,
    PermissionFlagsBits,
    TextInputBuilder,
    TextInputStyle
} from 'discord.js';
import lang from '#includes/lang.ts';
import appModalBase from '#includes/commands/appModalBase.ts';
import model_servers from '#models/server.ts';

const MAX_SUBREDDIT_COUNT = 100;

export default class modal_memes_config extends appModalBase
{
    parentName = 'memes';
    name = 'config';
    odds = 0;
    subreddits = '';

    async buildComponents()
    {
        const modal = this.builded;
        if (!modal) {
            throw new Error('Memes configuration modal must be initialized before building components.');
        }

        const subredditInput = new TextInputBuilder()
            .setCustomId('subreddits')
            .setStyle(TextInputStyle.Paragraph)
            .setRequired(false)
            .setMaxLength(4000);
        if (this.subreddits) {
            subredditInput.setValue(this.subreddits);
        }

        modal.addLabelComponents(
            new LabelBuilder()
                .setLabel(lang.translate(this.parentName, 'MODAL_CONFIG_ODDS_LABEL'))
                .setDescription(lang.translate(this.parentName, 'MODAL_CONFIG_ODDS_DESCRIPTION'))
                .setTextInputComponent(
                    new TextInputBuilder()
                        .setCustomId('reddit_odds')
                        .setStyle(TextInputStyle.Short)
                        .setMinLength(1)
                        .setMaxLength(2)
                        .setValue(String(this.odds))
                ),
            new LabelBuilder()
                .setLabel(lang.translate(this.parentName, 'MODAL_CONFIG_SUBREDDITS_LABEL'))
                .setDescription(lang.translate(this.parentName, 'MODAL_CONFIG_SUBREDDITS_DESCRIPTION'))
                .setTextInputComponent(subredditInput)
        );
        return this;
    }

    async execute(interaction: ModalSubmitInteraction)
    {
        if (!interaction.memberPermissions?.has(PermissionFlagsBits.ManageGuild)) {
            await interaction.reply({
                content: lang.translate('globals', 'CHANNEL_NOT_ALLOWED'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const serverId = interaction.guildId;
        const oddsValue = interaction.fields.getTextInputValue('reddit_odds').trim();
        const odds = Number(oddsValue);
        const subredditField = interaction.fields.fields.get('subreddits');
        const rawSubreddits = subredditField && 'value' in subredditField && typeof subredditField.value === 'string'
            ? subredditField.value
            : '';

        if (!serverId || !/^[0-9]{1,2}$/.test(oddsValue) || !Number.isInteger(odds) || odds < 0 || odds > 10) {
            await interaction.reply({
                content: lang.translate(this.parentName, 'MODAL_CONFIG_INVALID_ODDS'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const subreddits = rawSubreddits
            .split(/[,\r\n]/)
            .map((subreddit) => subreddit.trim().replace(/^\/?r\//i, ''))
            .filter(Boolean);
        const uniqueSubreddits = [...new Map<string, string>(
            subreddits.map((subreddit) => [subreddit.toLowerCase(), subreddit])
        ).values()];
        const invalidSubreddits = uniqueSubreddits.filter((subreddit) => !/^[A-Za-z0-9_]{2,21}$/.test(subreddit));
        if (invalidSubreddits.length || uniqueSubreddits.length > MAX_SUBREDDIT_COUNT) {
            await interaction.reply({
                content: lang.translate(this.parentName, 'MODAL_CONFIG_INVALID_SUBREDDITS'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const saved = await new model_servers().saveRedditSettings(
            serverId,
            odds,
            uniqueSubreddits,
            interaction.user.id
        );
        if (!saved) {
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        await interaction.reply({
            content: lang.translate(this.parentName, 'MODAL_CONFIG_SUCCESS', [
                odds,
                uniqueSubreddits.length
            ]),
            flags: [MessageFlags.Ephemeral]
        });
        return true;
    }
}
