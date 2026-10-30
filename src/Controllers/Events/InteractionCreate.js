import {Events, MessageFlags} from "discord.js";

export default class InteractionCreate
{
    eventName = Events.InteractionCreate;

    execute(interaction)
    {
        console.log(interaction);
        if (!interaction.isChatInputCommand()) return;

        if(!interaction.guildId){
            interaction.reply({
                content: 'Bot is only allowed on servers!',
                flags: [MessageFlags.Ephemeral]
            });
            return false;
        }

        interaction.reply({
            content: 'Command executed!'
        });
    }
}