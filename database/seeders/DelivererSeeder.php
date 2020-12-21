<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
Use Illuminate\Support\Str;

class DelivererSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deliverers')->insert([
            'name' => Str::random(10),
            'surname' => Str::random(10),
            'gender' => Str::random(10),
            'date_of_birth'=> Carbon::random()
        ]);
    }
}
