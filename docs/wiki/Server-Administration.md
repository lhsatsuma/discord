# Server Administration

This guide is for administrators configuring DBIKE BOT in a Discord server. These commands require the **Manage Server** permission.

## Administration channels

| Command | Description |
|---|---|
| `/admin add_channel` | Adds the current channel to the administration channel list, which receives configured voice notifications and autoban reports. |
| `/admin remove_channel` | Removes the current channel from the administration channel list. |

## Configuration

Use the [dashboard](../../../dashboard/docs/wiki/README) to manage these settings without opening Discord. Sign in with Discord and select a server where you have **Manage Server** or **Administrator** permission. The bot must also be configured for that server.

- **Autoban:** choose whether violations result in a ban or timeout, set the timeout duration, and configure the period of messages to delete. Existing servers retain the previous ban behavior until an administrator changes it.
- **Memes:** set Reddit selection odds (`0` to `10`) and the subreddit list. An odds value of `0` disables Reddit fetching.
- **Voice notifications:** enable or disable join/leave notifications in administration channels.
- **Welcome message:** enable or disable a message sent when a member joins, select a text channel, and customize the message. Use `[@user]` to mention the new member.

For available commands and feature descriptions, see [Server commands](Server-Commands).
