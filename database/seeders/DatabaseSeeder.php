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
            MessageSeeder::class,
            UserSeeder::class,
            RestaurantSeeder::class,
            StoreSeeder::class,
            OrderSeeder::class
        ]);
    }
}
