<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\Trivia261125\ArtsAndLiterature\Trivia261125ArtsAndLiterature0;
use Database\Seeders\Trivia261125\ArtsAndLiterature\Trivia261125ArtsAndLiterature1;
use Database\Seeders\Trivia261125\FilmAndTV\Trivia261125FilmAndTV0;
use Database\Seeders\Trivia261125\FilmAndTV\Trivia261125FilmAndTV1;
use Database\Seeders\Trivia261125\FoodAndDrink\Trivia261125FoodAndDrink0;
use Database\Seeders\Trivia261125\FoodAndDrink\Trivia261125FoodAndDrink1;
use Database\Seeders\Trivia261125\GeneralKnowledge\Trivia261125GeneralKnowledge0;
use Database\Seeders\Trivia261125\GeneralKnowledge\Trivia261125GeneralKnowledge1;
use Database\Seeders\Trivia261125\Geography\Trivia261125Geography0;
use Database\Seeders\Trivia261125\Geography\Trivia261125Geography1;
use Database\Seeders\Trivia261125\History\Trivia261125History0;
use Database\Seeders\Trivia261125\History\Trivia261125History1;
use Database\Seeders\Trivia261125\Music\Trivia261125Music0;
use Database\Seeders\Trivia261125\Music\Trivia261125Music1;
use Database\Seeders\Trivia261125\Science\Trivia261125Science0;
use Database\Seeders\Trivia261125\Science\Trivia261125Science1;
use Database\Seeders\Trivia261125\SocietyAndCulture\Trivia261125SocietyAndCulture0;
use Database\Seeders\Trivia261125\SocietyAndCulture\Trivia261125SocietyAndCulture1;
use Database\Seeders\Trivia261125\SportsAndLeisure\Trivia261125SportsAndLeisure0;
use Database\Seeders\Trivia261125\SportsAndLeisure\Trivia261125SportsAndLeisure1;


class TriviaSeeder261125 extends Seeder
{
    public function run(): void
    {
        $this->call([
            Trivia261125ArtsAndLiterature0::class,
			Trivia261125ArtsAndLiterature1::class,
			Trivia261125FilmAndTV0::class,
			Trivia261125FilmAndTV1::class,
			Trivia261125FoodAndDrink0::class,
			Trivia261125FoodAndDrink1::class,
			Trivia261125GeneralKnowledge0::class,
			Trivia261125GeneralKnowledge1::class,
			Trivia261125Geography0::class,
			Trivia261125Geography1::class,
			Trivia261125History0::class,
			Trivia261125History1::class,
			Trivia261125Music0::class,
			Trivia261125Music1::class,
			Trivia261125Science0::class,
			Trivia261125Science1::class,
			Trivia261125SocietyAndCulture0::class,
			Trivia261125SocietyAndCulture1::class,
			Trivia261125SportsAndLeisure0::class,
			Trivia261125SportsAndLeisure1::class,
			
        ]);
    }
}
