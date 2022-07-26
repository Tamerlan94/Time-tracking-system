<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkHoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_hours')->insert([
            [
                'id' => 1,
                'task_id' => 1,
                'start_hour' => 10,
                'end_hour' => 18,
                'date' => '2022-07-19',
            ],
        ]);
    }
}
