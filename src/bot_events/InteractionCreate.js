const {Events} = require("discord.js");
client.on(Events.InteractionCreate, async interaction => {
    if (!interaction.isChatInputCommand()) return;

    if(!interaction.guildId){
        interaction.reply({
            content: 'Bot is only allowed on servers!',
            ephemeral: true
        });
        return false;
    }
    let command = interaction.client.commands.get(interaction.commandName);
    let commandCD = interaction.commandName;
    let commandName = commandCD;
    let coolDown = command.cooldown;
    let optionsStr = '';
    if(interaction.options._subcommand){
        commandCD += interaction.options._subcommand;
        commandName += ':'+interaction.options._subcommand;
        command = command.subcommands[interaction.options._subcommand];
    }

    if (!command) {
        log.Error(`No command matching ${commandName} was found.`);
        return;
    }

    if(interaction.options._hoistedOptions.length){
        interaction.options._hoistedOptions.forEach((ipt) => {
            optionsStr += ` [${ipt.name}::${ipt.value}]`;
        });
    }

    let interactionKey = `[${interaction.guild.name}#${interaction.channel.name}@${interaction.user.username}]`;
    log.Debug(`${interactionKey}[CMD] ${commandName}${optionsStr}`);

    let cooldownLeft = 0;
    if(!!coolDown){
        cooldownLeft = client.cooldown.checkUserCd(interaction.user.id, commandCD);
    }
    if(!cooldownLeft){
        try {
            await command.execute(interaction);
            if(!!coolDown){
                client.cooldown.insertUserCd(interaction.user.id, commandCD, coolDown);
            }
        } catch (error) {
            console.log(error);
            log.Fatal('Error executing command: '+error.message+ ' on line '+error.line);
            if(!interaction.replied) {
                await interaction.reply({
                    content: 'There was an error while executing this command!',
                    ephemeral: true
                });
            }
        }
    }else{
        await interaction.reply({
            content: 'Aguarde '+cooldownLeft+' segundos para executar novamente o comando...',
            ephemeral: true
        });
    }
});