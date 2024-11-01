<?php

namespace Lwwcas\LaravelCountries\Database\Seeders;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\ArabicLanguageSeeder as Arabic;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\DutchLanguageSeeder as Dutch;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\FrenchLanguageSeeder as French;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\GermanLanguageSeeder as German;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\ItalianLanguageSeeder as Italian;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\PortugueseLanguageSeeder as Portuguese;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\RussianLanguageSeeder as Russian;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\SpanishLanguageSeeder as Spanish;

class LanguagesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Add all countries translations
        $this->call(Portuguese::class);
        $this->call(Spanish::class);
        $this->call(French::class);
        $this->call(Italian::class);
        $this->call(Arabic::class);
        $this->call(Dutch::class);
        $this->call(German::class);
        $this->call(Russian::class);
    }
}
