<?php

use Illuminate\Support\Facades\Schema;
use Lwwcas\LaravelCountries\Models\Country;
use Lwwcas\LaravelCountries\Models\CountryCoordinates;
use Lwwcas\LaravelCountries\Models\CountryExtras;
use Lwwcas\LaravelCountries\Models\CountryGeographical;
use Lwwcas\LaravelCountries\Models\CountryRegion;
use Lwwcas\LaravelCountries\Models\CountryRegionTranslation;
use Lwwcas\LaravelCountries\Models\CountryTranslation;
use Lwwcas\LaravelCountries\Support\WCountriesConnection;

afterEach(function () {
    config()->set('w-countries.driver', config('database.default'));
});

it('resolves the configured countries database connection', function () {
    config()->set('database.connections.countries', [
        'driver' => 'sqlite',
        'database' => ':memory:',
        'prefix' => '',
        'foreign_key_constraints' => true,
    ]);
    config()->set('w-countries.driver', 'countries');

    expect(WCountriesConnection::name())->toBe('countries');
    expect((new Country())->getConnectionName())->toBe('countries');
    expect((new CountryRegion())->getConnectionName())->toBe('countries');
    expect((new CountryTranslation())->getConnectionName())->toBe('countries');
    expect((new CountryRegionTranslation())->getConnectionName())->toBe('countries');
    expect((new CountryCoordinates())->getConnectionName())->toBe('countries');
    expect((new CountryExtras())->getConnectionName())->toBe('countries');
    expect((new CountryGeographical())->getConnectionName())->toBe('countries');
});

it('falls back to the default application connection', function () {
    config()->set('w-countries.driver', config('database.default'));

    expect(WCountriesConnection::name())->toBe(config('database.default'));
    expect((new Country())->getConnectionName())->toBe(config('database.default'));
});

it('runs package migrations on the configured connection', function () {
    config()->set('w-countries.driver', 'countries');
    config()->set('database.connections.countries', [
        'driver' => 'sqlite',
        'database' => ':memory:',
        'prefix' => '',
        'foreign_key_constraints' => true,
    ]);

    foreach (glob(dirname(__DIR__, 2) . '/src/Database/migrations/*.php') as $migrationFile) {
        $migration = include $migrationFile;
        $migration->up();
    }

    expect(Schema::connection('countries')->hasTable('lc_countries'))->toBeTrue();
    expect(Schema::connection('countries')->hasTable('lc_regions'))->toBeTrue();
    expect(Schema::connection('countries')->hasTable('lc_countries_translations'))->toBeTrue();
});
