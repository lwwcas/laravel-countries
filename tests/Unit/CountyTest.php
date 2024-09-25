<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Database\Factories\CountryRegionFactory;
use Lwwcas\LaravelCountries\Database\Factories\CountryTranslationFactory;
use Lwwcas\LaravelCountries\Models\Country;
use Lwwcas\LaravelCountries\Models\CountryRegion;

it('retrieves a query builder without applying the visible global scope', function () {
    CountryFactory::new()->count(3)->create([
        'visible' => false,
    ]);
    CountryFactory::new()->count(5)->create([
        'visible' => true,
    ]);

    $countries = Country::withNotVisible()->get();
    $hiddenCountries = Country::withNotVisible()->where('visible', false)->get();

    expect($countries->count())->toEqual(8);
    expect($countries)->each->toBeInstanceOf(Country::class);
    expect($hiddenCountries->count())->toEqual(3);
    expect($hiddenCountries)->each->toBeInstanceOf(Country::class);
});

it('retrieves a query builder applying the visible global scope', function () {
    CountryFactory::new()->count(5)->create([
        'visible' => false,
    ]);
    CountryFactory::new()->count(10)->create([
        'visible' => true,
    ]);

    $countries = Country::get();
    $hiddenCountries = Country::withNotVisible()->where('visible', false)->get();

    expect($countries->count())->toEqual(10);
    expect($countries)->each->toBeInstanceOf(Country::class);
    expect($hiddenCountries->count())->toEqual(5);
    expect($hiddenCountries)->each->toBeInstanceOf(Country::class);
});

it('retrieves a query builder without applying the translation global scope', function () {
    CountryFactory::new()->count(5)->create();
    CountryTranslationFactory::new()->count(7)->create([
        'locale' => 'en',
    ]);

    $queryWithoutTranslationScope = Country::withNotTranslation()->get();

    $countriesWithoutTranslation = $queryWithoutTranslationScope->filter(function ($country) {
        return $country->relationLoaded('translations');
    });

    expect($queryWithoutTranslationScope)->toBeInstanceOf(Illuminate\Database\Eloquent\Collection::class);
    expect($countriesWithoutTranslation->count())->toBe(0);
});

it('retrieves a query builder applying the translation global scope', function () {
    CountryFactory::new()->count(5)->create();
    CountryTranslationFactory::new()->count(7)->create([
        'locale' => 'en',
    ]);

    $queryWithoutTranslationScope = Country::all();

    $countriesWithoutTranslation = $queryWithoutTranslationScope->filter(function ($country) {
        return $country->relationLoaded('translations');
    });

    expect($queryWithoutTranslationScope)->toBeInstanceOf(Illuminate\Database\Eloquent\Collection::class);
    expect($countriesWithoutTranslation->count())->toBe(12);
});

it('has a region relationship', function () {
    $region = CountryRegionFactory::new()->create();
    CountryFactory::new()->count(5)->create(['lc_region_id' => $region->id]);

    $country = Country::inRandomOrder()->first();

    expect($country->region()->first())->toBeInstanceOf(CountryRegion::class);
    expect($country->region()->first()->id)->toBe($region->id);
});

it('has a region geographical', function () {
    //TODO
});

it('filters countries by UUID code', function () {
    $uuid = '1df9736d-b87f-49ae-9477-0ff7141f1a18';

    CountryFactory::new()->count(11)->create();
    $country = Country::inRandomOrder()->first();
    $country->uuid = $uuid;
    $country->save();

    $country = Country::whereUuid($uuid)->first();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->uuid)->toBeString();
    expect($country->uuid)->toEqual($uuid);
    expect($country->uuid)->toBeUuid();
});

it('filters countries by Slug', function () {
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

it('filters countries by Name', function () {
    CountryTranslationFactory::new()->create([
        'name' => 'Brazil',
        'locale' => 'en',
    ]);
    CountryFactory::new()->count(5)->create();

    $country = Country::whereName('Brazil')->first();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->name)->toEqual('Brazil');
    expect($country->name)->toBeString();
});

it('filters countries by Oficial Name', function () {
    $oficialName = 'United Kingdom';
    CountryFactory::new()->create([
        'official_name' => $oficialName,
    ]);
    CountryFactory::new()->count(5)->create();

    $country = Country::whereOficialName($oficialName)->first();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual($oficialName);
    expect($country->official_name)->toBeString();
});

it('filters countries by ISO code', function () {
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

it('filters countries by iso_alpha_2 code', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'iso_alpha_2' => 'US',
        'iso_alpha_3' => 'KAN',
        'iso_numeric' => '894',
    ]);

    CountryFactory::new()->count(10)->create();

    $country = Country::whereIsoAlpha2('US')->first();
    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->iso_alpha_2)->toEqual('US');
});

it('filters countries by iso_alpha_3 code', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'iso_alpha_2' => 'US',
        'iso_alpha_3' => 'KAN',
        'iso_numeric' => '894',
    ]);

    CountryFactory::new()->count(10)->create();

    $country = Country::whereIsoAlpha3('KAN')->first();
    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->iso_alpha_3)->toEqual('KAN');
});

it('filters countries by iso_numeric code', function () {
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

it('filters countries by geoname_id', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'geoname_id' => '4031074'
    ]);
    CountryFactory::new()->count(10)->create();

    $country = Country::whereGeoname('4031074')->first();
    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->geoname_id)->toEqual('4031074');

    $country = Country::whereGeoname(4031074)->first();
    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->geoname_id)->toEqual('4031074');
});

it('filters countries by wmo', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'wmo' => 'CD'
    ]);
    CountryFactory::new()->count(10)->create();

    $country = Country::whereWmo('CD')->first();
    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->wmo)->toEqual('CD');
});

it('filters countries by wmo code', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'wmo' => 'CD'
    ]);
    CountryFactory::new()->count(10)->create();

    $country = Country::whereWmoCode('CD')->first();
    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->wmo)->toEqual('CD');
});

it('filters countries by World Meteorological Organization Code', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'wmo' => 'CD'
    ]);
    CountryFactory::new()->count(10)->create();

    $country = Country::whereWorldMeteorologicalOrganizationCode('CD')->first();
    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->wmo)->toEqual('CD');
});

it('filters countries by international phone code', function () {
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

it('filters countries by Domain TLD', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'tld' => json_encode(['.com', '.net']),
    ]);
    CountryFactory::new()->count(10)->create();

    $country = Country::whereDomain('.com')->whereOficialName('United States of America')->first();

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->official_name)->toEqual('United States of America');
    expect($country->tld)->toContain('.com');
});

it('filters countries and excludes those without the specified domain in their TLD', function () {
    CountryFactory::new()->create([
        'official_name' => 'United States of America',
        'tld' => json_encode(['.com', '.net']),
    ]);
    CountryFactory::new()->count(10)->create();

    $country = Country::whereDomain('.0101')->whereOficialName('United States of America')->first();

    expect($country)->not()->toBeInstanceOf(Country::class);
    expect($country)->toBeNull();
});
