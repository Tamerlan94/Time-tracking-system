<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
              [
                  'username' => 'name',
                  'role_id' => 1,
                  'password' => Hash::make('123'),
              ],
            [
                'username' => 'testuser',
                'role_id' => 3,
                'password' => Hash::make('123'),
            ],
            [
                'username' => 'managertest',
                'role_id' => 2,
                'password' => Hash::make('123'),
            ]
        ]);

    }
}
