<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Eleve;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FormateurSeeder::class,
            DiplomeSeeder::class,
            EleveSeeder::class,
            PromoSeeder::class,
            InscriptionSeeder::class
        ]);
    }
}
