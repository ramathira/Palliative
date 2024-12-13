<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Ward Member']);
        Role::create(['name' => 'State Admin']);
        Role::create(['name' => 'District Admin']);
        Role::create(['name' => 'Institution Admin']);
        Role::create(['name' => 'Health Block Admin']);
        Role::create(['name' => 'Asha Worker']);
        Role::create(['name' => 'Junior Health Inspector']);
        Role::create(['name' => 'Mid Level Service Provider Nurse']);
      
    }
}
