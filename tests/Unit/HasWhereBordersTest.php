<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Database\Factories\CountryTranslationFactory;
use Lwwcas\LaravelCountries\Models\Country;
use Lwwcas\LaravelCountries\Models\CountryTranslation;

it('should filters countries by border', function () {
    CountryFactory::new()->create([
        'official_name' => 'Brasil',
        'borders' => ["ar", "bo", "co", "gf", "gy", "py", "pe", "sr", "uy", "ve"],
    ]);

    $country = Country::whereBorder('bo')->first();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('Brasil');
    expect($country->borders)->toContain('bo');
});

it('should filters countries by borders', function () {
    CountryFactory::new()->create([
        'official_name' => 'Brasil',
        'borders' => ["ar", "bo", "co", "gf", "gy", "py", "pe", "sr", "uy", "ve"],
    ]);

    $country = Country::whereBorders(['gy', 'pe'])->first();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('Brasil');
    expect($country->borders)->toContain('gy');
    expect($country->borders)->toContain('pe');
});

it('should count borders of country', function () {
    CountryFactory::new()->create([
        'official_name' => 'Brasil',
        'borders' => ["ar", "bo", "co", "gf", "gy", "py", "pe", "sr", "uy", "ve"],
    ]);

    $country = Country::first();
    $countryCount = $country->bordersCount();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('Brasil');
    expect($countryCount)->toBe(10);

});

it('should return true if has borders of country', function () {
    CountryFactory::new()->create([
        'official_name' => 'Brasil',
        'borders' => ["ar", "bo", "co", "gf", "gy", "py", "pe", "sr", "uy", "ve"],
    ]);

    $country = Country::first();
    $hasBorders = $country->hasBorders();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('Brasil');
    expect($hasBorders)->toBeTrue();
});

it('should return false if do not has borders of country', function () {
    CountryFactory::new()->create([
        'official_name' => 'Barbados',
        'borders' => [],
    ]);

    $country = Country::first();
    $hasBorders = $country->hasBorders();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('Barbados');
    expect($hasBorders)->toBeFalse();
});

it('should return borders with information of country', function () {
    // First country
    CountryFactory::new()->create([
        'official_name' => 'Brasil',
        'iso_alpha_2' => 'BR',
        'borders' => ["ar", "bo", "co", "gf", "gy", "py", "pe", "sr", "uy", "ve"],
        'en' => [
            'name' => 'Brazil',
        ]
    ]);

    // Second country
    $secondCountry = CountryFactory::new()->create([
        'official_name' => 'Argentine Republic',
        'iso_alpha_2' => 'AR',
        'borders' => ["bo", "br", "cl", "py", "uy"],
        'en' => [
            'name' => 'Argentine',
        ]
    ]);

    // Third country
    CountryFactory::new()->create([
        'official_name' => 'Plurinational State of Bolivia',
        'iso_alpha_2' => 'BO',
        'borders' => ["ar", "br", "cl", "py", "pe"],
        'en' => [
            'name' => 'Bolivia',
        ]
    ]);

    // Fourth country
    CountryFactory::new()->create([
        'official_name' => 'Republic of Colombia',
        'iso_alpha_2' => 'CO',
        'borders' => ["br", "ec", "pa", "pe", "ve"],
        'en' => [
            'name' => 'Colombia',
        ]
    ]);

    // Fifth country
    CountryFactory::new()->create([
        'official_name' => 'French Guiana',
        'iso_alpha_2' => 'GF',
        'borders' => ["br", "sr"],
        'en' => [
            'name' => 'Guiana Francese',
        ]
    ]);

    $country = Country::where('iso_alpha_2', 'BR')->first();
    $borders = $country->bordersWithCountries();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('Brasil');
    expect($borders)->toBeArray();
    expect(count($borders))->toBe(4);
    expect($borders[0])->toMatchArray([
        'uid' => $secondCountry->uid,
        'iso_alpha_2' => $secondCountry->iso_alpha_2,
        'iso_alpha_3' => $secondCountry->iso_alpha_3,
        'official_name' => $secondCountry->official_name,
        'name' => $secondCountry->translate('en')->name,
        'locale' => $secondCountry->translate('en')->locale,
    ]);
});

it('should return borders with flag of country', function () {
    // First country
    CountryFactory::new()->create([
        'official_name' => 'Brasil',
        'iso_alpha_2' => 'BR',
        'borders' => ["ar", "bo", "co", "gf", "gy", "py", "pe", "sr", "uy", "ve"],
        'en' => [
            'name' => 'Brazil',
        ]
    ]);

    // Second country
    $secondCountry = CountryFactory::new()->create([
        'official_name' => 'Argentine Republic',
        'iso_alpha_2' => 'AR',
        'borders' => ["bo", "br", "cl", "py", "uy"],
        'en' => [
            'name' => 'Argentine',
        ]
    ]);

    // Third country
    CountryFactory::new()->create([
        'official_name' => 'Plurinational State of Bolivia',
        'iso_alpha_2' => 'BO',
        'borders' => ["ar", "br", "cl", "py", "pe"],
        'en' => [
            'name' => 'Bolivia',
        ]
    ]);

    // Fourth country
    CountryFactory::new()->create([
        'official_name' => 'Republic of Colombia',
        'iso_alpha_2' => 'CO',
        'borders' => ["br", "ec", "pa", "pe", "ve"],
        'en' => [
            'name' => 'Colombia',
        ]
    ]);

    // Fifth country
    CountryFactory::new()->create([
        'official_name' => 'French Guiana',
        'iso_alpha_2' => 'GF',
        'borders' => ["br", "sr"],
        'en' => [
            'name' => 'Guiana Francese',
        ]
    ]);

    $country = Country::where('iso_alpha_2', 'BR')->first();
    $borders = $country->bordersWithFlags();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('Brasil');
    expect($borders)->toBeArray();
    expect(count($borders))->toBe(4);
    expect($borders[0])->toMatchArray([
        'uid' => $secondCountry->uid,
        'iso_alpha_2' => $secondCountry->iso_alpha_2,
        'iso_alpha_3' => $secondCountry->iso_alpha_3,
        'official_name' => $secondCountry->official_name,
        'name' => $secondCountry->translate('en')->name,
        'locale' => $secondCountry->translate('en')->locale,
        'flag_emoji' => $secondCountry->flag_emoji['img'],
    ]);
});
