# User Commands

These commands are available to members in servers where DBIKE BOT is installed, subject to Discord permissions, command cooldowns, and feature configuration. Command names and responses follow the bot's configured locale.

## Birthdays

| Command | Description |
|---|---|
| `/birthday add` | Register a member's birthday. Use `MM/DD` in English locales and `DD/MM` in Portuguese locales. |
| `/birthday list` | List registered birthdays in the server. |
| `/birthday remove` | Remove a registered birthday; the user option defaults to you. |

The bot announces birthdays daily at 08:00 in the configured time zone. Server channel setup is covered under [Administrator commands](Admin-Commands#birthday-announcement-channels).

Although they configure server-wide destinations, `/birthday add_channel`, `/birthday remove_channel`, and `/birthday list_channels` currently do not enforce an administrator permission in the bot. Server owners should restrict the add/remove commands through Discord if only staff should manage them.

## Games

| Command | Description |
|---|---|
| `/jankenpon play` | Play rock-paper-scissors against the bot. |
| `/jankenpon status` | View your wins, losses, and draws in this server. |
| `/jankenpon reset` | Reset your Jankenpon statistics in this server. |

## Jokes

- `/jokes random` posts a random saved joke.
- `/jokes add` opens a form to submit joke text or an image URL.

## Memes

- `/memes random` posts a saved meme and may fetch a Reddit post if Reddit credentials and server settings are configured.
- `/memes add` opens a form to submit a description and image; submitted images are hosted by Imgur.
- `/memes list` lists saved memes for the server.
- `/memes get` searches for a meme by ID or name.

## Pickup lines

- `/pickup-lines random` posts a pickup line; you may select a member as its recipient.
- `/pickup-lines add` submits text or an image URL.

## Commands requiring administrator access

`/pinguser` and `/admin` are restricted to administrators. There is no `/autoban` slash command; administrators configure auto moderation and its channels through the dashboard. See [Administrator commands](Admin-Commands) for the dashboard guide and admin channel commands.
