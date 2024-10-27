<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Database\Factories\CountryRegionFactory;
use Lwwcas\LaravelCountries\Models\Country;
use Lwwcas\LaravelCountries\Models\CountryRegion;

it('should has a countries relationship', function () {
    $region = CountryRegionFactory::new()->create();
    CountryFactory::new()->count(5)->create(['lc_region_id' => $region->id]);

    $country = Country::inRandomOrder()->first();

    expect($region->countries()->first())->toBeInstanceOf(Country::class);
    expect($country->lc_region_id)->toBe($region->id);
});

it('should filters region by icao', function () {
    CountryRegionFactory::new()->create([
        'icao' => 'AFI'
    ]);
    CountryRegionFactory::new()->count(10)->create();

    $region = CountryRegion::WhereICAO('AFI')->first();

    expect($region)->toBeInstanceOf(CountryRegion::class);
    expect($region->icao)->toEqual('AFI');
});

it('should filters region by iucn', function () {
    CountryRegionFactory::new()->create([
        'iucn' => 'Oceania'
    ]);
    CountryRegionFactory::new()->count(10)->create();

    $region = CountryRegion::whereIUCN('Oceania')->first();

    expect($region)->toBeInstanceOf(CountryRegion::class);
    expect($region->iucn)->toEqual('Oceania');
});

it('should filters region by tdwg', function () {
    CountryRegionFactory::new()->create([
        'tdwg' => 'OCN'
    ]);
    CountryRegionFactory::new()->count(10)->create();

    $region = CountryRegion::whereTDWG('OCN')->first();

    expect($region)->toBeInstanceOf(CountryRegion::class);
    expect($region->tdwg)->toEqual('OCN');
});
