import type { ChatInputCommandInteraction, SlashCommandBuilder } from 'discord.js';
import type entryPointApp from '../entryPointApp.ts';
import type { Options } from 'pagination.djs';

export default interface appCommandInterface
{
    main: entryPointApp;
    builded: SlashCommandBuilder | null;
    name: string;
    hasSubcommands: boolean;
    cooldown: number;
    inactive: boolean;
    commandLocaleName: string;
    fullCommandLocaleName: string;
    subcommands: any[];
    init(): this;
    build(): Promise<any>;
    execute(interaction: ChatInputCommandInteraction): Promise<any>;
    buildSubCommands(): Promise<this>;
    buildPagination(interaction: ChatInputCommandInteraction, options: Partial<Options>): any;
}
