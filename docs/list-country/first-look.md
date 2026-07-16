---
title: "Listing Countries — First Look"
description: "Retrieve full or partial lists of countries with Laravel Countries' Eloquent model."
head:
  - - meta
    - property: og:title
      content: "Listing Countries — First Look"
  - - meta
    - property: og:description
      content: "Retrieve full or partial lists of countries with Laravel Countries' Eloquent model."
---

# List of Countries

### How to get a simple list of countries?

With the `getList()` helper, you can fetch optimized country lists, perfect for populating dropdowns or similar elements.

#### If you want a list that includes both the country names and slugs, use the following code

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

### Output for `->withNamesAndSlugs()` on Array version

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

### Output for `->withNamesSlugsAndFlags()` on Array version

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
