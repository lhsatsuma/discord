/*
 * Copyright (C) 2025 Luis Satsuma
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

import { ChatInputCommandInteraction, Colors, EmbedBuilder, MessageFlags, SlashCommandSubcommandBuilder } from 'discord.js';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import lang from '#includes/lang.ts';
import model_servers from '#models/server.ts';
import model_trivia_categories from '#models/trivia_categories.ts';

export default class trivia_help extends appSubCommandBase
{
    parentName = 'trivia';
    name = 'help';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
            .setName(lang.translate(this.parentName, 'SUBCMD_HELP_NAME'))
            .setDescription(lang.translate(this.parentName, 'SUBCMD_HELP_DESCRIPTION'));

        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        const serverId = interaction.guildId;
        if (!serverId) {
            await interaction.reply({
                content: lang.translate(this.parentName, 'HELP_SERVER_ONLY'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const settings = await new model_servers().getServerSettings(serverId);
        if (settings === false) {
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const categories = await new model_trivia_categories().listForServer(
            settings.locale,
            settings.trivia_categories
        );
        if (categories === false) {
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const categoryList = categories.length
            ? categories.map(category => `• ${category.description}`).join('\n')
            : lang.translate(this.parentName, 'HELP_NO_CATEGORIES');
        const embed = new EmbedBuilder()
            .setColor(Colors.Blurple)
            .setTitle(lang.translate(this.parentName, 'HELP_TITLE'))
            .setDescription(lang.translate(this.parentName, 'HELP_DESCRIPTION'))
            .addFields(
                {
                    name: lang.translate(this.parentName, 'HELP_DAILY_LIMIT_TITLE'),
                    value: lang.translate(this.parentName, 'HELP_DAILY_LIMIT_VALUE', [settings.trivia_questions_per_day]),
                    inline: true
                },
                {
                    name: lang.translate(this.parentName, 'HELP_TIMER_TITLE'),
                    value: lang.translate(this.parentName, 'HELP_TIMER_VALUE'),
                    inline: true
                },
                {
                    name: lang.translate(this.parentName, 'HELP_CATEGORIES_TITLE'),
                    value: categoryList,
                    inline: false
                },
                {
                    name: lang.translate(this.parentName, 'HELP_DIFFICULTIES_TITLE'),
                    value: [1, 2, 3]
                        .map(level => lang.translate(this.parentName, `HELP_DIFFICULTY_${level}`))
                        .join('\n'),
                    inline: true
                },
                {
                    name: lang.translate(this.parentName, 'HELP_POINTS_TITLE'),
                    value: lang.translate(this.parentName, 'HELP_POINTS_VALUE'),
                    inline: true
                }
            );

        await interaction.reply({ embeds: [embed] });
        return true;
    }
}
