<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Str;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'name' => Str::random(10),
            'adress' => Str::random(10),
            'oib' => Str::random(10),
            'neighborhood_id'=> 1,
        ]);
    }
}
