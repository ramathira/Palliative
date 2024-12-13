<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mt_wards')->insert([
            [
                'ward_name' => 'VATTAPPARA WEST',
                'subcentre' => 1 
            ],
            [
                'ward_name' => 'VATTAPPARA EAST',
                'subcentre' => 1 
            ],
            [
                'ward_name' => 'KARAYALATHUKONAM',
                'subcentre' => 2
            ],
            [
                'ward_name' => 'PLATHARA',
                'subcentre' => 2
            ],
            [
                'ward_name' => 'VENCODE',
                'subcentre' => 2
            ],
            [
                'ward_name' => 'KIZHAKKELA',
                'subcentre' => 6
            ],
            [
                'ward_name' => 'CHEKKAKONAM',
                'subcentre' => 6
            ],
            [
                'ward_name' => 'AYANIKADU',
                'subcentre' => 3
            ],
            [
                'ward_name' => 'TARATTA',
                'subcentre' => 3
            ],
            [
                'ward_name' => 'KACHANI',
                'subcentre' => 3
            ],
            [
                'ward_name' => 'MUDISASTHAMCODE ',
                'subcentre' => 3
            ],
            [
                'ward_name' => 'VAZHAYILA ',
                'subcentre' => 5
            ],
            [
                'ward_name' => 'ARAMKALLU ',
                'subcentre' => 5
            ],
            [
                'ward_name' => 'KARAKULAM ',
                'subcentre' => 6
            ],
        ]);
    }
}
