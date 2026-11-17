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
import { SlashCommandBuilder, PermissionFlagsBits } from "discord.js";
import appCommandBase from "#includes/commands/appCommandBase.ts";

export default class superadmin extends appCommandBase
{
    hasSubcommands = true;
    name = 'superadmin';
    async build()
    {
        this.builded = new SlashCommandBuilder()
        .setName(lang.translate(this.name, `CMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.name, `CMD_${this.name.toUpperCase()}_DESCRIPTION`))
        .setDefaultMemberPermissions(PermissionFlagsBits.Administrator)
        return super.build();
    }
}