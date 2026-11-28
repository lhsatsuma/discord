# Admin Guide

Use the dashboard to configure a server without running setup commands in Discord.

## Sign in and select a server

1. Open the dashboard URL provided by the system owner.
2. Choose **Continue with Discord** and authorize the dashboard.
3. Select a server from **My servers**. You must have **Manage Server** or **Administrator** permission, and the bot must be installed and configured there.
4. Open a settings section, make changes, and choose **Save changes**.

The dashboard checks your Discord server permissions before showing or saving settings. A success or error notice appears after saving.

## Dashboard features

- **Auto moderation:** choose ban or timeout, set the message cleanup period (0 to 10,080 minutes), and set timeout duration (1 to 28 days).
- **Channel Rules:** select report and voice notification channels, and choose which channels trigger auto moderation.
- **Meme settings:** set Reddit selection odds (0 disables Reddit) and list up to 100 subreddit names, separated by commas or new lines. Reddit credentials must be configured by the system owner.
- **Voice notifications:** enable or disable join and leave messages.
- **Welcome message:** enable the message, choose its channel, and edit its text. Use `[@user]` to mention the new member. The final message must fit Discord's 2,000-character limit.
- **Trivia:** choose enabled question categories and set the daily question limit from 1 to 5 per player.

Saved settings are stored in PostgreSQL. The dashboard clears the bot's Redis settings cache after a successful save.

## Troubleshooting

If a server is missing, confirm the bot is installed there and that your Discord account has the required permission. If sign-in or saving fails, contact the system owner and include the time of the error so they can check the backend logs.

Member command guidance is available on the dashboard under **User Commands**.
