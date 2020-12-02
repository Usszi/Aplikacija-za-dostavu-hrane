<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CitySeeder::class,
            DelivererSeeder::class,
            UserSeeder::class,
            NeighborhoodSeeder::class,
            OrderSeeder::class,
            RestaurantSeeder::class,
            StoreSeeder::class,
            MessagesSeeder::class
        ]);
    }
}
