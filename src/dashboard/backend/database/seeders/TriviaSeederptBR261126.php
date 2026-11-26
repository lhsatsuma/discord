<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\Trivia261126\enUS\ArtsAndLiterature\TriviaenUSArtsAndLiteratureeasy;
use Database\Seeders\Trivia261126\enUS\ArtsAndLiterature\TriviaenUSArtsAndLiteraturemedium;
use Database\Seeders\Trivia261126\enUS\ArtsAndLiterature\TriviaenUSArtsAndLiteraturehard;
use Database\Seeders\Trivia261126\enUS\FilmAndTV\TriviaenUSFilmAndTVeasy;
use Database\Seeders\Trivia261126\enUS\FilmAndTV\TriviaenUSFilmAndTVmedium;
use Database\Seeders\Trivia261126\enUS\FilmAndTV\TriviaenUSFilmAndTVhard;
use Database\Seeders\Trivia261126\enUS\FoodAndDrink\TriviaenUSFoodAndDrinkeasy;
use Database\Seeders\Trivia261126\enUS\FoodAndDrink\TriviaenUSFoodAndDrinkmedium;
use Database\Seeders\Trivia261126\enUS\FoodAndDrink\TriviaenUSFoodAndDrinkhard;
use Database\Seeders\Trivia261126\enUS\GeneralKnowledge\TriviaenUSGeneralKnowledgeeasy;
use Database\Seeders\Trivia261126\enUS\GeneralKnowledge\TriviaenUSGeneralKnowledgemedium;
use Database\Seeders\Trivia261126\enUS\GeneralKnowledge\TriviaenUSGeneralKnowledgehard;
use Database\Seeders\Trivia261126\enUS\Geography\TriviaenUSGeographyeasy;
use Database\Seeders\Trivia261126\enUS\Geography\TriviaenUSGeographymedium;
use Database\Seeders\Trivia261126\enUS\Geography\TriviaenUSGeographyhard;
use Database\Seeders\Trivia261126\enUS\History\TriviaenUSHistoryeasy;
use Database\Seeders\Trivia261126\enUS\History\TriviaenUSHistorymedium;
use Database\Seeders\Trivia261126\enUS\History\TriviaenUSHistoryhard;
use Database\Seeders\Trivia261126\enUS\Music\TriviaenUSMusiceasy;
use Database\Seeders\Trivia261126\enUS\Music\TriviaenUSMusicmedium;
use Database\Seeders\Trivia261126\enUS\Music\TriviaenUSMusichard;
use Database\Seeders\Trivia261126\enUS\Science\TriviaenUSScienceeasy;
use Database\Seeders\Trivia261126\enUS\Science\TriviaenUSSciencemedium;
use Database\Seeders\Trivia261126\enUS\Science\TriviaenUSSciencehard;
use Database\Seeders\Trivia261126\enUS\SocietyAndCulture\TriviaenUSSocietyAndCultureeasy;
use Database\Seeders\Trivia261126\enUS\SocietyAndCulture\TriviaenUSSocietyAndCulturemedium;
use Database\Seeders\Trivia261126\enUS\SocietyAndCulture\TriviaenUSSocietyAndCulturehard;
use Database\Seeders\Trivia261126\enUS\SportsAndLeisure\TriviaenUSSportsAndLeisureeasy;
use Database\Seeders\Trivia261126\enUS\SportsAndLeisure\TriviaenUSSportsAndLeisuremedium;
use Database\Seeders\Trivia261126\enUS\SportsAndLeisure\TriviaenUSSportsAndLeisurehard;


class TriviaSeederptBR261126 extends Seeder
{
    public function run(): void
    {
        $this->call([
            TriviaenUSArtsAndLiteratureeasy::class,
			TriviaenUSArtsAndLiteraturemedium::class,
			TriviaenUSArtsAndLiteraturehard::class,
			TriviaenUSFilmAndTVeasy::class,
			TriviaenUSFilmAndTVmedium::class,
			TriviaenUSFilmAndTVhard::class,
			TriviaenUSFoodAndDrinkeasy::class,
			TriviaenUSFoodAndDrinkmedium::class,
			TriviaenUSFoodAndDrinkhard::class,
			TriviaenUSGeneralKnowledgeeasy::class,
			TriviaenUSGeneralKnowledgemedium::class,
			TriviaenUSGeneralKnowledgehard::class,
			TriviaenUSGeographyeasy::class,
			TriviaenUSGeographymedium::class,
			TriviaenUSGeographyhard::class,
			TriviaenUSHistoryeasy::class,
			TriviaenUSHistorymedium::class,
			TriviaenUSHistoryhard::class,
			TriviaenUSMusiceasy::class,
			TriviaenUSMusicmedium::class,
			TriviaenUSMusichard::class,
			TriviaenUSScienceeasy::class,
			TriviaenUSSciencemedium::class,
			TriviaenUSSciencehard::class,
			TriviaenUSSocietyAndCultureeasy::class,
			TriviaenUSSocietyAndCulturemedium::class,
			TriviaenUSSocietyAndCulturehard::class,
			TriviaenUSSportsAndLeisureeasy::class,
			TriviaenUSSportsAndLeisuremedium::class,
			TriviaenUSSportsAndLeisurehard::class,
			
        ]);
    }
}
