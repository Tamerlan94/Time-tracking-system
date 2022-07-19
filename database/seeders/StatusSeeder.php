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
                'name' => 'Назначенные',
                'role_id' => 3,
            ],
            [
                'name' => 'В работе',
                'role_id' => 3,
            ],
            [
                'name' => 'Выполненные',
                'role_id' => 3,
            ],
            [
                'name' => 'Завершённые',
                'role_id' => 3,
            ],
            [
                'name' => 'На паузе',
                'role_id' => 3,
            ],
            [
                'name' => 'Скрам-встреча',
                'role_id' => 2,
            ],
            [
                'name' => 'Совещание',
                'role_id' => 2,
            ],
        ]);
    }
}
