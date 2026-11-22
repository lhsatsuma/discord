<?php

namespace App\Services;

use App\Lib\DiscordApi;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DashboardGuilds
{
    private const CACHE_TTL_SECONDS = 60;

    public function __construct(private readonly DiscordApi $discordApi) {}

    /** @return list<array{id: string, name: string, icon: ?string}> */
    public function configuredForUser(string $userId, string $accessToken): array
    {
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
}
