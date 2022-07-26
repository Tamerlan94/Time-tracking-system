<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                'project_id' => 1,
                'status_id' => 1,
                'user_id' => 2,
                'name' => 'Тестовая задача1',
                'description' => 'shiiiiiiiiiiiiiiiiiiiiiiiiit',
                'deadline' => '2022-07-20',
            ],
            [
                'project_id' => 1,
                'status_id' => 1,
                'user_id' => 3,
                'name' => 'Тестовая задача2',
                'description' => null,
                'deadline' => '2022-07-23',
            ],
            [
                'project_id' => 1,
                'status_id' => 1,
                'user_id' => 1,
                'name' => 'Тестовая задача3',
                'description' => null,
                'deadline' => '2022-07-25',
            ],
        ]);

        //
    }
}
