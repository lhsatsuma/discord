import type { ModalBuilder, ModalSubmitInteraction } from 'discord.js';
import type entryPointApp from '../entryPointApp.ts';

export default interface appModalInterface
{
    main: entryPointApp;
    builded: ModalBuilder;
    name: string;
    parentName: string;
    commandName: string;
    cooldown: number;
    inactive: boolean;
    subcommands: any[];
    init(): Promise<this>;
    buildComponents(): Promise<this>;
    execute(interaction: ModalSubmitInteraction): Promise<any>;
}
