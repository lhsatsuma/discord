import cron from 'node-cron';
import { Colors, EmbedBuilder, type Guild } from 'discord.js';
import type { ScheduledTask } from 'node-cron';
import type entryPoint from '#src/entryPoint.ts';
import config from '#includes/config.ts';
import lang from '#includes/lang.ts';
import log from '#includes/log.ts';
import model_birthday_channels from '#models/birthday_channels.ts';
import model_birthday, { type birthdayRecord } from '#models/birthday.ts';

type LocalDateParts = {
    year: number;
    month: number;
    day: number;
};

class BirthdaySchedule
{
    readonly interval = '0 8 * * *';
    readonly active = true;
    readonly main: entryPoint;

    constructor(main: entryPoint)
    {
        this.main = main;
    }

    schedule(): ScheduledTask
    {
        return cron.schedule(this.interval, async () => this.execute(), {
            timezone: config.TZ,
            noOverlap: true,
            name: 'birthday-announcements'
        });
    }

    private getLocalDateParts(date: Date): LocalDateParts
    {
        const parts = new Intl.DateTimeFormat('en-US', {
            timeZone: config.TZ,
            year: 'numeric',
            month: 'numeric',
            day: 'numeric'
        }).formatToParts(date);
        const values = Object.fromEntries(parts.map(({type, value}) => [type, value]));

        return {
            year: Number(values.year),
            month: Number(values.month),
            day: Number(values.day)
        };
    }

    private getBirthdayParts(birthdate: Date | string): LocalDateParts
    {
        if (typeof birthdate === 'string') {
            const dateOnly = /^(\d{4})-(\d{2})-(\d{2})/.exec(birthdate);
            if (dateOnly) {
                return {
                    year: Number(dateOnly[1]),
                    month: Number(dateOnly[2]),
                    day: Number(dateOnly[3])
                };
            }
        }

        const date = birthdate instanceof Date ? birthdate : new Date(birthdate);
        if (Number.isNaN(date.getTime())) {
            throw new Error(`Invalid stored birthday date: ${birthdate}`);
        }

        return {
            year: date.getUTCFullYear(),
            month: date.getUTCMonth() + 1,
            day: date.getUTCDate()
        };
    }

    async execute(): Promise<boolean>
    {
        log.info('Starting birthday announcement schedule.');

        try {
            const today = this.getLocalDateParts(new Date());
            const birthdays = await new model_birthday().getBirthdaysForDate(today.month, today.day);
            if (birthdays === false) {
                log.err('Could not load birthdays for today.');
                return false;
            }

            const birthdaysByServer = new Map<string, birthdayRecord[]>();
            for (const birthday of birthdays) {
                const serverBirthdays = birthdaysByServer.get(birthday.server) ?? [];
                serverBirthdays.push(birthday);
                birthdaysByServer.set(birthday.server, serverBirthdays);
            }

            for (const [serverId, serverBirthdays] of birthdaysByServer) {
                try {
                    await this.sendServerBirthdays(serverId, serverBirthdays, today.year);
                } catch (error) {
                    log.warning(`Failed to announce birthdays for guild ${serverId}: ${error}`);
                }
            }

            log.info(`Finished birthday announcement schedule. Processed ${birthdays.length} birthday(s).`);
            return true;
        } catch (error) {
            log.err(`Unable to run birthday announcement schedule: ${error}`);
            return false;
        }
    }

    private async sendServerBirthdays(serverId: string, birthdays: birthdayRecord[], currentYear: number): Promise<void>
    {
        let guild: Guild;
        try {
            guild = await this.main.guilds.fetch(serverId);
        } catch (error) {
            log.warning(`Could not fetch guild ${serverId} for birthday announcements: ${error}`);
            return;
        }

        const channels = await new model_birthday_channels().listByServer({server: serverId});
        if (channels === false) {
            log.warning(`Could not load birthday announcement channels for guild ${serverId}.`);
            return;
        }
        if (!channels.length) {
            log.info(`No birthday announcement channels configured for guild ${serverId}.`);
            return;
        }

        const sendableChannels = [];
        for (const channelId of new Set(channels)) {
            try {
                const channel = await guild.channels.fetch(channelId);
                if (!channel?.isSendable()) {
                    log.warning(`Birthday announcement channel ${channelId} in guild ${serverId} is unavailable or not sendable.`);
                    continue;
                }
                sendableChannels.push(channel);
            } catch (error) {
                log.warning(`Could not fetch birthday announcement channel ${channelId}: ${error}`);
            }
        }

        for (const birthday of birthdays) {
            let member;
            try {
                member = await guild.members.fetch(birthday.user_id);
            } catch (error) {
                log.warning(`Could not fetch birthday member ${birthday.user_id} in guild ${serverId}: ${error}`);
                continue;
            }

            let birthdayParts: LocalDateParts;
            try {
                birthdayParts = this.getBirthdayParts(birthday.birthdate);
            } catch (error) {
                log.warning(`Skipping invalid birthday for member ${birthday.user_id}: ${error}`);
                continue;
            }

            const embed = new EmbedBuilder()
                .setColor(Colors.Blue)
                .setTitle(lang.translate('birthday', 'SCHEDULE_HAPPY_BIRTHDAY'))
                .setAuthor({
                    name: member.user.username,
                    iconURL: member.user.displayAvatarURL()
                })
                .setDescription(lang.translate('birthday', 'SCHEDULE_BIRTHDAY_MESSAGE', [member.id]))
                .addFields({
                    name: lang.translate('birthday', 'SCHEDULE_BIRTHDAY_DATE_LABEL'),
                    value: new Date(Date.UTC(2000, birthdayParts.month - 1, birthdayParts.day))
                        .toLocaleDateString(lang.locale, {timeZone: 'UTC', day: '2-digit', month: '2-digit'}),
                    inline: true
                })
                .setTimestamp();

            if (birthdayParts.year !== 1500 && birthdayParts.year !== 2000) {
                embed.addFields({
                    name: lang.translate('birthday', 'SCHEDULE_BIRTHDAY_AGE_LABEL'),
                    value: String(currentYear - birthdayParts.year),
                    inline: true
                });
            }

            for (const channel of sendableChannels) {
                try {
                    await channel.send({embeds: [embed]});
                } catch (error) {
                    log.warning(`Could not send birthday announcement for ${birthday.user_id} to ${channel.id}: ${error}`);
                }
            }
        }
    }
}

export default BirthdaySchedule;
