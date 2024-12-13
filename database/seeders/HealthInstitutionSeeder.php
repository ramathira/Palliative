<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HealthInstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mt_health_institutions')->insert([
            [
                'health_institution' => 'Anad PHC',
                'block' => 1  
            ],
            [
                'health_institution' => 'Panavoor PHC',
                'block' => 1  
            ],
            [
                'health_institution' => 'Aruvikkara PHC',
                'block' => 1  
            ],
            [
                'health_institution' => 'Karakulam FHC',
                'block' => 1  
            ],
            [
                'health_institution' => 'Vembayam PHC',
                'block' => 1  
            ]
        ]);
    }
}
