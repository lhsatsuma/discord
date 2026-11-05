import {ChatInputCommandInteraction, CommandInteractionOptionResolver, Events, MessageFlags, ModalSubmitInteraction} from "discord.js";
import log from '#includes/log.ts';
import cooldown from '#includes/commands/cooldown.ts';
import lang from '#includes/lang.ts';
import entryPointApp from "#includes/entryPointApp.ts";
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
        this.main.on(Events.InteractionCreate, async (interaction: ModalSubmitInteraction) => {
            if (!interaction.isModalSubmit()) return;

            //The interaction is a modal submit interaction, we need to check if the modal is registered in the modals collection
            if(!interaction.customId.startsWith('modal_')){
                return;
            }

            let modalClass = this.main.modals.get(interaction.customId);
            if(!modalClass){
                log.warning(lang.translate('system', 'MODAL_NOT_FOUND', [interaction.customId]));
                interaction.reply({
                    content: lang.translate('system', 'MODAL_NOT_FOUND'),
                    flags: [MessageFlags.Ephemeral]
                });
                return;
            }

            let interactionKey = `[${interaction.guild.name}#${interaction.channel.name}@${interaction.user.username}]`;

            //If has passed options value, lets mark
            let optionsStr = '';
            if(interaction.fields.fields.size > 0){
                for (const [key, value] of interaction.fields.fields) {
                    optionsStr += ` [${key}::${value['value']}]`;
                }
            }
            
            log.debug(`${interactionKey}[MDL] ${modalClass.customId}${optionsStr}`);

            let result = await modalClass.execute(interaction);
            if(result == false){
                log.warning(lang.translate('system', 'MODAL_EXECUTE_FAILED', [interaction.customId]));
                interaction.reply({
                    content: lang.translate('system', 'MODAL_EXECUTE_FAILED'),
                    flags: [MessageFlags.Ephemeral]
                });
                return;
            }

            return true;
        });
    }
}