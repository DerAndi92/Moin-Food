<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class KitchensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values= ['Italienisch', 'Asiatisch', 'Griechisch', 'Indisch', 'Deutsch', 'Amerikanisch'];

        foreach($values as $value) {
            DB::table('kitchens')->insert([
                'name' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
