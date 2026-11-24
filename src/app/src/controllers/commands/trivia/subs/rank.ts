/*
 * Copyright (C) 2025 Luis Satsuma
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

import {Colors, EmbedBuilder, MessageFlags, SlashCommandSubcommandBuilder, type ChatInputCommandInteraction} from 'discord.js';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import lang from '#includes/lang.ts';
import model_trivia_members from '#models/trivia_members.ts';

const medals = ['\u{1F947}', '\u{1F948}', '\u{1F949}'];

export default class trivia_rank extends appSubCommandBase
{
    cooldown = 5;
    parentName = 'trivia';
    name = 'rank';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
            .setName(lang.translate(this.parentName, 'SUBCMD_RANK_NAME'))
            .setDescription(lang.translate(this.parentName, 'SUBCMD_RANK_DESCRIPTION'));

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

        const ranking = await new model_trivia_members().getTopRank(serverId, 10);
        if (ranking === false) {
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const description = ranking.length
            ? ranking.map((member, index) => {
                const prefix = medals[index] ?? `**${index + 1}.**`;
                const points = member.points.toLocaleString(lang.locale, {maximumFractionDigits: 0});
                return `${prefix} <@${member.user_id}> \u2014 **${points} ${lang.translate(this.parentName, 'RANK_POINTS')}**`;
            }).join('\n')
            : lang.translate(this.parentName, 'RANK_EMPTY');

        const embed = new EmbedBuilder()
            .setColor(Colors.Blurple)
            .setTitle(lang.translate(this.parentName, 'RANK_TITLE'))
            .setDescription(description)
            .setFooter({text: lang.translate(this.parentName, 'RANK_FOOTER')});

        await interaction.reply({embeds: [embed], allowedMentions: {parse: []}});
        return true;
    }
}
