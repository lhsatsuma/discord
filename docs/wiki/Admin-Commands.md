# Administrator Commands

This guide covers server administration. Discord command availability and checks are noted below; the dashboard independently verifies Discord permissions before showing or saving server settings.

## Server administration commands

| Command | Purpose | Access |
|---|---|---|
| `/pinguser` | Mention a selected member 1–10 times. | Administrator only; subject to command cooldown. |

The `/autoban` slash command has been removed. Auto moderation remains available and is configured in the dashboard. When a non-administrator posts in a channel marked **Autoban**, the bot applies the configured ban or timeout, attempts to remove the member's recent messages from accessible channels and threads, and reports the incident to administration channels. Message deletion can be incomplete if the bot lacks channel or history permissions.

### Birthday announcement channels

`/birthday add_channel`, `/birthday remove_channel`, and `/birthday list_channels` manage announcement channels. These are server-wide settings, but the current bot code does not enforce a Manage Server or Administrator permission on these subcommands. Restrict them through Discord's command permissions if only staff should use them.

## Dashboard

Use the dashboard to configure server settings without running configuration commands in Discord.

1. Open the dashboard URL supplied by the bot operator.
2. Select **Continue with Discord** and authorize sign-in.
3. On **My servers**, choose a server where you have **Manage Server** or **Administrator** permission and where the bot has an active configuration.
4. Edit the settings and select **Save changes**. A success notice appears when the save completes.

The API checks your Discord guild permissions and the bot's active server record. Saving updates PostgreSQL and invalidates that server's settings cache in Redis.

### Dashboard settings

- **Auto moderation:** choose ban or timeout, set message cleanup period (0–10,080 minutes), and set timeout duration (1–28 days).
- **Channel Rules:** select text channels for administration reports and voice notifications, and mark channels that auto moderation should act on. This replaces the removed `/admin add_channel` and `/admin remove_channel` commands, as well as the removed `/autoban` channel commands.
- **Meme settings:** set Reddit selection odds from 0 to 10 (`0` disables Reddit fetching) and enter up to 100 subreddit names separated by commas or new lines. The bot operator must configure Reddit credentials.
- **Voice notifications:** toggle join/leave notifications in the server's administration channels.
- **Welcome message:** toggle the message, select a text channel, and set text. Use `[@user]` to mention the member who joined. The rendered message must fit Discord's 2,000-character limit.

If a server is missing, confirm the bot is installed and the server is configured, and check your Discord permissions. For sign-in or save errors, ask the operator to check the dashboard API, database, Redis, and application logs.

## Birthday member commands

Member birthday registration and lookup are described in [User commands](User-Commands). The birthday channel commands above configure where scheduled announcements are sent; announcements run daily at 08:00 in the bot's configured time zone.
