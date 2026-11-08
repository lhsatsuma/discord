import {Events, MessageFlags} from "discord.js";
import log from '#includes/log.ts';
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

            let interactionKey = `[${interaction.guild?.name}#${interaction.channelId}@${interaction.user.username}]`;

            //If has passed options value, lets mark
            let optionsStr = '';
            if(interaction.fields.fields.size > 0){
                for (const [key, value] of interaction.fields.fields) {
                    let val_option = 'value' in value ? value.value : 'values' in value ? value.values.join(', ') : '';
                    optionsStr += ` [${key}::${val_option}]`;
                }
            }
            
            log.debug(`${interactionKey}[MDL] ${modalClass.commandName}${optionsStr}`);

            try {
                let result = await modalClass.execute(interaction);
                if(result == false && interaction.isRepliable() && !interaction.deferred){
                    log.warning(lang.translate('system', 'MODAL_EXECUTE_FAILED', [interaction.customId]));
                    interaction.reply({
                        content: lang.translate('system', 'MODAL_EXECUTE_FAILED'),
                        flags: [MessageFlags.Ephemeral]
                    });
                    return;
                }
            } catch (err) {
                log.warning('Error executing command: '+err);
                if(!interaction.replied) {
                    await interaction.reply({
                        content: lang.translate('system', 'MODAL_EXECUTE_FAILED'),
                        flags: [MessageFlags.Ephemeral]
                    });
                }
            }

            return true;
        });
    }
}