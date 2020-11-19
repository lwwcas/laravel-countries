<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLcCountriesGeographicalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lc_countries_geographical', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->integer('lc_country_id')->unsigned();
            $table->string('type');
            $table->string('features_type');
            $table->json('properties');
            $table->json('geometry');

            $table->foreign('lc_country_id')->references('id')->on('lc_countries')->onDelete('cascade');
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
        Schema::dropIfExists('lc_countries_geographical');
    }
}
