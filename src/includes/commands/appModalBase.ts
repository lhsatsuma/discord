import lang from '#includes/lang.ts';
import type entryPointApp from '../../entryPointApp.ts';
import { ModalBuilder, type ModalSubmitInteraction } from 'discord.js';
import type appModalInterface from '../../interfaces/appModalInterface.ts';

export default class appModalBase implements appModalInterface
{
    main: entryPointApp;
    builded: ModalBuilder | null = null;
    name: string = '';
    parentName: string = '';
    commandName: string = '';
    cooldown = 0;
    inactive = false;
    subcommands: any[] = [];

    constructor(main: entryPointApp)
    {
        this.main = main;
        return this;
    }

    async init(): Promise<this>
    {
        this.commandName = `modal_${this.parentName}_${this.name}`;
        this.builded = new ModalBuilder()
            .setCustomId(this.commandName)
            .setTitle(lang.translate(this.parentName, `MODAL_${this.name.toUpperCase()}_DESCRIPTION`));

        return this.buildComponents();
    }

    async buildComponents(): Promise<this>
    {
        return this;
    }

    async execute(_interaction: ModalSubmitInteraction): Promise<any>
    {
        return true;
    }
}
