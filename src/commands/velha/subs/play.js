const { EmbedBuilder} = require('discord.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('play')
            .setDescription('Play a match!')
            .addUserOption(option =>
                option
                    .setName('against')
                    .setDescription('Member to play against')
            )
            .addStringOption(option =>
                option.setName('dificulty')
                    .setDescription('Dificulty if played against bot')
                    .addChoices(
                        { name: 'Easy', value: 'easy' },
                        { name: 'Medium', value: 'medium' },
                        { name: 'Hard', value: 'hard' },
                    )
            ),
    async execute(interaction) {
        const againstOption = interaction.options.getUser('against');
        const dificulty = interaction.options.getString('dificulty');
        console.log(dificulty);
        const BeanVelha = requireAgain(process.cwd()+'/src/models/Velha.js');
        let bean = new BeanVelha();
        bean.user_id = interaction.user.id;
        await bean.selectActive();

        if(bean.id){
            bean.status = 'done';
            await bean.save();
        }

        await bean.selectActive();
        let against = bot_cfg.discordOptions.bot_id;
        if(!!againstOption){
            against = againstOption.id;
        }

        bean.against = against;
        bean.status = 'running';
        bean.level = dificulty;
        await bean.save();

        let description = '';
        description += `<@!${interaction.user.id}> it's the :negative_squared_cross_mark:
		<@!${against}> it's the :brown_circle:
		
		Wait for play....`;

        let embed = new EmbedBuilder()
            .setColor(getColor('BLUE'))
            .setTitle('Tic Tac Toe')
            .setDescription(description);

        await interaction.reply('Starting a new game!');

        const reactionsValid = [
            strToEmoji(':zero:'),
            strToEmoji(':one:'),
            strToEmoji(':two:'),
            strToEmoji(':three:'),
            strToEmoji(':four:'),
            strToEmoji(':five:'),
            strToEmoji(':six:'),
            strToEmoji(':seven:'),
            strToEmoji(':eight:'),
        ];

        const message = await interaction.channel.send({embeds: [embed]});
        await reacts(message, reactionsValid);

        description = `<@!${interaction.user.id}> é o :negative_squared_cross_mark:
        
		<@!${against}> é o :brown_circle:
		
		<@!${interaction.user.id}> starts!
        React on numbers to mark a spot:\n`;
        description += "\n"+bean.mountSpots();

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
            const spot = strToNumber(emojiToStr(reaction.emoji.name).replaceAll(':', ''));
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

            last = (against === bot_cfg.discordOptions.bot_id)? bot_cfg.discordOptions.bot_id : user.id;
            let turn = (last == against) ? interaction.user.id : against;
            let description = '';
            let win = bean.checkWin();

            if(win == 'draw'){
                description = `**Game Ended!**\n\nIt's a draw! Try again`;
                bean.status = 'done';
                bean.win = '3';
                await bean.save();
                await message.reactions.removeAll();
                collector.stop();
            }else if(win == user.id){
                description = `**Game Ended!**\n\n<@!${user.id}> win!`;
                bean.status = 'done';
                bean.win = user.id;
                await bean.save();
                await message.reactions.removeAll();
                collector.stop();
            }else if(win == bean.against){
                description = `**Game Ended!**\n\n<@!${against}> win!`;
                bean.status = 'done';
                bean.win = bean.against;
                await bean.save();
                await message.reactions.removeAll();
                collector.stop();
            }else {
                if(against === bot_cfg.discordOptions.bot_id) {
                    const rand_bot = bean.randBot();
                    bean.markBot(rand_bot);
                }
                win = bean.checkWin();
                if(win == 'draw'){
                    velha.status = 'done';
                    velha.win = 3;
                }else if(win == bean.against){
                    description = `**Game Ended!**\n\n<@!${against}> win!`;
                    bean.status = 'done';
                    bean.win = bean.against;
                    await bean.save();
                    await message.reactions.removeAll();
                    collector.stop();
                }else{
                    description = `<@!${interaction.user.id}> it's the :negative_squared_cross_mark:\n\n`+
                    `<@!${against}> it's the :brown_circle:\n\n`+
                    `It's <@!${turn}> turn!\n\n`+
                    `React on numbers to mark a spot:\n`;
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