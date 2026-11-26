/*
 * Copyright (C) 2025 Luis Satsuma
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

import {
    ActionRowBuilder,
    Colors,
    ComponentType,
    EmbedBuilder,
    MessageFlags,
    SlashCommandSubcommandBuilder,
    StringSelectMenuBuilder,
    type ChatInputCommandInteraction,
    type StringSelectMenuInteraction,
} from 'discord.js';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import lang from '#includes/lang.ts';
import log from '#includes/log.ts';
import model_servers from '#models/server.ts';
import model_trivia_categories from '#models/trivia_categories.ts';
import model_trivia_members from '#models/trivia_members.ts';
import type {triviaQuestionRecord} from '#models/trivia_members.ts';

const QUESTION_TIMER_MS = 60_000;
const MINIMUM_SCORING_SECONDS = 5;
const difficultyNames = ['EASY', 'MEDIUM', 'HARD', 'VERY_HARD', 'IMPOSSIBLE'] as const;

export default class trivia_play extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'trivia';
    name = 'play';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
            .setName(lang.translate(this.parentName, 'SUBCMD_PLAY_NAME'))
            .setDescription(lang.translate(this.parentName, 'SUBCMD_PLAY_DESCRIPTION'))
            .addIntegerOption(option => option
                .setName('difficulty')
                .setDescription(lang.translate(this.parentName, 'SUBCMD_PLAY_OPTION_DIFFICULTY'))
                .setRequired(true)
                .addChoices(...difficultyNames.map((name, index) => ({
                    name: lang.translate(this.parentName, `DIFFICULTY_${name}`),
                    value: index + 1,
                }))));

        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        const serverId = interaction.guildId;
        const difficulty = interaction.options.getInteger('difficulty');
        if (!serverId || !difficulty || difficulty < 1 || difficulty > 5) {
            await interaction.reply({
                content: lang.translate('globals', 'CHANNEL_NOT_ALLOWED'),
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

        const round = await new model_trivia_members().startQuestion({
            server: serverId,
            user_id: interaction.user.id,
            username: interaction.user.username,
            locale: settings.locale,
            difficulty,
            categoryIds: categories.map(category => category.id),
            dailyLimit: settings.trivia_questions_per_day,
        });
        if (round === false) {
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }
        if (round.status === 'daily_limit') {
            await interaction.reply({
                content: lang.translate(this.parentName, 'PLAY_DAILY_LIMIT', [settings.trivia_questions_per_day]),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }
        if (round.status === 'active_question') {
            await interaction.reply({
                content: lang.translate(this.parentName, 'PLAY_ACTIVE_QUESTION'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }
        if (round.status === 'difficulty_unavailable') {
            const availableDifficulties = round.availableDifficulties
                .map(level => lang.translate(this.parentName, `DIFFICULTY_${difficultyNames[level - 1]}`))
                .join(', ');
            await interaction.reply({
                content: lang.translate(this.parentName, 'PLAY_DIFFICULTY_UNAVAILABLE', [availableDifficulties]),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }
        if (round.status === 'no_questions') {
            await interaction.reply({
                content: lang.translate(this.parentName, 'PLAY_NO_QUESTIONS'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        return this.askQuestion(interaction, round.question);
    }

    private async askQuestion(interaction: ChatInputCommandInteraction, question: triviaQuestionRecord): Promise<boolean>
    {
        const difficulty = lang.translate(this.parentName, `DIFFICULTY_${difficultyNames[question.difficulty - 1]}`);
        const menu = new StringSelectMenuBuilder()
            .setCustomId(`trivia-answer:${question.progress_id}`)
            .setPlaceholder(lang.translate(this.parentName, 'PLAY_SELECT_ANSWER'))
            .addOptions(question.alternatives.map((alternative, index) => ({
                label: lang.translate(this.parentName, 'PLAY_OPTION_NUMBER', [index + 1]),
                description: alternative.description.slice(0, 100),
                value: alternative.id,
            })));
        const row = new ActionRowBuilder<StringSelectMenuBuilder>().addComponents(menu);
        const embed = new EmbedBuilder()
            .setColor(Colors.Blurple)
            .setTitle(lang.translate(this.parentName, 'PLAY_QUESTION_TITLE'))
            .setDescription(question.question)
            .addFields(
                {name: lang.translate(this.parentName, 'PLAY_CATEGORY'), value: question.category, inline: true},
                {name: lang.translate(this.parentName, 'PLAY_DIFFICULTY'), value: difficulty, inline: true},
                ...question.alternatives.map((alternative, index) => ({
                    name: lang.translate(this.parentName, 'PLAY_OPTION_NUMBER', [index + 1]),
                    value: alternative.description.slice(0, 1024),
                    inline: false,
                }))
            )
            .setFooter({text: lang.translate(this.parentName, 'PLAY_TIMER')});

        await interaction.reply({embeds: [embed], components: [row], flags: [MessageFlags.Ephemeral]});
        const message = await interaction.fetchReply();
        const startedAt = message.createdTimestamp;
        const remainingTimerMs = Math.max(0, QUESTION_TIMER_MS - (Date.now() - startedAt));

        let answerInteraction: StringSelectMenuInteraction;
        try {
            answerInteraction = await message.awaitMessageComponent({
                componentType: ComponentType.StringSelect,
                filter: component => component.user.id === interaction.user.id
                    && component.customId === `trivia-answer:${question.progress_id}`,
                time: remainingTimerMs,
            });
        } catch {
            const timeoutEmbed = new EmbedBuilder()
                .setColor(Colors.Orange)
                .setTitle(lang.translate(this.parentName, 'PLAY_TIMEOUT_TITLE'))
                .setDescription(lang.translate(this.parentName, 'PLAY_TIMEOUT_DESCRIPTION'))
                .addFields({
                    name: lang.translate(this.parentName, 'PLAY_CORRECT_ANSWER'),
                    value: question.alternatives.find(alternative => alternative.correct_answer)?.description
                        ?? lang.translate(this.parentName, 'PLAY_UNKNOWN_ANSWER'),
                    inline: false,
                });
            await interaction.editReply({embeds: [timeoutEmbed], components: []});
            return true;
        }

        await answerInteraction.deferUpdate();
        const selectedAnswerId = answerInteraction.values[0];
        const selectedAnswer = question.alternatives.find(alternative => alternative.id === selectedAnswerId);
        if (!selectedAnswer) {
            await interaction.editReply({content: lang.translate('globals', 'CMD_ERROR'), embeds: [], components: []});
            return true;
        }

        const secondsSpent = Math.max(0, Number(((Date.now() - startedAt) / 1000).toFixed(2)));
        const correct = selectedAnswer.correct_answer;
        const timerSeconds = QUESTION_TIMER_MS / 1000;
        const scoringSeconds = Math.max(MINIMUM_SCORING_SECONDS, secondsSpent);
        const timeRemaining = Math.max(0, timerSeconds - scoringSeconds);
        const maximumPoints = question.difficulty * 100;
        const basePoints = maximumPoints / 2;
        const speedBonus = basePoints * (timeRemaining / (timerSeconds - MINIMUM_SCORING_SECONDS));
        const points = correct ? Math.min(maximumPoints, Math.round(basePoints + speedBonus)) : 0;
        const saved = await new model_trivia_members().saveAnswer({
            progressId: question.progress_id,
            server: interaction.guildId ?? '',
            userId: interaction.user.id,
            answerId: selectedAnswer.id,
            secondsSpent,
            points,
        });

        if (saved === false) {
            log.warning(`Could not save trivia answer for ${interaction.guildId}/${interaction.user.id}.`);
            await interaction.editReply({content: lang.translate('globals', 'DB_ERROR'), embeds: [], components: []});
            return true;
        }

        const resultEmbed = new EmbedBuilder()
            .setColor(correct ? Colors.Green : Colors.Red)
            .setTitle(lang.translate(this.parentName, correct ? 'PLAY_CORRECT_TITLE' : 'PLAY_WRONG_TITLE'))
            .setAuthor({name: interaction.user.username, iconURL: interaction.user.displayAvatarURL()})
            .setDescription(lang.translate(this.parentName, correct ? 'PLAY_CORRECT_DESCRIPTION' : 'PLAY_WRONG_DESCRIPTION'))
            .addFields({
                name: lang.translate(this.parentName, 'PLAY_TOTAL_POINTS'),
                value: String(saved.points),
                inline: true,
            }, {
                name: lang.translate(this.parentName, 'PLAY_MAX_POINTS'),
                value: String(maximumPoints),
                inline: true,
            });

        const answerFields = [];
        if (!correct) {
            answerFields.push({
                name: lang.translate(this.parentName, 'PLAY_CORRECT_ANSWER'),
                value: question.alternatives.find(alternative => alternative.correct_answer)?.description
                    ?.slice(0, 1024) ?? lang.translate(this.parentName, 'PLAY_UNKNOWN_ANSWER'),
                inline: false,
            });
        }
        answerFields.push({
            name: lang.translate(this.parentName, 'PLAY_EXPLANATION'),
            value: question.explanation.slice(0, 1024) || lang.translate(this.parentName, 'PLAY_NO_EXPLANATION'),
            inline: false,
        });
        resultEmbed.addFields(...answerFields);

        await interaction.editReply({embeds: [resultEmbed], components: []});
        const channel = interaction.channel;
        if (channel?.isSendable()) {
            try {
                const playCommand = lang.translate(this.parentName, 'PUBLIC_PLAY_COMMAND');
                const publicResultEmbed = new EmbedBuilder()
                    .setColor(correct ? Colors.Green : Colors.Blurple)
                    .setAuthor({name: interaction.user.username, iconURL: interaction.user.displayAvatarURL()})
                    .setTitle(lang.translate(this.parentName, correct ? 'PUBLIC_CORRECT_TITLE' : 'PUBLIC_WRONG_TITLE', [interaction.user.username, saved.points]))
                    .setDescription(correct
                        ? lang.translate(this.parentName, 'PUBLIC_CORRECT_DESCRIPTION', [playCommand])
                        : lang.translate(this.parentName, 'PUBLIC_WRONG_DESCRIPTION', [playCommand]));

                await channel.send({
                    embeds: [publicResultEmbed],
                    allowedMentions: {parse: []},
                });
            } catch (error) {
                log.warning(`Could not publish trivia result in channel ${interaction.channelId}: ${error}`);
            }
        }
        return true;
    }
}
