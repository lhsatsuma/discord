import { Colors, EmbedBuilder, MessageFlags, SlashCommandSubcommandBuilder, type ChatInputCommandInteraction } from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import model_jankenpon, { jankenponMoves, type jankenponMove, type jankenponResult } from '#models/jankenpon.ts';

const outcomeNames: Record<jankenponResult, string> = {
    win: 'WINNED',
    lose: 'LOSE',
    draw: 'DRAW'
};

export default class jankenpon_status extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'jankenpon';
    name = 'status';

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

        const stats = new model_jankenpon();
        const selected = await stats.selectActive({
            server: serverId,
            user_id: interaction.user.id
        });

        if (selected === false) {
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        if (!selected) {
            await interaction.reply({
                content: lang.translate(this.parentName, 'CMD_STATUS_NO_GAME'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const totalPlayed = jankenponMoves.reduce(
            (total, move) => total + Number(stats[`played_${move}`] ?? 0),
            0
        );
        if (totalPlayed === 0) {
            await interaction.reply({
                content: lang.translate(this.parentName, 'CMD_STATUS_NO_GAME'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const moveLabels: Record<jankenponMove, string> = {
            paper: 'PAPER',
            scissors: 'SCISSORS',
            rock: 'ROCK'
        };
        const orderedMoves: jankenponMove[] = ['paper', 'scissors', 'rock'];
        const quantityFields = orderedMoves.flatMap((move) => [
            {
                name: lang.translate(this.parentName, moveLabels[move]),
                value: String(stats[`played_${move}`] ?? 0),
                inline: true
            },
            ...(['win', 'lose', 'draw'] as const).map((outcome) => ({
                name: lang.translate(this.parentName, outcomeNames[outcome]),
                value: String(stats[`${outcome}_${move}`] ?? 0),
                inline: true
            }))
        ]);
        const percentageFields = orderedMoves.flatMap((move) => {
            const played = Number(stats[`played_${move}`] ?? 0);
            return [
                {
                    name: lang.translate(this.parentName, moveLabels[move]),
                    value: `${((played / totalPlayed) * 100).toFixed(2)}%`,
                    inline: true
                },
                ...(['win', 'lose', 'draw'] as const).map((outcome) => ({
                    name: lang.translate(this.parentName, outcomeNames[outcome]),
                    value: played
                        ? `${((Number(stats[`${outcome}_${move}`] ?? 0) / played) * 100).toFixed(2)}%`
                        : '0.00%',
                    inline: true
                }))
            ];
        });

        const embeds = [
            new EmbedBuilder()
                .setColor(Colors.Orange)
                .setTitle(lang.translate(this.parentName, 'CMD_STATUS_MEMBER', [interaction.user.username]))
                .setDescription(lang.translate(this.parentName, 'CMD_STATUS_AMOUNT'))
                .addFields(quantityFields),
            new EmbedBuilder()
                .setColor(Colors.Orange)
                .setTitle(lang.translate(this.parentName, 'CMD_STATUS_MEMBER', [interaction.user.username]))
                .setDescription(lang.translate(this.parentName, 'CMD_STATUS_PERCS'))
                .addFields(percentageFields)
        ];

        await interaction.reply({embeds});
        return true;
    }
}
