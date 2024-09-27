<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Lwwcas\LaravelCountries\Enum\GpsFormatEnum;

return new class() extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lc_countries_coordinates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lc_country_id')->unsigned();
            $table->string('latitude', 100);
            $table->string('longitude', 100);
            $table->string('degrees_with_decimal', 100);
            $table->string('degrees_minutes_seconds', 100);
            $table->string('degrees_and_decimal_minutes', 100);
            $table->json('gps')->nullable();

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
        Schema::dropIfExists('lc_countries_coordinates');
    }
};
