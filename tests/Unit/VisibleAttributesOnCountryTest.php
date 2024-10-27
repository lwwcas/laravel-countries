<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Models\Country;

it('should can get visible status on true', function () {
    CountryFactory::new()->create([
        'is_visible' => true,
    ]);

    $region = Country::first();

    expect($region->is_visible)->toBeTrue();
    expect($region)->toBeInstanceOf(Country::class);
});

it('should can get visible status on false', function () {
    CountryFactory::new()->create([
        'is_visible' => false,
    ]);

    $region = Country::withNotVisible()->first();

    expect($region->is_visible)->toBeFalse();
    expect($region)->toBeInstanceOf(Country::class);
});

it('should can get return visible status is true', function () {
    CountryFactory::new()->create([
        'id' => 1,
        'is_visible' => true,
    ]);

    $region = Country::find(1)->first();
    $isVisible = $region->isVisible();

    expect($isVisible)->toBeTrue();
    expect($region->is_visible)->toBeTrue();
    expect($region)->toBeInstanceOf(Country::class);
});

it('should can get return visible status is false', function () {
    CountryFactory::new()->create([
        'is_visible' => false,
    ]);

    $region = Country::withNotVisible()->first();

    $isVisible = $region->isVisible();

    expect($isVisible)->toBeFalse();
    expect($region->is_visible)->toBeFalse();
    expect($region)->toBeInstanceOf(Country::class);
});

it('should can get return hidden status is true', function () {
    CountryFactory::new()->create([
        'id' => 1,
        'is_visible' => true,
    ]);

    $region = Country::find(1)->first();
    $isHidden = $region->isHidden();

    expect($isHidden)->toBeFalse();
    expect($region->is_visible)->toBeTrue();
    expect($region)->toBeInstanceOf(Country::class);
});

it('should can get return hidden status is false', function () {
    CountryFactory::new()->create([
        'is_visible' => false,
    ]);

    $region = Country::withNotVisible()->first();

    $isHidden = $region->isHidden();

    expect($isHidden)->toBeTrue();
    expect($region->is_visible)->toBeFalse();
    expect($region)->toBeInstanceOf(Country::class);
});

it('should can set visible status to true', function () {
    CountryFactory::new()->create([
        'is_visible' => false,
    ]);

    $region = Country::withNotVisible()->first();

    expect($region->is_visible)->toBeFalse();

    $region->setVisibleTrue();

    expect($region->is_visible)->toBeTrue();
    expect($region)->toBeInstanceOf(Country::class);

    $region = Country::withNotVisible()->first();
    expect($region->is_visible)->toBeTrue();
    expect($region)->toBeInstanceOf(Country::class);
});

it('should can set visible status to true with alternative method', function () {
    CountryFactory::new()->create([
        'is_visible' => false,
    ]);

    $region = Country::withNotVisible()->first();

    expect($region->is_visible)->toBeFalse();

    $region->setModelVisible();

    expect($region->is_visible)->toBeTrue();
    expect($region)->toBeInstanceOf(Country::class);

    $region = Country::withNotVisible()->first();
    expect($region->is_visible)->toBeTrue();
    expect($region)->toBeInstanceOf(Country::class);
});

it('should can set visible status to false', function () {
    CountryFactory::new()->create([
        'is_visible' => true,
    ]);

    $region = Country::withNotVisible()->first();

    expect($region->is_visible)->toBeTrue();

    $region->setVisibleFalse();

    expect($region->is_visible)->toBeFalse();
    expect($region)->toBeInstanceOf(Country::class);

    $region = Country::withNotVisible()->first();
    expect($region->is_visible)->toBeFalse();
    expect($region)->toBeInstanceOf(Country::class);
});

it('should can set visible status to false with alternative method', function () {
    CountryFactory::new()->create([
        'is_visible' => true,
    ]);

    $region = Country::withNotVisible()->first();

    expect($region->is_visible)->toBeTrue();

    $region->setModelHidden();

    expect($region->is_visible)->toBeFalse();
    expect($region)->toBeInstanceOf(Country::class);

    $region = Country::withNotVisible()->first();
    expect($region->is_visible)->toBeFalse();
    expect($region)->toBeInstanceOf(Country::class);
});
