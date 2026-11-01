import fs from 'fs';
import log from '#includes/log.js';
import lang from '#includes/lang.js';
import { SlashCommandBuilder } from "discord.js";
import appCommandInterface from "#includes/commands/appCommandInterface.js";

export default class pickup_lines extends appCommandInterface
{
    hasSubcommands = true;
    name = 'pickup_lines';
    async build()
    {
        this.builded = new SlashCommandBuilder()
        .setName(lang.translate(this.name, `CMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.name, `CMD_${this.name.toUpperCase()}_DESCRIPTION`))
        return super.build();
    }
}