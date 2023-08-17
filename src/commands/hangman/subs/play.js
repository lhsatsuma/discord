const { EmbedBuilder} = require('discord.js');
const BeanHangman = getUtils().requireAgain(process.cwd()+'/src/models/Hangman.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('play')
            .setDescription(translate('hangman', 'CMD_PLAY')),
    async execute(interaction) {
        let bean = new BeanHangman();
        bean.server = interaction.guildId;
        bean.user_id = interaction.user.id;
        await bean.selectActive();

        if(bean.id){
            await interaction.reply({
                content: translate('hangman', 'CMD_ALREADY_STARTED'),
                ephemeral: true
            });
            return false;
        }

        bean.status = 'running';
        let new_word = bean.setNewWord();
        if(new_word === false){
            await interaction.reply({
                content: translate('hangman', 'NO_RECORDS', getLang().locale),
                ephemeral: true
            });
            return false;
        }

        let description = '';
        description += translate('hangman', 'CMD_PLAY_SUCCESS_WAIT', interaction.user.id);

        let embed = new EmbedBuilder()
            .setColor(getUtils().getColor('BLUE'))
            .setTitle(translate('hangman', 'HANGMAN'))
            .setDescription(description)
            .setThumbnail(bean.options.thumb);

        await interaction.deferReply();
        await interaction.deleteReply();

        const message = await interaction.channel.send({embeds: [embed]});
        await bean.save();

        description = `${translate('hangman', 'CMD_PLAY_SUCCESS')}\n\n
        ${bean.mountSpots()}\n\n
        ${translate('hangman', 'TRYS_LEFT')}: **${bean.chances_left}**\n\n
        ${translate('hangman', 'LETTERS_TOTAL')}: **${bean.word.length}**
        ${translate('hangman', 'LETTERS')}: ${bean.letters.join(', ')}
        ${translate('hangman', 'WORDS_GUESSEDS')}: ${bean.guessed.join(', ')}\n\n
        ${translate('hangman', 'HINTS_USED')}: ${bean.hints.length}/${bean.word_json.hints.length}\n
        ${bean.mountHints()}`;

        embed.setDescription(description);

        await message.edit({
            embeds: [embed]
        });
        const filter = (m) => {
            return (m.author.id === interaction.user.id) && !m.author.bot;
        };
        const collector = interaction.channel.createMessageCollector({ filter, time: 120*1000 });

        collector.on('collect', async m => {

            const letter = m.content;
            let status_game = '';
            if(letter == 'hint') {
                if(!bean.giveHint()){
                    interaction.channel.send({
                        content: translate('hangman', 'CMD_PLAY_NO_MORE_HINTS'),
                        ephemeral: true,
                    }).then(sended => {
                        setTimeout(() => sended.delete(), 3000);
                    });
                }
            }else if(letter.length == 1){
                if(letter.match(/^[A-Za-z]+$/))
                {
                    status_game = bean.tryLetter(letter);
                }else{
                    interaction.channel.send({
                        content: translate('hangman', 'CMD_PLAY_INVALID_CHAR'),
                        ephemeral: true,
                    }).then(sended => {
                        setTimeout(() => sended.delete(), 3000);
                    });
                }
            }else{
                status_game = bean.tryGuess(letter);
            }

            let description = '';

            if(status_game == 'win'){
                description = `${bean.mountSpots(true)}\n\n
                    :tada: **${translate('hangman', 'CMD_PLAY_WINNED')}** :tada:\n\n
                    ${translate('hangman', 'LETTERS_TOTAL')}: **${bean.word.length}**
                    ${translate('hangman', 'LETTERS')}: ${bean.letters.join(', ')}
                    ${translate('hangman', 'WORDS_GUESSEDS')}: ${bean.guessed.join(', ')}\n\n
                    ${translate('hangman', 'HINTS_USED')}: ${bean.hints.length}/${bean.word_json.hints.length}`;
                collector.stop();
                await bean.save();
            }else if(status_game == 'lose'){
                description = `${bean.mountSpots(true)}\n\n
                    **${translate('hangman', 'CMD_PLAY_LOSE')}**\n\n
                    ${translate('hangman', 'LETTERS_TOTAL')}: **${bean.word.length}**
                    ${translate('hangman', 'LETTERS')}: ${bean.letters.join(', ')}
                    ${translate('hangman', 'WORDS_GUESSEDS')}: ${bean.guessed.join(', ')}\n\n
                    ${translate('hangman', 'HINTS_USED')}: ${bean.hints.length}/${bean.word_json.hints.length}`;
                collector.stop();
                await bean.save();
            }else{
                description = `${translate('hangman', 'CMD_PLAY_SUCCESS')}\n\n
                ${bean.mountSpots()}\n\n
                ${translate('hangman', 'TRYS_LEFT')}: **${bean.chances_left}**\n\n
                ${translate('hangman', 'LETTERS_TOTAL')}: **${bean.word.length}**
                ${translate('hangman', 'LETTERS')}: ${bean.letters.join(', ')}
                ${translate('hangman', 'WORDS_GUESSEDS')}: ${bean.guessed.join(', ')}\n\n
                ${translate('hangman', 'HINTS_USED')}: ${bean.hints.length}/${bean.word_json.hints.length}\n
                ${bean.mountHints()}`;
            }
            m.delete();
            embed.setDescription(description);
            message.edit({
                embeds: [embed]
            });
        });
    },
}