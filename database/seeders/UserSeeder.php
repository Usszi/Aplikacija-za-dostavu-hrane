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
        /* unos admina */
        User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin')
        ]);

        /* unos random usera */
        $numberOfUsers = env('SEED_USER_COUNT', 1000);
        User::factory()
            ->count($numberOfUsers)
            ->create();
        
        $users = User::all();
        
        /* randomly spajanje prijatelja */
        $users->each(function($user) use ($numberOfUsers) {
            $today = Carbon::now();
            $user->messages()->sync([
                rand(1, $numberOfUsers) => ['accepted_at' => $today],
                rand(1, $numberOfUsers) => ['accepted_at' => $today],

                /* jos nije prihvaćen zahtjev za prijateljstvom */
                rand(1, $numberOfUsers) => ['accepted_at' => null],
                
                rand(1, $numberOfUsers) => ['accepted_at' => $today],
                rand(1, $numberOfUsers) => ['accepted_at' => $today]
            ]);
        });

    }
}
