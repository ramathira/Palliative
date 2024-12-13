<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mt_districts')->insert([
            ['district' => 'Thiruvananthapuram'],
            ['district' => 'Kollam'],
            ['district' => 'Pathanamthitta'],
            ['district' => 'Alappuzha'],
            ['district' => 'Kottayam'],
            ['district' => 'Idukki'],
            ['district' => 'Ernakulam'],
            ['district' => 'Thrissur'],
            ['district' => 'Palakkad'],
            ['district' => 'Malappuram'],
            ['district' => 'Kozhikode'],
            ['district' => 'Wayanad'],
            ['district' => 'Kannur'],
            ['district' => 'Kasargod'],
        ]);
    }
}
