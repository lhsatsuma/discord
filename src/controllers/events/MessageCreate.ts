import {
    Colors,
    EmbedBuilder,
    Events,
    PermissionFlagsBits,
    type Guild,
    type GuildBasedChannel,
    type GuildTextBasedChannel,
    type Message
} from 'discord.js';
import entryPointApp from '#src/entryPointApp.ts';
import lang from '#includes/lang.ts';
import log from '#includes/log.ts';
import model_admin_channels from '#models/admin_channels.ts';
import model_autoban_config from '#models/autoban_config.ts';
import model_channels_forbidden from '#models/channels_forbidden.ts';

type MessageDeletionSweep = {
    deletedMessages: number;
    scannedChannels: number;
    failedChannels: number;
};

export default class MessageCreate
{
    main: entryPointApp;

    constructor(main: entryPointApp)
    {
        this.main = main;
    }

    init()
    {
        this.main.on(Events.MessageCreate, async (message) => {
            try {
                await this.handleMessage(message);
            } catch (error) {
                log.warning(`Could not process autoban for message ${message.id}: ${error}`);
            }
        });
    }

    private async handleMessage(message: Message): Promise<void>
    {
        if (!message.guild || message.author.bot || message.webhookId) {
            return;
        }
        const guild = message.guild;

        const forbiddenChannels = await new model_channels_forbidden().listByServer({
            server: guild.id
        });
        if (forbiddenChannels === false) {
            log.warning(`Could not load forbidden channels for guild ${guild.id}.`);
            return;
        }
        if (!forbiddenChannels.includes(message.channelId)) {
            return;
        }

        let member = message.member;
        if (!member) {
            try {
                member = await guild.members.fetch(message.author.id);
            } catch (error) {
                log.warning(`Could not fetch member ${message.author.id} for autoban: ${error}`);
                return;
            }
        }

        if (member.permissions.has(PermissionFlagsBits.Administrator)) {
            return;
        }

        const deletePeriodMinutes = await new model_autoban_config().getDeletePeriod(guild.id);
        if (deletePeriodMinutes === false) {
            log.warning(`Could not load autoban configuration for guild ${guild.id}; skipping ban.`);
            return;
        }

        let memberBanned = false;
        try {
            await guild.members.ban(member, {
                reason: `Message sent in autoban channel ${message.channelId} (${message.id}).`
            });
            memberBanned = true;
        } catch (error) {
            log.warning(`Could not ban member ${member.id} for using forbidden channel ${message.channelId}: ${error}`);
        }

        void this.runMessageDeletionSweep(message, guild, member.id, deletePeriodMinutes, memberBanned)
            .catch((error: unknown) => {
                log.warning(`Could not complete autoban cleanup workflow for message ${message.id}: ${error}`);
            });
    }

    private async runMessageDeletionSweep(
        message: Message,
        guild: Guild,
        memberId: string,
        periodMinutes: number,
        memberBanned: boolean
    ): Promise<void>
    {
        await this.sendAdminLog(message, memberBanned, null);

        try {
            const result = await this.deleteMemberMessages(guild, memberId, periodMinutes);
            log.info(
                `Autoban message sweep for member ${memberId} in guild ${message.guildId}: `
                + `${result.deletedMessages} message(s) deleted across ${result.scannedChannels} channel(s), `
                + `${result.failedChannels} channel(s) failed.`
            );
            await this.sendAdminLog(message, memberBanned, result);
        } catch (error) {
            log.warning(`Autoban message sweep failed for member ${memberId} in guild ${message.guildId}: ${error}`);
            await this.sendAdminLog(message, memberBanned, {
                deletedMessages: 0,
                scannedChannels: 0,
                failedChannels: 1
            });
        }
    }

    private async deleteMemberMessages(
        guild: Guild,
        memberId: string,
        periodMinutes: number
    ): Promise<MessageDeletionSweep>
    {
        const cutoffTimestamp = Date.now() - periodMinutes * 60_000;
        const guildChannels = await guild.channels.fetch();
        const channels = new Map<string, GuildTextBasedChannel>();
        let failedChannels = 0;

        for (const channel of guildChannels.values()) {
            if (!channel || !this.isGuildTextBasedChannel(channel)) {
                continue;
            }

            channels.set(channel.id, channel);
            if (!('threads' in channel)) {
                continue;
            }

            try {
                const activeThreads = await channel.threads.fetchActive();
                for (const thread of activeThreads.threads.values()) {
                    channels.set(thread.id, thread);
                }

                for (const type of ['public', 'private'] as const) {
                    let before: Date | undefined;
                    while (true) {
                        const archivedThreads = await channel.threads.fetchArchived({
                            type,
                            limit: 100,
                            ...(before ? {before} : {})
                        });
                        if (!archivedThreads.threads.size) {
                            break;
                        }

                        let oldestArchiveTimestamp = Number.POSITIVE_INFINITY;
                        for (const thread of archivedThreads.threads.values()) {
                            const archiveTimestamp = thread.archiveTimestamp ?? 0;
                            oldestArchiveTimestamp = Math.min(oldestArchiveTimestamp, archiveTimestamp);
                            if (archiveTimestamp >= cutoffTimestamp) {
                                channels.set(thread.id, thread);
                            }
                        }

                        if (!archivedThreads.hasMore || oldestArchiveTimestamp < cutoffTimestamp) {
                            break;
                        }
                        before = new Date(oldestArchiveTimestamp);
                    }
                }
            } catch (error) {
                failedChannels++;
                log.warning(`Could not enumerate threads in channel ${channel.id} during autoban cleanup: ${error}`);
            }
        }

        let deletedMessages = 0;
        let scannedChannels = 0;

        for (const channel of channels.values()) {
            scannedChannels++;
            try {
                deletedMessages += await this.deleteMemberMessagesFromChannel(
                    channel,
                    memberId,
                    cutoffTimestamp
                );
            } catch (error) {
                failedChannels++;
                log.warning(`Could not scan messages in channel ${channel.id} for autoban cleanup: ${error}`);
            }
        }

        return {deletedMessages, scannedChannels, failedChannels};
    }

    private async deleteMemberMessagesFromChannel(
        channel: GuildTextBasedChannel,
        memberId: string,
        cutoffTimestamp: number
    ): Promise<number>
    {
        let deletedMessages = 0;
        let before: string | undefined;

        while (true) {
            const messages = await channel.messages.fetch({
                limit: 100,
                ...(before ? {before} : {})
            });
            if (!messages.size) {
                break;
            }

            const userMessages = messages.filter((message) =>
                message.author.id === memberId && message.createdTimestamp >= cutoffTimestamp
            );
            if (userMessages.size === 1) {
                const message = userMessages.first();
                if (message) {
                    await message.delete();
                    deletedMessages++;
                }
            } else if (userMessages.size > 1) {
                const deleted = await channel.bulkDelete(userMessages);
                deletedMessages += deleted.size;
            }

            const oldestMessage = messages.last();
            if (!oldestMessage || oldestMessage.createdTimestamp <= cutoffTimestamp || messages.size < 100) {
                break;
            }
            before = oldestMessage.id;
        }

        return deletedMessages;
    }

    private isGuildTextBasedChannel(channel: GuildBasedChannel): channel is GuildTextBasedChannel
    {
        return channel.isTextBased() && 'bulkDelete' in channel;
    }

    private async sendAdminLog(
        message: Message,
        memberBanned: boolean,
        sweep: MessageDeletionSweep | null
    ): Promise<void>
    {
        if (!message.guild) {
            return;
        }

        const adminChannels = await new model_admin_channels().listByServer({
            server: message.guild.id
        });
        if (adminChannels === false) {
            log.warning(`Could not load admin channels for autoban log in guild ${message.guild.id}.`);
            return;
        }

        const embed = new EmbedBuilder()
            .setColor(memberBanned ? Colors.Red : Colors.Orange)
            .setTitle(lang.translate('autoban', 'LOG_TITLE'))
            .setDescription(lang.translate('autoban', 'LOG_DESCRIPTION', [message.author.id, message.channelId]))
            .addFields(
                {
                    name: lang.translate('autoban', 'LOG_MEMBER'),
                    value: `<@${message.author.id}> (\`${message.author.id}\`)`,
                    inline: true
                },
                {
                    name: lang.translate('autoban', 'LOG_CHANNEL'),
                    value: `<#${message.channelId}>`,
                    inline: true
                },
                {
                    name: lang.translate('autoban', 'LOG_MESSAGE'),
                    value: (message.content || lang.translate('autoban', 'LOG_EMPTY_MESSAGE')).slice(0, 1024),
                    inline: false
                },
                {
                    name: lang.translate('autoban', 'LOG_ACTIONS'),
                    value: lang.translate('autoban', 'LOG_ACTIONS_RESULT', [
                        lang.translate('globals', memberBanned ? 'YES' : 'NO'),
                        sweep
                            ? lang.translate('autoban', 'LOG_SWEEP_RESULT', [
                                sweep.deletedMessages,
                                sweep.scannedChannels,
                                sweep.failedChannels
                            ])
                            : lang.translate('autoban', 'LOG_SWEEP_STARTED')
                    ]),
                    inline: false
                }
            )
            .setTimestamp(message.createdAt);

        for (const adminChannelId of adminChannels) {
            try {
                const channel = await message.guild.channels.fetch(adminChannelId);
                if (!channel?.isSendable()) {
                    log.warning(`Admin channel ${adminChannelId} is unavailable or not sendable for autoban logs.`);
                    continue;
                }

                await channel.send({
                    embeds: [embed],
                    allowedMentions: {parse: []}
                });
            } catch (error) {
                log.warning(`Could not send autoban log to admin channel ${adminChannelId}: ${error}`);
            }
        }
    }
}
