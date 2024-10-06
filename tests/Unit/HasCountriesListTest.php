<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Models\Country;

it('should return a list of countries with name and slugs efficiently', function () {
    foreach (range(1, 30) as $item) {
        CountryFactory::new()->create([
            'en' => [
                'name' => fake()->country() . ' ' . rand(3, 9999),
            ]
        ]);
    }

    $counties = Country::getList()->withNamesSlugsAndFlags()->get();

    expect($counties)->each->toBeInstanceOf(Country::class);
    expect($counties->count())->toBe(30);
    expect($counties->first())->toHaveKey('iso_alpha_2');
    expect($counties->first())->toHaveKey('iso_alpha_3');
});

it('should return a list of countries with name and slugs and flags efficiently', function () {
    foreach (range(1, 30) as $item) {
        CountryFactory::new()->create([
            'en' => [
                'name' => fake()->country() . ' ' . rand(3, 9999),
            ]
        ]);
    }

    $counties = Country::getList()->withNamesSlugsAndFlags()->get();
    $emoji = $counties->first()->flag_emoji;

    expect($counties)->each->toBeInstanceOf(Country::class);
    expect($counties->first())->toHaveKey('iso_alpha_2');
    expect($counties->first())->toHaveKey('iso_alpha_3');
    expect($counties->first())->toHaveKey('flag_emoji');
    expect($counties->count())->toBe(30);
    expect($emoji)->toBeArray();
    expect($emoji)->toHaveKey('img');

});
