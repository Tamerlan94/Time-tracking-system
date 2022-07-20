<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            [
                'id' => 1,
                'name' => 'Назначенные',
                'role_id' => 3,
            ],
            [
                'id' => 2,
                'name' => 'В работе',
                'role_id' => 3,
            ],
            [
                'id' => 3,
                'name' => 'Выполненные',
                'role_id' => 3,
            ],
            [
                'id' => 4,
                'name' => 'Завершённые',
                'role_id' => 3,
            ],
            [
                'id' => 5,
                'name' => 'На паузе',
                'role_id' => 3,
            ],
            [
                'id' => 6,
                'name' => 'Скрам-встреча',
                'role_id' => 2,
            ],
            [
                'id' => 7,
                'name' => 'Совещание',
                'role_id' => 2,
            ],
        ]);
    }
}
