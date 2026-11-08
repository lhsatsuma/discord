import { MessageFlags, SlashCommandSubcommandBuilder, type ChatInputCommandInteraction } from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import model_jankenpon from '#models/jankenpon.ts';

export default class jankenpon_reset extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'jankenpon';
    name = 'reset';

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

        const reset = await new model_jankenpon().resetScore({
            server: serverId,
            user_id: interaction.user.id
        });
        await interaction.reply({
            content: reset
                ? lang.translate(this.parentName, 'CMD_RESET_SUCCESS')
                : lang.translate('globals', 'DB_ERROR'),
            flags: [MessageFlags.Ephemeral]
        });
        return true;
    }
}
