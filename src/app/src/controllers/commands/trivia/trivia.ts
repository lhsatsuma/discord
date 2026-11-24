/*
 * Copyright (C) 2025 Luis Satsuma
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

import lang from '#includes/lang.ts';
import { SlashCommandBuilder } from 'discord.js';
import appCommandBase from '#includes/commands/appCommandBase.ts';

export default class trivia extends appCommandBase
{
    hasSubcommands = true;
    name = 'trivia';

    async build()
    {
        this.builded = new SlashCommandBuilder()
            .setName(lang.translate(this.name, 'CMD_TRIVIA_NAME'))
            .setDescription(lang.translate(this.name, 'CMD_TRIVIA_DESCRIPTION'));

        return super.build();
    }
}
