<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MLSPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mt_mid_level_service_providers')->insert([
            [
                'mlsp_name' =>'test mlsp',
                'subcentre_id' => 1
                ]

           
        ]);
    }
}
