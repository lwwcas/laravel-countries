<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLcCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lc_countries', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('lc_region_id')->unsigned();
            $table->uuid('uuid')->unique();
            $table->string('official_name');
            $table->string('iso_alpha_2', 3);
            $table->string('iso_alpha_3', 4);
            $table->smallInteger('iso_numeric')->nullable();
            $table->string('geoname_id')->nullable();

            $table->string('international_phone', 150)->nullable();
            $table->json('languages')->nullable();
            $table->string('tld')->nullable()->comment('Top-level domain');
            $table->string('wmo')->nullable()->comment('Country abbreviations by the World Meteorological Organization');

            $table->string('emoji');
            $table->json('color_hex');
            $table->json('color_rgb');

            $table->json('coordinates')->nullable();
            $table->json('coordinates_limit')->nullable();

            $table->boolean('visible')->default(true);
            $table->timestamps();

            $table->unique(['lc_region_id', 'iso_alpha_2']);
            $table->foreign('lc_region_id')->references('id')->on('lc_regions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lc_countries');
    }
}
