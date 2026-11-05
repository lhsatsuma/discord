import lang from '#includes/lang.ts';
import {SlashCommandSubcommandBuilder, ChatInputCommandInteraction} from 'discord.js';
import {Pagination, type Options} from 'pagination.djs';
import entryPointApp from '#includes/entryPointApp.ts';
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

    buildPagination(interaction: ChatInputCommandInteraction, options: Partial<Options> = null)
    {
        const paginationInteraction = interaction as unknown as ConstructorParameters<typeof Pagination>[0];
        const pag_embed = new Pagination(paginationInteraction, options);
        return pag_embed;
    }

}