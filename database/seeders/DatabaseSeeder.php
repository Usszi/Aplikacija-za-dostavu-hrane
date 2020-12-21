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
            NeighborhoodSeeder::class,
            UserSeeder::class,
            RestaurantSeeder::class,
            StoreSeeder::class,
            MessagesSeeder::class,
            OrderSeeder::class
        ]);
    }
}
