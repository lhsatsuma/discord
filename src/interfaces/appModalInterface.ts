import lang from '#includes/lang.ts';
import entryPointApp from '../entryPointApp.ts';
import { ModalBuilder } from 'discord.js';
export default class appModalInterface
{
    main: entryPointApp;
    builded: ModalBuilder;
	name: string;
    parentName: string;
    commandName: string;
    cooldown: number = 0;
	inactive: boolean = false;
    subcommands: any[] = [];
    constructor(main: entryPointApp)
    {
        this.main = main;
        return this;
    }

    init()
    {
        this.commandName = `modal_${this.parentName}_${this.name}`;
        this.builded = new ModalBuilder()
        .setCustomId(`${this.commandName}`)
        .setTitle(lang.translate(this.parentName, `MODAL_${this.name.toUpperCase()}_DESCRIPTION`))

        return this.buildComponents();
    }

    async buildComponents()
    {
        return this;
    }

    async execute(_interaction: any): Promise<any>
    {
        return true;
    }
}