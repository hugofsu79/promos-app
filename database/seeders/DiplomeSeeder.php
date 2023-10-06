<?php

namespace Database\Seeders;

use App\Models\Diplome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiplomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Diplome::create([
            'nom' => 'Développpeur Web/ web mobile',
            'formateur_id' => 1
        ]);

        Diplome::create([
            'nom' => 'Concepteur designer UI / Designer Web',
            'formateur_id' => 2
        ]);

        Diplome::create([
            'nom' => 'Infographiste metteur en page',
            'formateur_id' => 2
        ]);

        Diplome::create([
            'nom' => 'Technicien d\'assistance informatique',
            'formateur_id' => 3
        ]);

        Diplome::create([
            'nom' => 'Digital Marketing Manager',
            'formateur_id' => 2
        ]);

        Diplome::create([
            'nom' => 'Gestion des réseaux sociaux',
            'formateur_id' => 2
        ]);

        Diplome::create([
            'nom' => 'Concepteur d\'application',
            'formateur_id' => 1
        ]);
    }
}
