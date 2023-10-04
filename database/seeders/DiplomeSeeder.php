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
            'nom' => 'Développpeur Web/ web mobile'
        ]);
        Diplome::create([
            'nom' => 'Concepteur designer UI / Designer Web'
        ]);
        Diplome::create([
            'nom' => 'Infographiste metteur en page'
        ]);
        Diplome::create([
            'nom' => 'Technicien d\'assistance informatique'
        ]);
        Diplome::create([
            'nom' => 'Digital Marketing Manager'
        ]);
        Diplome::create([
            'nom' => 'Gestion des réseaux sociaux'
        ]);
    }
}
