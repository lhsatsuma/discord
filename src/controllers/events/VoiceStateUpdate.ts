import { Colors, EmbedBuilder, Events } from 'discord.js';
import entryPointApp from '#src/entryPointApp.ts';
import lang from '#includes/lang.ts';
import log from '#includes/log.ts';
import model_admin_channels from '#models/admin_channels.ts';

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

            const translationKey = newState.channelId
                ? 'VOICE_STATE_CONNECTED'
                : 'VOICE_STATE_DISCONNECTED';
            const embed = new EmbedBuilder()
                .setColor(Colors.Blue)
                .setTitle(newState.guild.name)
                .setDescription(lang.translate('globals', translationKey, [member.id, channelId]))
                .setTimestamp();

            const adminChannels = await new model_admin_channels().listByServer({
                server: newState.guild.id
            });
            if (adminChannels === false) {
                log.warning(`Could not load admin channels for guild ${newState.guild.id}.`);
                return;
            }

            for (const adminChannelId of adminChannels) {
                try {
                    const channel = await newState.guild.channels.fetch(adminChannelId);
                    if (!channel?.isSendable()) {
                        log.warning(`Admin channel ${adminChannelId} is unavailable or not sendable.`);
                        continue;
                    }

                    await channel.send({embeds: [embed]});
                } catch (error) {
                    log.warning(`Could not send voice state update to admin channel ${adminChannelId}: ${error}`);
                }
            }
        });
    }
}
