# Superadministrator Dashboard

System superadministrator tools are available from the dashboard's **Superadmin** menu, shown beside **My servers** to the account configured with `DISCORD_SUPERADMIN_ID`.

- **Process status** shows the bot application and scheduler state, process IDs, uptime, platform, Node.js, discord.js, and bot versions.
- **Bot logs** shows the latest 30 lines for either process.

The dashboard backend must be able to read the bot's `pids/` and log files. Configure `BOT_APP_PATH` if the bot is not at the default monorepo location, and `BOT_LOG_DIR` if the bot's `LOG_DIR` differs from `logs/`. See [Installation](Installation) for setup.

For technical documentation, see [Architecture](Superadministrator-Architecture) and [Adding Commands](Superadministrator-Adding-Commands).
