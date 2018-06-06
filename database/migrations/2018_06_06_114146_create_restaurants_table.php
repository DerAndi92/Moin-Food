<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('restaurant_type_id')->unsigned()->nullable();
            $table->integer('place_id')->unsigned()->nullable();
            $table->string('name',100);
            $table->string('slug',200);
            $table->string('description',500)->nullable();
            $table->string('text')->nullable();
            $table->boolean('highlight');
            $table->smallInteger('price_category')->unsigned();
            $table->smallInteger('rating_ambiance')->unsigned()->nullable();
            $table->smallInteger('rating_taste')->unsigned()->nullable();
            $table->smallInteger('rating_service')->unsigned()->nullable();
            $table->string('street',100)->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->timestamps();

            $table->foreign('place_id')->references('id')->on('places')->onDelete('set null');
            $table->foreign('restaurant_type_id')->references('id')->on('restaurant_types')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restaurants', function(Blueprint$table) {
            $table->dropForeign(['restaurant_type_id']);
            $table->dropForeign(['place_id']);
        });
        Schema::dropIfExists('restaurants');
    }
}
