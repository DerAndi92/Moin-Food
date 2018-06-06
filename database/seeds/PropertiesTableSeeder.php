<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values= ['Vegan', 'Vegetarisch', 'Raucherfrei', 'Barrierefrei', 'für Gruppen', 'Gesund'];

        foreach($values as $value) {
            DB::table('properties')->insert([
                'name' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
