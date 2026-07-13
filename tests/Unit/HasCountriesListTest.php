<?php

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Facades\FlagEmoji;
use Lwwcas\LaravelCountries\Models\Country;

const COUNTRY_LIST_COUNT = 15;

function seedCountriesForList(int $count = COUNTRY_LIST_COUNT): void
{
    foreach (range(1, $count) as $item) {
        CountryFactory::new()->create([
            'en' => [
                'name' => fake()->country() . ' ' . rand(3, 9999),
            ],
        ]);
    }
}

it('returns all countries from list query builder methods', function (string $method) {
    seedCountriesForList();

    $result = Country::getList()->{$method}();

    expect($result)->toBeInstanceOf(Builder::class);
    expect($result->get())->toHaveCount(COUNTRY_LIST_COUNT);
})->with([
    'withNamesAndSlugs',
    'withNamesSlugsAndFlags',
]);

it('returns all countries from only list methods', function (string $method) {
    seedCountriesForList();

    $result = Country::getList()->{$method}();

    expect($result)->toBeInstanceOf(Collection::class);
    expect($result)->toHaveCount(COUNTRY_LIST_COUNT);
})->with([
    'onlyId',
    'onlyUid',
    'onlyName',
    'onlyOfficialName',
    'onlyIso',
    'onlyAlpha2',
    'onlyAlpha3',
    'onlyEmojiInImg',
    'onlyEmojiInUtf8',
    'onlyEmojiInUtf16',
    'onlyEmojiInHtml',
    'onlyEmojiInCss',
    'onlyEmojiInHex',
    'onlyEmojiInUCode',
    'onlyEmojiInDecimal',
    'onlyEmojiInShortCode',
]);

it('returns all countries from only emoji list methods', function (string $method) {
    seedCountriesForList();

    $result = Country::getList()->{$method}();

    expect($result)->toBeInstanceOf(FlagEmoji::class);
    expect($result->get())->toHaveCount(COUNTRY_LIST_COUNT);
})->with([
    'onlyFlag',
    'onlyEmoji',
]);

it('returns all countries from pair list methods', function (string $method) {
    seedCountriesForList();

    $result = Country::getList()->{$method}();

    expect($result)->toBeInstanceOf(Collection::class);
    expect($result)->toHaveCount(COUNTRY_LIST_COUNT);
})->with([
    'idAndOfficialName',
    'idAndUid',
    'idAndName',
    'idAndAlpha2',
    'idAndAlpha3',
    'uidAndName',
    'uidAndOfficialName',
    'uidAndAlpha2',
    'uidAndAlpha3',
    'nameAndOfficialName',
    'nameAndAlpha2',
    'nameAndAlpha3',
    'officialNameAndAlpha2',
    'officialNameAndAlpha3',
    'alpha2AndId',
    'alpha2AndUid',
    'alpha2AndName',
    'alpha2AndOfficialName',
    'alpha2AndAlpha3',
    'alpha3AndId',
    'alpha3AndUid',
    'alpha3AndName',
    'alpha3AndOfficialName',
]);

it('returns all countries from pair emoji list methods', function (string $method) {
    seedCountriesForList();

    $result = Country::getList()->{$method}();

    expect($result)->toBeInstanceOf(FlagEmoji::class);
    expect($result->get())->toHaveCount(COUNTRY_LIST_COUNT);
})->with([
    'idAndEmoji',
    'uidAndEmoji',
    'nameAndEmoji',
    'officialNameAndEmoji',
    'alpha2AndEmoji',
    'alpha3AndEmoji',
]);

it('should return methods returning expected results', function ($method, $keyType, $valueType) {
    seedCountriesForList(COUNTRY_LIST_COUNT);

    $list = Country::getList()->{$method}();

    expect($list)->toBeInstanceOf(Collection::class);
    expect($list)->toHaveCount(COUNTRY_LIST_COUNT);
    expect($list->keys()->first())->{$keyType}();
    expect($list->first())->{$valueType}();
})->with([
    ['method' => 'idAndUid', 'keyType' => 'toBeInt', 'valueType' => 'toBeString'],
    ['method' => 'idAndName', 'keyType' => 'toBeInt', 'valueType' => 'toBeString'],
    ['method' => 'idAndOfficialName', 'keyType' => 'toBeInt', 'valueType' => 'toBeString'],
    ['method' => 'idAndAlpha2', 'keyType' => 'toBeInt', 'valueType' => 'toBeString'],
    ['method' => 'idAndAlpha3', 'keyType' => 'toBeInt', 'valueType' => 'toBeString'],
    ['method' => 'uidAndName', 'keyType' => 'toBeString', 'valueType' => 'toBeString'],
    ['method' => 'uidAndOfficialName', 'keyType' => 'toBeString', 'valueType' => 'toBeString'],
    ['method' => 'uidAndAlpha2', 'keyType' => 'toBeString', 'valueType' => 'toBeString'],
    ['method' => 'uidAndAlpha3', 'keyType' => 'toBeString', 'valueType' => 'toBeString'],
    ['method' => 'nameAndOfficialName', 'keyType' => 'toBeString', 'valueType' => 'toBeString'],
    ['method' => 'nameAndAlpha2', 'keyType' => 'toBeString', 'valueType' => 'toBeString'],
    ['method' => 'nameAndAlpha3', 'keyType' => 'toBeString', 'valueType' => 'toBeString'],
    ['method' => 'officialNameAndAlpha2', 'keyType' => 'toBeString', 'valueType' => 'toBeString'],
    ['method' => 'officialNameAndAlpha3', 'keyType' => 'toBeString', 'valueType' => 'toBeString'],
    ['method' => 'alpha2AndAlpha3', 'keyType' => 'toBeString', 'valueType' => 'toBeString'],
]);

it('should return emoji methods returning expected results', function ($method, $keyType) {
    seedCountriesForList(COUNTRY_LIST_COUNT);

    $list = Country::getList()->{$method}();

    expect($list)->toBeInstanceOf(FlagEmoji::class);
    expect($list->get())->toHaveCount(COUNTRY_LIST_COUNT);
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
