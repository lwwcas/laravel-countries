<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Models\Country;

it('should filters countries by international phone code', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'international_phone' => '228'
    ]);
    CountryFactory::new()->count(10)->create();

    $country = Country::wherePhoneCode('228')->first();
    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->international_phone)->toEqual('228');

    $country = Country::wherePhoneCode(228)->first();
    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->international_phone)->toEqual('228');
});
