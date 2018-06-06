<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsKitchensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants_kitchens', function (Blueprint $table) {
            $table->integer('restaurant_id')->unsigned();
            $table->foreign('restaurant_id')->references('id')
                ->on('restaurants')->onDelete('cascade');

            $table->integer('kitchen_id')->unsigned();
            $table->foreign('kitchen_id')->references('id')
                ->on('kitchens')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restaurants_properties', function(Blueprint$table) {
            $table->dropForeign(['restaurant_id']);
            $table->dropForeign(['kitchen_id']);
        });
        Schema::dropIfExists('restaurants_kitchens');
    }
}
