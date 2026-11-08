import type { ChatInputCommandInteraction, SlashCommandSubcommandBuilder } from 'discord.js';
import type entryPointApp from '../entryPointApp.ts';
import type { Options } from 'pagination.djs';

export default interface appSubCommandInterface
{
    main: entryPointApp;
    builded: SlashCommandSubcommandBuilder;
    parentName: string;
    name: string;
    cooldown: number;
    inactive: boolean;
    commandLocaleName: string;
    fullCommandLocaleName: string;
    init(): this;
    build(): any;
    execute(interaction: ChatInputCommandInteraction): Promise<any>;
    buildPagination(interaction: ChatInputCommandInteraction, options?: Partial<Options>): any;
}
