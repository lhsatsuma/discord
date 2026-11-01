import lang from '#includes/lang.js';
export default class appSubCommandInterface
{
    main;
    parentName;
    name;
    builded;
    cooldown = 0;
	inactive = false;
    commandLocaleName;
    fullCommandLocaleName;
    constructor(main)
    {
        this.main = main;
        return this;
    }
    init()
    {
        this.commandLocaleName = lang.translate(this.parentName, 'SUBCMD_'+this.name.toUpperCase()+'_NAME');
        return this;
    }

    async build()
    {
        return this;
    }

    async execute()
    {
        return true;
    }

}