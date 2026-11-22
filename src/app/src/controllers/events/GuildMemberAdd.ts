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

import { ChannelType, Events, type GuildMember } from 'discord.js';
import entryPointApp from '#src/entryPointApp.ts';
import log from '#includes/log.ts';
import model_servers from '#models/server.ts';

export default class GuildMemberAdd
{
    main: entryPointApp;

    constructor(main: entryPointApp)
    {
        this.main = main;
    }

    init()
    {
        this.main.on(Events.GuildMemberAdd, async (member) => {
            try {
                await this.sendWelcomeMessage(member);
            } catch (error) {
                log.warning(`Could not send welcome message for member ${member.id} in guild ${member.guild.id}: ${error}`);
            }
        });
    }

    private async sendWelcomeMessage(member: GuildMember): Promise<void>
    {
        const settings = await new model_servers().getServerSettings(member.guild.id);
        if (settings === false) {
            log.warning(`Could not load welcome message settings for guild ${member.guild.id}.`);
            return;
        }
        if (!settings.welcome_message_active) {
            return;
        }
        if (!settings.welcome_channel_id || !settings.welcome_message) {
            log.warning(`Welcome messages are active but incomplete for guild ${member.guild.id}.`);
            return;
        }

        let channel;
        try {
            channel = await member.guild.channels.fetch(settings.welcome_channel_id);
        } catch (error) {
            log.warning(`Could not fetch welcome channel ${settings.welcome_channel_id} in guild ${member.guild.id}: ${error}`);
            return;
        }

        if (!channel || channel.type !== ChannelType.GuildText || !channel.isSendable()) {
            log.warning(`Welcome channel ${settings.welcome_channel_id} is unavailable or not a text channel.`);
            return;
        }

        const content = settings.welcome_message.replaceAll('[@user]', `<@${member.id}>`);
        if (content.length > 2000) {
            log.warning(`Welcome message for guild ${member.guild.id} exceeds Discord's message length limit.`);
            return;
        }

        await channel.send({
            content,
            allowedMentions: {
                parse: [],
                users: [member.id]
            }
        });
    }
}