<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeders\TriviaSeederenUS261126;
use Illuminate\Database\Seeders\TriviaSeederptBR261126;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(BotRecordsSeeder::class);
        $this->call(TriviaSeederenUS261126::class);
        $this->call(TriviaSeederptBR261126::class);
    }
}
