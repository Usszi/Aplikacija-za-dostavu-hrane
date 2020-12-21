<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use Carbon\Carbon;


class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /* broj poruka koje želim generirati */
        $numberOfMessages = env('SEED_MESSAGE_COUNT', 1000);

        /* najveći broj koji smije biti u from_id i to_id je count(broj korisnika),
           broj se nalazi u .env fajlu
        */
        $numberOfUsers = env('SEED_USER_COUNT', 10);

        while($numberOfMessages--) {
            DB::table('messages')->insert([
                'from_id' => rand(1, $numberOfUsers),
                'to_id' => rand(1, $numberOfUsers),

                /* random text između 1 i 10 rečenica */
                'message_body' => $faker->paragraph(rand(1, 10)),

                'created_at' => Carbon::now()->subDays(rand(1, 100))
            ]);
        }
    }
}