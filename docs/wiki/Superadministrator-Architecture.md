# Architecture

The monorepo contains a Discord bot and a separate web dashboard:

| Path | Component |
|---|---|
| `src/app/` | TypeScript/discord.js bot and scheduler |
| `src/dashboard/backend/` | Laravel JSON API, Discord OAuth, PostgreSQL and Redis integration |
| `src/dashboard/frontend/` | React/Vite dashboard, which calls the API through same-origin `/api` routes |

## Bot startup and runtime

The bot package is `src/app/package.json`. `src/app/src/run.ts` starts the event-driven application; `src/app/src/runScheduler.ts` starts the birthday scheduler. The application initializes configuration, locale files, the database connection, and the Discord client, then loads commands, modals, and event handlers.

Inside `src/app/`, commands are under `src/controllers/commands/`, modals under `src/controllers/modals/`, events under `src/controllers/events/`, models under `src/models/`, and shared helpers under `src/includes/`. Locale JSON files are under `src/locales/<locale>/`.

Command aliases are configured in `src/app/package.json` and `src/app/tsconfig.json`. For command implementation details, see [Adding bot commands](Superadministrator-Adding-Commands).

## Dashboard request flow

The frontend starts Discord OAuth through Laravel, receives the authorization callback on `/auth/callback`, then exchanges the code with the backend API. Laravel issues a dashboard JWT; the frontend sends it in the `Authorization: Bearer` header on API requests. The API checks current Discord guild permissions before returning or saving server settings.

The backend and bot use the same PostgreSQL server configuration records. On a successful settings save, Laravel invalidates the corresponding Redis cache key so the bot reloads the new settings.

The dashboard stores each server's bot locale in `server_config`. The bot applies that locale to command responses and scheduled announcements per server, and registers each guild's slash commands using the same locale. When command API publishing is enabled, locale changes trigger command re-registration. English (`en-US`) is the default, with Brazilian Portuguese (`pt-BR`) also available.

See [Installation](Installation) for setup and [Administrator commands](Admin-Commands) for dashboard use.
