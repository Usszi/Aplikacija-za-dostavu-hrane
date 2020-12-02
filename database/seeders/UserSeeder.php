<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
Use illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => Str::random(10),
             'surname' => Str::random(10),
             'email' => Str::random(10).'@gmail.com',
             'adress' => Str::random(10),
             'gender' => Str::random(10),
             'date_of_birth' => Carbon::random()
            ]
        ]); 
    }
}
