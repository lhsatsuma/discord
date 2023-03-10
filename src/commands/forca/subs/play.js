const { EmbedBuilder, Events} = require('discord.js');
const BeanForca = requireAgain(process.cwd()+'/src/models/Forca.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('play')
            .setDescription('Play a match!'),
    async execute(interaction) {
        let bean = new BeanForca();
        bean.user_id = interaction.user.id;
        await bean.selectActive();

        if(bean.id){
            await interaction.reply({
                content: 'You already started a game!',
                ephemeral: true
            });
            return false;
        }

        bean.status = 'running';
        bean.setNewWord();

        let description = '';
        description += `<@!${interaction.user.id}> started a match of Forca!
		Wait for play....`;

        let embed = new EmbedBuilder()
            .setColor(getColor('BLUE'))
            .setTitle('Hangman (Forca)')
            .setDescription(description)
            .setThumbnail(bean.options.thumb);

        await interaction.reply('Starting a new game!');

        const message = await interaction.channel.send({embeds: [embed]});
        bean.last_msg_id = message.id;
        await bean.save();

        description = `Type in chat the letters or guess the word
        Type **hint** in chat to receive a hint of the word\n\n
        ${bean.mountSpots()}\n\n
        Try left: **${bean.chances_left}**\n\n
        Letters Total: **${bean.palavra.length}**
        Letters: ${bean.letras.join(', ')}
        Guessed: ${bean.guessed.join(', ')}\n\n
        Hints used: ${bean.dicas.length}/${bean.word_json.dicas.length}\n
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
            let description = '';

            const letter = m.content;
            let status_game = '';
            if(letter == 'hint') {
                if(!bean.giveHint()){
                    interaction.channel.send({
                        content: 'No more hints available!',
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
                        content: 'Only A-Z letters allowed!',
                        ephemeral: true,
                    }).then(sended => {
                        setTimeout(() => sended.delete(), 3000);
                    });
                }
            }else{
                status_game = bean.tryGuess(letter);
            }

            if(status_game == 'win'){
                description = `${bean.mountSpots(true)}\n\n
                    :tada: ** You Win! Congratulations!** :tada:\n\n
                    **Stats:**
                    Letters Total: **${bean.palavra.length}**
                    Letters: ${bean.letras.join(', ')}
                    Guessed: ${bean.guessed.join(', ')}\n\n
                    Hints used: ${bean.dicas.length}/${bean.word_json.dicas.length}\n`;
                collector.stop();
                await bean.save();
            }else if(status_game == 'lose'){
                description = `${bean.mountSpots(true)}\n\n
                    **You Lose! Try again!**\n\n
                    **Stats:**
                    Letters Total: **${bean.palavra.length}**
                    Letters: ${bean.letras.join(', ')}
                    Guessed: ${bean.guessed.join(', ')}\n\n
                    Hints used: ${bean.dicas.length}/${bean.word_json.dicas.length}\n`;
                collector.stop();
                await bean.save();
            }else{
                description = `Type in chat the letters or guess the word\n\n
                Type **hint** in chat to receive a hint of the word\n\n
                ${bean.mountSpots()}\n\n
                Try left: **${bean.chances_left}**\n\n
                Letters Total: **${bean.palavra.length}**
                Letters: ${bean.letras.join(', ')}
                Guessed: ${bean.guessed.join(', ')}\n\n
                Hints used: ${bean.dicas.length}/${bean.word_json.dicas.length}\n
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