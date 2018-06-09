<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'name' => $value,
            'restaurant_type_id' => $value,
            'place_id' => $value,
            'slug' => '',
            'description' => $value,
            'text' => '',
            'highlight' => $value,
            'price_category' => $value,
            'rating_ambiance' => $value,
            'rating_taste' => $value,
            'rating_service' => $value,
            'street' => $value,
            'latitude' => $value,
            'longitude' => $value,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
