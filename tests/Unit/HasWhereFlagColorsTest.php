<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Models\Country;

dataset('where.flagColors', [
    ['flag_colors_web', 'whereFlagColorWeb', 'Red', ['Red', 'Blue']],
]);

it('1should filters countries by a single web flag color', function ($column, $method, $search, $expected) {
    CountryFactory::new()->create([$column => $expected]);

    $result = Country::{$method}($search)->get();

    expect($result)->toHaveCount(1);
    expect($result->first()->{$column})->toContain($search);
})->with('where.flagColors');

it('should filters countries by a single web flag color', function () {
    CountryFactory::new()->create(['flag_colors_web' => ['Red', 'Blue']]);

    $result = Country::whereFlagColorWeb('Red')->get();

    expect($result)->toHaveCount(1);
    expect($result->first()->flag_colors_web)->toContain('Red');
});

it('should filters countries by multiple web flag colors', function () {
    CountryFactory::new()->create(['flag_colors_web' => ['Red', 'Blue', 'Green']]);

    $result = Country::whereFlagColorWeb(['Red', 'Green'])->get();

    expect($result)->toHaveCount(1);
    expect($result->first()->flag_colors_web)->toContain('Red', 'Green');
});

it('should returns no results if no matching web flag color is found', function () {
    CountryFactory::new()->create(['flag_colors_web' => ['Red', 'Blue']]);

    $result = Country::whereFlagColorWeb('Yellow')->get();

    expect($result)->toHaveCount(0);
});
