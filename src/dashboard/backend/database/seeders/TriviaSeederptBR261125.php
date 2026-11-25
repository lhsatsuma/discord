<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\Trivia261125\ptBR\ArtsAndLiterature\TriviaptBRArtsAndLiterature0;
use Database\Seeders\Trivia261125\ptBR\FilmAndTV\TriviaptBRFilmAndTV0;
use Database\Seeders\Trivia261125\ptBR\FoodAndDrink\TriviaptBRFoodAndDrink0;
use Database\Seeders\Trivia261125\ptBR\GeneralKnowledge\TriviaptBRGeneralKnowledge0;
use Database\Seeders\Trivia261125\ptBR\Geography\TriviaptBRGeography0;
use Database\Seeders\Trivia261125\ptBR\History\TriviaptBRHistory0;
use Database\Seeders\Trivia261125\ptBR\Music\TriviaptBRMusic0;
use Database\Seeders\Trivia261125\ptBR\Science\TriviaptBRScience0;
use Database\Seeders\Trivia261125\ptBR\SocietyAndCulture\TriviaptBRSocietyAndCulture0;
use Database\Seeders\Trivia261125\ptBR\SportsAndLeisure\TriviaptBRSportsAndLeisure0;


class TriviaSeederptBR261125 extends Seeder
{
    public function run(): void
    {
        $this->call([
            TriviaptBRArtsAndLiterature0::class,
			TriviaptBRFilmAndTV0::class,
			TriviaptBRFoodAndDrink0::class,
			TriviaptBRGeneralKnowledge0::class,
			TriviaptBRGeography0::class,
			TriviaptBRHistory0::class,
			TriviaptBRMusic0::class,
			TriviaptBRScience0::class,
			TriviaptBRSocietyAndCulture0::class,
			TriviaptBRSportsAndLeisure0::class,
			
        ]);
    }
}
