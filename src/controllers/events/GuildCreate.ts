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