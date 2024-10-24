# Currency

Below, you'll find a list of methods available in the Country model related to currency, along with friendly descriptions of what each method does.

## Overview

The `currency` array provides comprehensive information about a country's currency, including its name, code, symbol, units, banknotes, and coins. Below is a detailed breakdown of the `currency` array structure:

| Key           | Description                                            | Example                                |
|---------------|--------------------------------------------------------|----------------------------------------|
| **name**      | The name of the currency                               | `'Euro'`                               |
| **code**      | The ISO 4217 currency code                             | `'EUR'`                                |
| **symbol**    | The symbol used to represent the currency              | `'€'`                                  |
| **unit**      | An array containing details about currency units       | See [Unit Structure](#unit-structure)  |
| **banknotes** | An array of banknote denominations                     | `[5, 10, 20, 50, 100, 200, 500]`       |
| **coins**     | An array containing details about coins                | See [Coins Structure](#coins-structure)|

### Unit Structure

The `unit` array includes information about the main and sub-units of the currency:

| Key         | Description                                          | Example   |
|-------------|------------------------------------------------------|-----------|
| **main**    | The name of the main unit of the currency            | `'euro'`  |
| **sub**     | The name of the sub-unit of the currency             | `'cent'`  |
| **to_unit** | Number of sub-units that make up one main unit       | `100`     |

### Coins Structure

The `coins` array contains arrays for both main coins and sub-coins:

| Key        | Description                               | Example                  |
|------------|-------------------------------------------|--------------------------|
| **main**   | An array of main coin denominations       | `[1, 2]`                 |
| **sub**    | An array of sub-coin denominations        | `[1, 2, 5, 10, 20, 50]`  |


### Example Data

```php
[
    'name' => 'Euro',
    'code' => 'EUR',
    'symbol' => '€',
    'unit' => [
        'main' => 'euro',
        'sub' => 'cent',
        'to_unit' => 100,
    ],
    'banknotes' => [5, 10, 20, 50, 100, 200, 500],
    'coins' => [
        'main' => [1, 2],
        'sub' => [1, 2, 5, 10, 20, 50],
    ],
]

```

## Get Currency

Retrieves an array containing the currency's name, code, and symbol of the country.
If any of these are not defined, they will return null.

```php
->getCurrency()
```

::: code-group

```php {3} [Input]
$country = Country::inRandomOrder()->first();

$country->getCurrency();
```

```php [Output]
[
    'name' => 'Euro',
    'code' => 'EUR',
    'symbol' => '€',
]
```

:::

## Get Currency Code

Retrieves the currency code of the country.

```php
->getCurrencyCode()
```

::: code-group

```php {3} [Input]
$country = Country::inRandomOrder()->first();

$country->getCurrencyCode();
```

```php [Output]
'EUR'
```

:::

## Get Currency Data

Retrieves a comprehensive array of all currency data for the country, including name, code, symbol, units, banknotes, and coins. If any of these are not defined, they will return null.

```php
->getCurrencyData()
```

::: code-group

```php {3} [Input]
$country = Country::inRandomOrder()->first();

$country->getCurrencyData();
```

```php [Output]
[
    'name' => 'Euro',
    'code' => 'EUR',
    'symbol' => '€',
    'unit' => [
        'main' => 'euro',
        'sub' => 'cent',
        'to_unit' => 100,
    ],
    'banknotes' => [5, 10, 20, 50, 100, 200, 500],
    'coins' => [
        'main' => [1, 2],
        'sub' => [1, 2, 5, 10, 20, 50],
    ],
]
```

:::

## Get Currency Main Coins

Retrieves an array of the main coin denominations of the country's currency.

```php
->getCurrencyMainCoins()
```

::: code-group

```php {3} [Input]
$country = Country::inRandomOrder()->first();

$country->getCurrencyMainCoins();
```

```php [Output]
[1, 2]
```

:::

## Get Currency Main Unit

Retrieves the main unit name of the country's currency.

```php
->getCurrencyMainUnit()
```

::: code-group

```php {3} [Input]
$country = Country::inRandomOrder()->first();

$country->getCurrencyMainUnit();
```

```php [Output]
'euro'
```

:::

## Get Currency Name

Retrieves the name of the country's currency.

```php
->getCurrencyName()
```

::: code-group

```php {3} [Input]
$country = Country::inRandomOrder()->first();

$country->getCurrencyName();
```

```php [Output]
'Euro'
```

:::

## Get Currency Notes

Retrieves an array of banknote denominations of the country's currency.

```php
->getCurrencyNotes()
```

::: code-group

```php {3} [Input]
$country = Country::inRandomOrder()->first();

$country->getCurrencyNotes();
```

```php [Output]
[5, 10, 20, 50, 100, 200, 500]
```

:::

## Get Currency Sub-Coins

Retrieves an array of the sub-coin denominations of the country's currency.

```php
->getCurrencySubCoins()
```

::: code-group

```php {3} [Input]
$country = Country::inRandomOrder()->first();

$country->getCurrencySubCoins();
```

```php [Output]
[1, 2, 5, 10, 20, 50]
```

:::

## Get Currency Sub Unit

Retrieves the sub-unit name of the country's currency.

```php
->getCurrencySubUnit()
```

::: code-group

```php {3} [Input]
$country = Country::inRandomOrder()->first();

$country->getCurrencySubUnit();
```

```php [Output]
'cent'
```

:::

## Get Currency Symbol

Retrieves the symbol of the country's currency.

```php
->getCurrencySubUnit()
```

::: code-group

```php {3} [Input]
$country = Country::inRandomOrder()->first();

$country->getCurrencySubUnit();
```

```php [Output]
'€'
```

:::

## Get Currency Unit Main To Sub

Retrieves the conversion rate from the main unit to the sub-unit of the currency (e.g., how many sub-units make up one main unit).

```php
->getCurrencyUnitMainToSub()
```

::: code-group

```php {3} [Input]
$country = Country::inRandomOrder()->first();

$country->getCurrencyUnitMainToSub();
```

```php [Output]
100
```

:::

## Has Currency

Checks if the country has currency data defined.

```php
->hasCoinsCurrency()
```

::: code-group

```php {3} [Input]
$country = Country::inRandomOrder()->first();

$country->hasCoinsCurrency();
```

```php [Output]
True || False
```

:::

## Has Coins Currency

Checks if the country has coins defined in its currency data.

```php
->hasCoinsCurrency()
```

::: code-group

```php {3} [Input]
$country = Country::inRandomOrder()->first();

$country->hasCoinsCurrency();
```

```php [Output]
True || False
```

:::

## Has Main Coins Currency

Checks if the country has main coin denominations defined.

```php
->hasMainCoinsCurrency()
```

::: code-group

```php {3} [Input]
$country = Country::inRandomOrder()->first();

$country->hasMainCoinsCurrency();
```

```php [Output]
True || False
```

:::

## Has Notes Currency

Checks if the country has banknotes defined.

```php
->hasNotesCurrency()
```

::: code-group

```php {3} [Input]
$country = Country::inRandomOrder()->first();

$country->hasNotesCurrency();
```

```php [Output]
True || False
```

:::

## Has Sub Coins Currency

Checks if the country has sub-coin denominations defined.

```php
->hasSubCoinsCurrency()
```

::: code-group

```php {3} [Input]
$country = Country::inRandomOrder()->first();

$country->hasSubCoinsCurrency();
```

```php [Output]
True || False
```

:::

## Where Currency

Find countries that use a specific currency (by currency code).

```php
->whereCurrency(string $currency)
->whereCurrencyCode(string $currency)
```

::: code-group

```php {1,3} [Input]
$countries = Country::whereCurrency('USD')->get();
//or
$countries = Country::whereCurrencyCode('USD')->get();

$countries->pluck('official_name');
```

```php [Output]
Illuminate\Support\Collection { ▼
  items: array:16 [▼
    0 => "American Samoa"
    1 => "Republic of Ecuador"
    2 => "Federated States of Micronesia"
    3 => "Guam"
    4 => "British Indian Ocean Territory"
    5 => "Republic of the Marshall Islands"
    6 => "Commonwealth of the Northern Mariana Islands"
    7 => "Commonwealth of Puerto Rico"
    8 => "Republic of Palau"
    9 => "Republic of El Salvador"
    10 => "Turks and Caicos Islands"
    11 => "Democratic Republic of Timor-Leste"
    12 => "United States Minor Outlying Islands"
    13 => "United States of America"
    14 => "Virgin Islands"
    15 => "Virgin Islands of the United States"
  ]
}
```

:::

## Where Currencies

Find countries that use any of the specified currencies (by currency code).

```php
->whereCurrencies(array $currencies)
->whereCurrencyCodes(array $currencies)
```

::: code-group

```php {1,3} [Input]
$countries = Country::whereCurrencies(['USD', 'EUR', 'GBP'])->get();
//or
$countries = Country::whereCurrencyCodes(['USD', 'EUR', 'GBP'])->get();

$countries->pluck('official_name');
```

```php [Output]
Illuminate\Support\Collection {
  items: array:53 [▼
    0 => "Principality of Andorra"
    1 => "American Samoa"
    2 => "Republic of Austria"
    3 => "Åland Islands"
    4 => "Kingdom of Belgium"
    5 => "Collectivity of Saint Barthélemy"
    6 => "Republic of Cyprus"
    7 => "Federal Republic of Germany"
    8 => "Republic of Ecuador"
    9 => "Republic of Estonia"
    10 => "Kingdom of Spain"
    11 => "Republic of Finland"
    12 => "Federated States of Micronesia"
    13 => "French Republic"
    14 => "United Kingdom of Great Britain and Northern Ireland"
    15 => "French Guiana"
    16 => "Guadeloupe"
    17 => "Hellenic Republic"
    18 => "South Georgia and the South Sandwich Islands"
    19 => "Guam"
    20 => "Republic of Croatia"
    21 => "Republic of Ireland"
    22 => "British Indian Ocean Territory"
    23 => "Italian Republic"
    24 => "Republic of Lithuania"
    25 => "Grand Duchy of Luxembourg"
    26 => "Republic of Latvia"
    27 => "Principality of Monaco"
    28 => "Montenegro"
    29 => "Saint Martin"
    30 => "Republic of the Marshall Islands"
    31 => "Commonwealth of the Northern Mariana Islands"
    32 => "Martinique"
    33 => "Republic of Malta"
    34 => "Netherlands"
    35 => "Saint Pierre and Miquelon"
    36 => "Commonwealth of Puerto Rico"
    37 => "Portuguese Republic"
    38 => "Republic of Palau"
    39 => "Réunion Island"
    40 => "Republic of Slovenia"
    41 => "Slovak Republic"
    42 => "Most Serene Republic of San Marino"
    43 => "Republic of El Salvador"
    44 => "Turks and Caicos Islands"
    45 => "Territory of the French Southern and Antarctic Lands"
    46 => "Democratic Republic of Timor-Leste"
    47 => "United States Minor Outlying Islands"
    48 => "United States of America"
    49 => "Vatican City State"
    50 => "Virgin Islands"
    51 => "Virgin Islands of the United States"
    52 => "Department of Mayotte"
  ]
}
```

:::

## Where Currency Name

Find countries that use a specific currency name.

```php
->whereCurrencyName(string $name)
```

::: code-group

```php {1} [Input]
$countries = Country::whereCurrencyName('Euro')->get();

$countries->pluck('official_name');
```

```php [Output]
Illuminate\Support\Collection { ▼
  items: array:35 [▼
    0 => "Principality of Andorra"
    1 => "Republic of Austria"
    2 => "Åland Islands"
    3 => "Kingdom of Belgium"
    4 => "Collectivity of Saint Barthélemy"
    5 => "Republic of Cyprus"
    6 => "Federal Republic of Germany"
    7 => "Republic of Estonia"
    8 => "Kingdom of Spain"
    9 => "Republic of Finland"
    10 => "French Republic"
    11 => "French Guiana"
    12 => "Guadeloupe"
    13 => "Hellenic Republic"
    14 => "Republic of Croatia"
    15 => "Republic of Ireland"
    16 => "Italian Republic"
    17 => "Republic of Lithuania"
    18 => "Grand Duchy of Luxembourg"
    19 => "Republic of Latvia"
    20 => "Principality of Monaco"
    21 => "Montenegro"
    22 => "Saint Martin"
    23 => "Martinique"
    24 => "Republic of Malta"
    25 => "Netherlands"
    26 => "Saint Pierre and Miquelon"
    27 => "Portuguese Republic"
    28 => "Réunion Island"
    29 => "Republic of Slovenia"
    30 => "Slovak Republic"
    31 => "Most Serene Republic of San Marino"
    32 => "Territory of the French Southern and Antarctic Lands"
    33 => "Vatican City State"
    34 => "Department of Mayotte"
  ]
}
```

:::

## Where Currency Name

Find countries that use a specific currency name.

```php
->whereCurrencyNames(array $names)
```

::: code-group

```php {1} [Input]
$countries = Country::whereCurrencyNames(['Dollar', 'Brazilian real'])->get();

$countries->pluck('official_name');
```

```php [Output]
Illuminate\Support\Collection { ▼
  items: array:6 [▼
    0 => "American Samoa"
    1 => "Federative Republic of Brazil"
    2 => "Republic of the Marshall Islands"
    3 => "Commonwealth of the Northern Mariana Islands"
    4 => "Virgin Islands"
    5 => "Virgin Islands of the United States"
  ]
}
```

:::
