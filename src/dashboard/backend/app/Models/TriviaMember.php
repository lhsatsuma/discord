<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'id', 'created_at', 'updated_at', 'created_by', 'question', 'answer', 'server', 'user_id',
    'correct_answer', 'answered', 'seconds_spent', 'points',
])]
class TriviaMember extends Model
{
    protected $table = 'trivia_members';

    protected $keyType = 'string';

    public $incrementing = false;

    /** Delete all saved Trivia progress and points for one server. */
    public static function resetForServer(string $serverId): int
    {
        return static::query()->where('server', $serverId)->delete();
    }

    protected function casts(): array
    {
        return [
            'correct_answer' => 'boolean',
            'answered' => 'boolean',
            'seconds_spent' => 'decimal:3',
            'points' => 'decimal:3',
        ];
    }
}
