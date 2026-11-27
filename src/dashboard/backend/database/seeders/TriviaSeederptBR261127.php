<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\Trivia261127\ptBR\Technology\TriviaptBRTechnologyeasy;
use Database\Seeders\Trivia261127\ptBR\Technology\TriviaptBRTechnologymedium;
use Database\Seeders\Trivia261127\ptBR\Technology\TriviaptBRTechnologyhard;


class TriviaSeederptBR261127 extends Seeder
{
    public function run(): void
    {
        $this->call([
            TriviaptBRTechnologyeasy::class,
			TriviaptBRTechnologymedium::class,
			TriviaptBRTechnologyhard::class,
			
        ]);
    }
}
