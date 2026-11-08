import {Events, MessageFlags} from "discord.js";
import log from '#includes/log.ts';
import cooldown from '#includes/cooldown.ts';
import lang from '#includes/lang.ts';
import entryPointApp from "#src/entryPointApp.ts";
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
        this.main.on(Events.InteractionCreate, async (interaction) => {
            if (!interaction.isChatInputCommand()) return;

            if(!interaction.guildId){
                interaction.reply({
                    content: 'Bot is only allowed on servers!',
                    flags: [MessageFlags.Ephemeral]
                });
                return false;
            }
            let command = this.main.commands.get(interaction.commandName);
            if(!command){
                log.err('[Commands] Command not found: '+interaction.commandName);
                return false;
            }
            let commandCD = interaction.commandName;
            let commandName = commandCD;
            let coolDown = command.cooldown;
            let optionsStr = '';

            //If is subcommand, lets check all vars
            if(interaction.options.getSubcommand(false)){
                let subCommandName = interaction.options.getSubcommand(false);
                if(subCommandName){
                    commandCD += ':'+subCommandName;
                    commandName += ':'+subCommandName;
                    command = command.subcommands[subCommandName];
                    coolDown = command ? command.cooldown : 0;
                }
            }

            //If has passed options value, lets mark
            const appendOptionValues = (options: typeof interaction.options.data) => {
                options.forEach((option) => {
                    if (option.options?.length) {
                        appendOptionValues(option.options);
                    } else if ('value' in option) {
                        optionsStr += ` [${option.name}::${option.value}]`;
                    }
                });
            };
            appendOptionValues(interaction.options.data);

            let interactionKey = `[${interaction.guild?.name}#${interaction.channelId}@${interaction.user.username}]`;
            log.debug(`${interactionKey}[CMD] ${commandName}${optionsStr}`);

            let cooldownLeft = 0;
            if(!!coolDown){
                cooldownLeft = cooldown.checkUserCd(interaction.user.id, commandCD);
            }


            if(!cooldownLeft){
                try {
                    let result = await command.execute(interaction);
                    if(!result){
                        throw new Error('Command failed!');
                    }
                    if(!!coolDown){
                        cooldown.insertUserCd(interaction.user.id, commandCD, coolDown);
                    }
                } catch (err) {
                    log.warning('Error executing command: '+err);
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