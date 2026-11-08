import lang from '#includes/lang.ts';
import fs from 'fs';
import log from '#includes/log.ts';
import type entryPointApp from '#src/entryPointApp.ts';
import { SlashCommandBuilder, type ChatInputCommandInteraction } from 'discord.js';
import { Pagination, type Options } from 'pagination.djs';
import type appCommandInterface from '#interfaces/appCommandInterface.ts';

export default class appCommandBase implements appCommandInterface
{
    main: entryPointApp;
    builded: SlashCommandBuilder | null = null;
    name: string = '';
    hasSubcommands = false;
    cooldown = 0;
    inactive = false;
    commandLocaleName: string= '';
    fullCommandLocaleName: string= '';
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
                const importFile = importPath + subFileName;
                const subCommand = await import(importFile);

                const subCommandClass = new subCommand.default(this.main).init();
                await subCommandClass.build();

                log.debug(lang.translate('system', 'START_LOADING_SUBCOMMAND_NAME', [subCommandClass.commandLocaleName]));

                this.builded?.addSubcommand(subCommandClass.builded);
                this.subcommands[subCommandClass.commandLocaleName] = subCommandClass;
            }
        }
        return this;
    }

    buildPagination(interaction: ChatInputCommandInteraction, options: Partial<Options>)
    {
        const paginationInteraction = interaction as unknown as ConstructorParameters<typeof Pagination>[0];
        return new Pagination(paginationInteraction, options);
    }
}
