<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Models\Country;

it('should can filter by population', function (int $population, int $where, int $expected) {
    CountryFactory::new()->count(10)->create(['population' => $population]);
    $countries = Country::wherePopulation($where)->get();

    expect($countries)->toHaveCount($expected);
})->with([
    'no country has the population' => [
        'population' => 9890400,
        'where' => 100,
        'expected' => 0,
    ],
    'all countries have the same population' => [
        'population' => 9890400,
        'where' => 9890400,
        'expected' => 10,
    ]
]);

it('should can filter by Area Km2', function (int $area, int $where, int $expected) {
    CountryFactory::new()->count(10)->create(['area' => $area]);
    $countries = Country::whereAreaKm2($where)->get();

    expect($countries)->toHaveCount($expected);
})->with([
    'no country has the population' => [
        'area' => 9890400,
        'where' => 100,
        'expected' => 0,
    ],
    'all countries have the same population' => [
        'area' => 9890400,
        'where' => 9890400,
        'expected' => 10,
    ]
]);

it('should can filter by gdp', function (int $gdp, int $where, int $expected) {
    CountryFactory::new()->count(10)->create(['gdp' => $gdp]);
    $countries = Country::whereGdp($where)->get();

    expect($countries)->toHaveCount($expected);
})->with([
    'no country has the population' => [
        'gdp' => 9890400,
        'where' => 100,
        'expected' => 0,
    ],
    'all countries have the same population' => [
        'gdp' => 9890400,
        'where' => 9890400,
        'expected' => 10,
    ]
]);
