<?php

use Illuminate\Database\Eloquent\Factory;
use Illuminate\Database\Eloquent\Model;
use Lwwcas\LaravelCountries\Database\Factories\CountryCoordinatesFactory;
use Lwwcas\LaravelCountries\Database\Factories\CountryExtrasFactory;
use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Database\Factories\CountryGeographicalFactory;
use Lwwcas\LaravelCountries\Database\Factories\CountryRegionFactory;
use Lwwcas\LaravelCountries\Models\Country;
use Lwwcas\LaravelCountries\Models\CountryCoordinates;
use Lwwcas\LaravelCountries\Models\CountryExtras;
use Lwwcas\LaravelCountries\Models\CountryGeographical;
use Lwwcas\LaravelCountries\Models\CountryRegion;

dataset('models', [
    [Country::class, CountryFactory::class],
    [CountryRegion::class, CountryRegionFactory::class],
    [CountryCoordinates::class, CountryCoordinatesFactory::class],
    [CountryExtras::class, CountryExtrasFactory::class],
    [CountryGeographical::class, CountryGeographicalFactory::class],
]);

it('should apply the shouldBeStrict on model', function ($model, $factory) {
    $factory::new()->count(5)->create();

    $model::shouldBeStrict(true);

    $query = $model::all();

    expect($query)->each->toBeInstanceOf($model);
    expect($query)->each->not()->toBeNull();
})->with('models');

it('should do not apply the shouldBeStrict on model', function ($model, $factory) {
    $factory::new()->count(5)->create();

    $query = $model::all();

    expect($query)->each->toBeInstanceOf($model);
    expect($query)->each->not()->toBeNull();
})->with('models');

it('should has localeKey default value for shouldBeStrict', function ($model, $factory) {
    $factory::new()->count(5)->create();

    $query = $model::inRandomOrder()->first();

    expect($query)->not()->toBeNull();
    expect($query)->toBeInstanceOf($model);

    $defaultLocaleKey = config('w-countries.locale_key', 'locale');

    expect($query->localeKey)->not()->toBeNull();
    expect($query->localeKey)->toBeString();
    expect($query->localeKey)->toEqual($defaultLocaleKey);
})->with('models');
