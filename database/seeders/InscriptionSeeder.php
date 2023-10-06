<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 5; $i++) {
            DB::table('inscriptions')->insert([
                'eleve_id' => $i,
                'promo_id' => 1
            ]);

            for ($i = 5; $i < 13; $i++) {
                DB::table('inscriptions')->insert([
                    'eleve_id' => $i,
                    'promo_id' => rand(2,7)
                ]);
            }
        }
    }
}
