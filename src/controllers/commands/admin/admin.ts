import lang from '#includes/lang.ts';
import { SlashCommandBuilder, PermissionFlagsBits } from 'discord.js';
import appCommandBase from '#includes/commands/appCommandBase.ts';

export default class admin extends appCommandBase
{
    hasSubcommands = true;
    name = 'admin';

    async build()
    {
        this.builded = new SlashCommandBuilder()
            .setName(lang.translate(this.name, `CMD_${this.name.toUpperCase()}_NAME`))
            .setDescription(lang.translate(this.name, `CMD_${this.name.toUpperCase()}_DESCRIPTION`))
            .setDefaultMemberPermissions(PermissionFlagsBits.Administrator);

        return super.build();
    }
}
