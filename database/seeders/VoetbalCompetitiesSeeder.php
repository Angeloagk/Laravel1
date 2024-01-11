<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Competitie;

class VoetbalCompetitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Voeg hier de logica toe om voetbalcompetities toe te voegen aan de database

        Competitie::create([
            'naam' => 'Eredivisie',
            'start_datum' => '2023-08-01',
            'eind_datum' => '2024-05-31',
            'locatie' => 'Nederland',
            'aantal_teams' => 18,
        ]);

        Competitie::create([
            'naam' => 'Premier League',
            'start_datum' => '2023-09-01',
            'eind_datum' => '2024-05-31',
            'locatie' => 'Engeland',
            'aantal_teams' => 20,
        ]);

        // Voeg meer voetbalcompetities toe zoals hierboven indien nodig
    }
}
