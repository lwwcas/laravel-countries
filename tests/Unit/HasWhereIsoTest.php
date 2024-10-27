<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Database\Factories\CountryRegionFactory;
use Lwwcas\LaravelCountries\Models\Country;
use Lwwcas\LaravelCountries\Models\CountryRegion;

it('should filters countries by ISO code', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'iso_alpha_2' => 'US',
        'iso_alpha_3' => 'KAN',
        'iso_numeric' => '894',
    ]);

    CountryFactory::new()->count(10)->create();

    $country = Country::whereIso('US')->first();
    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->iso_alpha_2)->toEqual('US');

    $country = Country::whereIso('KAN')->first();
    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->iso_alpha_3)->toEqual('KAN');

    $country = Country::whereIso('894')->first();
    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->iso_numeric)->toEqual('894');

    $country = Country::whereIso(894)->first();
    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->iso_numeric)->toEqual('894');
});

it('should filters regions by ISO code', function () {
    CountryRegionFactory::new()->create([
        'iso_alpha_2' => 'EU',
    ]);

    CountryRegionFactory::new()->count(10)->create();

    $country = CountryRegion::whereIso('EU')->first();
    expect($country)->toBeInstanceOf(CountryRegion::class);
    expect($country->iso_alpha_2)->toEqual('EU');

});
