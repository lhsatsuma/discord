<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeder\TriviaSeederenUS261125;
use Illuminate\Database\Seeder\TriviaSeederptBR261125;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(BotRecordsSeeder::class);
        $this->call(TriviaSeederenUS261125::class);
        $this->call(TriviaSeederptBR261125::class);
    }
}
