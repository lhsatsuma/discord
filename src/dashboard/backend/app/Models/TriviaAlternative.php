<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['id', 'created_at', 'updated_at', 'created_by', 'question', 'description', 'correct_answer'])]
class TriviaAlternative extends Model
{
    protected $table = 'trivia_alternatives';

    protected $keyType = 'string';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'correct_answer' => 'boolean',
        ];
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(TriviaQuestion::class, 'question', 'id');
    }
}
