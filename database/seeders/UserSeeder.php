<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
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
        DB::table('deliverers')->insert([
            'name' => Str::random(10),
            'surname' => Str::random(10),
            'email' => Str::random(10),
            'adress' => Str::random(10),
            'gender' => Str::random(10),
            'date_of_birth'=> Carbon::now()
        ]);


    }
}
