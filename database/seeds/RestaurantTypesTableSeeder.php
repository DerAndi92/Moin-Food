<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RestaurantTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values= ['Restaurant', 'Bar', 'Bistro', 'Cafe', 'Imbiss'];

        foreach($values as $value) {
            DB::table('restaurant_types')->insert([
                'name' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
