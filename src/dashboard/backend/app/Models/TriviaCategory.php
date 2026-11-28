<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['id', 'created_at', 'updated_at', 'created_by', 'approved', 'locale', 'short_description', 'description'])]
class TriviaCategory extends Model
{
    protected $table = 'trivia_categorys';

    protected $keyType = 'string';

    public $incrementing = false;

    /** @return Collection<int, self> */
    public static function catalog(): Collection
    {
        return static::query()
            ->select('trivia_categorys.id', 'trivia_categorys.short_description', 'trivia_categorys.description', 'trivia_categorys.locale')
            ->where('trivia_categorys.approved', true)
            ->whereHas('questions', static fn ($questions) => $questions->where('approved', true))
            ->orderBy('trivia_categorys.locale')
            ->orderBy('trivia_categorys.description')
            ->get();
    }

    /** @return Collection<int, self> */
    public static function dashboardLibrary(bool $includePending, ?string $locale): Collection
    {
        return static::query()
            ->when(! $includePending, static fn ($query) => $query->where('approved', true))
            ->when($locale !== null, static fn ($query) => $query->where('locale', $locale))
            ->orderBy('locale')
            ->orderBy('description')
            ->get(['id', 'locale', 'short_description', 'description', 'approved']);
    }

    /** @return list<string> */
    public static function idsForLocale(string $locale): array
    {
        return static::query()
            ->where('locale', $locale)
            ->where('approved', true)
            ->whereHas('questions', static fn ($questions) => $questions->where('approved', true))
            ->orderBy('description')
            ->pluck('id')
            ->map(static fn ($id): string => (string) $id)
            ->all();
    }

    public function questions(): HasMany
    {
        return $this->hasMany(TriviaQuestion::class, 'category', 'id');
    }

    protected function casts(): array
    {
        return ['approved' => 'boolean'];
    }
}
