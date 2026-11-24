<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Trivia\TriviaEnUsCultureSeeder;
use Database\Seeders\Trivia\TriviaEnUsFoodSeeder;
use Database\Seeders\Trivia\TriviaEnUsGeneralKnowledgeSeeder;
use Database\Seeders\Trivia\TriviaEnUsGeographySeeder;
use Database\Seeders\Trivia\TriviaEnUsHistorySeeder;
use Database\Seeders\Trivia\TriviaEnUsMusicSeeder;
use Database\Seeders\Trivia\TriviaEnUsScienceSeeder;
use Database\Seeders\Trivia\TriviaEnUsTechnologyComputingSeeder;
use Database\Seeders\Trivia\TriviaEnUsTvSeriesSeeder;
use Database\Seeders\Trivia\TriviaPtBrCienciaSeeder;
use Database\Seeders\Trivia\TriviaPtBrComidaSeeder;
use Database\Seeders\Trivia\TriviaPtBrCulturaSeeder;
use Database\Seeders\Trivia\TriviaPtBrFilmesSeeder;
use Database\Seeders\Trivia\TriviaPtBrGeografiaSeeder;
use Database\Seeders\Trivia\TriviaPtBrHistoriaSeeder;
use Database\Seeders\Trivia\TriviaPtBrMusicasSeeder;
use Database\Seeders\Trivia\TriviaPtBrSeriesSeeder;
use Database\Seeders\Trivia\TriviaPtBrTecnologiaInformaticaSeeder;

class TriviaSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            TriviaEnUsCultureSeeder::class,
            TriviaEnUsFoodSeeder::class,
            TriviaEnUsGeneralKnowledgeSeeder::class,
            TriviaEnUsGeographySeeder::class,
            TriviaEnUsHistorySeeder::class,
            TriviaEnUsMusicSeeder::class,
            TriviaEnUsScienceSeeder::class,
            TriviaEnUsTechnologyComputingSeeder::class,
            TriviaEnUsTvSeriesSeeder::class,
            TriviaPtBrCienciaSeeder::class,
            TriviaPtBrComidaSeeder::class,
            TriviaPtBrCulturaSeeder::class,
            TriviaPtBrFilmesSeeder::class,
            TriviaPtBrGeografiaSeeder::class,
            TriviaPtBrHistoriaSeeder::class,
            TriviaPtBrMusicasSeeder::class,
            TriviaPtBrSeriesSeeder::class,
            TriviaPtBrTecnologiaInformaticaSeeder::class,
        ]);
    }
}
