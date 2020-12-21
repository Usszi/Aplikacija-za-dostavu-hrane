<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Str;

class NeighborhoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('neighborhoods')->insert([
            'name' => Str::random(10),
            'city_id'=> 1
        ]);
    }
}
