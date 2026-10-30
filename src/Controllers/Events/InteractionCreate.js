import {Events, MessageFlags} from "discord.js";

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

            interaction.reply({
                content: 'Command executed!'
            });
        });
    }
}