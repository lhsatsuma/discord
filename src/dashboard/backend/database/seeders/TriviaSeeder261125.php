<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\Trivia261125\enUS\ArtsAndLiterature\TriviaenUSArtsAndLiterature0;
use Database\Seeders\Trivia261125\enUS\ArtsAndLiterature\TriviaenUSArtsAndLiterature1;
use Database\Seeders\Trivia261125\enUS\FilmAndTV\TriviaenUSFilmAndTV0;
use Database\Seeders\Trivia261125\enUS\FilmAndTV\TriviaenUSFilmAndTV1;
use Database\Seeders\Trivia261125\enUS\FoodAndDrink\TriviaenUSFoodAndDrink0;
use Database\Seeders\Trivia261125\enUS\FoodAndDrink\TriviaenUSFoodAndDrink1;
use Database\Seeders\Trivia261125\enUS\GeneralKnowledge\TriviaenUSGeneralKnowledge0;
use Database\Seeders\Trivia261125\enUS\GeneralKnowledge\TriviaenUSGeneralKnowledge1;
use Database\Seeders\Trivia261125\enUS\Geography\TriviaenUSGeography0;
use Database\Seeders\Trivia261125\enUS\Geography\TriviaenUSGeography1;
use Database\Seeders\Trivia261125\enUS\History\TriviaenUSHistory0;
use Database\Seeders\Trivia261125\enUS\History\TriviaenUSHistory1;
use Database\Seeders\Trivia261125\enUS\Music\TriviaenUSMusic0;
use Database\Seeders\Trivia261125\enUS\Music\TriviaenUSMusic1;
use Database\Seeders\Trivia261125\enUS\Science\TriviaenUSScience0;
use Database\Seeders\Trivia261125\enUS\Science\TriviaenUSScience1;
use Database\Seeders\Trivia261125\enUS\SocietyAndCulture\TriviaenUSSocietyAndCulture0;
use Database\Seeders\Trivia261125\enUS\SocietyAndCulture\TriviaenUSSocietyAndCulture1;
use Database\Seeders\Trivia261125\enUS\SportsAndLeisure\TriviaenUSSportsAndLeisure0;
use Database\Seeders\Trivia261125\enUS\SportsAndLeisure\TriviaenUSSportsAndLeisure1;
use Database\Seeders\Trivia261125\ptBR\ArtsAndLiterature\TriviaptBRArtsAndLiterature0;
use Database\Seeders\Trivia261125\ptBR\ArtsAndLiterature\TriviaptBRArtsAndLiterature1;
use Database\Seeders\Trivia261125\ptBR\FilmAndTV\TriviaptBRFilmAndTV0;
use Database\Seeders\Trivia261125\ptBR\FilmAndTV\TriviaptBRFilmAndTV1;
use Database\Seeders\Trivia261125\ptBR\FoodAndDrink\TriviaptBRFoodAndDrink0;
use Database\Seeders\Trivia261125\ptBR\FoodAndDrink\TriviaptBRFoodAndDrink1;
use Database\Seeders\Trivia261125\ptBR\GeneralKnowledge\TriviaptBRGeneralKnowledge0;
use Database\Seeders\Trivia261125\ptBR\GeneralKnowledge\TriviaptBRGeneralKnowledge1;
use Database\Seeders\Trivia261125\ptBR\Geography\TriviaptBRGeography0;
use Database\Seeders\Trivia261125\ptBR\Geography\TriviaptBRGeography1;
use Database\Seeders\Trivia261125\ptBR\History\TriviaptBRHistory0;
use Database\Seeders\Trivia261125\ptBR\History\TriviaptBRHistory1;
use Database\Seeders\Trivia261125\ptBR\Music\TriviaptBRMusic0;
use Database\Seeders\Trivia261125\ptBR\Music\TriviaptBRMusic1;
use Database\Seeders\Trivia261125\ptBR\Science\TriviaptBRScience0;
use Database\Seeders\Trivia261125\ptBR\Science\TriviaptBRScience1;
use Database\Seeders\Trivia261125\ptBR\SocietyAndCulture\TriviaptBRSocietyAndCulture0;
use Database\Seeders\Trivia261125\ptBR\SocietyAndCulture\TriviaptBRSocietyAndCulture1;
use Database\Seeders\Trivia261125\ptBR\SportsAndLeisure\TriviaptBRSportsAndLeisure0;
use Database\Seeders\Trivia261125\ptBR\SportsAndLeisure\TriviaptBRSportsAndLeisure1;


class TriviaSeeder261125 extends Seeder
{
    public function run(): void
    {
        $this->call([
            TriviaenUSArtsAndLiterature0::class,
			TriviaenUSArtsAndLiterature1::class,
			TriviaenUSFilmAndTV0::class,
			TriviaenUSFilmAndTV1::class,
			TriviaenUSFoodAndDrink0::class,
			TriviaenUSFoodAndDrink1::class,
			TriviaenUSGeneralKnowledge0::class,
			TriviaenUSGeneralKnowledge1::class,
			TriviaenUSGeography0::class,
			TriviaenUSGeography1::class,
			TriviaenUSHistory0::class,
			TriviaenUSHistory1::class,
			TriviaenUSMusic0::class,
			TriviaenUSMusic1::class,
			TriviaenUSScience0::class,
			TriviaenUSScience1::class,
			TriviaenUSSocietyAndCulture0::class,
			TriviaenUSSocietyAndCulture1::class,
			TriviaenUSSportsAndLeisure0::class,
			TriviaenUSSportsAndLeisure1::class,
			TriviaptBRArtsAndLiterature0::class,
			TriviaptBRArtsAndLiterature1::class,
			TriviaptBRFilmAndTV0::class,
			TriviaptBRFilmAndTV1::class,
			TriviaptBRFoodAndDrink0::class,
			TriviaptBRFoodAndDrink1::class,
			TriviaptBRGeneralKnowledge0::class,
			TriviaptBRGeneralKnowledge1::class,
			TriviaptBRGeography0::class,
			TriviaptBRGeography1::class,
			TriviaptBRHistory0::class,
			TriviaptBRHistory1::class,
			TriviaptBRMusic0::class,
			TriviaptBRMusic1::class,
			TriviaptBRScience0::class,
			TriviaptBRScience1::class,
			TriviaptBRSocietyAndCulture0::class,
			TriviaptBRSocietyAndCulture1::class,
			TriviaptBRSportsAndLeisure0::class,
			TriviaptBRSportsAndLeisure1::class,
			
        ]);
    }
}
