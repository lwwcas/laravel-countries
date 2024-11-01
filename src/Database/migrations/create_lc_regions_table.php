<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lc_regions', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('iso_alpha_2', 10)->comment('ISO 3166-1 Alpha-2 code');
            $table->string('icao', 10)->comment('International Civil Aviation Organization (ICAO) region');
            $table->string('iucn', 10)->comment('International Union for Conservation of Nature (IUCN) region');
            $table->string('tdwg', 10)->comment('World Geographical Scheme for Recording Plant Distributions code');
            $table->boolean('is_visible')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lc_regions');
    }
};
