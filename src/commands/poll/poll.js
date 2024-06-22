const {SlashCommandBuilder, EmbedBuilder} = require('discord.js');
const BeanBase = require('../../utils/Bean.js');
const moment = require("moment/moment");
const {get} = require("pidusage/lib/history");
const returned = client.create(
    new SlashCommandBuilder()
        .setName(translate('poll', 'CMD_POLL'))
        .setDescription(translate('poll', 'CMD_POLL_DESCRIPTION'))
        .addStringOption(title =>
            title.setName('title')
                .setDescription(translate('poll', 'CMD_POLL_OPTION_TITLE'))
                .setRequired(true)
        )
        .addStringOption(options =>
            options.setName('options')
                .setDescription(translate('poll', 'CMD_POLL_OPTION_OPTIONS'))
                .setRequired(true)
        )
        .addIntegerOption(expire =>
            expire.setName('expire')
                .setDescription(translate('poll', 'CMD_POLL_OPTION_EXPIRE'))
                .setRequired(true)
        ),
    'poll'
);
module.exports = {
    data: returned.data,
    subcommands: returned.subcommands,
    cooldown: 10,
    async execute(interaction) {
        try {
            let title = interaction.options.getString('title');
            let options = interaction.options.getString('options').split(';');
            let expire = interaction.options.getInteger('expire');
            if (!title || !options || !expire || expire > 60) {
                throw new Error('CMD_POLL_ERROR_OPTIONS_EMPTY');
            } else if (options.length < 2 || options.length > 9) {
                throw new Error('CMD_POLL_ERROR_OPTIONS_OPTION_INVALID');
            }

            var dateValid = moment(new Date()).add(expire, 'm').toDate();
            let bean = new BeanBase();

            let description = translate('poll', 'CMD_POLL_SUCCESS_TITLE_DESCRIPTION', interaction.user.id, expire);
            let reactionsValid = [];
            options.forEach((ipt, idx) => {
                let emoji_number = getUtils().numberToEmoji(idx + 1);
                description += emoji_number + ` ${ipt}\n\n`;
                reactionsValid.push(emoji_number);
            });

            let embed = new EmbedBuilder()
                .setColor(getUtils().getColor('BLUE'))
                .setTitle(title)
                .setDescription(description)
                .setTimestamp();

            await interaction.deferReply();
            await interaction.deleteReply();

            const message = await interaction.channel.send({embeds: [embed]});
            await getUtils().reacts(message, reactionsValid);


            const filterCollector = (reaction, user) => {
                return !user.bot;
            };

            const collector = message.createReactionCollector({filter: filterCollector, time: (expire * 60) * 1000});
            collector.on('collect', async (reaction, user) => {
                if (!reaction.me && reactionsValid.indexOf(reaction.emoji.name) == -1) {
                    await reaction.users.remove(user.id);
                    return false;
                }
            });

            collector.on('end', async (collected) => {
                let reactionsVote = [];
                let total_votes = 0;
                collected.forEach((reaction) => {
                    if (reaction.me) {
                        total_votes += reaction.count - 1;
                        reactionsVote.push({emoji: reaction.emoji.name, count: reaction.count - 1});
                    }
                });

                reactionsVote = reactionsVote.sort(function (a, b) {
                    return a[1] - b[1];
                });

                let choices = '';
                let emoji_winner = {};
                options.forEach((ipt, idx) => {
                    let emoji_number = getUtils().numberToEmoji(idx + 1);
                    let votes = 0;
                    let perc = 0;


                    reactionsVote.forEach((vote, idx) => {
                        if (idx == 0 && vote.count > 0) {
                            emoji_winner = {option_value: ipt, emoji: vote.emoji, count: vote.count};
                        }
                        if (vote.emoji == emoji_number) {
                            votes = vote.count;
                            perc = parseFloat(((vote.count * 100) / total_votes)).toFixed(2);
                        }
                    });

                    choices += emoji_number + ` ${ipt} ::: [${votes} | ${perc}%]\n\n`;
                });

                let winner = '';
                if (emoji_winner) {
                    winner = `**${emoji_winner.emoji} ${emoji_winner.option_value} -> ${emoji_winner.count}**`;
                }

                let embed = new EmbedBuilder()
                    .setColor(getUtils().getColor('BLUE'))
                    .setTitle(title)
                    .setDescription(translate('poll', 'CMD_POLL_SUCCESS_DONE', interaction.user.id, bean.unformatField('datetime-locale', new Date()), choices, winner))
                    .setTimestamp();

                await message.edit({embeds: [embed]});
                await message.reactions.removeAll();
                return true;
            });

            return true;
        } catch (e) {
            let msg_error = translate('poll', e.message);
            interaction.reply({
                content: translate('poll', 'CMD_POLL_ERROR', msg_error),
                ephemeral: true,
            });
            return true;
        }
    }
}