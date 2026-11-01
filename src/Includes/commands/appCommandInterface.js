import lang from '#includes/lang.js';
import fs from 'fs';
import log from '#includes/log.js';
export default class appCommandInterface
{
    main;
    builded;
    cooldown = 0;
	inactive = false;
    commandLocaleName;
    fullCommandLocaleName;
    subcommands = [];
    constructor(main)
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

    async execute()
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

                let subCommandClass = new subCommand.default().init();
                await subCommandClass.build();

                log.debug(lang.translate('system', 'START_LOADING_SUBCOMMAND_NAME', [subCommandClass.commandLocaleName]));

                this.builded.addSubcommand(subCommandClass.builded);
                this.subcommands[subCommandClass.commandLocaleName] = subCommandClass;
            }
        }
        return this;
    }
}