const { EmbedBuilder} = require('discord.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName(translate('ttt', 'CMD_PLAY'))
            .setDescription(translate('ttt', 'CMD_PLAY_DESCRIPTION'))
            .addUserOption(option =>
                option
                    .setName('against')
                    .setDescription(translate('ttt', 'CMD_PLAY_OPTION_AGAINST'))
            )
            .addStringOption(option =>
                option.setName('difficulty')
                    .setDescription(translate('ttt', 'CMD_PLAY_OPTION_DIFFICULTY'))
                    .addChoices(
                        { name: translate('ttt', 'CMD_PLAY_OPTION_DIFFICULTY_EASY'), value: 'easy' },
                        { name: translate('ttt', 'CMD_PLAY_OPTION_DIFFICULTY_MEDIUM'), value: 'medium' },
                        { name: translate('ttt', 'CMD_PLAY_OPTION_DIFFICULTY_HARD'), value: 'hard' },
                    )
            ),
    async execute(interaction) {
        let description = '';
        const against = interaction.options.getUser('against') ? interaction.options.getUser('against') : bot_cfg.BOT_ID;
        const dificulty = interaction.options.getString('difficulty') ?? 'easy';

        const BeanVelha = getUtils().requireAgain(process.cwd()+'/src/models/Ttt.js');
        let bean = new BeanVelha();
        bean.server = interaction.guildId;
        bean.user_id = interaction.user.id;
        await bean.selectActive();

        if(bean.id){
            bean.status = 'done';
            await bean.save();
        }

        await bean.selectActive();

        bean.against = against;
        bean.status = 'running';
        bean.level = dificulty;
        await bean.save();

        let embed = new EmbedBuilder()
            .setColor(getUtils().getColor('BLUE'))
            .setTitle('Tic Tac Toe')
            .setDescription(translate('ttt', 'CMD_PLAY_SUCCESS', interaction.user.id, against));

        await interaction.deferReply();
        await interaction.deleteReply();

        const reactionsValid = [
            getUtils().strToEmoji(':zero:'),
            getUtils().strToEmoji(':one:'),
            getUtils().strToEmoji(':two:'),
            getUtils().strToEmoji(':three:'),
            getUtils().strToEmoji(':four:'),
            getUtils().strToEmoji(':five:'),
            getUtils().strToEmoji(':six:'),
            getUtils().strToEmoji(':seven:'),
            getUtils().strToEmoji(':eight:'),
        ];

        const message = await interaction.channel.send({embeds: [embed]});
        await getUtils().reacts(message, reactionsValid);

        description = translate('ttt', 'CMD_PLAY_SUCCESS_INFO', interaction.user.id, against, interaction.user.id)
        description += "\n\n"+bean.mountSpots();

        embed.setDescription(description);

        await message.edit({
            embeds: [embed]
        });
        const filter = (reaction, user) => {
            return (user.id === interaction.user.id || user.id === against) && reactionsValid.indexOf(reaction.emoji.name) !== -1 && !user.bot;
        };
        let last = against;

        const collector = message.createReactionCollector(filter, {time: 60*1000});
        collector.on('collect', async (reaction, user) => {
            const spot = getUtils().strToNumber(getUtils().emojiToStr(reaction.emoji.name).replaceAll(':', ''));
            if(!!bean.played_spots[spot]){
                await reaction.users.remove(user.id);
                return;
            }
            if(last !== null){
                if(last == interaction.user.id && interaction.user.id == user.id
                || last == against && against == user.id){
                    await reaction.users.remove(user.id);
                    return;
                }
            }

            bean.played_spots[spot] = user.id;
            await bean.save();

            last = (against === bot_cfg.BOT_ID)? bot_cfg.BOT_ID : user.id;
            let turn = (last == against) ? interaction.user.id : against;
            let description = '';
            let win = bean.checkWin();

            if(win == 'draw'){
                description = translate('ttt', 'CMD_PLAY_DRAW');
                bean.status = 'done';
                bean.win = '3';
                await bean.save();
                await message.reactions.removeAll();
                collector.stop();
            }else if(win == user.id){
                description = translate('ttt', 'CMD_PLAY_WIN', user.id);
                bean.status = 'done';
                bean.win = user.id;
                await bean.save();
                await message.reactions.removeAll();
                collector.stop();
            }else if(win == bean.against){
                description = translate('ttt', 'CMD_PLAY_WIN', against);
                bean.status = 'done';
                bean.win = bean.against;
                await bean.save();
                await message.reactions.removeAll();
                collector.stop();
            }else {
                if(against === bot_cfg.BOT_ID) {
                    const rand_bot = bean.randBot();
                    bean.markBot(rand_bot);
                }
                win = bean.checkWin();
                if(win == 'draw'){
                    velha.status = 'done';
                    velha.win = 3;
                }else if(win == bean.against){
                    description = translate('ttt', 'CMD_PLAY_WIN', against);
                    bean.status = 'done';
                    bean.win = bean.against;
                    await bean.save();
                    await message.reactions.removeAll();
                    collector.stop();
                }else{
                    description = translate('ttt', 'CMD_PLAY_SUCCESS_INFO_2', interaction.user.id, against, turn);
                    description += "\n" + bean.mountSpots();
                }
            }
            embed.setDescription(description);
            message.edit({
                embeds: [embed]
            });
        });
    },
}