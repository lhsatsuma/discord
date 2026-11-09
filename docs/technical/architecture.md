# Architecture

The application is a TypeScript Discord bot built with discord.js. Its main code lives under `src/`.

## Startup and runtime

1. `src/run.ts` creates `entryPointApp` and starts initialization.
2. `src/entryPoint.ts` initializes configuration, locale files, the database connection, and the Discord client.
3. `src/entryPointApp.ts` loads commands, modals, and event handlers before the bot is considered ready.
4. The event handlers in `src/controllers/events/` route slash-command and modal interactions to their implementations.

The application uses aliases such as `#commands/*`, `#events/*`, `#models/*`, and `#includes/*`. Their mappings are configured in `package.json` and `tsconfig.json`.

## Main folders

| Path | Purpose |
| --- | --- |
| `src/controllers/commands/` | Slash commands and subcommands |
| `src/controllers/modals/` | Modal definitions and submit handlers |
| `src/controllers/events/` | Discord event listeners |
| `src/interfaces/` | TypeScript contracts and shared command/subcommand base classes |
| `src/models/` | Database models and shared persistence behavior |
| `src/includes/` | Shared configuration, logging, localization, database, and utilities |
| `src/locales/<locale>/` | JSON translation modules, for example `pt-BR/jokes.json` |

## Command loading and dispatch

Each directory immediately inside `src/controllers/commands/` represents one root slash command. The loader expects a same-named TypeScript file inside that directory, for example:

```text
src/controllers/commands/hello/hello.ts
```

Commands extend `appCommandInterface`. Commands with subcommands set `hasSubcommands = true`; the loader then discovers files in the command's `subs/` directory. Each subcommand extends `appSubCommandInterface`.

The command interaction event uses the names produced by localization when registering commands and dispatching their subcommands. Keep the command's `name`, subcommand's `name`/`parentName`, and locale keys consistent.

The bot sends the command definitions to Discord on startup only when `DISCORD_BOT_SEND_COMMANDS_API=true`. Otherwise, command registration must be handled separately.

## Interactions and persistence

- Slash commands and subcommands implement `execute(interaction)`, build a Discord reply, and may use a model from `src/models/`.
- A subcommand can create and show a modal. Modal submit handlers are loaded from `src/controllers/modals/` and are dispatched by their custom ID.
- Models extend `model_base`, which provides common database operations. Model-specific query methods and field definitions belong in their model files.
- Add user-facing strings to the relevant JSON module in each configured locale. `lang.translate(module, key)` reads from the file named after `module`.

See [Adding commands](./adding-commands.md) for the step-by-step workflow and examples.
