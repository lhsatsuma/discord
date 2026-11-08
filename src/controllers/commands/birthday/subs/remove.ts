import { MessageFlags, SlashCommandSubcommandBuilder, type ChatInputCommandInteraction } from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import model_birthday from '#models/birthday.ts';

export default class birthday_remove extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'birthday';
    name = 'remove';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
            .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
            .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`))
            .addUserOption((option) =>
                option
                    .setName('user')
                    .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_OPTION_USER`))
            );

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

        const userId = interaction.options.getUser('user')?.id ?? interaction.user.id;
        const birthday = new model_birthday();
        const registeredBirthday = await birthday.selectActive({
            server: serverId,
            user_id: userId
        });

        if (registeredBirthday === false) {
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        if (!registeredBirthday?.birthdate) {
            await interaction.reply({
                content: lang.translate(this.parentName, 'SUBCMD_REMOVE_NOT_FOUND', [userId]),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        birthday.birthdate = null;
        if (!await birthday.save()) {
            await interaction.reply({
                content: lang.translate(this.parentName, 'SUBCMD_REMOVE_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        await interaction.reply({
            content: lang.translate(this.parentName, 'SUBCMD_REMOVE_SUCCESS', [userId]),
            flags: [MessageFlags.Ephemeral]
        });
        return true;
    }
}
