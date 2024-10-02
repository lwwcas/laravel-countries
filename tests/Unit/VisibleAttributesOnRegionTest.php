<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryRegionFactory;
use Lwwcas\LaravelCountries\Models\CountryRegion;

it('should can get visible status on true', function () {
    CountryRegionFactory::new()->create([
        'is_visible' => true,
    ]);

    $region = CountryRegion::first();

    expect($region->is_visible)->toBeTrue();
    expect($region)->toBeInstanceOf(CountryRegion::class);
});

it('should can get visible status on false', function () {
    CountryRegionFactory::new()->create([
        'is_visible' => false,
    ]);

    $region = CountryRegion::withNotVisible()->first();

    expect($region->is_visible)->toBeFalse();
    expect($region)->toBeInstanceOf(CountryRegion::class);
});

it('should can get return visible status is true', function () {
    CountryRegionFactory::new()->create([
        'id' => 1,
        'is_visible' => true,
    ]);

    $region = CountryRegion::find(1)->first();
    $isVisible = $region->isVisible();

    expect($isVisible)->toBeTrue();
    expect($region->is_visible)->toBeTrue();
    expect($region)->toBeInstanceOf(CountryRegion::class);
});

it('should can get return visible status is false', function () {
    CountryRegionFactory::new()->create([
        'is_visible' => false,
    ]);

    $region = CountryRegion::withNotVisible()->first();

    $isVisible = $region->isVisible();

    expect($isVisible)->toBeFalse();
    expect($region->is_visible)->toBeFalse();
    expect($region)->toBeInstanceOf(CountryRegion::class);
});

it('should can get return hidden status is true', function () {
    CountryRegionFactory::new()->create([
        'id' => 1,
        'is_visible' => true,
    ]);

    $region = CountryRegion::find(1)->first();
    $isHidden = $region->isHidden();

    expect($isHidden)->toBeFalse();
    expect($region->is_visible)->toBeTrue();
    expect($region)->toBeInstanceOf(CountryRegion::class);
});

it('should can get return hidden status is false', function () {
    CountryRegionFactory::new()->create([
        'is_visible' => false,
    ]);

    $region = CountryRegion::withNotVisible()->first();

    $isHidden = $region->isHidden();

    expect($isHidden)->toBeTrue();
    expect($region->is_visible)->toBeFalse();
    expect($region)->toBeInstanceOf(CountryRegion::class);
});

it('should can set visible status to true', function () {
    CountryRegionFactory::new()->create([
        'is_visible' => false,
    ]);

    $region = CountryRegion::withNotVisible()->first();

    expect($region->is_visible)->toBeFalse();

    $region->setVisibleTrue();

    expect($region->is_visible)->toBeTrue();
    expect($region)->toBeInstanceOf(CountryRegion::class);

    $region = CountryRegion::withNotVisible()->first();
    expect($region->is_visible)->toBeTrue();
    expect($region)->toBeInstanceOf(CountryRegion::class);
});

it('should can set visible status to true with alternative method', function () {
    CountryRegionFactory::new()->create([
        'is_visible' => false,
    ]);

    $region = CountryRegion::withNotVisible()->first();

    expect($region->is_visible)->toBeFalse();

    $region->setModelVisible();

    expect($region->is_visible)->toBeTrue();
    expect($region)->toBeInstanceOf(CountryRegion::class);

    $region = CountryRegion::withNotVisible()->first();
    expect($region->is_visible)->toBeTrue();
    expect($region)->toBeInstanceOf(CountryRegion::class);
});

it('should can set visible status to false', function () {
    CountryRegionFactory::new()->create([
        'is_visible' => true,
    ]);

    $region = CountryRegion::withNotVisible()->first();

    expect($region->is_visible)->toBeTrue();

    $region->setVisibleFalse();

    expect($region->is_visible)->toBeFalse();
    expect($region)->toBeInstanceOf(CountryRegion::class);

    $region = CountryRegion::withNotVisible()->first();
    expect($region->is_visible)->toBeFalse();
    expect($region)->toBeInstanceOf(CountryRegion::class);
});

it('should can set visible status to false with alternative method', function () {
    CountryRegionFactory::new()->create([
        'is_visible' => true,
    ]);

    $region = CountryRegion::withNotVisible()->first();

    expect($region->is_visible)->toBeTrue();

    $region->setModelHidden();

    expect($region->is_visible)->toBeFalse();
    expect($region)->toBeInstanceOf(CountryRegion::class);

    $region = CountryRegion::withNotVisible()->first();
    expect($region->is_visible)->toBeFalse();
    expect($region)->toBeInstanceOf(CountryRegion::class);
});
