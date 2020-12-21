<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
Use Illuminate\Support\Str;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            ['created_at' => Carbon::yesterday(),
            'message_body' => Str::random(10),
            'from_id'=> 2,
            'to_id'=> 1
            ]
        ]);
    }
}
