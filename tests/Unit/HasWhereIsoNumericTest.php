<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Models\Country;

it('should filters countries by iso_numeric code', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'iso_alpha_2' => 'US',
        'iso_alpha_3' => 'KAN',
        'iso_numeric' => '894',
    ]);

    CountryFactory::new()->count(10)->create();

    $country = Country::whereIsoNumeric('894')->first();
    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->iso_numeric)->toEqual('894');

    $country = Country::whereIsoNumeric(894)->first();
    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->iso_numeric)->toEqual('894');
});
