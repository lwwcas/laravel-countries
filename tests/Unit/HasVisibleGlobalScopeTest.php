<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Database\Factories\CountryRegionFactory;
use Lwwcas\LaravelCountries\Models\Country;
use Lwwcas\LaravelCountries\Models\CountryRegion;

it('should apply the visible global scope on Region Model', function () {
    CountryRegionFactory::new()->count(5)->create([
        'is_visible' => false,
    ]);
    CountryRegionFactory::new()->count(10)->create([
        'is_visible' => true,
    ]);

    $regions = CountryRegion::all();

    expect($regions)->each->toBeInstanceOf(CountryRegion::class);
    expect($regions->count())->toEqual(10);
});

it('should remove the visible global scope on Region Model', function () {
    CountryRegionFactory::new()->count(5)->create([
        'is_visible' => false,
    ]);
    CountryRegionFactory::new()->count(10)->create([
        'is_visible' => true,
    ]);

    $regions = CountryRegion::withNotVisible()->get();
    $hiddenRegions = CountryRegion::withNotVisible()->where('visible', false)->get();

    expect($regions->count())->toEqual(15);
    expect($regions)->each->toBeInstanceOf(CountryRegion::class);

    expect($hiddenRegions->count())->toEqual(5);
    expect($hiddenRegions)->each->toBeInstanceOf(CountryRegion::class);
});

it('should apply the visible global scope on Country Model', function () {
    CountryFactory::new()->count(5)->create([
        'is_visible' => false,
    ]);
    CountryFactory::new()->count(10)->create([
        'is_visible' => true,
    ]);

    $country = Country::all();

    expect($country)->each->toBeInstanceOf(Country::class);
    expect($country->count())->toEqual(10);
});

it('should remove the visible global scope on Country Model', function () {
    CountryFactory::new()->count(5)->create([
        'is_visible' => false,
    ]);
    CountryFactory::new()->count(10)->create([
        'is_visible' => true,
    ]);

    $countries = Country::withNotVisible()->get();
    $hiddenCountries = Country::withNotVisible()->where('visible', false)->get();

    expect($countries->count())->toEqual(15);
    expect($countries)->each->toBeInstanceOf(Country::class);

    expect($hiddenCountries->count())->toEqual(5);
    expect($hiddenCountries)->each->toBeInstanceOf(Country::class);
});
