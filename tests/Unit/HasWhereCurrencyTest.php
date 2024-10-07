<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Models\Country;

function currencyArray()
{
    return [
        'code' => 'EUR',
        'name' => 'Euro',
        'symbol' => '€',
        'unit' => [
            'main' => 'euro',
            'sub' => 'cent',
            'to_unit' => 100,
        ],
        'coins' => [
            'sub' => [
                '1',
                '2',
                '5',
                '10',
                '20',
                '50',
            ],
            'main' => [
                '1',
                '2',
            ],
        ],
        'banknotes' => [
            '5',
            '10',
            '20',
            '50',
            '100',
            '200',
        ],
    ];
}

it('filters countries by currency', function () {
    $country = CountryFactory::new()->create([
        'currency' => currencyArray(),
    ]);

    $filteredCountries = Country::whereCurrency($country->currency['code'])->get();

    expect($filteredCountries)->toHaveCount(1);
    expect($filteredCountries->first()->id)->toBe($country->id);
    expect($filteredCountries->first()->currency['code'])->toBe($country->currency['code']);
});

it('filters countries by currency code', function () {
    $country = CountryFactory::new()->create([
        'currency' => currencyArray(),
    ]);

    $filteredCountries = Country::whereCurrencyCode($country->currency['code'])->get();

    expect($filteredCountries)->toHaveCount(1);
    expect($filteredCountries->first()->id)->toBe($country->id);
    expect($filteredCountries->first()->currency['code'])->toBe($country->currency['code']);
});

it('filters countries by currencies codes', function () {
    $country = CountryFactory::new()->create([
        'currency' => currencyArray(),
    ]);

    $currency = currencyArray();
    $currency['code'] = 'USA';
    $country2 = CountryFactory::new()->create([
        'currency' => $currency,
    ]);

    $filteredCountries = Country::whereCurrencyCodes(['EUR', 'USA'])->get();

    expect($filteredCountries)->toHaveCount(2);
    expect($filteredCountries->first()->id)->toBe($country->id);
    expect($filteredCountries->first()->currency['code'])->toBe($country->currency['code']);
    expect($filteredCountries->last()->id)->toBe($country2->id);
    expect($filteredCountries->last()->currency['code'])->toBe($country2->currency['code']);

});

it('filters countries by currencies', function () {
    $country = CountryFactory::new()->create([
        'currency' => currencyArray(),
    ]);

    $currency = currencyArray();
    $currency['code'] = 'USA';
    $country2 = CountryFactory::new()->create([
        'currency' => $currency,
    ]);

    $filteredCountries = Country::whereCurrencies(['EUR', 'USA'])->get();

    expect($filteredCountries)->toHaveCount(2);
    expect($filteredCountries->first()->id)->toBe($country->id);
    expect($filteredCountries->first()->currency['code'])->toBe($country->currency['code']);
    expect($filteredCountries->last()->id)->toBe($country2->id);
    expect($filteredCountries->last()->currency['code'])->toBe($country2->currency['code']);
});

it('filters countries by currency name', function () {
    $country = CountryFactory::new()->create([
        'currency' => currencyArray(),
    ]);

    $filteredCountries = Country::whereCurrencyName($country->currency['name'])->get();

    expect($filteredCountries)->toHaveCount(1);
    expect($filteredCountries->first()->id)->toBe($country->id);
    expect($filteredCountries->first()->currency['name'])->toBe($country->currency['name']);
});

it('filters countries by currencies names', function () {
    $country = CountryFactory::new()->create([
        'currency' => currencyArray(),
    ]);

    $currency = currencyArray();
    $currency['name'] = 'Dolar';
    $country2 = CountryFactory::new()->create([
        'currency' => $currency,
    ]);

    $filteredCountries = Country::whereCurrencyNames(['Euro', 'Dolar'])->get();

    expect($filteredCountries)->toHaveCount(2);
    expect($filteredCountries->first()->id)->toBe($country->id);
    expect($filteredCountries->first()->currency['name'])->toBe($country->currency['name']);
    expect($filteredCountries->last()->id)->toBe($country2->id);
    expect($filteredCountries->last()->currency['name'])->toBe($country2->currency['name']);
});

it('should check if country has currency not defined', function ($currency, $actions) {

    $country = CountryFactory::new()->make([
        'currency' => $currency,
    ]);

    foreach ($actions as $action) {
        expect($country->{$action}())->toBeFalse();
    }
})->with([
    [
        'currency' => [],
        'actions' => [
            'hasCurrency',
            'hasCoinsCurrency',
        ],
    ],
    [
        'currency' => null,
        'actions' => [
            'hasCurrency',
            'hasCoinsCurrency',
        ],
    ],
    [
        'currency' => [
            'code' => null,
        ],
        'actions' => [
            'hasCurrency',
        ],
    ],
    [
        'currency' => [
            'code' => '',
        ],
        'actions' => [
            'hasCurrency',
        ],
    ],
    [
        'currency' => [
            'code' => 'EUR',
            'coins' => [],
        ],
        'actions' => [
            'hasCoinsCurrency',
        ],
    ],
    [
        'currency' => [
            'code' => 'EUR',
            'coins' => null,
        ],
        'actions' => [
            'hasCoinsCurrency',
        ],
    ],
    [
        'currency' => [
            'code' => 'EUR',
            'coins' => [
                'main' => [5, 10, 15],
                'sub' => [],
            ],
        ],
        'actions' => [
            'hasSubCoinsCurrency',
        ],
    ],
    [
        'currency' => [
            'code' => 'EUR',
            'coins' => [
                'main' => [1, 2, 3],
                'sub' => null,
            ],
        ],
        'actions' => [
            'hasSubCoinsCurrency',
        ],
    ],
    [
        'currency' => [
            'code' => 'EUR',
            'coins' => [
                'main' => [],
                'sub' => [1, 2, 3],
            ],
        ],
        'actions' => [
            'hasMainCoinsCurrency',
        ],
    ],
    [
        'currency' => [
            'code' => 'EUR',
            'coins' => [
                'main' => null,
                'sub' => [1, 2, 3],
            ],
        ],
        'actions' => [
            'hasMainCoinsCurrency',
        ],
    ],
    [
        'currency' => [
            'code' => 'EUR',
            'banknotes' => [],
        ],
        'actions' => [
            'hasNotesCurrency',
        ],
    ],
    [
        'currency' => [
            'code' => 'EUR',
            'banknotes' => null,
        ],
        'actions' => [
            'hasNotesCurrency',
        ],
    ],
]);

it('should checks if country has currency defined', function () {
    $country = CountryFactory::new()->make([
        'currency' => [
            'code' => 'EUR',
        ],
    ]);

    expect($country->hasCurrency())->toBeTrue();
});

it('should checks if country has coins currency defined', function () {
    $country = CountryFactory::new()->make([
        'currency' => [
            'code' => 'EUR',
            'coins' => [
                'sub' => [1, 2, 3],
            ],
        ],
    ]);

    expect($country->hasCoinsCurrency())->toBeTrue();
});

it('should checks if country has sub coins currency defined', function () {
    $country = CountryFactory::new()->make([
        'currency' => [
            'code' => 'EUR',
            'coins' => [
                'sub' => [1, 2, 3],
            ],
        ],
    ]);

    expect($country->hasSubCoinsCurrency())->toBeTrue();
});

it('should checks if country has main coins currency defined', function () {
    $country = CountryFactory::new()->make([
        'currency' => [
            'code' => 'EUR',
            'coins' => [
                'main' => [1, 2, 3],
            ],
        ],
    ]);

    expect($country->hasMainCoinsCurrency())->toBeTrue();
});

it('should checks if country has main notes currency defined', function () {
    $country = CountryFactory::new()->make([
        'currency' => [
            'code' => 'EUR',
            'banknotes' => [
                2,
                5,
                10,
                20,
                50,
                100
            ],
        ],
    ]);

    expect($country->hasNotesCurrency())->toBeTrue();
});

it('should returns an empty array when the currency is not defined', function () {
    $country = CountryFactory::new()->make([
        'currency' => null,
    ]);

    $currency = $country->getCurrency();

    expect(count($currency))->toBe(3);
    expect($currency)->not()->toBeNull();
    expect($currency)->toBeArray();
    expect($currency)->toHaveKey('name');
    expect($currency)->toHaveKey('code');
    expect($currency)->toHaveKey('symbol');
});

it('should returns an array with name, code, and symbol when the currency is defined', function () {
    $country = CountryFactory::new()->make();

    $currency = $country->getCurrency();

    expect(count($currency))->toBe(3);
    expect($currency)->not()->toBeNull();
    expect($currency)->toBeArray();
    expect($currency)->toHaveKey('name');
    expect($currency)->toHaveKey('code');
    expect($currency)->toHaveKey('symbol');
});

it('should gets currency code', function (array $currency, string|null $result) {
    $country = CountryFactory::new()->make([
        'currency' => $currency,
    ]);

    expect($country->getCurrencyCode())->toEqual($result);
    if ($result != null) {
        expect($country->getCurrencyCode())->toBeString();
    }

})->with([
    ['currency' => ['code' => null], 'result' => null],
    ['currency' => ['code' => 'USA'], 'result' => 'USA'],
    ['currency' => ['code' => 'EUR'], 'result' => 'EUR'],
]);

it('should gets currency name', function (array $currency, string|null $result) {
    $country = CountryFactory::new()->make([
        'currency' => $currency,
    ]);

    expect($country->getCurrencyName())->toEqual($result);
    if ($result != null) {
        expect($country->getCurrencyName())->toBeString();
    }
})->with([
    ['currency' => ['name' => null], 'result' => null],
    ['currency' => ['name' => 'United'], 'result' => 'United'],
    ['currency' => ['name' => 'Europe'], 'result' => 'Europe'],
]);

it('should gets currency symbol', function (array $currency, string|null $result) {
    $country = CountryFactory::new()->make([
        'currency' => $currency,
    ]);

    expect($country->getCurrencySymbol())->toEqual($result);
    if ($result != null) {
        expect($country->getCurrencySymbol())->toBeString();
    }
})->with([
    ['currency' => ['symbol' => null], 'result' => null],
    ['currency' => ['symbol' => 'Rs'], 'result' => 'Rs'],
    ['currency' => ['symbol' => '€'], 'result' => '€'],
]);

it('should gets currency main unit', function (array $currency, string|null $result) {
    $country = CountryFactory::new()->make([
        'currency' => $currency,
    ]);

    expect($country->getCurrencyMainUnit())->toEqual($result);
    if ($result != null) {
        expect($country->getCurrencyMainUnit())->toBeString();
    }
})->with([
    ['currency' => ['unit' => ['main' => null]], 'result' => null],
    ['currency' => ['unit' => ['main' => 'Euro']], 'result' => 'Euro'],
    ['currency' => ['unit' => ['main' => 'Real']], 'result' => 'Real'],
]);

it('should gets currency sub unit', function (array $currency, string|null $result) {
    $country = CountryFactory::new()->make([
        'currency' => $currency,
    ]);

    expect($country->getCurrencySubUnit())->toEqual($result);
    if ($result != null) {
        expect($country->getCurrencySubUnit())->toBeString();
    }
})->with([
    ['currency' => ['unit' => ['sub' => null]], 'result' => null],
    ['currency' => ['unit' => ['sub' => 'Euro']], 'result' => 'Euro'],
    ['currency' => ['unit' => ['sub' => 'Real']], 'result' => 'Real'],
]);

it('should gets currency main to sub unit', function (array $currency, int $result) {
    $country = CountryFactory::new()->make([
        'currency' => $currency,
    ]);

    expect($country->getCurrencyUnitMainToSub())->toEqual($result);
    expect($country->getCurrencyUnitMainToSub())->toBeInt();
})->with([
    ['currency' => ['unit' => ['to_unit' => null]], 'result' => 1],
    ['currency' => ['unit' => ['to_unit' => 1]], 'result' => 1],
    ['currency' => ['unit' => ['to_unit' => 100]], 'result' => 100],
    ['currency' => ['unit' => ['to_unit' => 1000]], 'result' => 1000],
]);

it('should gets currency main coins', function (array $currency, array $result) {
    $country = CountryFactory::new()->make([
        'currency' => $currency,
    ]);

    expect($country->getCurrencyMainCoins())->toEqual($result);
    expect($country->getCurrencyMainCoins())->toBeArray();

})->with([
    ['currency' => ['coins' => ['main' => null]], 'result' => []],
    ['currency' => ['coins' => ['main' => []]], 'result' => []],
    ['currency' => ['coins' => ['main' => [1, 2, 3]]], 'result' => [1, 2, 3]],
    ['currency' => ['coins' => ['main' => [1, 2, 3, 5, 6]]], 'result' => [1, 2, 3, 5, 6]],
]);

it('should gets currency sub coins', function (array $currency, array $result) {
    $country = CountryFactory::new()->make([
        'currency' => $currency,
    ]);

    expect($country->getCurrencySubCoins())->toEqual($result);
    expect($country->getCurrencySubCoins())->toBeArray();

})->with([
    ['currency' => ['coins' => ['sub' => null]], 'result' => []],
    ['currency' => ['coins' => ['sub' => []]], 'result' => []],
    ['currency' => ['coins' => ['sub' => [1, 2, 3]]], 'result' => [1, 2, 3]],
    ['currency' => ['coins' => ['sub' => [1, 2, 3, 5, 6]]], 'result' => [1, 2, 3, 5, 6]],
]);

it('should gets currency notes', function (array $currency, array $result) {
    $country = CountryFactory::new()->make([
        'currency' => $currency,
    ]);

    expect($country->getCurrencyNotes())->toEqual($result);
    expect($country->getCurrencyNotes())->toBeArray();

})->with([
    ['currency' => ['banknotes' => null], 'result' => []],
    ['currency' => ['banknotes' => []], 'result' => []],
    ['currency' => ['banknotes' => [1, 2, 3]], 'result' => [1, 2, 3]],
    ['currency' => ['banknotes' => [1, 2, 3, 5, 6]], 'result' => [1, 2, 3, 5, 6]],
]);

it('should returns currency data', function () {
    $country = CountryFactory::new()->make();

    $currencyData = $country->getCurrencyData();

    expect($currencyData)->toHaveKeys(['name', 'code', 'symbol', 'unit', 'banknotes', 'coins']);
    expect($currencyData['unit'])->toHaveKeys(['main', 'sub', 'to_unit']);
    expect($currencyData['coins'])->toHaveKeys(['main', 'sub']);
});
