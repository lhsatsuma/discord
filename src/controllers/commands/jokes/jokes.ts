import lang from '#includes/lang.ts';
import { SlashCommandBuilder } from "discord.js";
import appCommandInterface from "#interfaces/appCommandInterface.ts";

export default class jokes extends appCommandInterface
{
    hasSubcommands = true;
    name = 'jokes';
    async build()
    {
        this.builded = new SlashCommandBuilder()
        .setName(lang.translate(this.name, `CMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.name, `CMD_${this.name.toUpperCase()}_DESCRIPTION`))
        return super.build();
    }
}