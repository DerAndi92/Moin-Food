<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLokalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lokal_typ_id')->unsigned()->nullable();
            $table->integer('ort_id')->unsigned()->nullable();
            $table->string('name',100);
            $table->string('slug',200);
            $table->string('beschreibung',500)->nullable();
            $table->string('text')->nullable();
            $table->boolean('highlight');
            $table->smallInteger('preiskategorie')->unsigned();
            $table->smallInteger('ambiente_wertung')->unsigned()->nullable();
            $table->smallInteger('geschmack_wertung')->unsigned()->nullable();
            $table->smallInteger('service_wertung')->unsigned()->nullable();
            $table->string('strasse',100)->nullable();
            $table->float('breitengrad')->nullable();
            $table->float('laengengrad')->nullable();
            $table->timestamps();

            $table->foreign('ort_id')->references('id')->on('ort')->onDelete('set null');
            $table->foreign('lokal_typ_id')->references('id')->on('lokaltyp')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lokal', function(Blueprint$table) {
            $table->dropForeign(['lokal_typ_id', 'ort_id']);
        });
        Schema::dropIfExists('lokal');
    }
}
