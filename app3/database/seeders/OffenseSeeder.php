<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OffenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offenses')->insert([
            'license_plate' => '2102AS01',
            'offense_type' => 'speeding',
            'point_cost' => '2',
            'registered' => true,
        ]);
        DB::table('offenses')->insert([
            'license_plate' => '6814GV01',
            'offense_type' => 'speeding',
            'point_cost' => '2',
            'registered' => true,
        ]);
        DB::table('offenses')->insert([
            'license_plate' => '8509AS01',
            'offense_type' => 'speeding',
            'point_cost' => '2',
            'registered' => false,
        ]);
        DB::table('offenses')->insert([
            'license_plate' => '2102AS01',
            'offense_type' => 'speeding',
            'point_cost' => '2',
            'registered' => true,
        ]);
        DB::table('offenses')->insert([
            'license_plate' => '6814GV01',
            'offense_type' => 'speeding',
            'point_cost' => '2',
            'registered' => true,
        ]);
        DB::table('offenses')->insert([
            'license_plate' => '2102AS01',
            'offense_type' => 'speeding',
            'point_cost' => '2',
            'registered' => true,
        ]);
        DB::table('offenses')->insert([
            'license_plate' => '2510JC01',
            'offense_type' => 'speeding',
            'point_cost' => '2',
            'registered' => false,
        ]);
        DB::table('offenses')->insert([
            'license_plate' => '2102AS01',
            'offense_type' => 'speeding',
            'point_cost' => '2',
            'registered' => true,
        ]);
    }
}
