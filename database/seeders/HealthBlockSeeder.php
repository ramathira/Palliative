<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HealthBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mt_health_blocks')->insert([
            [
                'health_block' =>'Kanyakulangara',
                'district' => 1
                ]

           
        ]);
    }
}
