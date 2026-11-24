<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * A server setting is uniquely identified by the server_id/config_code pair.
 * Always include both columns when querying or updating a specific config.
 */
#[Fillable(['server_id', 'config_code', 'created_at', 'updated_at', 'created_by', 'type', 'value', 'long_value'])]
class ServerConfig extends Model
{
    protected $table = 'server_config';

    protected $primaryKey = 'config_code';

    protected $keyType = 'string';

    public $incrementing = false;

    /** @param list<string> $configCodes
     *  @return Collection<string, self>
     */
    public static function valuesForServer(string $serverId, array $configCodes): Collection
    {
        return static::query()
            ->where('server_id', $serverId)
            ->whereIn('config_code', $configCodes)
            ->get()
            ->keyBy('config_code');
    }

    /** @param array<string, array{0: string, 1: ?string}> $configs */
    public static function upsertForServer(string $serverId, array $configs, string $createdBy): void
    {
        $now = now();
        $rows = [];

        foreach ($configs as $code => [$type, $value]) {
            $isLongValue = $value !== null && mb_strlen($value) > 255;
            $rows[] = [
                'server_id' => $serverId,
                'config_code' => $code,
                'created_at' => $now,
                'updated_at' => $now,
                'created_by' => $createdBy,
                'type' => $type,
                'value' => $isLongValue ? null : $value,
                'long_value' => $isLongValue ? $value : null,
            ];
        }

        if ($rows === []) return;

        static::query()->upsert(
            $rows,
            ['server_id', 'config_code'],
            ['updated_at', 'created_by', 'type', 'value', 'long_value']
        );
    }

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function server(): BelongsTo
    {
        return $this->belongsTo(Server::class, 'server_id', 'id');
    }
}
