<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['id', 'created_at', 'updated_at', 'created_by', 'approved', 'category', 'question', 'explanation', 'difficulty'])]
class TriviaQuestion extends Model
{
    protected $table = 'trivia_questions';

    protected $keyType = 'string';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'approved' => 'boolean',
            'difficulty' => 'integer',
        ];
    }

    public function triviaCategory(): BelongsTo
    {
        return $this->belongsTo(TriviaCategory::class, 'category', 'id');
    }

    public function alternatives(): HasMany
    {
        return $this->hasMany(TriviaAlternative::class, 'question', 'id');
    }

    public static function dashboardLibrary(
        bool $includePending,
        ?string $locale,
        ?string $categoryId,
        ?int $difficulty,
        int $page
    ): LengthAwarePaginator {
        return static::query()
            ->select(['id', 'category', 'question', 'explanation', 'difficulty', 'approved'])
            ->with([
                'triviaCategory:id,locale,description,approved',
                'alternatives:id,question,description,correct_answer',
            ])
            ->when(! $includePending, static fn ($query) => $query
                ->where('approved', true)
                ->whereHas('triviaCategory', static fn ($categoryQuery) => $categoryQuery->where('approved', true)))
            ->when($locale !== null, static fn ($query) => $query->whereHas(
                'triviaCategory',
                static fn ($categoryQuery) => $categoryQuery->where('locale', $locale)
            ))
            ->when($categoryId !== null, static fn ($query) => $query->where('category', $categoryId))
            ->when($difficulty !== null, static fn ($query) => $query->where('difficulty', $difficulty))
            ->orderBy('question')
            ->paginate(30, ['id', 'category', 'question', 'explanation', 'difficulty', 'approved'], 'page', $page);
    }
}
