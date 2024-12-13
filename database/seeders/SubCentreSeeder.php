<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCentreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mt_subcentres')->insert([
            [
                'sub_centre' => 'Kazhunad FWC (maincentre)',
                'health_institution' => 1 
            ],
            [
                'sub_centre' => 'Kallayam FWC',
                'health_institution' => 1 
            ],
            [
                'sub_centre' => 'Kachani FWC',
                'health_institution' => 1 
            ],
            [
                'sub_centre' => 'Chittazha FWC',
                'health_institution' => 1 
            ],
            [
                'sub_centre' => 'Enikkara FWC',
                'health_institution' => 1 
            ],
            [
                'sub_centre' => 'Karakulam FWC',
                'health_institution' => 1 
            ],
        ]);
    }
}
