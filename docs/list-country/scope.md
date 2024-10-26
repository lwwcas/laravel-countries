# Scope

A scope in Laravel is a reusable query. It helps keep things clean and makes queries easy to chain. You can think of it as a shortcut for adding common query conditions to your models.

## Get List Method

The `getList()` method returns a new instance of the current class. It's just a simple way to start building custom queries for countries.

## Names and Slugs

`withNamesAndSlugs()` gives you a list of countries with their names and slugs.
It joins lc_countries with lc_countries_translations so you get all the translated names too.

Useful for when you need the basic country info with translations.

Input

```php
Country::getList()->withNamesAndSlugs()->get();
```

Output
::: details Click me to view the output

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

:::

## Names, Slugs, and Flags

`withNamesSlugsAndFlags()` is like the previous method, but also includes flag emojis.
Great for adding a visual element to your UI, making it easier to identify countries at a glance.

Input

```php
Country::getList()->withNamesSlugsAndFlags()->get();
```

Output
::: details Click me to view the output

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

:::

## Country flags

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

## Example Usage

::: code-group

```php [Name and Slug]
Country::getList()->withNamesAndSlugs()->get();
```

```php [With Flag]
Country::getList()->withNamesSlugsAndFlags()->get();
```

:::

This gives you a collection of countries with their names and slugs.

::: tip
But you can also chain other methods to customize your query.
:::

## Add Filtering

You can filter the results to get only specific countries.

::: code-group

```php [Name and Slug]
Country::getList()->withNamesAndSlugs()->whereIso('US')->get();
```

```php [With Flag]
Country::getList()->withNamesSlugsAndFlags()->whereIso('US')->get();
```

:::

## Add Sorting

You can change the default sorting.

::: code-group

```php [Name and Slug]
Country::getList()->withNamesAndSlugs()->orderBy('official_name', 'desc')->get();
```

```php [With Flag]
Country::getList()->withNamesSlugsAndFlags()->orderBy('official_name', 'desc')->get();
```

:::

## Select Specific Fields

You can modify the select to include only specific fields.

::: code-group

```php [Name and Slug]
Country::getList()->withNamesAndSlugs()->select('id', 'name')->get();
```

```php [With Flag]
Country::getList()->withNamesSlugsAndFlags()->select('id', 'name')->get();
```

:::

## Convert to Array

You can convert the result to an array for easier manipulation.

::: code-group

```php [Name and Slug]
Country::getList()->withNamesAndSlugs()->get()->toArray();
```

```php [With Flag]
Country::getList()->withNamesSlugsAndFlags()->get()->toArray();
```

:::

## Debug with SQL Query

You can use `toSql()` to see the raw SQL query for debugging purposes.

::: code-group

```php [Name and Slug]
Country::getList()->withNamesAndSlugs()->toSql();
```

```php [With Flag]
Country::getList()->withNamesSlugsAndFlags()->toSql();
```

:::

Output

```sql
select `lc_countries`.`id` as `id`, `lc_countries`.`uid` as `uid`, `lc_countries`.`official_name` as `official_name`, `lc_countries`.`iso_alpha_2` as `iso_alpha_2`, `lc_countries`.`iso_alpha_3` as `iso_alpha_3`, `lc_countries_translations`.`name` as `name` from `lc_countries` inner join `lc_countries_translations` on `lc_countries_translations`.`lc_country_id` = `lc_countries`.`id` where `is_visible` = ? order by `name` asc
```
