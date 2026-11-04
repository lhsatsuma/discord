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
            if (!interaction.isModalSubmit()) return;

            console.log(interaction);
        });
    }
}