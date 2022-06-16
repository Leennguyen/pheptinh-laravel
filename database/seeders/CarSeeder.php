<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for($i = 0; $i <10 ; $i++){
        //     DB::table('cars')->insert([
        //     'model' => Str::random(10),
        //     'price' => mt_rand(10000, 100000)
        // ]);
        // }
        Car::factory()->count(5)->create();
    }
}

