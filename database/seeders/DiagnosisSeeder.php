<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Diagnosis;
class DiagnosisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Diagnosis::create(['diagnosis' => 'Hyper Tension']);
        Diagnosis::create(['diagnosis' => 'Diabetes Melitus']);
        Diagnosis::create(['diagnosis' => 'Parkinson\'s Disease']);
         Diagnosis::create(['diagnosis' => 'Benign Prostatic Hypertrophy']);
         Diagnosis::create(['diagnosis' => 'Chronic Kidney Disease']);
      
        
    }
}
