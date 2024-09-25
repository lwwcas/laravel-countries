<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Models\Country;

// test('example', function () {
//     expect(true)->toBeTrue();
// });

it('filters countries by ISO code', function () {
    $country = CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'iso_alpha_2' => 'US',
    ]);

    $countries = Country::whereIso('US')->get();

    expect($countries)
        ->toBeInstanceOf(Illuminate\Database\Eloquent\Collection::class)
        ->toHaveCount(1)
        ->each->toBeInstanceOf(Country::class);

    expect($countries->first()->official_name)->toEqual('United States of America');
});
