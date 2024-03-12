<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' =>  'alex', 'score' => 90],
            ['name' =>  'Adel', 'score' => 80],
            ['name' =>  'Antoy', 'score' => 60],
        ];

        DB::table('students')->insert($data);
    }
}
