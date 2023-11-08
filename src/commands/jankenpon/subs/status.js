const { EmbedBuilder} = require('discord.js');
const BeanJankenpon = getUtils().requireAgain(process.cwd()+'/src/models/Jankenpon.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName(translate('jankenpon', 'CMD_STATUS'))
            .setDescription(translate('jankenpon', 'CMD_STATUS_DESCRIPTION')),
    async execute(interaction) {
        let embeds = [];

        let bean = new BeanJankenpon();
        bean.server = interaction.guildId;
        bean.user_id = interaction.user.id;

        await bean.selectActive();

        if(!!bean.id){
            bean.getStats();

            bean.getStatsPlay();

            bean.stats['win']['total'] = bean.stats['win']['total'].toString();
            bean.stats['lose']['total'] = bean.stats['lose']['total'].toString();
            bean.stats['draw']['total'] = bean.stats['draw']['total'].toString();
            bean.total_played = bean.total_played.toString();

            bean.win_rock = bean.win_rock.toString();
            bean.lose_rock = bean.lose_rock.toString();
            bean.draw_rock = bean.draw_rock.toString();
            bean.played_rock = bean.played_rock.toString();

            bean.win_paper = bean.win_paper.toString();
            bean.lose_paper = bean.lose_paper.toString();
            bean.draw_paper = bean.draw_paper.toString();
            bean.played_paper = bean.played_paper.toString();

            bean.win_scissors = bean.win_scissors.toString();
            bean.lose_scissors = bean.lose_scissors.toString();
            bean.draw_scissors = bean.draw_scissors.toString();
            bean.played_scissors = bean.played_scissors.toString();

            embeds.push(new EmbedBuilder()
                .setColor(getUtils().getColor('ORANGE'))
                .setTitle(translate('jankenpon', 'CMD_STATUS_MEMBER', interaction.user.username))
                .setDescription(translate('jankenpon', 'CMD_STATUS_AMOUNT'))
                .setFields([
                    {
                        name: translate('jankenpon', 'PAPER'),
                        value: bean.played_paper,
                        inline: true
                    },
                    {
                        name: translate('jankenpon', 'SCISSORS'),
                        value: bean.played_scissors,
                        inline: true
                    },
                    {
                        name: translate('jankenpon', 'ROCK'),
                        value: bean.played_rock,
                        inline: true
                    },

                    {
                        name: translate('jankenpon', 'WINNED'),
                        value: bean.win_paper,
                        inline: true
                    },
                    {
                        name: translate('jankenpon', 'WINNED'),
                        value: bean.win_scissors,
                        inline: true
                    },
                    {
                        name: translate('jankenpon', 'WINNED'),
                        value: bean.win_rock,
                        inline: true
                    },

                    {
                        name: translate('jankenpon', 'LOSE'),
                        value: bean.lose_paper,
                        inline: true
                    },
                    {
                        name: translate('jankenpon', 'LOSE'),
                        value: bean.lose_scissors,
                        inline: true
                    },
                    {
                        name: translate('jankenpon', 'LOSE'),
                        value: bean.lose_rock,
                        inline: true
                    },


                    {
                        name: translate('jankenpon', 'DRAW'),
                        value: bean.draw_paper,
                        inline: true
                    },
                    {
                        name: translate('jankenpon', 'DRAW'),
                        value: bean.draw_scissors,
                        inline: true
                    },
                    {
                        name: translate('jankenpon', 'DRAW'),
                        value: bean.draw_rock,
                        inline: true
                    }
                ])
            );

            bean.stats_play['paper']['perc']['win'] = bean.stats_play['paper']['perc']['win'].toString();
            bean.stats_play['paper']['perc']['lose'] = bean.stats_play['paper']['perc']['lose'].toString();
            bean.stats_play['paper']['perc']['draw'] = bean.stats_play['paper']['perc']['draw'].toString();
            bean.stats_play['paper']['perc']['total'] = bean.stats_play['paper']['perc']['total'].toString();

            bean.stats_play['rock']['perc']['win'] = bean.stats_play['rock']['perc']['win'].toString();
            bean.stats_play['rock']['perc']['lose'] = bean.stats_play['rock']['perc']['lose'].toString();
            bean.stats_play['rock']['perc']['draw'] = bean.stats_play['rock']['perc']['draw'].toString();
            bean.stats_play['rock']['perc']['total'] = bean.stats_play['rock']['perc']['total'].toString();

            bean.stats_play['scissors']['perc']['win'] = bean.stats_play['scissors']['perc']['win'].toString();
            bean.stats_play['scissors']['perc']['lose'] = bean.stats_play['scissors']['perc']['lose'].toString();
            bean.stats_play['scissors']['perc']['draw'] = bean.stats_play['scissors']['perc']['draw'].toString();
            bean.stats_play['scissors']['perc']['total'] = bean.stats_play['scissors']['perc']['total'].toString();

            bean.stats['win']['perc'] = bean.stats['win']['perc'].toString();
            bean.stats['lose']['perc'] = bean.stats['lose']['perc'].toString();
            bean.stats['draw']['perc'] = bean.stats['draw']['perc'].toString();

            embeds.push(new EmbedBuilder()
                .setColor(getUtils().getColor('ORANGE'))
                .setTitle(translate('jankenpon', 'CMD_STATUS_MEMBER', interaction.user.username))
                .setDescription(translate('jankenpon', 'CMD_STATUS_PERCS'))
                .setFields([
                    {
                        name: translate('jankenpon', 'PAPER'),
                        value: bean.stats_play['paper']['perc']['total'],
                        inline: true
                    },
                    {
                        name: translate('jankenpon', 'SCISSORS'),
                        value: bean.stats_play['scissors']['perc']['total'],
                        inline: true
                    },
                    {
                        name: translate('jankenpon', 'ROCK'),
                        value: bean.stats_play['rock']['perc']['total'],
                        inline: true
                    },

                    {
                        name: translate('jankenpon', 'WINNED'),
                        value: bean.stats_play['paper']['perc']['win'],
                        inline: true
                    },
                    {
                        name: translate('jankenpon', 'WINNED'),
                        value: bean.stats_play['scissors']['perc']['win'],
                        inline: true
                    },
                    {
                        name: translate('jankenpon', 'WINNED'),
                        value: bean.stats_play['rock']['perc']['win'],
                        inline: true
                    },

                    {
                        name: translate('jankenpon', 'LOSE'),
                        value: bean.stats_play['paper']['perc']['lose'],
                        inline: true
                    },
                    {
                        name: translate('jankenpon', 'LOSE'),
                        value: bean.stats_play['scissors']['perc']['lose'],
                        inline: true
                    },
                    {
                        name: translate('jankenpon', 'LOSE'),
                        value: bean.stats_play['rock']['perc']['lose'],
                        inline: true
                    },


                    {
                        name: translate('jankenpon', 'DRAW'),
                        value: bean.stats_play['paper']['perc']['draw'],
                        inline: true
                    },
                    {
                        name: translate('jankenpon', 'DRAW'),
                        value: bean.stats_play['scissors']['perc']['draw'],
                        inline: true
                    },
                    {
                        name: translate('jankenpon', 'DRAW'),
                        value: bean.stats_play['rock']['perc']['draw'],
                        inline: true
                    }
                ])
            );


            await interaction.reply({
                embeds: embeds
            });
            return true;
        }

        await interaction.reply(translate('jankenpon', 'CMD_STATUS_NO_GAME'));
    },
}