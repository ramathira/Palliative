<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AshaWorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mt_asha_workers')->insert([
            [
                'asha_worker_name' => 'ASWATHY',
                'contact_number' => '8281427539',
                 'ward' => 1
            ],
            [
                'asha_worker_name' => 'USHA',
                'contact_number' => '9562066274',
                 'ward' => 1
            ],
            [
                'asha_worker_name' => 'MOLLY',
                'contact_number' => '9544157438',
                 'ward' => 2
            ],
            [
                'asha_worker_name' => 'SICILET BAI',
                'contact_number' => '9656384695',
                 'ward' => 3
            ],
           
        ]);
    }
}
