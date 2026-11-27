# DBIKE BOT

DBIKE BOT is a Discord community bot with a web dashboard for server administrators. This repository contains the bot, its scheduler, the dashboard API, and the dashboard frontend.

## Repository layout

| Path | Project |
|---|---|
| `src/app/` | TypeScript and discord.js bot application and scheduler |
| `src/dashboard/backend/` | Laravel API, Discord OAuth, database and Redis integration |
| `src/dashboard/frontend/` | React/Vite dashboard |
| `docs/wiki/` | Installation, commands, and developer documentation |

## Requirements

- Node.js 22.18 or newer and npm 10 or newer
- PHP 8.3 or newer and Composer 2.2 or newer
- PostgreSQL 15 or newer
- Redis 7 or newer for bot settings cache and dashboard cache invalidation
- A Discord application and bot token

## Quick start

The projects have independent dependencies and environment files. Follow the [installation guide](docs/wiki/Installation.md) for database setup, OAuth, migrations, production deployment, and run commands.

```bash
cd src/app
npm ci
npm run build
```

Run `npm run app` and `npm run scheduler` from `src/app/` as separate long-running processes. Install the Laravel and React dependencies and build the dashboard from `src/dashboard/backend/` and `src/dashboard/frontend/` respectively.

## Documentation

- [Documentation index](docs/wiki/README.md)
- [Superadministrator commands](docs/wiki/Superadministrator-Commands.md)
- [Administrator commands and dashboard guide](docs/wiki/Admin-Commands.md)
- [User commands](docs/wiki/User-Commands.md)
- [Privacy Policy](src/dashboard/frontend/src/policies/PRIVACY_POLICY.md)
- [Terms of Service](src/dashboard/frontend/src/policies/TERMS_OF_SERVICE.md)

For community support, join the [official Discord server](https://discord.gg/mwvFcqPUmZ).
