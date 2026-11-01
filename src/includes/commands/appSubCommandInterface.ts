import lang from '#includes/lang.js';
import {SlashCommandSubcommandBuilder} from 'discord.js';
import entryPointApp from '#includes/entryPointApp.js';
export default class appSubCommandInterface
{
    main: entryPointApp;
    builded: SlashCommandSubcommandBuilder;
    parentName: string;
    name: string;
    cooldown: number = 0;
	inactive: boolean = false;
    commandLocaleName: string;
    fullCommandLocaleName: string;
    constructor(main: entryPointApp)
    {
        this.main = main;
        return this;
    }
    init()
    {
        this.commandLocaleName = lang.translate(this.parentName, 'SUBCMD_'+this.name.toUpperCase()+'_NAME');
        return this;
    }

    build(): any
    {
        return Promise.resolve(this);
    }

    async execute(_interaction: any): Promise<any>
    {
        return true;
    }

}