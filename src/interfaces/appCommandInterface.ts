import lang from '#includes/lang.ts';
import fs from 'fs';
import log from '#includes/log.ts';
import entryPointApp from '../entryPointApp.ts';
import {SlashCommandBuilder, ChatInputCommandInteraction} from 'discord.js';
import {Pagination, type Options} from 'pagination.djs';
export default class appCommandInterface
{
    main: entryPointApp;
    builded: SlashCommandBuilder;
	name: string;
	hasSubcommands: boolean = false;
    cooldown: number = 0;
	inactive: boolean = false;
    commandLocaleName: string;
    fullCommandLocaleName: string;
    subcommands: any[] = [];
    constructor(main: entryPointApp)
    {
        this.main = main;
        return this;
    }

    init()
    {
        this.commandLocaleName = lang.translate(this.name, 'CMD_'+this.name.toUpperCase()+'_NAME');
        this.fullCommandLocaleName = this.commandLocaleName;
        return this;
    }

    async build()
    {
        log.debug(lang.translate('system', 'START_LOADING_COMMAND_NAME', [this.commandLocaleName]));
        await this.buildSubCommands();
        log.debug(lang.translate('system', 'START_LOADED_COMMAND_NAME', [this.commandLocaleName]));
        return this;
    }

    async execute(_interaction: any): Promise<any>
    {
        return true;
    }

    async buildSubCommands()
    {
        if(this.hasSubcommands){
            const importPath = '#commands/'+this.constructor.name+'/subs/';
            const basePath = './src/controllers/commands/'+this.constructor.name+'/subs/';

            const subcommandsFiles = fs.readdirSync(basePath);

            for (const subFileName of subcommandsFiles){
                let subCommand = null;
                let importFile = importPath + subFileName;
			    subCommand = await import(importFile);

                let subCommandClass = new subCommand.default(this.main).init();
                await subCommandClass.build();

                log.debug(lang.translate('system', 'START_LOADING_SUBCOMMAND_NAME', [subCommandClass.commandLocaleName]));

                this.builded.addSubcommand(subCommandClass.builded);
                this.subcommands[subCommandClass.commandLocaleName] = subCommandClass;
            }
        }
        return this;
    }

    buildPagination(interaction: ChatInputCommandInteraction, options: Partial<Options>)
    {
        const paginationInteraction = interaction as unknown as ConstructorParameters<typeof Pagination>[0];
        const pag_embed = new Pagination(paginationInteraction, options);
        return pag_embed;
    }
}