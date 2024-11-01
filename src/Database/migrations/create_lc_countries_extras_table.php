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
        Schema::create('lc_countries_extras', function (Blueprint $table) {
            $table->increments('id')->comment('Primary key: auto-incremented extra information ID.');
            $table->integer('lc_country_id')->unsigned()->comment('Foreign key linking to the lc_countries table.');

            $table->string('national_sport')->nullable()->comment('The national sport of the country, if applicable.');
            $table->string('cybersecurity_agency')->nullable()->comment('Name of the country\'s national cybersecurity agency.');

            $table->json('popular_technologies')->nullable()->comment('A list of popular technologies used in the country (e.g., programming languages, platforms).');
            $table->json('internet')->nullable()->comment('Information about the country\'s internet infrastructure, including speed and penetration.');

            $table->json('religions')->nullable()->comment('A list of religions practiced in the country.');
            $table->json('international_organizations')->nullable()->comment('A list of international organizations the country is a member of (e.g., UN, WTO).');

            $table->foreign('lc_country_id')->references('id')->on('lc_countries')->onDelete('cascade')->comment('Foreign key constraint linking to the lc_countries table with cascading deletes.');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lc_countries_extras');
    }
};
