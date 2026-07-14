<?php

namespace Lwwcas\LaravelCountries\Providers;

use Lwwcas\LaravelCountries\Commands\WCountriesInstallCommand;
use Lwwcas\LaravelCountries\Commands\WCountriesRunLanguagesSeeds;
use Lwwcas\LaravelCountries\Commands\WCountriesSeedCommand;
use Lwwcas\LaravelCountries\WCountries;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WCountriesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {

        $package
            ->setBasePath(__DIR__)
            ->name('lwwcas-countries')
            ->hasConfigFile('w-countries')
            ->hasMigrations([
                'create_lc_regions_table',
                'create_lc_region_translations_table',
                'create_lc_countries_table',
                'create_lc_countries_translations_table',
                'create_lc_countries_geographical_table',
                'create_lc_countries_extras_table',
                'create_lc_countries_coordinates_table',
            ])
            ->hasCommands([
                WCountriesInstallCommand::class,
                WCountriesRunLanguagesSeeds::class,
                WCountriesSeedCommand::class,
            ])
            ->publishesServiceProvider('WCountriesServiceProvider');
    }

    public function packageRegistered()
    {
        $this->app->bind('w-countries', function ($app) {
            return new WCountries;
        });

        $this->app->alias('laravel-countries', WCountries::class);
    }
}
