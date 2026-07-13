<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Lwwcas\LaravelCountries\Support\WCountriesConnection;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(WCountriesConnection::name())->create('lc_countries_geographical', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lc_country_id')->unsigned();
            $table->string('type');
            $table->string('features_type');
            $table->json('properties');
            $table->json('geometry');

            $table->foreign('lc_country_id')->references('id')->on('lc_countries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection(WCountriesConnection::name())->dropIfExists('lc_countries_geographical');
    }
};
