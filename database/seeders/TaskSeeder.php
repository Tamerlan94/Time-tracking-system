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
                'id' => 1,
                'project_id' => 1,
                'status_id' => 1,
                'user_id' => 2,
                'name' => 'Тестовая задача',
                'deadline' => '2022-07-20',
            ],
        ]);
    }
}
