<?php

namespace Database\Seeders;

use App\Models\Formateur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Formateur::create([
            'nom' => 'Virot',
            'prenom' => 'Hugo',
            'age' => 34,
        ]);
        Formateur::create([
            'nom' => 'Ravet',
            'prenom' => 'François',
            'age' => 43,
        ]);
        Formateur::create([
            'nom' => 'Righi',
            'prenom' => 'Rachid',
            'age' => 53,
        ]);
        
    }
}
