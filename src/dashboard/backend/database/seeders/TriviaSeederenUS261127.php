<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\Trivia261127\enUS\Technology\TriviaenUSTechnologyeasy;
use Database\Seeders\Trivia261127\enUS\Technology\TriviaenUSTechnologymedium;
use Database\Seeders\Trivia261127\enUS\Technology\TriviaenUSTechnologyhard;


class TriviaSeederenUS261127 extends Seeder
{
    public function run(): void
    {
        $this->call([
            TriviaenUSTechnologyeasy::class,
			TriviaenUSTechnologymedium::class,
			TriviaenUSTechnologyhard::class,
			
        ]);
    }
}
