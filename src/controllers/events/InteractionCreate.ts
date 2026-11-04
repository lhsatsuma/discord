import {ChatInputCommandInteraction, CommandInteractionOptionResolver, Events, MessageFlags} from "discord.js";
import log from '#includes/log.js';
import cooldown from '#includes/commands/cooldown.js';
import lang from '#includes/lang.js';
import entryPointApp from "#includes/entryPointApp.js";
export default class InteractionCreate
{
    main: entryPointApp;
    constructor(main: entryPointApp)
    {
        this.main = main;
        return this;
    }
    init()
    {
        this.main.on(Events.InteractionCreate, async (interaction: ChatInputCommandInteraction) => {
            if (!interaction.isChatInputCommand() || !interaction.isCommand()) return;

            if(!interaction.guildId){
                interaction.reply({
                    content: 'Bot is only allowed on servers!',
                    flags: [MessageFlags.Ephemeral]
                });
                return false;
            }
            let command = this.main.commands.get(interaction.commandName);
            let commandCD = interaction.commandName;
            let commandName = commandCD;
            let coolDown = command.cooldown;
            let optionsStr = '';

            //If is subcommand, lets check all vars
            if(interaction.options.getSubcommand(false)){
                let subCommandName = interaction.options.getSubcommand(false);
                commandCD += ':'+subCommandName;
                commandName += ':'+subCommandName;
                command = command.subcommands[subCommandName];
                coolDown = command ? command.cooldown : 0;
            }

            //If has passed options value, lets mark
            if(interaction.options.data[0]?.options.length){
                interaction.options.data[0].options.forEach((ipt) => {
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
                    log.warning('Error executing command: '+err.message+ ' on '+err.stack);
                    if(!interaction.replied) {
                        await interaction.reply({
                            content: lang.translate('globals', 'CMD_ERROR'),
                            flags: [MessageFlags.Ephemeral]
                        });
                    }
                }
            }else{
                await interaction.reply({
                    content: lang.translate('globals', 'CMD_COOLDOWN', [cooldownLeft]),
                    flags: [MessageFlags.Ephemeral]
                });
            }
        });
    }
}