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
        'slug' => 'brazil-slug',
        'locale' => 'en',
    ]);

    CountryFactory::new()->count(5)->create();

    $country = Country::whereSlug('brazil-slug')->first();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->slug)->toEqual('brazil-slug');
    expect($country->slug)->toBeString();
});

it('should can filters countries by Slug on specific locale', function () {
    $country = CountryFactory::new()->create([
        'official_name' => 'Brasil',
    ]);

    CountryTranslationFactory::new()->create([
        'lc_country_id' => $country->id,
        'name' => 'Brazil EN',
        'slug' => 'brazil-slug',
        'locale' => 'en',
    ]);

    CountryTranslationFactory::new()->create([
        'lc_country_id' => $country->id,
        'name' => 'Brazil IT',
        'slug' => 'brazil-slug-it',
        'locale' => 'it',
    ]);

    App::setLocale('en');
    $country = Country::whereSlug('brazil-slug')->first();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->slug)->toBeString();
    expect($country->slug)->toEqual('brazil-slug');

    App::setLocale('it');
    $country = Country::whereSlug('brazil-slug')->first();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->slug)->toBeString();
    expect($country->slug)->toEqual('brazil-slug-it');

});

it('should can filters regions by Slug', function () {
    CountryRegionTranslationFactory::new()->create([
        'name' => 'Europe',
        'slug' => 'europa-slug',
        'locale' => 'en',
    ]);

    CountryRegionFactory::new()->count(5)->create();

    $region = CountryRegion::whereSlug('europa-slug')->first();

    expect($region)->toBeInstanceOf(CountryRegion::class);
    expect($region->slug)->toEqual('europa-slug');
    expect($region->slug)->toBeString();
});

it('should can filters regions by Slug on specific locale', function () {
    $region = CountryFactory::new()->create();

    CountryRegionTranslationFactory::new()->create([
        'lc_region_id' => $region->id,
        'name' => 'Europe EN',
        'slug' => 'europa-slug',
        'locale' => 'en',
    ]);

    CountryRegionTranslationFactory::new()->create([
        'lc_region_id' => $region->id,
        'name' => 'Europe IT',
        'slug' => 'europa-slug-it',
        'locale' => 'it',
    ]);

    App::setLocale('en');
    $region = CountryRegion::whereSlug('europa-slug')->first();

    expect($region)->toBeInstanceOf(CountryRegion::class);
    expect($region->slug)->toBeString();
    expect($region->slug)->toEqual('europa-slug');

    App::setLocale('it');
    $region = CountryRegion::whereSlug('europa-slug')->first();

    expect($region)->toBeInstanceOf(CountryRegion::class);
    expect($region->slug)->toBeString();
    expect($region->slug)->toEqual('europa-slug-it');
});
