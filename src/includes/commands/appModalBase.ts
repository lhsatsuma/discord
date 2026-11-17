/*
 * Copyright (C) 2025 Luis Satsuma
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

import lang from '#includes/lang.ts';
import type entryPointApp from '../../entryPointApp.ts';
import { ModalBuilder, type ModalSubmitInteraction } from 'discord.js';
import type appModalInterface from '../../interfaces/appModalInterface.ts';

export default class appModalBase implements appModalInterface
{
    main: entryPointApp;
    builded: ModalBuilder | null = null;
    name: string = '';
    parentName: string = '';
    commandName: string = '';
    cooldown = 0;
    inactive = false;
    subcommands: any[] = [];

    constructor(main: entryPointApp)
    {
        this.main = main;
        return this;
    }

    async init(): Promise<this>
    {
        this.commandName = `modal_${this.parentName}_${this.name}`;
        this.builded = new ModalBuilder()
            .setCustomId(this.commandName)
            .setTitle(lang.translate(this.parentName, `MODAL_${this.name.toUpperCase()}_DESCRIPTION`));

        return this.buildComponents();
    }

    async buildComponents(): Promise<this>
    {
        return this;
    }

    async execute(_interaction: ModalSubmitInteraction): Promise<any>
    {
        return true;
    }
}
