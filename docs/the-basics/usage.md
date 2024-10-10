# Basic Usage

## Usage

To import `Country::class`, use the following code:

```php{1}
use Lwwcas\LaravelCountries\Models\Country;

Country::all();

```

To import `CountryRegion::class`, use the following code:

```php{1}
use Lwwcas\LaravelCountries\Models\CountryRegion;

CountryRegion::all();

```

## List of Countries

### How to get a simple list of countries?

With the `getList()` helper, you can fetch optimized country lists, perfect for populating dropdowns or similar elements.

#### If you want a list that includes both the country names and slugs, use the following code:
```php{4}
use Lwwcas\LaravelCountries\Models\Country;

Country::getList()
    ->withNamesAndSlugs()
    ->get();

```

#### If you want a list that includes both the country names, slugs and flags, use the following code

```php{4}
use Lwwcas\LaravelCountries\Models\Country;

Country::getList()
    ->withNamesSlugsAndFlags()
    ->get();

```

## Names And Slugs

### Result for `->withNamesAndSlugs()`

```php
 Illuminate\Database\Eloquent\Collection {#288 ▼
  +items: [▼
    0 => Lwwcas\LaravelCountries\Models\Country {#291 ▼
      +connection: "mysql"
      +table: "lc_countries"
      +primaryKey: "id"
      +keyType: "int"
      +incrementing: true
      +with: []
      +withCount: []
      +preventsLazyLoading: false
      +perPage: 15
      +exists: true
      +wasRecentlyCreated: false
      +escapeWhenCastingToString: false
      +attributes: array:6 [▼ // [!code focus]
        "id" => 3 // [!code focus]
        "uid" => "01J95Z2ZE5KYX1QJEXYVER62D1" // [!code focus]
        "official_name" => "Islamic Emirate of Afghanistan" // [!code focus]
        "iso_alpha_2" => "AF" // [!code focus]
        "iso_alpha_3" => "AFG" // [!code focus]
        "name" => "Afeganistão" // [!code focus]
      ]
      +original: array:6 [▶]
      +changes: []
      +casts: array:18 [▶]
      +classCastCache: []
      +attributeCastCache: []
      +dateFormat: null
      +appends: []
      +dispatchesEvents: []
      +observables: []
      +relations: array:1 [▼
        "translations" => Illuminate\Database\Eloquent\Collection {#297 ▼
          +items: array:1 [▼
            0 => Lwwcas\LaravelCountries\Models\CountryTranslation {#301 ▼
              +connection: "mysql"
              +table: "lc_countries_translations"
              +primaryKey: "id"
              +keyType: "int"
              +incrementing: true
              +with: []
              +withCount: []
              +preventsLazyLoading: false
              +perPage: 15
              +exists: true
              +wasRecentlyCreated: false
              +escapeWhenCastingToString: false
              +attributes: array:5 [▼ // [!code focus]
                "id" => 3 // [!code focus]
                "lc_country_id" => 3 // [!code focus]
                "name" => "Afghanistan" // [!code focus]
                "slug" => "afghanistan" // [!code focus]
                "locale" => "en" // [!code focus]
              ]
              +original: array:5 [▶]
              +changes: []
              +casts: []
              +classCastCache: []
              +attributeCastCache: []
              +dateFormat: null
              +appends: []
              +dispatchesEvents: []
              +observables: []
              +relations: []
              +touches: []
              +timestamps: false
              +usesUniqueIds: false
              +hidden: []
              +visible: []
              +fillable: array:2 [▶]
              +guarded: array:1 [▶]
            }
          ]
          +escapeWhenCastingToString: false
        }
      ]
      +touches: []
      +timestamps: true
      +usesUniqueIds: false
      +hidden: []
      +visible: []
      +fillable: array:31 [▶]
      +guarded: array:1 [▶]
      +localeKey: "locale"
      +translationModel: "Lwwcas\LaravelCountries\Models\CountryTranslation"
      +translatedAttributes: array:2 [▶]
      +translationForeignKey: "lc_country_id"
      +defaultLocale: null
    }
    1 => Lwwcas\LaravelCountries\Models\Country {#292 ▶}
    2 => Lwwcas\LaravelCountries\Models\Country {#290 ▶}
    ...
  ]
}

```

### Result for `->withNamesAndSlugs()` on Array version

::: info
You will need to convert the collection to an array.

You can achieve this by using Eloquent's `->toArray()` method.

```php

Country::getList()->withNamesAndSlugs()->get()->toArray();

```

:::

```php
array:3 [▼
  0 => array:8 [▼
    "id" => 3 // [!code focus]
    "uid" => "01J95Z2ZE5KYX1QJEXYVER62D1" // [!code focus]
    "official_name" => "Islamic Emirate of Afghanistan" // [!code focus]
    "iso_alpha_2" => "AF" // [!code focus]
    "iso_alpha_3" => "AFG" // [!code focus]
    "name" => "Afghanistan" // [!code focus]
    "slug" => "afghanistan" // [!code focus]
    "translations" => array:1 [▼ // [!code focus]
      0 => array:5 [▼ // [!code focus]
        "id" => 3 // [!code focus]
        "lc_country_id" => 3 // [!code focus]
        "name" => "Afghanistan" // [!code focus]
        "slug" => "afghanistan" // [!code focus]
        "locale" => "en" // [!code focus]
      ]
    ]
  ]
  1 => array:8 [▶]
  2 => array:8 [▶]
  ...
]

```

## Names Slugs And Flags

### Result for `->withNamesSlugsAndFlags()`

```php

Illuminate\Database\Eloquent\Collection {#288 ▼
  +items: [▼
    0 => Lwwcas\LaravelCountries\Models\Country {#291 ▼
      +connection: "mysql"
      +table: "lc_countries"
      +primaryKey: "id"
      +keyType: "int"
      +incrementing: true
      +with: []
      +withCount: []
      +preventsLazyLoading: false
      +perPage: 15
      +exists: true
      +wasRecentlyCreated: false
      +escapeWhenCastingToString: false
      +attributes: array:7 [▼ // [!code focus]
        "id" => 3 // [!code focus]
        "uid" => "01J95Z2ZE5KYX1QJEXYVER62D1" // [!code focus]
        "official_name" => "Islamic Emirate of Afghanistan" // [!code focus]
        "iso_alpha_2" => "AF" // [!code focus]
        "iso_alpha_3" => "AFG" // [!code focus]
        "flag_emoji" => " // [!code focus]
            {"css": "\\1F1E6\\1F1EB", "hex": "&#x1F1E6;&#x1F1EB;", "img": "🇦🇫", ... // [!code focus]
        "name" => "Afeganistão" // [!code focus]
      ]
      +original: array:7 [▶]
      +changes: []
      +casts: array:18 [▶]
      +classCastCache: []
      +attributeCastCache: []
      +dateFormat: null
      +appends: []
      +dispatchesEvents: []
      +observables: []
      +relations: array:1 [▼
        "translations" => Illuminate\Database\Eloquent\Collection {#297 ▼
          +items: array:1 [▼
            0 => Lwwcas\LaravelCountries\Models\CountryTranslation {#301 ▼
              +connection: "mysql"
              +table: "lc_countries_translations"
              +primaryKey: "id"
              +keyType: "int"
              +incrementing: true
              +with: []
              +withCount: []
              +preventsLazyLoading: false
              +perPage: 15
              +exists: true
              +wasRecentlyCreated: false
              +escapeWhenCastingToString: false
              +attributes: array:5 [▼ // [!code focus]
                "id" => 3 // [!code focus]
                "lc_country_id" => 3 // [!code focus]
                "name" => "Afghanistan" // [!code focus]
                "slug" => "afghanistan" // [!code focus]
                "locale" => "en" // [!code focus]
              ]
              +original: array:5 [▶]
              +changes: []
              +casts: []
              +classCastCache: []
              +attributeCastCache: []
              +dateFormat: null
              +appends: []
              +dispatchesEvents: []
              +observables: []
              +relations: []
              +touches: []
              +timestamps: false
              +usesUniqueIds: false
              +hidden: []
              +visible: []
              +fillable: array:2 [▶]
              +guarded: array:1 [▶]
            }
          ]
          +escapeWhenCastingToString: false
        }
      ]
      +touches: []
      +timestamps: true
      +usesUniqueIds: false
      +hidden: []
      +visible: []
      +fillable: array:31 [▶]
      +guarded: array:1 [▶]
      +localeKey: "locale"
      +translationModel: "Lwwcas\LaravelCountries\Models\CountryTranslation"
      +translatedAttributes: array:2 [▶]
      +translationForeignKey: "lc_country_id"
      +defaultLocale: null
    }
    1 => Lwwcas\LaravelCountries\Models\Country {#292 ▶}
    2 => Lwwcas\LaravelCountries\Models\Country {#290 ▶}
    ...
  ]
}

```

A simple way to access country flags is by using the following method.

```php
use Lwwcas\LaravelCountries\Models\Country;

$countries = Country::getList()->withNamesSlugsAndFlags()->get();

foreach ($countries as $country) {
    $country->getFlagEmoji(); // [!code focus]
}

```

This will provide you with a list of the country flags in an easy-to-use format for displaying or further processing.

::: tip
You can see more this `->getFlagEmoji()` [Here](/the-basics/flags.html#flag-getters)
:::

### Result for `->withNamesSlugsAndFlags()` on Array version

::: info
You will need to convert the collection to an array.

You can achieve this by using Eloquent's `->toArray()` method.

```php

Country::getList()->withNamesSlugsAndFlags()->get()->toArray();

```
:::

```php
array:3 [▼
  0 => array:9 [▼
    "id" => 3 // [!code focus]
    "uid" => "01J95Z2ZE5KYX1QJEXYVER62D1" // [!code focus]
    "official_name" => "Islamic Emirate of Afghanistan" // [!code focus]
    "iso_alpha_2" => "AF" // [!code focus]
    "iso_alpha_3" => "AFG" // [!code focus]
    "flag_emoji" => array:9 [▼ // [!code focus]
      "css" => "\1F1E6\1F1EB" // [!code focus]
      "hex" => "&#x1F1E6;&#x1F1EB;" // [!code focus]
      "img" => "🇦🇫" // [!code focus]
      "html" => "&#x1F1E6;&#x1F1EB;" // [!code focus]
      "utf8" => "🇦🇫" // [!code focus]
      "uCode" => "U+1F1E6 U+1F1EB" // [!code focus]
      "utf16" => "\uD83C\uDDE6\uD83C\uDDEB" // [!code focus]
      "decimal" => "&#127462;&#127467;" // [!code focus]
      "shortcode" => ":flag-af:" // [!code focus]
    ] // [!code focus]
    "name" => "Afghanistan" // [!code focus]
    "slug" => "afghanistan" // [!code focus]
    "translations" => array:1 [▼ // [!code focus]
      0 => array:5 [▼ // [!code focus]
        "id" => 3 // [!code focus]
        "lc_country_id" => 3 // [!code focus]
        "name" => "Afghanistan" // [!code focus]
        "slug" => "afghanistan" // [!code focus]
        "locale" => "en" // [!code focus]
      ] // [!code focus]
    ] // [!code focus]
  ]
  1 => array:9 [▶]
  2 => array:9 [▶]
  ...
]

```
