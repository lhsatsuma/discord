const { EmbedBuilder} = require('discord.js');
const BeanJankenpon = getUtils().requireAgain(process.cwd()+'/src/models/Jankenpon.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('status')
            .setDescription('Member Statistics'),
    async execute(interaction) {

        let bean = new BeanJankenpon();

        bean.user_id = interaction.user.id;

        await bean.select();

        if(!!bean.id){
            bean.getStats();

            bean.getStatsPlay();

            bean.stats['win']['total'] = bean.stats['win']['total'].toString().padStart(6, ' ');
            bean.stats['lose']['total'] = bean.stats['lose']['total'].toString().padStart(6, ' ');
            bean.stats['draw']['total'] = bean.stats['draw']['total'].toString().padStart(6, ' ');
            bean.total_played = bean.total_played.toString().padStart(6, ' ');

            bean.win_rock = bean.win_rock.toString().padStart(6, ' ');
            bean.lose_rock = bean.lose_rock.toString().padStart(6, ' ');
            bean.draw_rock = bean.draw_rock.toString().padStart(6, ' ');
            bean.played_rock = bean.played_rock.toString().padStart(6, ' ');

            bean.win_paper = bean.win_paper.toString().padStart(6, ' ');
            bean.lose_paper = bean.lose_paper.toString().padStart(6, ' ');
            bean.draw_paper = bean.draw_paper.toString().padStart(6, ' ');
            bean.played_paper = bean.played_paper.toString().padStart(6, ' ');

            bean.win_scissors = bean.win_scissors.toString().padStart(6, ' ');
            bean.lose_scissors = bean.lose_scissors.toString().padStart(6, ' ');
            bean.draw_scissors = bean.draw_scissors.toString().padStart(6, ' ');
            bean.played_scissors = bean.played_scissors.toString().padStart(6, ' ');


            let description='**By Amount:**\n```' +
                `|==============================================|\n` +
                `|          |  Win   |  Lose  |  Draw  |  Total |\n` +
                `|----------|--------|--------|--------|--------|\n` +
                `| Paper    | ${bean.win_paper} | ${bean.lose_paper} | ${bean.draw_paper} | ${bean.played_paper} |\n` +
                `|----------|--------|--------|--------|--------|\n` +
                `| Scissors | ${bean.win_scissors} | ${bean.lose_scissors} | ${bean.draw_scissors} | ${bean.played_scissors} |\n` +
                `|----------|--------|--------|--------|--------|\n` +
                `| Rock     | ${bean.win_rock} | ${bean.lose_rock} | ${bean.draw_rock} | ${bean.played_rock} |\n` +
                `|----------|--------|--------|--------|--------|\n` +
                `| Total    | ${bean.stats['win']['total']} | ${bean.stats['lose']['total']} | ${bean.stats['draw']['total']} | ${bean.total_played} |\n` +
                `|==============================================|\n`;

            description += '```';

            bean.stats_play['paper']['perc']['win'] = bean.stats_play['paper']['perc']['win'].toString().replace('.', ',').padStart(6, ' ');
            bean.stats_play['paper']['perc']['lose'] = bean.stats_play['paper']['perc']['lose'].toString().replace('.', ',').padStart(6, ' ');
            bean.stats_play['paper']['perc']['draw'] = bean.stats_play['paper']['perc']['draw'].toString().replace('.', ',').padStart(6, ' ');
            bean.stats_play['paper']['perc']['total'] = bean.stats_play['paper']['perc']['total'].toString().replace('.', ',').padStart(6, ' ');

            bean.stats_play['rock']['perc']['win'] = bean.stats_play['rock']['perc']['win'].toString().replace('.', ',').padStart(6, ' ');
            bean.stats_play['rock']['perc']['lose'] = bean.stats_play['rock']['perc']['lose'].toString().replace('.', ',').padStart(6, ' ');
            bean.stats_play['rock']['perc']['draw'] = bean.stats_play['rock']['perc']['draw'].toString().replace('.', ',').padStart(6, ' ');
            bean.stats_play['rock']['perc']['total'] = bean.stats_play['rock']['perc']['total'].toString().replace('.', ',').padStart(6, ' ');

            bean.stats_play['scissors']['perc']['win'] = bean.stats_play['scissors']['perc']['win'].toString().replace('.', ',').padStart(6, ' ');
            bean.stats_play['scissors']['perc']['lose'] = bean.stats_play['scissors']['perc']['lose'].toString().replace('.', ',').padStart(6, ' ');
            bean.stats_play['scissors']['perc']['draw'] = bean.stats_play['scissors']['perc']['draw'].toString().replace('.', ',').padStart(6, ' ');
            bean.stats_play['scissors']['perc']['total'] = bean.stats_play['scissors']['perc']['total'].toString().replace('.', ',').padStart(6, ' ');

            bean.stats['win']['perc'] = bean.stats['win']['perc'].toString().replace('.', ',').padStart(6, ' ');
            bean.stats['lose']['perc'] = bean.stats['lose']['perc'].toString().replace('.', ',').padStart(6, ' ');
            bean.stats['draw']['perc'] = bean.stats['draw']['perc'].toString().replace('.', ',').padStart(6, ' ');


            description +='\n\n**By Percs (%):**\n```' +
                `|==============================================|\n` +
                `|          |   Win  |  Lose  |  Draw  |  Total |\n` +
                `|----------|--------|--------|--------|--------|\n` +
                `| Paper    | ${bean.stats_play['paper']['perc']['win']} | ${bean.stats_play['paper']['perc']['lose']} | ${bean.stats_play['paper']['perc']['draw']} | ${bean.stats_play['paper']['perc']['total']} |\n` +
                `|----------|--------|--------|--------|--------|\n` +
                `| Scissors | ${bean.stats_play['scissors']['perc']['win']} | ${bean.stats_play['scissors']['perc']['lose']} | ${bean.stats_play['scissors']['perc']['draw']} | ${bean.stats_play['scissors']['perc']['total']} |\n` +
                `|----------|--------|--------|--------|--------|\n` +
                `| Rock     | ${bean.stats_play['rock']['perc']['win']} | ${bean.stats_play['rock']['perc']['lose']} | ${bean.stats_play['rock']['perc']['draw']} | ${bean.stats_play['rock']['perc']['total']} |\n` +
                `|----------|--------|--------|--------|--------|\n` +
                `| Total    | ${bean.stats['win']['perc']} | ${bean.stats['lose']['perc']} | ${bean.stats['draw']['perc']} | 100,00 |\n` +
                `|==============================================|`;

            description += '```';

            let embedMsg = new EmbedBuilder()
                .setColor(getUtils().getColor('ORANGE'))
                .setTitle('Scores on Jankenpon of '+interaction.user.username)
                .setDescription(description)
            await interaction.reply({
                embeds: [embedMsg]
            });
            return true;
        }

        await interaction.reply('You need to play first to get your status!');
    },
}