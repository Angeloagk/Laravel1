<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Roep de VoetbalCompetitiesSeeder aan om voetbalcompetities toe te voegen
        $this->call(VoetbalCompetitiesSeeder::class);

        // Andere seeders kunnen hier worden toegevoegd indien nodig
    }
}
