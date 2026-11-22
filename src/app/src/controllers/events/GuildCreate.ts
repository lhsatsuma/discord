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

import {Colors, EmbedBuilder, Events, type Guild} from "discord.js";
import log from '#includes/log.ts';
import lang from '#includes/lang.ts';
import config from '#includes/config.ts';
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
            try {
                await this.notifySuperAdmin(guild);
            } catch (error) {
                log.warning(`Could not notify superadmin about guild ${guild.id}: ${error}`);
            }

            const serverClass = new model_servers();
            const selected = await serverClass.selectActive({id: guild.id});
            if (selected === false) {
                log.err(`Error selecting server ${guild.id}`);
                return;
            }

            serverClass.id = guild.id;
            serverClass.name = guild.name;
            serverClass.active = true;
            const saved = selected
                ? await serverClass.save()
                : await serverClass.insert();
            if (!saved) {
                log.err(`Error saving server ${guild.id}`);
                return;
            }

            try {
                await this.main.registerCommandsForGuild(guild.id);
            } catch (error) {
                log.warning(`Could not register slash commands for guild ${guild.id}: ${error}`);
            }
        });
    }

    private async notifySuperAdmin(guild: Guild): Promise<void>
    {
        const channel = await this.main.channels.fetch(config.DISCORD_BOT_ADMIN_CHANNEL);
        if (!channel?.isSendable()) {
            throw new Error(`Superadmin channel ${config.DISCORD_BOT_ADMIN_CHANNEL} is unavailable or not sendable.`);
        }

        const timestamp = Math.floor(Date.now() / 1000);
        const embed = new EmbedBuilder()
            .setColor(Colors.Green)
            .setTitle(lang.translate('system', 'GUILD_CREATE_SUPERADMIN_TITLE'))
            .setDescription(lang.translate('system', 'GUILD_CREATE_SUPERADMIN_DESCRIPTION'))
            .addFields(
                {
                    name: lang.translate('system', 'GUILD_CREATE_SERVER_NAME'),
                    value: guild.name
                },
                {
                    name: lang.translate('system', 'GUILD_CREATE_SERVER_ID'),
                    value: guild.id,
                    inline: true
                },
                {
                    name: lang.translate('system', 'GUILD_CREATE_SERVER_OWNER'),
                    value: `<@${guild.ownerId}> (${guild.ownerId})`,
                    inline: true
                },
                {
                    name: lang.translate('system', 'GUILD_CREATE_MEMBER_COUNT'),
                    value: String(guild.memberCount),
                    inline: true
                },
                {
                    name: lang.translate('system', 'GUILD_CREATE_CREATED_AT'),
                    value: `<t:${Math.floor(guild.createdTimestamp / 1000)}:F>`,
                    inline: true
                },
                {
                    name: lang.translate('system', 'GUILD_CREATE_JOINED_AT'),
                    value: `<t:${timestamp}:F>`,
                    inline: true
                }
            );

        await channel.send({embeds: [embed]});
    }
}