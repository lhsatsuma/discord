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

import { Colors, EmbedBuilder, Events, type GuildMember, type VoiceState } from 'discord.js';
import entryPointApp from '#src/entryPointApp.ts';
import lang from '#includes/lang.ts';
import log from '#includes/log.ts';
import model_servers from '#models/server.ts';

export default class VoiceStateUpdate
{
    main: entryPointApp;

    constructor(main: entryPointApp)
    {
        this.main = main;
    }

    init()
    {
        this.main.on(Events.VoiceStateUpdate, async (oldState, newState) => {
            if (oldState.channelId === newState.channelId) {
                return;
            }

            const member = newState.member ?? oldState.member;
            if (!member) {
                log.warning('Voice state update did not include a guild member.');
                return;
            }

            const channelId = newState.channelId ?? oldState.channelId;
            if (!channelId) {
                return;
            }

            const settings = await new model_servers().getServerSettings(newState.guild.id);
            if (settings === false) {
                log.warning(`Could not load voice update setting for guild ${newState.guild.id}.`);
                return;
            }
            if (!settings.send_voice_update) {
                return;
            }

            await lang.runWithLocale(
                settings.locale,
                () => this.sendVoiceUpdate(newState, member, channelId, settings.admin_channels)
            );
        });
    }

    private async sendVoiceUpdate(
        state: VoiceState,
        member: GuildMember,
        channelId: string,
        adminChannels: string[]
    ): Promise<void>
    {
        const translationKey = state.channelId
            ? 'VOICE_STATE_CONNECTED'
            : 'VOICE_STATE_DISCONNECTED';
        const embed = new EmbedBuilder()
            .setColor(Colors.Blue)
            .setTitle(state.guild.name)
            .setDescription(lang.translate('globals', translationKey, [member.id, channelId]))
            .setTimestamp();

        for (const adminChannelId of adminChannels) {
            try {
                const channel = await state.guild.channels.fetch(adminChannelId);
                if (!channel?.isSendable()) {
                    log.warning(`Admin channel ${adminChannelId} is unavailable or not sendable.`);
                    continue;
                }

                await channel.send({embeds: [embed]});
            } catch (error) {
                log.warning(`Could not send voice state update to admin channel ${adminChannelId}: ${error}`);
            }
        }
    }
}
