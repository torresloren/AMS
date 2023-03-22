<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedules')->insert([
          
            [
                'slug' => 'Attendance 1',
                 'time_in' => 8,
                 'time_out' => 10
               
            ],
            [
                'slug' => 'Attendance 1',
                'time_in' => 8,
                'time_out' => 5
            
            ]
            ]);
    }
}
