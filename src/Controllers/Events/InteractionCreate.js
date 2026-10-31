import {Events, MessageFlags} from "discord.js";
import log from '#includes/log.js';
import cooldown from '#includes/commands/cooldown.js';
import lang from '#includes/lang.js';
export default class InteractionCreate
{
    main;
    constructor(main)
    {
        this.main = main;
        return this;
    }
    init()
    {
        this.main.on(Events.InteractionCreate, async interaction => {
            if (!interaction.isChatInputCommand()) return;

            if(!interaction.guildId){
                interaction.reply({
                    content: 'Bot is only allowed on servers!',
                    flags: [MessageFlags.Ephemeral]
                });
                return false;
            }

            let command = interaction.client.commands.get(interaction.commandName);
            let commandCD = interaction.commandName;
            let commandName = commandCD;
            let coolDown = command.cooldown;
            let optionsStr = '';

            if(interaction.options._hoistedOptions.length){
                interaction.options._hoistedOptions.forEach((ipt) => {
                    optionsStr += ` [${ipt.name}::${ipt.value}]`;
                });
            }

            let interactionKey = `[${interaction.guild.name}#${interaction.channel.name}@${interaction.user.username}]`;
            log.debug(`${interactionKey}[CMD] ${commandName}${optionsStr}`);

            let cooldownLeft = 0;
            if(!!coolDown){
                cooldownLeft = cooldown.checkUserCd(interaction.user.id, commandCD);
            }


            if(!cooldownLeft){
                try {
                    await command.execute(interaction);
                    if(!!coolDown){
                        cooldown.insertUserCd(interaction.user.id, commandCD, coolDown);
                    }
                } catch (err) {
                    log.warning('Error executing command: '+err.message);
                    if(!interaction.replied) {
                        await interaction.reply({
                            content: lang.translate('globals', 'CMD_ERROR'),
                            flags: [MessageFlags.Ephemeral]
                        });
                    }
                }
            }else{
                await interaction.reply({
                    content: lang.translate('globals', 'CMD_COOLDOWN', cooldownLeft),
                    flags: [MessageFlags.Ephemeral]
                });
            }
        });
    }
}