<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\fix;

use Illuminate\Database\Seeder;

class DutchTranslatesUpdatedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * This seed, corrects the lack of information of the Philippines country
     *
     * @return void
     */
    public function run()
    {
        //TODO: Delete this file in the next updates

        //Run all Dutch translates data
        $this->call(\Lwwcas\LaravelCountries\Database\Seeders\NlSeeder::class);
    }
}
