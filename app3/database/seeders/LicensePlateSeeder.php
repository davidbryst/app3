<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LicensePlateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('license_plates')->insert([
            'license' => '2102AS01',
            'user_id' => '2',
        ]);
        DB::table('license_plates')->insert([
            'license' => '6814GV01',
            'user_id' => '3',
        ]);
        DB::table('license_plates')->insert([
            'license' => '8509AS01',
            'user_id' => '4',
        ]);
        DB::table('license_plates')->insert([
            'license' => '2510JC01',
            'user_id' => '2',
        ]);
    }
}
