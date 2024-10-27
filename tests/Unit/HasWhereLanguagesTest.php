<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Models\Country;

it('should filters countries by language', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'languages' => ['en', 'es'],
    ]);

    $country = Country::whereLanguage('en')->first();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->languages)->toContain('en');
});

it('should filters countries by languages', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'languages' => ['en', 'es'],
    ]);

    $country = Country::whereLanguages(['en', 'es'])->first();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->languages)->toContain('en');
    expect($country->languages)->toContain('es');
});
