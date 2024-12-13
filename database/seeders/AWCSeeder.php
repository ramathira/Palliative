<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AWCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mt_anganwadi')->insert([
            [
                'id' => '32601100201',
                'awc_name' => 'Pallivila,36',
                'subcentre_id' =>1
            ],
            [
                'id' => '32601100202',
                'awc_name' => 'Njattadivaram,37',
                'subcentre_id' =>1
            ],
            [
                'id' => '32601100203',
                'awc_name' => 'Karayalathukonam,38',
                'subcentre_id' =>2
            ],
        ]);
    }
}
