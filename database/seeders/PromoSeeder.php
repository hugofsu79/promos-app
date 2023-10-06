<?php

namespace Database\Seeders;

use App\Models\Promo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromoSeeder extends Seeder
{
    public function run(): void
    {
        Promo::create([
            'date_debut' => '2023:04:14',
            'date_fin' => '2023:10:24',
            'diplome_id' => 1,
        ]);
        Promo::create([
            'date_debut' => '2023:02:28',
            'date_fin' => '2023:10:24',
            'diplome_id' => 2,
        ]);
        Promo::create([
            'date_debut' => '2023:02:12',
            'date_fin' => '2023:10:24',
            'diplome_id' => 3,
        ]);
        Promo::create([
            'date_debut' => '2023:01:23:',
            'date_fin' => '2023:10:24',
            'diplome_id' => 4,
        ]);
        Promo::create([
            'date_debut' => '2022:12:22',
            'date_fin' => '2023:10:24',
            'diplome_id' => 5,
        ]);
        Promo::create([
            'date_debut' => '2023:04:05',
            'date_fin' => '2023:10:24',
            'diplome_id' => 6,
        ]);
        Promo::create([
            'date_debut' => '2022:12:12',
            'date_fin' => '2023:10:24',
            'diplome_id' => 7,
        ]);
    }
}
