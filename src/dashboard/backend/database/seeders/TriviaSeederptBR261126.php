<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\Trivia261126\ptBR\ArtsAndLiterature\TriviaptBRArtsAndLiteratureeasy;
use Database\Seeders\Trivia261126\ptBR\ArtsAndLiterature\TriviaptBRArtsAndLiteraturemedium;
use Database\Seeders\Trivia261126\ptBR\ArtsAndLiterature\TriviaptBRArtsAndLiteraturehard;
use Database\Seeders\Trivia261126\ptBR\FilmAndTV\TriviaptBRFilmAndTVeasy;
use Database\Seeders\Trivia261126\ptBR\FilmAndTV\TriviaptBRFilmAndTVmedium;
use Database\Seeders\Trivia261126\ptBR\FilmAndTV\TriviaptBRFilmAndTVhard;
use Database\Seeders\Trivia261126\ptBR\FoodAndDrink\TriviaptBRFoodAndDrinkeasy;
use Database\Seeders\Trivia261126\ptBR\FoodAndDrink\TriviaptBRFoodAndDrinkmedium;
use Database\Seeders\Trivia261126\ptBR\FoodAndDrink\TriviaptBRFoodAndDrinkhard;
use Database\Seeders\Trivia261126\ptBR\GeneralKnowledge\TriviaptBRGeneralKnowledgeeasy;
use Database\Seeders\Trivia261126\ptBR\GeneralKnowledge\TriviaptBRGeneralKnowledgemedium;
use Database\Seeders\Trivia261126\ptBR\GeneralKnowledge\TriviaptBRGeneralKnowledgehard;
use Database\Seeders\Trivia261126\ptBR\Geography\TriviaptBRGeographyeasy;
use Database\Seeders\Trivia261126\ptBR\Geography\TriviaptBRGeographymedium;
use Database\Seeders\Trivia261126\ptBR\Geography\TriviaptBRGeographyhard;
use Database\Seeders\Trivia261126\ptBR\History\TriviaptBRHistoryeasy;
use Database\Seeders\Trivia261126\ptBR\History\TriviaptBRHistorymedium;
use Database\Seeders\Trivia261126\ptBR\History\TriviaptBRHistoryhard;
use Database\Seeders\Trivia261126\ptBR\Music\TriviaptBRMusiceasy;
use Database\Seeders\Trivia261126\ptBR\Music\TriviaptBRMusicmedium;
use Database\Seeders\Trivia261126\ptBR\Music\TriviaptBRMusichard;
use Database\Seeders\Trivia261126\ptBR\Science\TriviaptBRScienceeasy;
use Database\Seeders\Trivia261126\ptBR\Science\TriviaptBRSciencemedium;
use Database\Seeders\Trivia261126\ptBR\Science\TriviaptBRSciencehard;
use Database\Seeders\Trivia261126\ptBR\SocietyAndCulture\TriviaptBRSocietyAndCultureeasy;
use Database\Seeders\Trivia261126\ptBR\SocietyAndCulture\TriviaptBRSocietyAndCulturemedium;
use Database\Seeders\Trivia261126\ptBR\SocietyAndCulture\TriviaptBRSocietyAndCulturehard;
use Database\Seeders\Trivia261126\ptBR\SportsAndLeisure\TriviaptBRSportsAndLeisureeasy;
use Database\Seeders\Trivia261126\ptBR\SportsAndLeisure\TriviaptBRSportsAndLeisuremedium;
use Database\Seeders\Trivia261126\ptBR\SportsAndLeisure\TriviaptBRSportsAndLeisurehard;


class TriviaSeederptBR261126 extends Seeder
{
    public function run(): void
    {
        $this->call([
            TriviaptBRArtsAndLiteratureeasy::class,
			TriviaptBRArtsAndLiteraturemedium::class,
			TriviaptBRArtsAndLiteraturehard::class,
			TriviaptBRFilmAndTVeasy::class,
			TriviaptBRFilmAndTVmedium::class,
			TriviaptBRFilmAndTVhard::class,
			TriviaptBRFoodAndDrinkeasy::class,
			TriviaptBRFoodAndDrinkmedium::class,
			TriviaptBRFoodAndDrinkhard::class,
			TriviaptBRGeneralKnowledgeeasy::class,
			TriviaptBRGeneralKnowledgemedium::class,
			TriviaptBRGeneralKnowledgehard::class,
			TriviaptBRGeographyeasy::class,
			TriviaptBRGeographymedium::class,
			TriviaptBRGeographyhard::class,
			TriviaptBRHistoryeasy::class,
			TriviaptBRHistorymedium::class,
			TriviaptBRHistoryhard::class,
			TriviaptBRMusiceasy::class,
			TriviaptBRMusicmedium::class,
			TriviaptBRMusichard::class,
			TriviaptBRScienceeasy::class,
			TriviaptBRSciencemedium::class,
			TriviaptBRSciencehard::class,
			TriviaptBRSocietyAndCultureeasy::class,
			TriviaptBRSocietyAndCulturemedium::class,
			TriviaptBRSocietyAndCulturehard::class,
			TriviaptBRSportsAndLeisureeasy::class,
			TriviaptBRSportsAndLeisuremedium::class,
			TriviaptBRSportsAndLeisurehard::class,
			
        ]);
    }
}
