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

import {Events, MessageFlags, PermissionFlagsBits} from 'discord.js';
import entryPointApp from '#src/entryPointApp.ts';
import lang from '#includes/lang.ts';
import log from '#includes/log.ts';
import model_servers, {
    MAX_AUTOBAN_DELETE_PERIOD_MINUTES,
    MAX_AUTOBAN_MUTE_DAYS
} from '#models/server.ts';
import modal_admin_config from '#modals/admin/config.ts';
import modal_admin_config_memes from '#modals/admin/memes.ts';
import modal_admin_config_voice from '#modals/admin/voice.ts';
import modal_admin_config_welcome from '#modals/admin/welcome.ts';

const configButtonIds = new Set([
    'admin_config_autoban',
    'admin_config_memes',
    'admin_config_voice',
    'admin_config_welcome'
]);

export default class AdminConfigButtonInteractionCreate
{
    main: entryPointApp;

    constructor(main: entryPointApp)
    {
        this.main = main;
    }

    init()
    {
        this.main.on(Events.InteractionCreate, async (interaction) => {
            if (!interaction.isButton() || !configButtonIds.has(interaction.customId)) {
                return;
            }

            if (!interaction.memberPermissions?.has(PermissionFlagsBits.ManageGuild)) {
                await interaction.reply({
                    content: lang.translate('globals', 'CHANNEL_NOT_ALLOWED'),
                    flags: [MessageFlags.Ephemeral]
                });
                return;
            }

            const serverId = interaction.guildId;
            if (!serverId) {
                await interaction.reply({
                    content: lang.translate('globals', 'CHANNEL_NOT_ALLOWED'),
                    flags: [MessageFlags.Ephemeral]
                });
                return;
            }

            try {
                const settings = await new model_servers().getServerSettings(serverId);
                if (settings === false) {
                    await interaction.reply({
                        content: lang.translate('globals', 'DB_ERROR'),
                        flags: [MessageFlags.Ephemeral]
                    });
                    return;
                }

                let modal:
                    | modal_admin_config
                    | modal_admin_config_memes
                    | modal_admin_config_voice
                    | modal_admin_config_welcome;
                if (interaction.customId === 'admin_config_autoban') {
                    if (!Number.isSafeInteger(settings.autoban_del_period)
                        || settings.autoban_del_period < 0
                        || settings.autoban_del_period > MAX_AUTOBAN_DELETE_PERIOD_MINUTES
                        || !Number.isSafeInteger(settings.autoban_mute_days)
                        || settings.autoban_mute_days < 1
                        || settings.autoban_mute_days > MAX_AUTOBAN_MUTE_DAYS) {
                        await interaction.reply({
                            content: lang.translate('admin', 'MODAL_CONFIG_AUTOBAN_INVALID'),
                            flags: [MessageFlags.Ephemeral]
                        });
                        return;
                    }

                    const autobanModal = new modal_admin_config(this.main);
                    autobanModal.currentPeriod = settings.autoban_del_period;
                    autobanModal.muteDays = settings.autoban_mute_days;
                    autobanModal.punishment = settings.autoban_punishment;
                    modal = autobanModal;
                } else if (interaction.customId === 'admin_config_memes') {
                    const subredditList = settings.subreddits_memes.join(', ');
                    if (subredditList.length > 4000
                        || !Number.isInteger(settings.reddit_odd_memes)
                        || settings.reddit_odd_memes < 0
                        || settings.reddit_odd_memes > 10) {
                        await interaction.reply({
                            content: lang.translate(
                                'admin',
                                subredditList.length > 4000
                                    ? 'SUBCMD_CONFIG_MEMES_LIST_TOO_LONG'
                                    : 'MODAL_CONFIG_MEMES_INVALID_ODDS'
                            ),
                            flags: [MessageFlags.Ephemeral]
                        });
                        return;
                    }

                    const memesModal = new modal_admin_config_memes(this.main);
                    memesModal.odds = settings.reddit_odd_memes;
                    memesModal.subreddits = subredditList;
                    modal = memesModal;
                } else if (interaction.customId === 'admin_config_voice') {
                    const voiceModal = new modal_admin_config_voice(this.main);
                    voiceModal.enabled = settings.send_voice_update;
                    modal = voiceModal;
                } else {
                    const welcomeModal = new modal_admin_config_welcome(this.main);
                    welcomeModal.enabled = settings.welcome_message_active;
                    welcomeModal.channelId = settings.welcome_channel_id;
                    welcomeModal.message = settings.welcome_message;
                    modal = welcomeModal;
                }

                await modal.init();
                if (!modal.builded) {
                    throw new Error(`Admin configuration modal ${interaction.customId} was not built.`);
                }

                await interaction.showModal(modal.builded);
            } catch (error) {
                log.warning(`Could not open admin configuration modal ${interaction.customId}: ${error}`);
                if (!interaction.replied) {
                    await interaction.reply({
                        content: lang.translate('globals', 'CMD_ERROR'),
                        flags: [MessageFlags.Ephemeral]
                    });
                }
            }
        });
    }
}
