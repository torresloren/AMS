<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'name' => 'Ariel Yandan',
                'schedule_id' => 1,
                'position' => 'President',
                'email' => 'arielyandan25@gmaio.com',
                'pin_code' => 'pincode'
                
            ],
            [
                'name' => 'Zack Yandan',
                'schedule_id' => 2,
                'position' => 'Vide-President',
                'email' => 'zackyandan25@gmaio.com',
                'pin_code' => 'pincode1'
                
               
            ],
            [
                'name' => 'Noriel Yandan',
                'schedule_id' => 3,
                'position' => 'Employee',
                'email' => 'norielyandan25@gmaio.com',
                'pin_code' => 'pincode2'
            ]
            ]);
    }
}
