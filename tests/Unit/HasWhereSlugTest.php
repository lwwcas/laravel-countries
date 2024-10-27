<?php

use Illuminate\Support\Facades\App;
use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Database\Factories\CountryRegionFactory;
use Lwwcas\LaravelCountries\Database\Factories\CountryRegionTranslationFactory;
use Lwwcas\LaravelCountries\Database\Factories\CountryTranslationFactory;
use Lwwcas\LaravelCountries\Models\Country;
use Lwwcas\LaravelCountries\Models\CountryRegion;

it('should can filters countries by Slug', function () {
    CountryTranslationFactory::new()->create([
        'name' => 'Brazil',
        'slug' => 'brazil',
        'locale' => 'en',
    ]);

    CountryFactory::new()->count(5)->create();

    $country = Country::whereSlug('brazil')->first();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->slug)->toEqual('brazil');
    expect($country->slug)->toBeString();
});

it('should can filters countries by Slug on specific locale', function () {
    $country = CountryFactory::new()->create([
        'official_name' => 'Brasil',
    ]);

    CountryTranslationFactory::new()->create([
        'lc_country_id' => $country->id,
        'name' => 'Brazil EN',
        'slug' => 'brazil-en',
        'locale' => 'en',
    ]);

    CountryTranslationFactory::new()->create([
        'lc_country_id' => $country->id,
        'name' => 'Brazil IT',
        'slug' => 'brazil-it',
        'locale' => 'it',
    ]);

    App::setLocale('en');
    $country = Country::whereSlug('brazil-en')->first();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->slug)->toBeString();
    expect($country->slug)->toEqual('brazil-en');

    App::setLocale('it');
    $country = Country::whereSlug('brazil-it')->first();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->slug)->toBeString();
    expect($country->slug)->toEqual('brazil-it');

});

it('should can filters regions by Slug', function () {
    CountryRegionTranslationFactory::new()->create([
        'name' => 'Europe',
        'slug' => 'europe',
        'locale' => 'en',
    ]);

    CountryRegionFactory::new()->count(5)->create();

    $region = CountryRegion::whereSlug('europe')->first();

    expect($region)->toBeInstanceOf(CountryRegion::class);
    expect($region->slug)->toEqual('europe');
    expect($region->slug)->toBeString();
});

it('should can filters regions by Slug on specific locale', function () {
    $region = CountryFactory::new()->create();

    CountryRegionTranslationFactory::new()->create([
        'lc_region_id' => $region->id,
        'name' => 'Europe EN',
        'slug' => 'europe-en',
        'locale' => 'en',
    ]);

    CountryRegionTranslationFactory::new()->create([
        'lc_region_id' => $region->id,
        'name' => 'Europe IT',
        'slug' => 'europe-it',
        'locale' => 'it',
    ]);

    App::setLocale('en');
    $region = CountryRegion::whereSlug('europe-en')->first();

    expect($region)->toBeInstanceOf(CountryRegion::class);
    expect($region->slug)->toBeString();
    expect($region->slug)->toEqual('europe-en');

    App::setLocale('it');
    $region = CountryRegion::whereSlug('europe-en')->first();

    expect($region)->toBeInstanceOf(CountryRegion::class);
    expect($region->slug)->toBeString();
    expect($region->slug)->toEqual('europe-it');
});
