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
        Schema::create('lc_countries', function (Blueprint $table) {
            $table->increments('id')->comment('Primary key: auto-incremented country ID.');
            $table->tinyInteger('lc_region_id')->unsigned()->comment('Foreign key referencing the region this country belongs to.');
            $table->ulid('uid')->unique()->comment('Unique ULID for the country, sortable and lexicographically unique.');

            $table->string('official_name')->comment('The official name of the country (e.g., "United States of America").');
            $table->string('capital')->nullable()->comment('Capital city of the country.');
            $table->string('iso_alpha_2', 10)->comment('ISO 3166-1 alpha-2 code (e.g., "US" for the United States).');
            $table->string('iso_alpha_3', 10)->comment('ISO 3166-1 alpha-3 code (e.g., "USA" for the United States).');
            $table->smallInteger('iso_numeric')->nullable()->comment('ISO 3166-1 numeric code for the country.');

            $table->string('international_phone', 150)->nullable()->comment('International dialing code (e.g., +1 for the United States).');
            $table->string('geoname_id', 10)->nullable()->comment('Geonames ID for geographical reference.');
            $table->string('wmo', 10)->nullable()->comment('World Meteorological Organization (WMO) abbreviation.');
            $table->date('independence_day')->nullable()->comment('Year the country gained independence.');

            $table->string('population')->nullable()->comment('The country’s population.');
            $table->string('area')->nullable()->comment('Area of the country in square kilometers (km²).');
            $table->string('gdp')->nullable()->comment('Gross Domestic Product (GDP) in billions of US dollars.');

            $table->json('languages')->nullable()->comment('List of official languages spoken in the country.');
            $table->json('tld')->nullable()->comment('Top-level domain(s) used by the country (e.g., ".us" for the United States).');
            $table->json('alternative_tld')->nullable()->comment('Alternative top-level domains the country may use.');
            $table->json('borders')->nullable()->comment('List of neighboring countries sharing borders.');
            $table->json('timezones')->nullable()->comment('Main and other timezones used in the country.');
            $table->json('currency')->nullable()->comment('Currency details including name, code, symbol, banknotes, coins, and unit conversions.');

            $table->json('flag_emoji')->nullable()->comment('Emoji representation of the country’s flag.');
            $table->json('flag_colors')->nullable()->comment('Base colors of the country’s flag.');
            $table->json('flag_colors_web')->nullable()->comment('Web-safe color codes for the country’s flag.');
            $table->json('flag_colors_contrast')->nullable()->comment('Contrasting colors for use with flag colors for readability.');
            $table->json('flag_colors_hex')->nullable()->comment('Hexadecimal color codes for the country’s flag.');
            $table->json('flag_colors_rgb')->nullable()->comment('RGB color values for the country’s flag.');
            $table->json('flag_colors_cmyk')->nullable()->comment('CMYK color values for the country’s flag.');
            $table->json('flag_colors_hsl')->nullable()->comment('HSL (Hue, Saturation, Lightness) color values for the flag.');
            $table->json('flag_colors_hsv')->nullable()->comment('HSV (Hue, Saturation, Value) color values for the flag.');
            $table->json('flag_colors_pantone')->nullable()->comment('Pantone color codes for the country’s flag.');

            $table->boolean('is_visible')->default(true)->comment('Visibility flag to determine if the country is publicly visible.');
            $table->timestamps();

            $table->unique(['lc_region_id', 'iso_alpha_2'])->comment('Unique constraint to ensure no duplicate ISO alpha-2 codes within the same region.');
            $table->foreign('lc_region_id')->references('id')->on('lc_regions')->onDelete('cascade')->comment('Foreign key constraint linking to the region table, with cascading deletes.');
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
};
