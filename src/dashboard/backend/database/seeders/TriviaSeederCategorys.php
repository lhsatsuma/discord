<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class TriviaSeederCategorys extends Seeder
{
    use WithoutModelEvents;


    private const CATEGORYS = [

        /**
         * en-US categorys
         */
        [
            'id' => '01a21312-b489-7095-8a30-44480fe2c4f5',
            'approved' => true,
            'locale' => 'en-US',
            'short_description' => 'general',
            'description' => 'General Knowledge'
        ],
        [
            'id' => '01a21312-b489-7dba-9459-62cdf152de47',
            'approved' => true,
            'locale' => 'en-US',
            'short_description' => 'arts_literature',
            'description' => 'Arts and Literature'
        ],
        [
            'id' => '01a21312-b489-796c-8b3c-aa437bd658ff',
            'approved' => true,
            'locale' => 'en-US',
            'short_description' => 'films_tv',
            'description' => 'Films, Series and TV'
        ],
        [
            'id' => '01a21312-b489-74bb-ab98-4be3cf078a94',
            'approved' => true,
            'locale' => 'en-US',
            'short_description' => 'geophraphy',
            'description' => 'Geography'
        ],
        [
            'id' => '01a21312-b489-7ebc-94f2-41649ebfcaca',
            'approved' => true,
            'locale' => 'en-US',
            'short_description' => 'history',
            'description' => 'History'
        ],
        [
            'id' => '01a21312-b489-756b-b99b-37e1b385a482',
            'approved' => true,
            'locale' => 'en-US',
            'short_description' => 'music',
            'description' => 'Music'
        ],
        [
            'id' => '01a21312-b489-7df1-b0c8-10e72868dcc8',
            'approved' => true,
            'locale' => 'en-US',
            'short_description' => 'science',
            'description' => 'Science'
        ],
        [
            'id' => '01a21312-b489-7dd6-93ca-116c8464996a',
            'approved' => true,
            'locale' => 'en-US',
            'short_description' => 'society_culture',
            'description' => 'Society and Culture'
        ],
        [
            'id' => '01a21312-b489-7d12-a39e-857aff280926',
            'approved' => true,
            'locale' => 'en-US',
            'short_description' => 'sport_leisure',
            'description' => 'Sports and Leisure'
        ],
        [
            'id' => '01a21e5d-ee8b-768b-8713-3f779a056aaa',
            'approved' => true,
            'locale' => 'en-US',
            'short_description' => 'technology',
            'description' => 'Technology'
        ],

        

        /**
         * pt-BR categorys
         */
        [
            'id' => '01a21348-94aa-7eae-ba09-829334cba03f',
            'approved' => true,
            'locale' => 'pt-BR',
            'short_description' => 'geral',
            'description' => 'Conhecimentos Gerais'
        ],
        [
            'id' => '01a21348-94aa-760f-a517-b2e936c15049',
            'approved' => true,
            'locale' => 'pt-BR',
            'short_description' => 'artes_literatura',
            'description' => 'Artes e Literatura'
        ],
        [
            'id' => '01a21348-94aa-76b9-8dea-55688d9dda73',
            'approved' => true,
            'locale' => 'pt-BR',
            'short_description' => 'films_tv',
            'description' => 'Filmes, Séries e TV'
        ],
        [
            'id' => '01a2135e-b9ba-7604-8b40-f13ab9d43c52',
            'approved' => true,
            'locale' => 'pt-BR',
            'short_description' => 'geografia',
            'description' => 'Geografia'
        ],
        [
            'id' => '01a2135e-b9ba-7f09-97bd-8250e558d94f',
            'approved' => true,
            'locale' => 'pt-BR',
            'short_description' => 'historia',
            'description' => 'História'
        ],
        [
            'id' => '01a2135e-b9ba-72bc-b3de-19e158a583d2',
            'approved' => true,
            'locale' => 'pt-BR',
            'short_description' => 'musica',
            'description' => 'Música'
        ],
        [
            'id' => '01a2135e-b9ba-7fbd-8736-4a658c8d2151',
            'approved' => true,
            'locale' => 'pt-BR',
            'short_description' => 'ciencia',
            'description' => 'Ciência'
        ],
        [
            'id' => '01a2135e-b9ba-7c16-9b72-2e444808bbc8',
            'approved' => true,
            'locale' => 'pt-BR',
            'short_description' => 'sociedade_cultra',
            'description' => 'Sociedade e Cultura'
        ],
        [
            'id' => '01a2135e-b9ba-771f-9a3c-ff459105767c',
            'approved' => true,
            'locale' => 'pt-BR',
            'short_description' => 'esporte_lazer',
            'description' => 'Esporte e Lazer'
        ],
        [
            'id' => '01a21e5e-08aa-71ec-a122-07f463977474',
            'approved' => true,
            'locale' => 'pt-BR',
            'short_description' => 'tecnologia',
            'description' => 'Tecnologia'
        ],
    ];

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('trivia_categorys')->insertOrIgnore(self::CATEGORYS);
    }
}
