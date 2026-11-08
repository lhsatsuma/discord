import lang from '#includes/lang.ts';
import type { ChatInputCommandInteraction } from 'discord.js';
import { Pagination, type Options } from 'pagination.djs';
import type entryPointApp from '../../entryPointApp.ts';
import type appSubCommandInterface from '../../interfaces/appSubCommandInterface.ts';

export default class appSubCommandBase implements appSubCommandInterface
{
    main: entryPointApp;
    builded: any;
    parentName: string;
    name: string;
    cooldown = 0;
    inactive = false;
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

    buildPagination(interaction: ChatInputCommandInteraction, options: Partial<Options> = null)
    {
        const paginationInteraction = interaction as unknown as ConstructorParameters<typeof Pagination>[0];
        return new Pagination(paginationInteraction, options);
    }
}
