<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $faker = Faker::create('id_ID');

        for($data = 1; $data <=5; $data++ ){
            DB::table('students')->insert([
                'name' => $faker->name,
                'score' => $faker->numberBetween(50,100)
            ]);
        }


    }
}
