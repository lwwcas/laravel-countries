<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Models\Country;

it('should filters countries by Domain TLD', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'tld' => ['.com', '.net'],
    ]);
    CountryFactory::new()->count(10)->create();

    $country = Country::whereDomain('.com')->whereOficialName('United States of America')->first();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->tld)->toContain('.com');
});

it('should filters countries and excludes those without the specified domain in their TLD', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'tld' => ['.com', '.net'],
    ]);
    CountryFactory::new()->count(10)->create();

    $country = Country::whereDomain('.0101')->whereOficialName('United States of America')->first();

    expect($country)->not()->toBeInstanceOf(Country::class);
    expect($country)->toBeNull();
});

it('should filters countries by Alternative Domain TLD', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'alternative_tld' => ['.com', '.net'],
    ]);
    CountryFactory::new()->count(10)->create();

    $country = Country::whereDomainAlternative('.com')->whereOficialName('United States of America')->first();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->alternative_tld)->toContain('.com');
});

it('should filters countries and excludes those without the specified alternative domain in their TLD', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'alternative_tld' => ['.com', '.net'],
    ]);
    CountryFactory::new()->count(10)->create();

    $country = Country::whereDomainAlternative('.0101')->whereOficialName('United States of America')->first();

    expect($country)->not()->toBeInstanceOf(Country::class);
    expect($country)->toBeNull();
});
