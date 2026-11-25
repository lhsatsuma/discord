/*
 * Copyright (C) 2025 Luis Satsuma
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

import {v7 as uuidV7} from 'uuid';
import type {PoolClient} from 'pg';
import redisCache from '#includes/cache/redis_cache.ts';
import config from '#includes/config.ts';
import database_pg from '#includes/database/database_pg.ts';
import log from '#includes/log.ts';
import model_base from '#models/base.ts';

export interface triviaAlternativeRecord
{
    id: string;
    description: string;
    correct_answer: boolean;
}

export interface triviaQuestionRecord
{
    progress_id: string;
    question_id: string;
    question: string;
    category: string;
    difficulty: number;
    alternatives: triviaAlternativeRecord[];
}

export type triviaStartResult =
    | {status: 'started'; question: triviaQuestionRecord}
    | {status: 'daily_limit'}
    | {status: 'active_question'}
    | {status: 'difficulty_unavailable'; availableDifficulties: number[]}
    | {status: 'no_questions'}
    | false;

export interface triviaAnswerResult
{
    correct: boolean;
    points: number;
}

export interface triviaRankRecord
{
    user_id: string;
    username: string;
    points: number;
}

export default class model_trivia_members extends model_base
{
    table = 'trivia_members';
    private static readonly RANK_CACHE_TTL_SECONDS = 60;

    private rankCacheKey(serverId: string): string
    {
        return `discord-bot:trivia-rank:v1:${config.DISCORD_BOT_ID}:${serverId}`;
    }

    async getTopRank(serverId: string, limit = 10): Promise<triviaRankRecord[] | false>
    {
        const key = this.rankCacheKey(serverId);
        return redisCache.getOrSet(key, model_trivia_members.RANK_CACHE_TTL_SECONDS, async () => {
            try {
                const result = await this.query(
                    `SELECT member.user_id,
                            COALESCE(server_member.username, member.user_id) AS username,
                            SUM(member.points)::numeric AS points
                     FROM ${this.table} AS member
                     LEFT JOIN server_members AS server_member
                       ON server_member.server = member.server
                      AND server_member.user_id = member.user_id
                     WHERE member.server = $1 AND member.answered = true
                     GROUP BY member.user_id, server_member.username
                     HAVING SUM(member.points) > 0
                     ORDER BY SUM(member.points) DESC, username ASC, member.user_id ASC
                     LIMIT $2`,
                    [serverId, limit]
                );

                return (result.rows as Array<Omit<triviaRankRecord, 'points'> & {points: string | number}>)
                    .map(row => ({
                        user_id: row.user_id,
                        username: row.username,
                        points: Number(row.points),
                    }));
            } catch (error) {
                log.warning(`Error loading trivia leaderboard for server ${serverId}: ${error}`);
                return false;
            }
        });
    }

    async startQuestion(fields: {
        server: string;
        user_id: string;
        username: string;
        locale: string;
        difficulty: number;
        categoryIds: string[];
        dailyLimit: number;
    }): Promise<triviaStartResult>
    {
        const client = await database_pg.createPool().connect();

        try {
            await client.query('BEGIN');
            await client.query(
                'SELECT pg_advisory_xact_lock(hashtextextended($1, 0))',
                [`trivia:${fields.server}:${fields.user_id}`]
            );

            await this.ensureServerMember(client, fields.server, fields.user_id, fields.username);

            const usageResult = await client.query(
                `SELECT
                    COUNT(*) FILTER (WHERE created_at >= CURRENT_DATE)::int AS daily_count,
                    COUNT(*) FILTER (
                        WHERE answer IS NULL
                          AND answered = false
                          AND created_at >= CURRENT_TIMESTAMP - INTERVAL '35 seconds'
                    )::int AS active_count
                 FROM ${this.table}
                 WHERE server = $1 AND user_id = $2`,
                [fields.server, fields.user_id]
            );
            const usage = usageResult.rows[0] as {daily_count: number; active_count: number};

            if (usage.daily_count >= fields.dailyLimit) {
                await client.query('COMMIT');
                return {status: 'daily_limit'};
            }
            if (usage.active_count > 0) {
                await client.query('COMMIT');
                return {status: 'active_question'};
            }

            const freshDifficulties = await client.query(
                `SELECT q.difficulty::int AS difficulty
                 FROM trivia_questions AS q
                 WHERE q.locale = $1
                   AND q.category = ANY($2::uuid[])
                   AND NOT EXISTS (
                       SELECT 1
                       FROM ${this.table} AS member
                       WHERE member.server = $3
                         AND member.user_id = $4
                         AND member.question = q.id
                         AND member.answered = true
                   )
                 GROUP BY q.difficulty
                 ORDER BY q.difficulty`,
                [fields.locale, fields.categoryIds, fields.server, fields.user_id]
            );
            const availableDifficulties = freshDifficulties.rows.map(row => Number(row.difficulty));

            if (availableDifficulties.length && !availableDifficulties.includes(fields.difficulty)) {
                await client.query('COMMIT');
                return {status: 'difficulty_unavailable', availableDifficulties};
            }

            const questionResult = availableDifficulties.length
                ? await client.query(
                    `SELECT q.id, q.question, q.category, q.difficulty, c.description AS category_name
                     FROM trivia_questions AS q
                     INNER JOIN trivia_categorys AS c ON c.id = q.category
                     WHERE q.locale = $1
                       AND q.difficulty = $2
                       AND q.category = ANY($3::uuid[])
                       AND NOT EXISTS (
                           SELECT 1
                           FROM ${this.table} AS member
                           WHERE member.server = $4
                             AND member.user_id = $5
                             AND member.question = q.id
                             AND member.answered = true
                       )
                     ORDER BY random()
                     LIMIT 1`,
                    [fields.locale, fields.difficulty, fields.categoryIds, fields.server, fields.user_id]
                )
                : await client.query(
                    `SELECT q.id, q.question, q.category, q.difficulty, c.description AS category_name
                     FROM trivia_questions AS q
                     INNER JOIN trivia_categorys AS c ON c.id = q.category
                     WHERE q.locale = $1 AND q.difficulty = $2 AND q.category = ANY($3::uuid[])
                     ORDER BY random()
                     LIMIT 1`,
                    [fields.locale, fields.difficulty, fields.categoryIds]
                );
            const selected = questionResult.rows[0] as {
                id: string;
                question: string;
                category: string;
                category_name: string;
                difficulty: number;
            } | undefined;

            if (!selected) {
                await client.query('COMMIT');
                return {status: 'no_questions'};
            }

            const progressId = uuidV7();
            await client.query(
                `INSERT INTO ${this.table}
                    (id, created_at, updated_at, created_by, question, answer, server, user_id, correct_answer, answered, seconds_spent, points)
                 VALUES ($1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 'SYSTEM', $2, NULL, $3, $4, false, false, NULL, 0)`,
                [progressId, selected.id, fields.server, fields.user_id]
            );

            const alternativesResult = await client.query(
                `SELECT id, description, correct_answer
                 FROM trivia_alternatives
                 WHERE question = $1
                 ORDER BY random()`,
                [selected.id]
            );
            if (!alternativesResult.rowCount) {
                throw new Error(`Trivia question ${selected.id} has no alternatives.`);
            }

            await client.query('COMMIT');
            return {
                status: 'started',
                question: {
                    progress_id: progressId,
                    question_id: selected.id,
                    question: selected.question,
                    category: selected.category_name,
                    difficulty: Number(selected.difficulty),
                    alternatives: alternativesResult.rows as triviaAlternativeRecord[],
                }
            };
        } catch (error) {
            try {
                await client.query('ROLLBACK');
            } catch (rollbackError) {
                log.warning(`Could not roll back trivia question transaction: ${rollbackError}`);
            }
            log.warning(`Error starting trivia question for ${fields.server}/${fields.user_id}: ${error}`);
            return false;
        } finally {
            client.release();
        }
    }

    async saveAnswer(fields: {
        progressId: string;
        server: string;
        userId: string;
        answerId: string;
        secondsSpent: number;
        points: number;
    }): Promise<triviaAnswerResult | false>
    {
        try {
            const result = await this.query(
                `UPDATE ${this.table} AS member
                 SET answer = alternative.id,
                     correct_answer = alternative.correct_answer,
                     answered = true,
                     seconds_spent = $5,
                     points = $6,
                     updated_at = CURRENT_TIMESTAMP
                 FROM trivia_alternatives AS alternative
                 WHERE member.id = $1
                   AND member.server = $2
                   AND member.user_id = $3
                   AND member.answer IS NULL
                   AND alternative.id = $4
                   AND alternative.question = member.question
                 RETURNING member.correct_answer, member.points`,
                [fields.progressId, fields.server, fields.userId, fields.answerId, fields.secondsSpent, fields.points]
            );
            if (!result.rowCount) return false;

            await redisCache.delete(this.rankCacheKey(fields.server));

            return {
                correct: Boolean(result.rows[0].correct_answer),
                points: Number(result.rows[0].points),
            };
        } catch (error) {
            log.warning(`Error saving trivia answer for ${fields.server}/${fields.userId}: ${error}`);
            return false;
        }
    }

    private async ensureServerMember(client: PoolClient, server: string, userId: string, username: string): Promise<void>
    {
        await client.query(
            `INSERT INTO server_members (id, created_at, updated_at, created_by, server, user_id, username)
             VALUES ($1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 'SYSTEM', $2, $3, $4)
             ON CONFLICT (server, user_id) DO UPDATE
             SET username = EXCLUDED.username, updated_at = CURRENT_TIMESTAMP`,
            [uuidV7(), server, userId, username]
        );
    }
}
