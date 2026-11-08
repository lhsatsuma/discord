import { Colors, EmbedBuilder, MessageFlags, SlashCommandSubcommandBuilder, type ChatInputCommandInteraction } from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import model_jankenpon, { jankenponMoves, type jankenponMove, type jankenponResult } from '#models/jankenpon.ts';

const results: Record<jankenponMove, Record<jankenponMove, jankenponResult>> = {
    rock: {rock: 'draw', paper: 'lose', scissors: 'win'},
    paper: {rock: 'win', paper: 'draw', scissors: 'lose'},
    scissors: {rock: 'lose', paper: 'win', scissors: 'draw'}
};

const resultColors: Record<jankenponResult, number> = {
    win: Colors.Green,
    lose: Colors.Red,
    draw: Colors.Orange
};

export default class jankenpon_play extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'jankenpon';
    name = 'play';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
            .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
            .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`))
            .addStringOption((option) =>
                option
                    .setName('choose')
                    .setDescription(lang.translate(this.parentName, 'SUBCMD_PLAY_OPTION_CHOOSE'))
                    .setRequired(true)
                    .addChoices(
                        {name: lang.translate(this.parentName, 'PAPER'), value: 'paper'},
                        {name: lang.translate(this.parentName, 'SCISSORS'), value: 'scissors'},
                        {name: lang.translate(this.parentName, 'ROCK'), value: 'rock'}
                    )
            );

        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        const move = interaction.options.getString('choose') as jankenponMove | null;
        const serverId = interaction.guildId;
        if (!serverId || !move || !jankenponMoves.includes(move)) {
            await interaction.reply({
                content: lang.translate('globals', 'CHANNEL_NOT_ALLOWED'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const botMove = jankenponMoves[Math.floor(Math.random() * jankenponMoves.length)];
        const result = results[move][botMove];
        const scoreSaved = await new model_jankenpon().recordResult({
            server: serverId,
            user_id: interaction.user.id,
            move,
            result
        });

        if (!scoreSaved) {
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        const description = [
            `${lang.translate(this.parentName, 'CMD_PLAY_PLAYED')}: **${lang.translate(this.parentName, move.toUpperCase())}**`,
            `${lang.translate(this.parentName, 'CMD_PLAY_BOT_PLAYED')}: **${lang.translate(this.parentName, botMove.toUpperCase())}**`,
            '',
            `**${lang.translate(this.parentName, `CMD_PLAY_${result.toUpperCase()}`)}**`
        ].join('\n');

        const embed = new EmbedBuilder()
            .setColor(resultColors[result])
            .setTitle(lang.translate(this.parentName, 'CMD_PLAY_SUCCESS', [interaction.user.username]))
            .setDescription(description);

        await interaction.reply({embeds: [embed]});
        return true;
    }
}
