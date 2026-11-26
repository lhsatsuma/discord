<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['id', 'created_at', 'updated_at', 'created_by', 'category', 'question', 'explanation', 'difficulty'])]
class TriviaQuestion extends Model
{
    protected $table = 'trivia_questions';

    protected $keyType = 'string';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'difficulty' => 'integer',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(TriviaCategory::class, 'category', 'id');
    }

    public function alternatives(): HasMany
    {
        return $this->hasMany(TriviaAlternative::class, 'question', 'id');
    }
}
