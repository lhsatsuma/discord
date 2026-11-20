# Server User Wiki

This guide is for Discord server administrators and members using DBIKE BOT. The command names below use American English. The bot's configured locale (for example, `pt-BR`) may use different command names and messages.

For self-hosting and technical documentation, see the [Superadministrator Wiki](Superadministrator-Wiki).

## Administration

These commands require the **Manage Server** permission and configure the channel where they are used.

| Command | Description |
|---|---|
| `/admin add_channel` | Adds the current channel to the administration channel list. These channels receive voice join/leave notifications and autoban reports. |
| `/admin remove_channel` | Removes the current channel from the administration channel list. |
| `/admin config` | Opens a menu with separate forms for Autoban, Memes, and voice notifications. Autoban cleanup defaults to 60 minutes and timeout to 7 days; Reddit odds range from `0` to `10`. |

Existing servers retain the previous ban behavior until an administrator changes it.

## Autoban

Use `/autoban add_channel` or `/autoban remove_channel` in the channel to configure whether it is forbidden. These commands require **Manage Server**.

When a member without the **Administrator** permission sends a message in a configured channel, the bot attempts the selected punishment (ban or timeout) and starts a background scan to delete that member's recent messages from accessible text channels and threads. The scan uses the cleanup period configured with `/admin config` and runs even if applying the punishment fails. An incident report is sent to administration channels. Bot and webhook messages are ignored.

The scan is asynchronous and only covers channels and message history the bot can access. Permission or API failures may prevent some messages from being deleted.

## Birthdays

| Command | Description |
|---|---|
| `/birthday add` | Registers the selected member's birthday. Enter the date as `MM/DD`, such as `12/31`. |
| `/birthday list` | Lists birthdays registered for the server. |
| `/birthday remove` | Removes the selected member's birthday; if no member is selected, removes your own. |
| `/birthday add_channel` | Adds the current channel for birthday announcements. |
| `/birthday remove_channel` | Removes the current channel from birthday announcements. |
| `/birthday list_channels` | Lists configured announcement channels. |

The scheduler posts announcements daily at **8:00 AM** in the bot operator's configured time zone. If a birth year is known, the announcement may include the member's age.

## Games

### Jankenpon (rock-paper-scissors)

| Command | Description |
|---|---|
| `/jankenpon play` | Plays rock-paper-scissors against the bot and records the result. |
| `/jankenpon status` | Shows your wins, losses, and draws for this server. |
| `/jankenpon reset` | Resets your game statistics for this server. |

## Content and entertainment

### Jokes

- `/jokes random` posts a random joke.
- `/jokes add` opens a form to submit text or an image URL.

### Memes

- `/memes random` posts a meme saved for the server and may fetch from Reddit if the operator configured Reddit credentials and the server has meme settings.
- Reddit selection odds (`0` to `10`; `0` disables Reddit fetching) and the subreddit list are configured in the Memes form opened from `/admin config`. Requires **Manage Server**.
- Voice join/leave notifications to administration channels can be enabled or disabled in the Voice notifications form opened from `/admin config`.
- `/memes add` opens a form for a description and image upload. The image is hosted by Imgur.
- `/memes list` lists memes saved for the server.
- `/memes get` searches for a meme by ID or name.

### Pickup lines

- `/pickup-lines random` posts a random pickup line; you can optionally select a member as its recipient.
- `/pickup-lines add` submits a pickup line as text or an image URL.

### User ping

`/pinguser` mentions the selected member one to ten times. It is restricted to administrators and has a cooldown.

## Automatic events

- **Voice channel activity:** Sends join and leave notifications to configured administration channels.
- **Forbidden-channel messages:** Runs the autoban flow and reports the incident to administration channels.
- **Bot joining a server:** Registers the server for bot features.
- **Heartbeat:** Sends or updates a periodic message in the operator's configured channel when enabled.
- **Birthdays:** Posts daily announcements to configured channels.

## Permissions and limitations

Grant the bot only the permissions required for the features you enable. Moderation features may require **Ban Members** (for bans), **Moderate Members** (for timeouts), **Manage Messages**, channel history access, and permission to send messages and embeds in administration channels.

- The bot's highest role must be above a member it is trying to ban or time out. The bot cannot moderate the server owner.
- Discord server security settings may prevent moderation actions even when the bot appears to have the required permissions.
- Message deletion is limited to channels and threads the bot can access; deletion is not guaranteed.
- Slash-command availability depends on the bot operator publishing command definitions.

For privacy and service terms, see the [Privacy Policy](PRIVACY_POLICY) and [Terms of Service](TERMS_OF_SERVICE).

## Support

Join the [official Discord server](https://discord.gg/mwvFcqPUmZ) for community support.
