<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['id', 'created_at', 'updated_at', 'created_by', 'locale', 'short_description', 'description'])]
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
            ->orderBy('trivia_categorys.locale')
            ->orderBy('trivia_categorys.description')
            ->get();
    }

    /** @return list<string> */
    public static function idsForLocale(string $locale): array
    {
        return static::query()
            ->where('locale', $locale)
            ->orderBy('description')
            ->pluck('id')
            ->map(static fn ($id): string => (string) $id)
            ->all();
    }

    public function questions(): HasMany
    {
        return $this->hasMany(TriviaQuestion::class, 'category', 'id');
    }
}
