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
                  'id' => 1,
                  'username' => 'name',
                  'role_id' => 1,
                  'password' => Hash::make('123'),
              ],
            [
                'id' => 2,
                'username' => 'testuser',
                'role_id' => 3,
                'password' => Hash::make('123'),
            ],
            [
                'id' => 3,
                'username' => 'managertest',
                'role_id' => 2,
                'password' => Hash::make('123'),
            ]
        ]);

    }
}
