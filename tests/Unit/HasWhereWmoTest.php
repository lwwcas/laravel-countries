<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Models\Country;

it('should filters countries by wmo', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'wmo' => 'CD'
    ]);
    CountryFactory::new()->count(10)->create();

    $country = Country::whereWmo('CD')->first();
    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->wmo)->toEqual('CD');
});

it('should filters countries by wmo code', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'wmo' => 'CD'
    ]);
    CountryFactory::new()->count(10)->create();

    $country = Country::whereWmoCode('CD')->first();
    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->wmo)->toEqual('CD');
});

it('should filters countries by World Meteorological Organization Code', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'wmo' => 'CD'
    ]);
    CountryFactory::new()->count(10)->create();

    $country = Country::whereWorldMeteorologicalOrganizationCode('CD')->first();
    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->wmo)->toEqual('CD');
});
