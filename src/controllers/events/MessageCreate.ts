import { Colors, EmbedBuilder, Events, PermissionFlagsBits, type Message } from 'discord.js';
import entryPointApp from '#src/entryPointApp.ts';
import lang from '#includes/lang.ts';
import log from '#includes/log.ts';
import model_admin_channels from '#models/admin_channels.ts';
import model_channels_forbidden from '#models/channels_forbidden.ts';

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

        const forbiddenChannels = await new model_channels_forbidden().listByServer({
            server: message.guild.id
        });
        if (forbiddenChannels === false) {
            log.warning(`Could not load forbidden channels for guild ${message.guild.id}.`);
            return;
        }
        if (!forbiddenChannels.includes(message.channelId)) {
            return;
        }

        let member = message.member;
        if (!member) {
            try {
                member = await message.guild.members.fetch(message.author.id);
            } catch (error) {
                log.warning(`Could not fetch member ${message.author.id} for autoban: ${error}`);
                return;
            }
        }

        if (member.permissions.has(PermissionFlagsBits.Administrator)) {
            return;
        }

        let messageDeleted = false;
        try {
            await message.delete();
            messageDeleted = true;
        } catch (error) {
            log.warning(`Could not delete forbidden-channel message ${message.id}: ${error}`);
        }

        let memberBanned = false;
        try {
            await message.guild.members.ban(member, {
                reason: `Message sent in autoban channel ${message.channelId} (${message.id}).`
            });
            memberBanned = true;
        } catch (error) {
            log.warning(`Could not ban member ${member.id} for using forbidden channel ${message.channelId}: ${error}`);
        }

        await this.sendAdminLog(message, memberBanned, messageDeleted);
    }

    private async sendAdminLog(message: Message, memberBanned: boolean, messageDeleted: boolean): Promise<void>
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
                        lang.translate('globals', messageDeleted ? 'YES' : 'NO')
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
