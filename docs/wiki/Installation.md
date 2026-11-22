# Installation and production deployment

This guide deploys the dashboard behind Nginx. Nginx serves the compiled React files and forwards API requests to the Laravel application through PHP-FPM. The Vite development server and Laravel's built-in development server are not production web servers.

The repository paths are:

- `src/app/` — Discord bot and scheduler (Node.js/TypeScript).
- `src/dashboard/backend/` — Laravel JSON API.
- `src/dashboard/frontend/` — React/Vite dashboard.

## Requirements

- PHP 8.3 or newer with the PHP extensions required by Laravel and the PostgreSQL/Redis drivers.
- Composer 2.2 or newer (Laravel 13 requires Composer Runtime API 2.2+).
- Node.js 22 or newer and npm.
- PostgreSQL and Redis reachable by the bot and dashboard backend.
- Nginx with PHP-FPM configured for the installed PHP version.
- A Discord application with OAuth2 credentials and the bot credentials.
- HTTPS certificates for the dashboard and API hostnames.

Use your actual repository path and hostnames in the commands and Nginx examples below. The examples use `dashboard.example.com` and `api.example.com`.

## Database preparation

The bot and dashboard use the same PostgreSQL database. Create a database and a dedicated database user, then grant that user access. For an existing bot installation, back up the database before running migrations and retain the existing database; do not create a fresh database over it.

The Laravel migrations create the dashboard's user and token-related tables alongside the shared bot tables. Run migrations using the production backend `.env` as shown below.

## Install the Laravel API

From the repository root:

```sh
cd src/dashboard/backend
composer install --no-dev --optimize-autoloader
cp .env.example .env
```

Edit `.env` for the production environment. At minimum, set:

```dotenv
APP_NAME="DBIKE BOT Dashboard"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://api.example.com
FRONTEND_ORIGIN=https://dashboard.example.com

DISCORD_CLIENT_ID=your_discord_application_client_id
DISCORD_CLIENT_SECRET=your_discord_application_client_secret
DISCORD_REDIRECT_URI=https://dashboard.example.com/auth/callback
DISCORD_BOT_ID=your_bot_application_id
DISCORD_BOT_TOKEN=your_bot_token

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=your_database
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

REDIS_HOST=127.0.0.1
REDIS_PORT=6379
REDIS_PASSWORD=null
BOT_REDIS_DB=0
```

Set `DISCORD_REDIRECT_URI` to the frontend callback URL and add that exact URL to the Discord application's OAuth2 Redirects. Keep secrets out of source control. Configure the session, cache, and logging values appropriate to your deployment as well.

Generate the application key, apply migrations, seed the initial bot records, and build Laravel's production caches:

```sh
php artisan key:generate
php artisan migrate --force
php artisan db:seed --force
php artisan optimize:clear
php artisan optimize
```

`DatabaseSeeder` seeds the bot's initial joke and pickup-line records through `BotRecordsSeeder`; it does not create an example dashboard user. The records use `insertOrIgnore`, so rerunning the seeder does not duplicate those IDs. Users are created or updated when they authenticate with Discord.

Ensure the PHP-FPM account can write to `storage/` and `bootstrap/cache/`. Point the API Nginx document root at the Laravel `public/` directory only. After deploying code or changing environment values, clear and rebuild Laravel's optimization caches as needed, then reload PHP-FPM if your host requires it.

## Build the React frontend

Build the dashboard into Vite's static `dist/` output:

```sh
cd src/dashboard/frontend
npm ci
npm run build
```

Configure Nginx to serve the generated `dist/` directory. Re-run `npm run build` after frontend changes and deploy the resulting files. The browser calls the relative `/api/` path, so the frontend Nginx server should proxy that path to the Laravel API.

## Nginx example

This example uses a loopback-only API listener on port `8081`. The frontend proxy reaches that listener locally, avoiding a second public DNS/TLS hop. Replace paths, certificates, PHP-FPM configuration, and hostnames for your server. If your hosting panel provides a PHP-FPM include such as `enable-php-85.conf`, use its PHP 8.5 handler in the API server block.

### Laravel API virtual host

```nginx
server {
    listen 443 ssl;
    server_name api.example.com;
    root /absolute/path/to/repository/src/dashboard/backend/public;
    index index.php;

    ssl_certificate     /path/to/fullchain.pem;
    ssl_certificate_key /path/to/privkey.pem;

    # Optional loopback listener for the frontend Nginx proxy.
    listen 127.0.0.1:8081;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /index.php {
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root/index.php;
        fastcgi_param DOCUMENT_ROOT $document_root;
        fastcgi_pass unix:/path/to/php-fpm.sock;
    }

    location ~ \.php$ { return 404; }
    location ~ /\. { deny all; }
}
```

Use the actual PHP-FPM socket or TCP address configured on your host. Do not expose the loopback listener publicly. If you use a panel-managed PHP include, avoid defining a second conflicting PHP handler.

### React frontend virtual host

```nginx
server {
    listen 443 ssl;
    server_name dashboard.example.com;
    root /absolute/path/to/repository/src/dashboard/frontend/dist;
    index index.html;

    ssl_certificate     /path/to/fullchain.pem;
    ssl_certificate_key /path/to/privkey.pem;

    location ^~ /api/ {
        proxy_pass http://127.0.0.1:8081;
        proxy_set_header Host api.example.com;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto https;
    }

    location / {
        try_files $uri $uri/ /index.html;
    }
}
```

The `proxy_pass` intentionally has no trailing slash, preserving `/api/...` when forwarding requests. Add separate port 80 server blocks that redirect each hostname to HTTPS, if TLS termination is performed by this Nginx. Validate and reload Nginx after editing:

```sh
nginx -t
systemctl reload nginx
```

Check that the API responds through the frontend origin at `https://dashboard.example.com/api/...` and that the Discord callback returns to `https://dashboard.example.com/auth/callback`.

## Install the Discord bot and scheduler

Configure the bot independently of the dashboard API. From the repository root:

```sh
cd src/app
npm ci
cp .env-example .env
```

Fill in `.env` with the Discord bot credentials, PostgreSQL connection, Redis URL, and any optional Reddit/Imgur credentials used by enabled features. Set `DISCORD_BOT_SEND_COMMANDS_API=true` if this installation should publish or update application commands through the Discord API. Keep the bot running as two persistent services under your process manager:

```sh
npm run app
npm run scheduler
```

Run each command from `src/app/` under a supervisor such as systemd or another process manager, with the correct working directory and environment. These are long-running bot and scheduler processes, not HTTP servers. Review logs and restart policies in your process manager.

## Updates

For a backend release, install production Composer dependencies, run any new migrations with `--force`, clear and rebuild Laravel caches, and reload PHP-FPM if needed. For a frontend release, install the locked npm dependencies and rebuild `dist/`. Restart the bot and scheduler after updating their code or configuration.

## Related topics

- [Administrator commands and dashboard usage](Admin-Commands)
- [Superadministrator commands](Superadministrator-Commands)
- [User commands](User-Commands)
- [Architecture](Superadministrator-Architecture)
