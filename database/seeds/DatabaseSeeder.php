<?php

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
            ImageTypesTableSeeder::class,
            KitchensTableSeeder::class,
            PlacesTableSeeder::class,
            PropertiesTableSeeder::class,
            RestaurantTypesTableSeeder::class,
            RestaurantsTableSeeder::class
        ]);
    }
}
