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
        Schema::connection(config('w-countries.driver'))->create('lc_region_translations', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->tinyInteger('lc_region_id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->string('locale')->index();

            $table->unique(['lc_region_id', 'locale']);
            $table->unique(['slug', 'locale']);
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
        Schema::connection(config('w-countries.driver'))->dropIfExists('lc_region_translations');
    }
};
