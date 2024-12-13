<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->insert([
            [
                'name' => 'user-list'
               
            ],
            [
                'name' => 'role-list'
               
            ],
            [
                'name' => 'permission-list'
               
            ],

            [
                'name' => 'patient-add'
               
            ],
            [
                'name' => 'subcentre-list'
               
            ],
            [
                'name' => 'ward-list'
               
            ],

            [
                'name' => 'ward-member-list'
               
            ],
            [
                'name' => 'mlsp-list'
               
            ],
            [
                'name' => 'asha-worker-list'
               
            ],

            [
                'name' => 'anganwadi-list'
               
            ],
            [
                'name' => 'diagnosis-list'
               
            ],
        ]);
    }
}
