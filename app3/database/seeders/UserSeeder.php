<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Alioune',
            'email' => 'Alioune@gmail.com',
            'tel' => '0140544197',
            'password' => Hash::make('123456789'),
        ]);
        DB::table('users')->insert([
            'name' => 'Amadoutest',
            'email' => 'Amadou@gmail.com',
            'tel' => '00140544197',
            'password' => Hash::make('123456789'),
        ]);
        DB::table('users')->insert([
            'name' => 'Assane',
            'email' => 'Assane@gmail.com',
            'tel' => '000140544197',
            'password' => Hash::make('123456789'),
        ]);
    }
}
