import {Events} from "discord.js";
import log from '#includes/log.ts';
import lang from '#includes/lang.ts';
import entryPointApp from "#src/entryPointApp.ts";
import model_servers from '#models/server.ts';
export default class GuildCreate
{
    main: entryPointApp;
    constructor(main: entryPointApp)
    {
        this.main = main;
        return this;
    }
    init()
    {
        this.main.on(Events.GuildCreate, async (guild) => {
            let serverClass = new model_servers();
            serverClass.server = guild.id;
            serverClass.name = guild.name;
            serverClass.active = true;
            await serverClass.selectActive({server: guild.id});
            if(!await serverClass.save()){
                log.err('Error on saving new server');
            }
        });
    }
}