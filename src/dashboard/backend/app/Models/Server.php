<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['id', 'created_at', 'updated_at', 'created_by', 'active', 'name'])]
class Server extends Model
{
    protected $table = 'servers';

    protected $keyType = 'string';

    public $incrementing = false;

    public static function findActive(string $serverId): ?self
    {
        return static::query()->whereKey($serverId)->where('active', true)->first();
    }

    /** @return Collection<int, self> */
    public static function activeForDashboard(): Collection
    {
        return static::query()->where('active', true)->orderBy('name')->get(['id', 'name']);
    }

    /** @param list<string> $serverIds
     *  @return Collection<int, string>
     */
    public static function activeIdsAmong(array $serverIds): Collection
    {
        if ($serverIds === []) return collect();

        return static::query()
            ->where('active', true)
            ->whereIn('id', $serverIds)
            ->pluck('id')
            ->map(static fn ($id): string => (string) $id);
    }

    public static function updateActiveBy(string $serverId, string $userId): int
    {
        return static::query()->whereKey($serverId)->where('active', true)->update([
            'updated_at' => now(),
            'created_by' => $userId,
        ]);
    }

    protected function casts(): array
    {
        return [
            'active' => 'boolean',
        ];
    }

    public function configs(): HasMany
    {
        return $this->hasMany(ServerConfig::class, 'server_id', 'id');
    }

    public function adminChannels(): HasMany
    {
        return $this->hasMany(AdminChannel::class, 'server', 'id');
    }

    public function forbiddenChannels(): HasMany
    {
        return $this->hasMany(ForbiddenChannel::class, 'server', 'id');
    }
}
