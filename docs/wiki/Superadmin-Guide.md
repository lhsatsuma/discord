# Superadmin Guide

This guide is for the system owner who operates the bot and dashboard. Server administrators should use the [Admin Guide](Admin-Guide).

## Enable superadmin access

Set `DISCORD_SUPERADMIN_ID` in the Laravel backend environment to the Discord user ID of the system owner. Restart or reload the backend after changing the environment.

This account can manage dashboard settings for any server configured for the bot, even without being a member or server administrator. The account also sees the **Superadmin** menu beside **My servers**.

Leave this value empty to use normal server permission checks for everyone.

## Dashboard tools

The **Superadmin** menu provides:

- **Process status:** whether the bot and scheduler are running, their process IDs, uptime, and runtime versions.
- **Bot logs:** the latest 30 lines from the bot or scheduler log.

The backend needs read access to the bot's process ID and log files. In the usual monorepo setup, the paths are detected automatically. Set `BOT_APP_PATH` if the bot is installed elsewhere. Set `BOT_LOG_DIR` if its log directory is not `logs/`.

See [Installation](Installation) for deployment and environment setup.
