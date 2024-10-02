<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Database\Factories\CountryRegionFactory;
use Lwwcas\LaravelCountries\Models\Country;
use Lwwcas\LaravelCountries\Models\CountryRegion;

it('should filters countries by iso_alpha_2 code', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'iso_alpha_2' => 'US',
        'iso_alpha_3' => 'KAN',
        'iso_numeric' => '894',
    ]);

    CountryFactory::new()->count(10)->create();

    $country = Country::whereIsoAlpha2('US')->first();
    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->iso_alpha_2)->toEqual('US');
});

it('should filters regions by iso_alpha_2 code', function () {
    CountryRegionFactory::new()->create([
        'iso_alpha_2' => 'EU',
    ]);

    CountryRegionFactory::new()->count(10)->create();

    $country = CountryRegion::whereIsoAlpha2('EU')->first();
    expect($country)->toBeInstanceOf(CountryRegion::class);
    expect($country->iso_alpha_2)->toEqual('EU');
});
