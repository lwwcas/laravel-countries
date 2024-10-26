# Boards

With the `Borders`, you can easily access each country’s neighboring countries in a simplified, developer-friendly way.

This functionality is especially useful for applications needing quick access to countries and their borders, enabling seamless integration into map displays, travel apps, or any geographical tools.

## Boards By Country

These functions offer efficient and flexible methods to retrieve a list of countries that share a border with a given country, each designed to address specific presentation needs. By using these functions, you can gather detailed information about neighboring countries, whether you’re looking for essential details only or a more visually enriched output with flag emojis. Here's how each function works and what it offers:

| Field          | Description                                                    | Example                      |
|----------------|----------------------------------------------------------------|------------------------------|
| `uid`          | The unique identifier of the country.                          | `"01DF3HXZ1XN8W2JD68H4Z4K3P5"` |
| `iso_alpha_2`  | The ISO 3166-1 alpha-2 code of the country.                    | `"US"`                       |
| `iso_alpha_3`  | The ISO 3166-1 alpha-3 code of the country.                    | `"USA"`                      |
| `official_name`| The official name of the country.                              | `"United States of America"` |
| `name`         | The translated name of the country in the current locale.      | `"Estados Unidos"`           |
| `locale`       | The locale of the translated name.                             | `"en"`                       |
| `flag_emoji`   | The flag emoji of the country.                                 |`"🇦🇷"`                       |


## Borders With Countries

This method returns an array of countries that share a border with the current country, displaying key details:

::: info
Easily get a list of neighboring countries with essential details, ideal for scenarios where basic country information is needed for each bordering nation.
:::

```php
->bordersWithCountries()
```

::: code-group

```php {3} [Input]
// Brazil
Country::whereIso('br')->first()
    ->bordersWithCountries();
```

```php [Output]
array:10 [▼
  0 => array:6 [▼
    "uid" => "01J9VCYEWPP2N5N8S1ZWD37CK1"
    "iso_alpha_2" => "AR"
    "iso_alpha_3" => "ARG"
    "official_name" => "Argentine Republic"
    "name" => "Argentina"
    "locale" => "en"
  ]
  1 => array:6 [▼
    "uid" => "01J9VCYF1GKPXG72B9XAMF5DCH"
    "iso_alpha_2" => "BO"
    "iso_alpha_3" => "BOL"
    "official_name" => "Plurinational State of Bolivia"
    "name" => "Bolivia"
    "locale" => "en"
  ]
  2 => array:6 [▼
    "uid" => "01J9VCYFB00HXEFWJDX8ET4KHP"
    "iso_alpha_2" => "CO"
    "iso_alpha_3" => "COL"
    "official_name" => "Republic of Colombia"
    "name" => "Colombia"
    "locale" => "en"
  ]
  3 => array:6 [▼
    "uid" => "01J9VCYFJE40652F8D6E9P0ZA9"
    "iso_alpha_2" => "GF"
    "iso_alpha_3" => "GUF"
    "official_name" => "French Guiana"
    "name" => "French Guiana"
    "locale" => "en"
  ]
  4 => array:6 [▼
    "uid" => "01J9VCYFPRX5D34QNZDYT5VYG3"
    "iso_alpha_2" => "GY"
    "iso_alpha_3" => "GUY"
    "official_name" => "Co-operative Republic of Guyana"
    "name" => "Guyana"
    "locale" => "en"
  ]
  5 => array:6 [▼
    "uid" => "01J9VCYGCQXM4XESQ1QSMKP1HH"
    "iso_alpha_2" => "PE"
    "iso_alpha_3" => "PER"
    "official_name" => "Republic of Peru"
    "name" => "Peru"
    "locale" => "en"
  ]
  6 => array:6 [▼
    "uid" => "01J9VCYGG77GG9VCSNXFY9MJW0"
    "iso_alpha_2" => "PY"
    "iso_alpha_3" => "PRY"
    "official_name" => "Republic of Paraguay"
    "name" => "Paraguay"
    "locale" => "en"
  ]
  7 => array:6 [▼
    "uid" => "01J9VCYGQXG8T40YN3C1NGFSZR"
    "iso_alpha_2" => "SR"
    "iso_alpha_3" => "SUR"
    "official_name" => "Republic of Suriname"
    "name" => "Suriname"
    "locale" => "en"
  ]
  8 => array:6 [▼
    "uid" => "01J9VCYH03X8KNTFR2S16JV8EF"
    "iso_alpha_2" => "UY"
    "iso_alpha_3" => "URY"
    "official_name" => "Oriental Republic of Uruguay"
    "name" => "Uruguay"
    "locale" => "en"
  ]
  9 => array:6 [▼
    "uid" => "01J9VCYH176X8DW66RNVFPYRF0"
    "iso_alpha_2" => "VE"
    "iso_alpha_3" => "VEN"
    "official_name" => "Bolivarian Republic of Venezuela"
    "name" => "Venezuela"
    "locale" => "en"
  ]
]
```

:::

## Borders With Flags

This function provides similar information but includes a flag emoji in the specified format, either as an emoji (img) or Unicode (uCode). This is especially helpful for visual displays, such as UI components that showcase country flags.

::: tip
You can find all types of emojis available **[`Here`](/flag/first-look.html#flag-formats)**
:::

```php
->bordersWithFlags(string $emojiType = 'img')
```

::: code-group

```php {3} [Input]
// Brazil
Country::whereIso('br')->first()
    ->bordersWithFlags();
```

```php [Output]
array:10 [▼
  0 => array:7 [▼
    "uid" => "01J9VCYEWPP2N5N8S1ZWD37CK1"
    "iso_alpha_2" => "AR"
    "iso_alpha_3" => "ARG"
    "official_name" => "Argentine Republic"
    "name" => "Argentina"
    "locale" => "en"
    "flag_emoji" => "🇦🇷"
  ]
  1 => array:7 [▼
    "uid" => "01J9VCYF1GKPXG72B9XAMF5DCH"
    "iso_alpha_2" => "BO"
    "iso_alpha_3" => "BOL"
    "official_name" => "Plurinational State of Bolivia"
    "name" => "Bolivia"
    "locale" => "en"
    "flag_emoji" => "🇧🇴"
  ]
  2 => array:7 [▼
    "uid" => "01J9VCYFB00HXEFWJDX8ET4KHP"
    "iso_alpha_2" => "CO"
    "iso_alpha_3" => "COL"
    "official_name" => "Republic of Colombia"
    "name" => "Colombia"
    "locale" => "en"
    "flag_emoji" => "🇨🇴"
  ]
  3 => array:7 [▼
    "uid" => "01J9VCYFJE40652F8D6E9P0ZA9"
    "iso_alpha_2" => "GF"
    "iso_alpha_3" => "GUF"
    "official_name" => "French Guiana"
    "name" => "French Guiana"
    "locale" => "en"
    "flag_emoji" => "🇬🇫"
  ]
  4 => array:7 [▼
    "uid" => "01J9VCYFPRX5D34QNZDYT5VYG3"
    "iso_alpha_2" => "GY"
    "iso_alpha_3" => "GUY"
    "official_name" => "Co-operative Republic of Guyana"
    "name" => "Guyana"
    "locale" => "en"
    "flag_emoji" => "🇬🇾"
  ]
  5 => array:7 [▼
    "uid" => "01J9VCYGCQXM4XESQ1QSMKP1HH"
    "iso_alpha_2" => "PE"
    "iso_alpha_3" => "PER"
    "official_name" => "Republic of Peru"
    "name" => "Peru"
    "locale" => "en"
    "flag_emoji" => "🇵🇪"
  ]
  6 => array:7 [▼
    "uid" => "01J9VCYGG77GG9VCSNXFY9MJW0"
    "iso_alpha_2" => "PY"
    "iso_alpha_3" => "PRY"
    "official_name" => "Republic of Paraguay"
    "name" => "Paraguay"
    "locale" => "en"
    "flag_emoji" => "🇵🇾"
  ]
  7 => array:7 [▼
    "uid" => "01J9VCYGQXG8T40YN3C1NGFSZR"
    "iso_alpha_2" => "SR"
    "iso_alpha_3" => "SUR"
    "official_name" => "Republic of Suriname"
    "name" => "Suriname"
    "locale" => "en"
    "flag_emoji" => "🇸🇷"
  ]
  8 => array:7 [▼
    "uid" => "01J9VCYH03X8KNTFR2S16JV8EF"
    "iso_alpha_2" => "UY"
    "iso_alpha_3" => "URY"
    "official_name" => "Oriental Republic of Uruguay"
    "name" => "Uruguay"
    "locale" => "en"
    "flag_emoji" => "🇺🇾"
  ]
  9 => array:7 [▼
    "uid" => "01J9VCYH176X8DW66RNVFPYRF0"
    "iso_alpha_2" => "VE"
    "iso_alpha_3" => "VEN"
    "official_name" => "Bolivarian Republic of Venezuela"
    "name" => "Venezuela"
    "locale" => "en"
    "flag_emoji" => "🇻🇪"
  ]
]
```

:::


## Has Borders

Quickly checks if a country has any neighboring countries.
Returns true if borders are present and false if none are available.

This is helpful for distinguishing between landlocked countries and those with shared borders.

```php
->hasBorders()
```

```php {4}
// Iceland
$country = Country::whereIso('ISL')->first();

if ($country->hasBorders() === false) {
    // This country is a island!
}
```

## Borders Count

Retrieves the number of bordering countries for a given country.
This can be useful for applications that display geographical relationships or provide travel information between neighboring nations.

```php
->bordersCount()
```

```php {4}
// Vatican City State
$country = Country::whereIso('VAT')->first();

$country->bordersCount()
```

## Where Border

This method allows you to find countries that share a specific border.
Simply pass a single country code as a string, and it will return all countries with that border.

```php
->whereBorder(string $board)
```

::: code-group

```php [Input]
Country::whereBorder('br')->get();
```

```php [Output]
// Originally the query will return a Country Collection
array:10 [▼
  "AR" => "Argentine Republic"
  "BO" => "Plurinational State of Bolivia"
  "CO" => "Republic of Colombia"
  "GF" => "French Guiana"
  "GY" => "Co-operative Republic of Guyana"
  "PE" => "Republic of Peru"
  "PY" => "Republic of Paraguay"
  "SR" => "Republic of Suriname"
  "UY" => "Oriental Republic of Uruguay"
  "VE" => "Bolivarian Republic of Venezuela"
]
```

:::

## Where Borders

Use this method to search for countries that share multiple borders.
Pass an array of country codes, and it will find all countries with any of the specified borders.

```php
->whereBorders(array $boards)
```

::: code-group

```php [Input]
Country::whereBorders(['br', 'ar'])->get();
```

```php [Output]
// Originally the query will return a Country Collection
array:3 [▼
  "BO" => "Plurinational State of Bolivia"
  "PY" => "Republic of Paraguay"
  "UY" => "Oriental Republic of Uruguay"
]
```

:::
