<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\fix;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class PhilippinesTranslatesUpdatedSeeder extends Seeder
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

        //Run all philippine country data
        $this->call(\Lwwcas\LaravelCountries\Database\Seeders\Countries\PH_Philippines::class);

        //Run the translation from Philippines to Spanish
        Builder::countriesTranslations(['PH' => 'Filipinas'], 'es');

        //Run the translation from Philippines to France
        Builder::countriesTranslations(['PH' => 'Philippines'], 'fr');

        //Run the translation from Philippines to Portuguese
        Builder::countriesTranslations(['PH' => 'Filipinas'], 'pt');
    }
}
