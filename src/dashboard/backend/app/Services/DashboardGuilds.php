<?php

namespace App\Services;

use App\Lib\DiscordApi;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DashboardGuilds
{
    private const CACHE_TTL_SECONDS = 60;
    private const SUPERADMIN_ICON_CACHE_TTL_SECONDS = 180;

    public function __construct(private readonly DiscordApi $discordApi) {}

    /** @return list<array{id: string, name: string, icon: ?string}> */
    public function configuredForUser(string $userId, string $accessToken): array
    {
        $superadminId = trim((string) config('services.discord.superadmin_id', ''));
        if ($superadminId !== '' && hash_equals($superadminId, $userId)) {
            Log::debug('Discord system superadmin bypassed server permission checks.', [
                'discord_user_id' => $userId,
            ]);
            try {
                $guildIcons = $this->guildIconsForUser($userId, $accessToken);
            } catch (\Throwable $error) {
                Log::warning('Could not load Discord guild icons for system superadmin.', [
                    'discord_user_id' => $userId,
                    'message' => $error->getMessage(),
                ]);
                $guildIcons = [];
            }

            return DB::table('servers')
                ->where('active', true)
                ->orderBy('name')
                ->get(['id', 'name'])
                ->map(static fn ($server): array => [
                    'id' => (string) $server->id,
                    'name' => (string) ($server->name ?: $server->id),
                    'icon' => $guildIcons[(string) $server->id] ?? null,
                ])
                ->all();
        }

        $cache = Cache::store('redis');
        $key = 'dashboard:configured-guilds:v1:'.$userId;

        $guilds = $cache->get($key);
        if (is_array($guilds)) {
            Log::debug('Discord manageable guild cache hit.', [
                'discord_user_id' => $userId,
                'cache_ttl_seconds' => self::CACHE_TTL_SECONDS,
            ]);
            $configuredGuilds = $this->filterConfiguredGuilds($guilds);
            if ($configuredGuilds !== $guilds) {
                $cache->put($key, $configuredGuilds, now()->addSeconds(self::CACHE_TTL_SECONDS));
            }
            return $configuredGuilds;
        }

        Log::debug('Discord manageable guild cache miss.', [
            'discord_user_id' => $userId,
            'cache_ttl_seconds' => self::CACHE_TTL_SECONDS,
        ]);
        return $cache->lock($key.':lock', 15)->block(12, function () use ($cache, $key, $userId, $accessToken): array {
            $guilds = $cache->get($key);
            if (is_array($guilds)) {
                Log::debug('Discord manageable guild cache hit after lock.', [
                    'discord_user_id' => $userId,
                    'cache_ttl_seconds' => self::CACHE_TTL_SECONDS,
                ]);
                $configuredGuilds = $this->filterConfiguredGuilds($guilds);
                if ($configuredGuilds !== $guilds) {
                    $cache->put($key, $configuredGuilds, now()->addSeconds(self::CACHE_TTL_SECONDS));
                }
                return $configuredGuilds;
            }

            $manageableGuilds = array_values(array_map(static fn (array $guild): array => [
                'id' => (string) $guild['id'],
                'name' => (string) $guild['name'],
                'icon' => isset($guild['icon']) ? (string) $guild['icon'] : null,
            ], array_filter($this->discordApi->currentUserGuilds($accessToken, $userId), static function ($guild): bool {
                if (! is_array($guild) || ! isset($guild['id'], $guild['name'], $guild['permissions'])) return false;
                $permissions = (int) $guild['permissions'];
                return ($permissions & 8) !== 0 || ($permissions & 32) !== 0;
            })));
            $configuredGuilds = $this->filterConfiguredGuilds($manageableGuilds);
            $cache->put($key, $configuredGuilds, now()->addSeconds(self::CACHE_TTL_SECONDS));
            return $configuredGuilds;
        });
    }

    /** @param list<array{id: string, name: string, icon: ?string}> $guilds
     *  @return list<array{id: string, name: string, icon: ?string}>
     */
    private function filterConfiguredGuilds(array $guilds): array
    {
        $ids = array_values(array_map(static fn (array $guild): string => (string) $guild['id'], $guilds));
        if ($ids === []) return [];

        $configuredIds = DB::table('servers')
            ->where('active', true)
            ->whereIn('id', $ids)
            ->pluck('id')
            ->map(static fn ($id): string => (string) $id)
            ->flip();

        return array_values(array_filter(
            $guilds,
            static fn (array $guild): bool => $configuredIds->has((string) $guild['id'])
        ));
    }

    /** @return array<string, ?string> */
    private function guildIconsForUser(string $userId, string $accessToken): array
    {
        $cache = Cache::store('redis');
        $key = 'dashboard:superadmin-guild-icons:v1:'.$userId;
        $icons = $cache->get($key);
        if (is_array($icons)) return $icons;

        return $cache->lock($key.':lock', 15)->block(12, function () use ($cache, $key, $userId, $accessToken): array {
            $icons = $cache->get($key);
            if (is_array($icons)) return $icons;

            $icons = [];
            try {
                foreach ($this->discordApi->currentUserGuilds($accessToken, $userId) as $guild) {
                    if (! is_array($guild) || ! isset($guild['id'])) continue;
                    $icons[(string) $guild['id']] = isset($guild['icon']) ? (string) $guild['icon'] : null;
                }
            } catch (\Throwable $error) {
                Log::warning('Could not load Discord guild icons for system superadmin.', [
                    'discord_user_id' => $userId,
                    'message' => $error->getMessage(),
                ]);
            }

            $cache->put($key, $icons, now()->addSeconds(self::SUPERADMIN_ICON_CACHE_TTL_SECONDS));
            return $icons;
        });
    }
}
