# DBIKE BOT Wiki

DBIKE BOT is a Discord bot built with TypeScript. It provides server administration, automated moderation, birthday announcements, games, and community content commands.

> The command examples below use American English names. Set `DISCORD_BOT_LOCALE=pt-BR` to use Brazilian Portuguese command and message names.

## Table of Contents

- [Setup and Running](#setup-and-running)
- [Administration](#administration)
- [Autoban](#autoban)
- [Birthdays](#birthdays)
- [Games](#games)
- [Content and Entertainment](#content-and-entertainment)
- [Automatic Events](#automatic-events)
- [Permissions and Limitations](#permissions-and-limitations)

## Setup and Running

The bot uses PostgreSQL and requires an application created in the Discord Developer Portal.

1. Install dependencies with `npm install`.
2. Copy `.env-example` to `.env` and fill in the required credentials and settings.
3. Create the database schema by running `db_data/1.create_database.sql`.
4. Invite the bot to your server with the required scopes and permissions.
5. Start the processes:

```bash
npm run app
npm run scheduler
```

The `app` process handles Discord commands and events. The `scheduler` process runs scheduled tasks; both need to be running for all features to work.

To type-check the TypeScript code:

```bash
npm run build
```

### Environment Variables

Available variables and example values are listed in `.env-example`. The main settings are:

| Variable | Purpose |
|---|---|
| `DISCORD_BOT_TOKEN` | Bot token. Keep it private. |
| `DISCORD_BOT_ID` | Discord application ID. |
| `DISCORD_BOT_NAME`, `DISCORD_BOT_ICON`, `DISCORD_BOT_DESCRIPTION` | Bot identity and activity. |
| `DISCORD_BOT_LOCALE` | Language for messages and commands (`pt-BR` or `en-US`). |
| `DISCORD_BOT_SEND_COMMANDS_API` | Whether slash commands are published through the API at startup. |
| `TZ` | Time zone used by the scheduler, such as `America/Sao_Paulo`. |
| `DISCORD_BOT_ADMIN_CHANNEL` | Channel reserved for superadmin commands and information. |
| `DB_HOST`, `DB_USER`, `DB_PASSWORD`, `DB_NAME`, `DB_PORT` | PostgreSQL connection settings. |
| `DISCORD_BOT_HEARTBEAT` | Heartbeat interval in seconds; set to `0` to disable. |
| `IMGUR_CLIENT_ID` | Credential used to host images submitted through the memes command. |
| `REDDIT_USER`, `REDDIT_PASSWORD`, `REDDIT_APP_ID`, `REDDIT_CLIENT_SECRET` | Optional Reddit integration credentials. |
| `servers.subreddits_memes`, `servers.reddit_odd_memes` | Per-server subreddit list (comma-separated) and Reddit meme odds (0-10); cached in Redis for five minutes. |

## Administration

The `/admin` commands below require the **Manage Server** permission. They configure the channel where the command is used.

| Command | Description |
|---|---|
| `/admin add_channel` | Adds the current channel to the administration channel list. These channels receive voice join/leave notifications and autoban logs. |
| `/admin remove_channel` | Removes the current channel from the administration channel list. |
| `/admin config_autoban` | Opens a modal to configure the autoban message cleanup period in minutes. Accepts integers from `0` to `10080` (seven days). The database default is `60` minutes. |

### Superadmin

The `/superadmin` command is intended for administrators and can only be used in the channel configured by `DISCORD_BOT_ADMIN_CHANNEL`.

| Command | Description |
|---|---|
| `/superadmin status` | Displays runtime information for the app and scheduler. |
| `/superadmin logs` | Posts recent process log lines in the superadmin channel. |

## Autoban

The `/autoban` command configures channels where the autoban rule applies. It is available to administrators, and its actions also check for the **Manage Server** permission.

| Command | Description |
|---|---|
| `/autoban add_channel` | Registers the current channel as forbidden. |
| `/autoban remove_channel` | Removes the current channel from the forbidden channel list. |

When a member without the **Administrator** permission sends a message in a forbidden channel, the bot attempts to:

1. Ban the member.
2. Start a background scan of the member's recent messages in accessible text channels and threads, using the period configured with `/admin config_autoban`.
3. Send an embed to the administration channels with details of the incident and the scan result.

Bot and webhook messages are ignored. The scan runs asynchronously; the event handler does not wait for message deletion to finish. An initial log indicates that the scan started, and a later log reports how many messages were deleted and how many channels had failures.

## Birthdays

The `/birthday` command lets members register and view birthdays for the server.

| Command | Description |
|---|---|
| `/birthday add` | Registers a member's birthday. Enter the date as `MM/DD`. |
| `/birthday list` | Shows birthdays registered for the server. |
| `/birthday remove` | Removes the selected user's birthday; if no optional user is specified, removes the command user's birthday. |
| `/birthday add_channel` | Registers the current channel for birthday announcements. |
| `/birthday remove_channel` | Removes the current channel from birthday announcement channels. |
| `/birthday list_channels` | Lists configured birthday announcement channels. |

The scheduler posts birthday announcements every day at **8:00 AM**, using the time zone configured in `TZ`. If the birth year is known, the announcement may also include the member's age; birthdays without a known year do not include an age.

## Games

### Rock Paper Scissors

| Command | Description |
|---|---|
| `/jokenpo play` | Plays rock, paper, scissors against the bot and records the result. |
| `/jokenpo status` | Shows personal game statistics, including wins, losses, and draws. |
| `/jokenpo reset` | Resets the user's statistics for the server. |

## Content and Entertainment

### Jokes

- `/jokes random`: Posts a random joke in the configured language.
- `/jokes add`: Opens a modal to submit text or an image URL.

### Memes

- `/memes random`: Posts a meme registered for the server and may fetch from Reddit when that integration is configured.
- `/memes add`: Opens a modal for a description and image upload; the image is hosted on Imgur.
- `/memes list`: Lists memes for the server.
- `/memes get`: Searches for a meme by ID or name.

### Pickup Lines

- `/pickup_lines random`: Posts a random pickup line; an optional member can be selected as its recipient.
- `/pickup_lines add`: Adds a pickup line as text or an image URL.

### User Ping

`/pinguser` sends one to ten mentions to the selected member. It is restricted to administrators and has a cooldown.

## Automatic Events

- **Voice channel joins and leaves:** Sends embeds about members joining or leaving voice channels to configured administration channels.
- **Messages in forbidden channels:** Runs the autoban flow described above and logs the incident to administration channels.
- **Bot joining a server:** Registers the server in the database.
- **Heartbeat:** Sends or updates a periodic message in the global administration channel when enabled.
- **Birthday scheduler:** Sends daily birthday announcements to configured channels.

## Permissions and Limitations

Grant the bot only the permissions required for the features you enable. Autoban typically requires **Ban Members**, **Manage Messages**, channel history access, and permission to send messages and embeds in administration channels.

- Discord role hierarchy still applies: the bot's highest role must be above the member it is trying to ban. The bot cannot ban the server owner.
- Server security settings may require two-factor authentication for moderation actions. Discord can reject message deletion or bans in that case, even if the bot's permissions appear to be configured correctly.
- The bot can only scan channels and threads it can access. Permission failures are logged, and not all of the member's messages are guaranteed to be deleted.
- Slash command publishing depends on `DISCORD_BOT_SEND_COMMANDS_API` and the application credentials.
- The scheduler must be started separately with `npm run scheduler`.
