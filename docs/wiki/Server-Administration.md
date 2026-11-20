# Server Administration

This guide is for administrators configuring DBIKE BOT in a Discord server. These commands require the **Manage Server** permission.

## Administration channels

| Command | Description |
|---|---|
| `/admin add_channel` | Adds the current channel to the administration channel list, which receives configured voice notifications and autoban reports. |
| `/admin remove_channel` | Removes the current channel from the administration channel list. |
| `/admin config` | Opens configuration forms for Autoban, Memes, voice notifications, and the server language. |

## Configuration

- **Autoban:** choose whether violations result in a ban or timeout, set the timeout duration, and configure the period of messages to delete. Existing servers retain the previous ban behavior until an administrator changes it.
- **Memes:** set Reddit selection odds (`0` to `10`) and the subreddit list. An odds value of `0` disables Reddit fetching.
- **Voice notifications:** enable or disable join/leave notifications in administration channels.
- **Server language:** choose the language used for bot responses and slash-command names in this server.

For available commands and feature descriptions, see [Server commands](Server-Commands).
