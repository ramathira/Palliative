<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mt_patient_status')->insert([
            [
                'id' => 1,
                'status' => 'Live'                
            ],
            [
                'id' => 2,
                'status' => 'Expired'                
            ],
            [
                'id' => 3,
                'status' => 'Inactive'                
            ],
        ]);
    }
}
