<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\Trivia261125\enUS\ArtsAndLiterature\TriviaenUSArtsAndLiterature0;
use Database\Seeders\Trivia261125\enUS\FilmAndTV\TriviaenUSFilmAndTV0;
use Database\Seeders\Trivia261125\enUS\FoodAndDrink\TriviaenUSFoodAndDrink0;
use Database\Seeders\Trivia261125\enUS\GeneralKnowledge\TriviaenUSGeneralKnowledge0;
use Database\Seeders\Trivia261125\enUS\Geography\TriviaenUSGeography0;
use Database\Seeders\Trivia261125\enUS\History\TriviaenUSHistory0;
use Database\Seeders\Trivia261125\enUS\Music\TriviaenUSMusic0;
use Database\Seeders\Trivia261125\enUS\Science\TriviaenUSScience0;
use Database\Seeders\Trivia261125\enUS\SocietyAndCulture\TriviaenUSSocietyAndCulture0;
use Database\Seeders\Trivia261125\enUS\SportsAndLeisure\TriviaenUSSportsAndLeisure0;


class TriviaSeeder261125 extends Seeder
{
    public function run(): void
    {
        $this->call([
            TriviaenUSArtsAndLiterature0::class,
			TriviaenUSFilmAndTV0::class,
			TriviaenUSFoodAndDrink0::class,
			TriviaenUSGeneralKnowledge0::class,
			TriviaenUSGeography0::class,
			TriviaenUSHistory0::class,
			TriviaenUSMusic0::class,
			TriviaenUSScience0::class,
			TriviaenUSSocietyAndCulture0::class,
			TriviaenUSSportsAndLeisure0::class,
			
        ]);
    }
}
