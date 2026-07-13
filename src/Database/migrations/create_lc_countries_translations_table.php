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
        Schema::connection(WCountriesConnection::name())->create('lc_countries_translations', function (Blueprint $table) {
            $table->id('id');
            $table->integer('lc_country_id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->string('locale')->index();

            $table->unique(['lc_country_id', 'locale']);
            $table->unique(['slug', 'locale']);
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
        Schema::connection(WCountriesConnection::name())->dropIfExists('lc_countries_translations');
    }
};
