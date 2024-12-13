<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'username' => 'athi',
        // ]);

        $this->call(DistrictSeeder::class);
        $this->call(HealthBlockSeeder::class);
        $this->call(HealthInstitutionSeeder::class);
        $this->call(SubCentreSeeder::class);
        $this->call(RolesSeeder::class);
       $this->call(WardSeeder::class);
       $this->call(WardMemberSeeder::class);
       $this->call(SubCentreSeeder::class);
       $this->call(AWCSeeder::class);
        $this->call(AshaWorkerSeeder::class);
    $this->call(MLSPSeeder::class);
    $this->call(PermissionSeeder::class);
    $this->call(PatientStatusSeeder::class);
    $this->call(DiagnosisSeeder::class);
    }
}
