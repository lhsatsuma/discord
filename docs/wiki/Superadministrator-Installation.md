# Installation and Configuration

This guide covers installing and operating DBIKE BOT. For the application design, see [Architecture](Superadministrator-Architecture). For commands used inside Discord servers, see [Server administration](Server-Administration) and [Server commands](Server-Commands).

## Requirements

- Node.js 22.18 or newer (Node.js 22 LTS or newer is recommended)
- npm 10 or newer
- PostgreSQL 15 or newer
- A Discord application and bot token from the [Discord Developer Portal](https://discord.com/developers/applications)
- Redis is optional and used to cache frequently accessed server settings

Enable the **Server Members Intent** and **Message Content Intent** in the Discord application's Bot settings for member and message features.

## Installation and deployment

1. Clone the repository and install dependencies:

   ```bash
   git clone https://github.com/lhsatsuma/discord.git
   cd discord
   npm install
   ```

2. Create a PostgreSQL database and user. For example, from `psql` as a PostgreSQL administrator:

   ```sql
   CREATE USER discord WITH PASSWORD 'replace-with-a-secure-password';
   CREATE DATABASE discord OWNER discord;
   ```

3. Copy `.env-example` to `.env` and configure the Discord credentials, database connection, locale, time zone, and other settings. Keep the bot token and service credentials private; do not commit `.env`.

4. Create the database schema by running `db_data/1.create_database.sql` against the configured database. `db_data/2.records.sql` can optionally be used for initial records.

5. Invite the bot to your Discord server with the required scopes and permissions. Configure its privileged intents in the Developer Portal.

6. Publish slash-command definitions. Set `DISCORD_BOT_SEND_COMMANDS_API=true` to publish them when the application starts, or use your normal deployment process.

7. Run the application and scheduler as separate processes or services:

   ```bash
   npm run app
   npm run scheduler
   ```

Both processes must stay running. The app handles Discord commands and events; the scheduler sends birthday announcements daily at 08:00 in the configured time zone.

Run `npm run build` to type-check the project without starting either process.

## Configuration

The complete list of supported settings and example values is in `.env-example`. Important groups include:

| Variables | Purpose |
|---|---|
| `DISCORD_BOT_ID`, `DISCORD_BOT_TOKEN` | Discord application ID and bot credential |
| `DISCORD_BOT_NAME`, `DISCORD_BOT_ICON`, `DISCORD_BOT_DESCRIPTION` | Bot identity |
| `DISCORD_BOT_LOCALE` | Command and message locale, such as `en-US` or `pt-BR` |
| `DISCORD_BOT_SEND_COMMANDS_API` | Publish slash commands through Discord's API at startup |
| `DISCORD_BOT_ADMIN_CHANNEL` | Channel reserved for operator commands and global bot information |
| `TZ`, `DISCORD_BOT_HEARTBEAT` | Scheduler time zone and optional heartbeat interval |
| `DB_HOST`, `DB_USER`, `DB_PASSWORD`, `DB_NAME`, `DB_PORT` | PostgreSQL connection |
| `REDIS_URL`, `REDIS_PASSWORD` | Optional Redis cache connection |
| `IMGUR_CLIENT_ID`, `IMGUR_CLIENT_SECRET` | Image hosting for meme submissions |
| `REDDIT_USER`, `REDDIT_PASSWORD`, `REDDIT_APP_ID`, `REDDIT_CLIENT_SECRET` | Reddit API integration for server-configured meme sources |
| `LOG_DIR`, `LOG_LEVEL` | Log destination and verbosity |

Reddit subreddits and selection odds are configured per server in the dashboard; they are not environment variables. Reddit credentials are still required to fetch Reddit content. Redis caches selected settings temporarily; PostgreSQL remains the persistent store. See the [dashboard operator guide](../../../dashboard/docs/wiki/Installation) to configure and run the dashboard alongside the bot.

See [Superadministrator commands](Superadministrator-Commands) for operator-only commands and [Adding commands](Superadministrator-Adding-Commands) for developer documentation.
