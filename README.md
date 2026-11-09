
## NPM and NodeJS

Project tested and running with: 

[![NPM Version](https://img.shields.io/badge/npm-12.2.1-green)](https://www.npmjs.com/)
[![Node Version](https://img.shields.io/badge/nodejs-26.13.0-green)](https://nodejs.org/)

## NPM Dependencies
[![@devraelfreeze/discordjs-pagination](https://img.shields.io/npm/v/@devraelfreeze/discordjs-pagination?color=success&label=DiscordJS%20Pagination)](https://www.npmjs.com/package/@devraelfreeze/discordjs-pagination)
[![cronstrue](https://img.shields.io/npm/v/cronstrue?color=success&label=cronstrue)](https://www.npmjs.com/package/cronstrue)
[![DiscordJS](https://img.shields.io/npm/v/discord.js?color=success&label=DiscordJS)](https://www.npmjs.com/package/discord.js)
[![Imgur](https://img.shields.io/npm/v/imgur?color=success&label=Imgur)](https://www.npmjs.com/package/imgur)
[![Node-Cron](https://img.shields.io/npm/v/node-cron?color=success&label=Node%20Cron)](https://www.npmjs.com/package/node-cron)
[![pagination.djs](https://img.shields.io/npm/v/pagination.djs?color=success&label=pagination.djs)](https://www.npmjs.com/package/pagination.djs)
[![pg](https://img.shields.io/npm/v/pg?color=success&label=pg)](https://www.npmjs.com/package/pg)
[![pidusage](https://img.shields.io/npm/v/pidusage?color=success&label=pidusage)](https://www.npmjs.com/package/pidusage)
[![read-last-lines](https://img.shields.io/npm/v/read-last-lines?color=success&label=read-last-lines)](https://www.npmjs.com/package/read-last-lines)
[![reddit](https://img.shields.io/npm/v/reddit?color=success&label=reddit)](https://www.npmjs.com/package/reddit)
[![terser](https://img.shields.io/npm/v/terser?color=success&label=terser)](https://www.npmjs.com/package/terser)
[![uuid](https://img.shields.io/npm/v/uuid?color=success&label=uuid)](https://www.npmjs.com/package/uuid)

### Development Dependencies
[![@types/node](https://img.shields.io/npm/v/@types/node?color=success&label=%40types%2Fnode)](https://www.npmjs.com/package/@types/node)
[![@types/pg](https://img.shields.io/npm/v/@types/pg?color=success&label=%40types%2Fpg)](https://www.npmjs.com/package/@types/pg)
[![TypeScript](https://img.shields.io/npm/v/typescript?color=success&label=TypeScript)](https://www.npmjs.com/package/typescript)

## Author

- [@lhsatsuma](https://www.github.com/lhsatsuma)
# BOT Discord with NodeJS and TypeScript

## Requirements

- **Node.js 22.18 or newer** (Node.js 22 LTS or newer is recommended). The application runs TypeScript files directly using Node.js built-in type stripping.
- **npm 10 or newer**. npm is included with Node.js.
- **PostgreSQL 15 or newer** (recommended).
- A Discord application and bot token created in the [Discord Developer Portal](https://discord.com/developers/applications).

The bot also needs to be invited to the target server with the permissions required for the features you intend to use. Enable the **Server Members Intent** and **Message Content Intent** in the application's Bot settings for member and message features.

## Installation

1. Clone or download the repository:

   ```bash
   git clone https://github.com/lhsatsuma/discord.git
   cd discord
   ```

2. Install project dependencies:

   ```bash
   npm install
   ```

3. Create a PostgreSQL database and user (or use existing credentials). For example, from `psql` as a PostgreSQL administrator:

   ```sql
   CREATE USER discord WITH PASSWORD 'replace-with-a-secure-password';
   CREATE DATABASE discord OWNER discord;
   ```

4. Copy `.env-example` to `.env` and set at least the following values:

   ```dotenv
   DISCORD_BOT_ID=your-discord-application-id
   DISCORD_BOT_TOKEN=your-discord-bot-token
   DISCORD_BOT_ADMIN_CHANNEL=your-superadmin-channel-id
   DB_HOST=127.0.0.1
   DB_USER=discord
   DB_PASSWORD=replace-with-a-secure-password
   DB_NAME=discord
   DB_PORT=5432
   TZ=America/Sao_Paulo
   ```

   Review the remaining values in `.env-example` to configure the bot's name, locale, heartbeat, logging, Imgur, and optional Reddit integration. Do not commit `.env` or share the bot token.

5. Create the database schema by running `db_data/1.create_database.sql` against the configured database. Optionally, load sample or initial records with `db_data/2.records.sql` if appropriate for your setup.

6. In the Discord Developer Portal, configure the bot's privileged intents as noted above and invite the bot to your server.

7. Publish the slash commands. Set `DISCORD_BOT_SEND_COMMANDS_API=true` in `.env` so the app publishes them at startup, or publish them using your deployment process.

## Running the application

Start the app and scheduler in separate terminals or as separate services. Both need to remain running:

```bash
npm run app
```

```bash
npm run scheduler
```

The app handles Discord commands and events. The scheduler sends birthday announcements daily at 08:00 in the configured `TZ` time zone.

To check the TypeScript project without starting the bot:

```bash
npm run build
```


## Contribute

If you wanna create commands and contribute with this project, just copy one of the files on ```./src/controllers/commands/```, modify and create a pull request.

For an overview of the project and a step-by-step guide to adding slash commands, see [Architecture](./docs/architecture.md) and [Adding commands](./docs/adding-commands.md).

All of the code it's free to use! Just be happy :)