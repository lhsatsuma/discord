<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['id', 'created_at', 'updated_at', 'created_by', 'short_description', 'description'])]
class TriviaCategory extends Model
{
    protected $table = 'trivia_categorys';

    protected $keyType = 'string';

    public $incrementing = false;

    public function questions(): HasMany
    {
        return $this->hasMany(TriviaQuestion::class, 'category', 'id');
    }
}
