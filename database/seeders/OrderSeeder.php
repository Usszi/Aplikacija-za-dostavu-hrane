<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
Use illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'name' => Str::random(10),
            'quantity' => 1,
            'user_id'=> 1,
            'restaurant_id'=> 1,
            'store_id'=> 1,
            'deliverer_id'=> 1
        ]);
    }
}
