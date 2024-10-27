<?php

use Illuminate\Support\Collection;
use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Facades\FlagEmoji;
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

it('should return methods returning expected results', function ($method, $keyType, $valueType, $keyName, $valueName) {
    foreach (range(1, 30) as $item) {
        CountryFactory::new()->create([
            'en' => [
                'name' => fake()->country() . ' ' . rand(3, 9999),
                ]
            ]);
        }

    $list = Country::getList()->{$method}();

    expect($list)->toBeInstanceOf(Collection::class);
    expect($list)->not->toBeEmpty();
    expect($list->keys()->first())->{$keyType}();
    expect($list->first())->{$valueType}();
})->with([
    ['method' => 'idAndUid', 'keyType' => 'toBeInt', 'valueType' => 'toBeString', 'keyName' => 'id', 'valueName' => 'uid'],
    ['method' => 'idAndName', 'keyType' => 'toBeInt', 'valueType' => 'toBeString', 'keyName' => 'id', 'valueName' => 'name'],
    ['method' => 'idAndOfficialName', 'keyType' => 'toBeInt', 'valueType' => 'toBeString', 'keyName' => 'id', 'valueName' => 'official_name'],
    ['method' => 'idAndAlpha2', 'keyType' => 'toBeInt', 'valueType' => 'toBeString', 'keyName' => 'id', 'valueName' => 'alpha_2'],
    ['method' => 'idAndAlpha3', 'keyType' => 'toBeInt', 'valueType' => 'toBeString', 'keyName' => 'id', 'valueName' => 'alpha_3'],

    ['method' => 'uidAndName', 'keyType' => 'toBeString', 'valueType' => 'toBeString', 'keyName' => 'uid', 'valueName' => 'name'],
    ['method' => 'uidAndOfficialName', 'keyType' => 'toBeString', 'valueType' => 'toBeString', 'keyName' => 'uid', 'valueName' => 'official_name'],
    ['method' => 'uidAndAlpha2', 'keyType' => 'toBeString', 'valueType' => 'toBeString', 'keyName' => 'uid', 'valueName' => 'alpha_2'],
    ['method' => 'uidAndAlpha3', 'keyType' => 'toBeString', 'valueType' => 'toBeString', 'keyName' => 'uid', 'valueName' => 'alpha_3'],

    ['method' => 'nameAndOfficialName', 'keyType' => 'toBeString', 'valueType' => 'toBeString', 'keyName' => 'name', 'valueName' => 'official_name'],
    ['method' => 'nameAndAlpha2', 'keyType' => 'toBeString', 'valueType' => 'toBeString', 'keyName' => 'name', 'valueName' => 'alpha_2'],
    ['method' => 'nameAndAlpha3', 'keyType' => 'toBeString', 'valueType' => 'toBeString', 'keyName' => 'name', 'valueName' => 'alpha_3'],

    ['method' => 'officialNameAndAlpha2', 'keyType' => 'toBeString', 'valueType' => 'toBeString', 'keyName' => 'official_name', 'valueName' => 'alpha_2'],
    ['method' => 'officialNameAndAlpha3', 'keyType' => 'toBeString', 'valueType' => 'toBeString', 'keyName' => 'official_name', 'valueName' => 'alpha_3'],

    ['method' => 'alpha2AndAlpha3', 'keyType' => 'toBeString', 'valueType' => 'toBeString', 'keyName' => 'alpha_2', 'valueName' => 'alpha_3'],
]);

it('should return emoji methods returning expected results', function ($method, $keyType) {
    foreach (range(1, 30) as $item) {
        CountryFactory::new()->create([
            'en' => [
                'name' => fake()->country() . ' ' . rand(3, 9999),
            ]
        ]);
    }

    $list = Country::getList()->alpha3AndEmoji();
    $list = Country::getList()->{$method}();

    expect($list)->not->toBeEmpty();
    expect($list->keys()->first())->{$keyType}();
    expect($list->first())->toBeInstanceOf(FlagEmoji::class);
})->with([
    ['method' => 'idAndEmoji', 'keyType' => 'toBeInt'],
    ['method' => 'uidAndEmoji', 'keyType' => 'toBeString'],
    ['method' => 'nameAndEmoji', 'keyType' => 'toBeString'],
    ['method' => 'officialNameAndEmoji', 'keyType' => 'toBeString'],
    ['method' => 'alpha2AndEmoji', 'keyType' => 'toBeString'],
    ['method' => 'alpha3AndEmoji', 'keyType' => 'toBeString'],
]);
