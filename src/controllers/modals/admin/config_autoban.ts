import { LabelBuilder, MessageFlags, ModalSubmitInteraction, TextInputBuilder, TextInputStyle } from 'discord.js';
import lang from '#includes/lang.ts';
import appModalBase from '#includes/commands/appModalBase.ts';
import model_autoban_config, { MAX_AUTOBAN_DELETE_PERIOD_MINUTES } from '#models/autoban_config.ts';

export default class modal_admin_config_autoban extends appModalBase
{
    parentName = 'admin';
    name = 'config_autoban';
    currentPeriod = 60;

    async buildComponents()
    {
        const modal = this.builded;
        if (!modal) {
            throw new Error('Autoban configuration modal must be initialized before building components.');
        }

        modal.addLabelComponents(
            new LabelBuilder()
                .setLabel(lang.translate(this.parentName, 'MODAL_CONFIG_AUTOBAN_PERIOD_LABEL'))
                .setDescription(lang.translate(this.parentName, 'MODAL_CONFIG_AUTOBAN_PERIOD_DESCRIPTION'))
                .setTextInputComponent(
                    new TextInputBuilder()
                        .setCustomId('delete_period')
                        .setStyle(TextInputStyle.Short)
                        .setMinLength(1)
                        .setMaxLength(5)
                        .setValue(String(this.currentPeriod))
                )
        );
        return this;
    }

    async execute(interaction: ModalSubmitInteraction)
    {
        const serverId = interaction.guildId;
        const periodValue = interaction.fields.getTextInputValue('delete_period');
        const periodMinutes = Number(periodValue);

        if (!serverId || !/^[0-9]{1,5}$/.test(periodValue)
            || !Number.isSafeInteger(periodMinutes)
            || periodMinutes < 0
            || periodMinutes > MAX_AUTOBAN_DELETE_PERIOD_MINUTES) {
            await interaction.reply({
                content: lang.translate(this.parentName, 'MODAL_CONFIG_AUTOBAN_INVALID'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const saved = await new model_autoban_config().saveDeletePeriod(
            serverId,
            periodMinutes,
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
            content: lang.translate(this.parentName, 'MODAL_CONFIG_AUTOBAN_SUCCESS', [periodMinutes]),
            flags: [MessageFlags.Ephemeral]
        });
        return true;
    }
}
