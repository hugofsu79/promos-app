<?php

namespace Database\Seeders;

use App\Models\Eleve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Eleve::create([
            'nom' => 'Foisseau',
            'prenom' => 'Hugo',
            'age' => 27,
        ]);
        Eleve::create([
            'nom' => 'Vandevyver',
            'prenom' => 'Alexis',
            'age' => 24,
        ]);
        Eleve::create([
            'nom' => 'Faucher',
            'prenom' => 'Sandrine',
            'age' => 41,
        ]);
        Eleve::create([
            'nom' => 'Stephen',
            'prenom' => 'Guillaume',
            'age' => 42,
        ]);
        Eleve::create([
            'nom' => 'Royer',
            'prenom' => 'Mohamed',
            'age' => 36,
        ]);
        Eleve::create([
            'nom' => 'Montagne',
            'prenom' => 'Julian',
            'age' => 34,
        ]);
        Eleve::create([
            'nom' => 'Paris',
            'prenom' => 'Coline',
            'age' => 32,
        ]);
        Eleve::create([
            'nom' => 'Atay',
            'prenom' => 'Nicolas',
            'age' => 38,
        ]);
        Eleve::factory(4)->create();
    }
}
