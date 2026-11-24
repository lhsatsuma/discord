<?php

namespace App\Models\Concerns;

use Illuminate\Support\Str;

trait SynchronizesServerChannels
{
    /** @return list<string> */
    public static function channelIdsForServer(string $serverId): array
    {
        return static::query()
            ->where('server', $serverId)
            ->orderBy('channel_id')
            ->pluck('channel_id')
            ->map(static fn ($id): string => (string) $id)
            ->all();
    }

    /** @param list<string> $channelIds */
    public static function syncForServer(string $serverId, array $channelIds, string $userId): void
    {
        $channelIds = array_values(array_unique($channelIds));
        $existingIds = static::query()
            ->where('server', $serverId)
            ->lockForUpdate()
            ->pluck('channel_id')
            ->map(static fn ($id): string => (string) $id)
            ->all();
        $existing = array_fill_keys($existingIds, true);

        $removedIds = array_values(array_diff($existingIds, $channelIds));
        if ($removedIds !== []) {
            static::query()
                ->where('server', $serverId)
                ->whereIn('channel_id', $removedIds)
                ->delete();
        }

        $addedIds = array_values(array_filter(
            $channelIds,
            static fn (string $id): bool => ! isset($existing[$id])
        ));
        if ($addedIds === []) return;

        $now = now();
        static::query()->insert(array_map(static fn (string $channelId): array => [
            'id' => (string) Str::uuid(),
            'created_at' => $now,
            'updated_at' => $now,
            'created_by' => $userId,
            'server' => $serverId,
            'channel_id' => $channelId,
        ], $addedIds));
    }
}
