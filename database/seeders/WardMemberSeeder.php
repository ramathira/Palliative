<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WardMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mt_ward_members')->insert([
            [
                'member_name' => 'SABU',
                'ward' => 1 ,
                'status' => 1 ,
                'contact_number' => '9446901256'
            ],            
            [
                'member_name' => 'ANILKUMAR',
                'ward' => 2 ,
                'status' => 1 ,
                'contact_number' => '9846111477'
            ],
            ]);
    }
}
