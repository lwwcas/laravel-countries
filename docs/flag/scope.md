# Scope

A scope in Laravel is a reusable query. It helps keep things clean and makes queries easy to chain. You can think of it as a shortcut for adding common query conditions to your models.

## Where Flag Color

```php
->whereFlagColor(string|array $name)
```

::: code-group

```php [Example One]
Country::whereFlagColor('Blue')->get();
```

```php {39} [Output]
Illuminate\Database\Eloquent\Collection {▼
  items: array:134 [▼
    0 => Lwwcas\LaravelCountries\Models\Country {#288 ▼
      connection: "mysql"
      table: "lc_countries"
      primaryKey: "id"
      keyType: "int"
      +incrementing: true
      with: []
      withCount: []
      +preventsLazyLoading: false
      perPage: 15
      +exists: true
      +wasRecentlyCreated: false
      escapeWhenCastingToString: false
      attributes: array:34 [▼
        "id" => 246
        "lc_region_id" => 9
        "uid" => "01J9VCYERPV0Q73J9MA9TBEKJ6"
        "official_name" => "Principality of Andorra" // [!code focus]
        "capital" => "Andorra la Vella"
        "iso_alpha_2" => "AD"
        "iso_alpha_3" => "AND"
        "iso_numeric" => 20
        "international_phone" => "376"
        "geoname_id" => "3041565"
        "wmo" => "AN"
        "independence_day" => "1278-09-08"
        "population" => "77543"
        "area" => "468"
        "gdp" => "3"
        "languages" => "["ca"]"
        "tld" => "[".ad"]"
        "alternative_tld" => "[]"
        "borders" => "["fr", "es"]"
        "timezones" => "{"main": [], "others": {"standard_time": "UTC+1", "daylight_saving_time": "UTC+2"}}"
        "currency" => " {"code": "EUR", "name": "Euro", "unit": ...
        "flag_emoji" => "{"css": "\\1F1E6\\1F1E9", "hex": ...
        "flag_colors" => "["Blue", "Yellow", "Red"]" // [!code focus]
        "flag_colors_web" => "["blue", "yellow", "red"]"
        "flag_colors_contrast" => "["#FFFFFF", "#000000", "#FFFFFF"]"
        "flag_colors_hex" => "["#0032A0", "#FEDF00", "#D1001F"]"
        "flag_colors_rgb" => "["0,50,160", "254,223,0", "209,0,31"]"
        "flag_colors_cmyk" => "["100,69,0,37", "0,12,100,0", "0,100,85,18"]"
        "flag_colors_hsl" => "["224,100%,31%", "52,100%,50%", "350,100%,41%"]"
        "flag_colors_hsv" => "["224,100%,63%", "52,100%,100%", "350,100%,82%"]"
        "flag_colors_pantone" => "["Pantone 286 C", "Pantone 116 C", "Pantone 199 C"]"
        "is_visible" => 1
        "created_at" => "2024-10-10 14:22:25"
        "updated_at" => "2024-10-10 14:22:25"
      ]
      original: array:34 [▶]
      changes: []
      casts: array:18 [▶]
      classCastCache: []
      attributeCastCache: []
      dateFormat: null
      appends: []
      dispatchesEvents: []
      observables: []
      relations: array:1 [▶]
      touches: []
      +timestamps: true
      +usesUniqueIds: false
      hidden: []
      visible: []
      fillable: array:31 [▶]
      guarded: array:1 [▶]
      +localeKey: "locale"
      +translationModel: "Lwwcas\LaravelCountries\Models\CountryTranslation"
      +translatedAttributes: array:2 [▶]
      +translationForeignKey: "lc_country_id"
      defaultLocale: null
    }
    1 => Lwwcas\LaravelCountries\Models\Country {#289 ▶}
    2 => Lwwcas\LaravelCountries\Models\Country {#290 ▶}
    3 => Lwwcas\LaravelCountries\Models\Country {#291 ▶}
    4 => Lwwcas\LaravelCountries\Models\Country {#292 ▶}
    ...
  ]
  escapeWhenCastingToString: false
}

```

:::

::: code-group

```php [Example Many]
Country::whereFlagColor(['Blue', 'Red'])->get();
```

```php {39} [Output]
Illuminate\Database\Eloquent\Collection {▼
  items: array:228 [▼
    0 => Lwwcas\LaravelCountries\Models\Country {#288 ▼
      connection: "mysql"
      table: "lc_countries"
      primaryKey: "id"
      keyType: "int"
      +incrementing: true
      with: []
      withCount: []
      +preventsLazyLoading: false
      perPage: 15
      +exists: true
      +wasRecentlyCreated: false
      escapeWhenCastingToString: false
      attributes: array:34 [▼
        "id" => 246
        "lc_region_id" => 9
        "uid" => "01J9VCYERPV0Q73J9MA9TBEKJ6"
        "official_name" => "Principality of Andorra"
        "capital" => "Andorra la Vella"
        "iso_alpha_2" => "AD"
        "iso_alpha_3" => "AND"
        "iso_numeric" => 20
        "international_phone" => "376"
        "geoname_id" => "3041565"
        "wmo" => "AN"
        "independence_day" => "1278-09-08"
        "population" => "77543"
        "area" => "468"
        "gdp" => "3"
        "languages" => "["ca"]"
        "tld" => "[".ad"]"
        "alternative_tld" => "[]"
        "borders" => "["fr", "es"]"
        "timezones" => "{"main": [], "others": {"standard_time": "UTC+1", "daylight_saving_time": "UTC+2"}}"
        "currency" => " {"code": "EUR", "name": "Euro", "unit": {"sub": ...
        "flag_emoji" => "{"css": "\\1F1E6\\1F1E9", "hex": "&#x1F ...
        "flag_colors" => "["Blue", "Yellow", "Red"]"
        "flag_colors_web" => "["blue", "yellow", "red"]"
        "flag_colors_contrast" => "["#FFFFFF", "#000000", "#FFFFFF"]"
        "flag_colors_hex" => "["#0032A0", "#FEDF00", "#D1001F"]"
        "flag_colors_rgb" => "["0,50,160", "254,223,0", "209,0,31"]"
        "flag_colors_cmyk" => "["100,69,0,37", "0,12,100,0", "0,100,85,18"]"
        "flag_colors_hsl" => "["224,100%,31%", "52,100%,50%", "350,100%,41%"]"
        "flag_colors_hsv" => "["224,100%,63%", "52,100%,100%", "350,100%,82%"]"
        "flag_colors_pantone" => "["Pantone 286 C", "Pantone 116 C", "Pantone 199 C"]"
        "is_visible" => 1
        "created_at" => "2024-10-10 14:22:25"
        "updated_at" => "2024-10-10 14:22:25"
      ]
      original: array:34 [▶]
      changes: []
      casts: array:18 [▶]
      classCastCache: []
      attributeCastCache: []
      dateFormat: null
      appends: []
      dispatchesEvents: []
      observables: []
      relations: array:1 [▶]
      touches: []
      +timestamps: true
      +usesUniqueIds: false
      hidden: []
      visible: []
      fillable: array:31 [▶]
      guarded: array:1 [▶]
      +localeKey: "locale"
      +translationModel: "Lwwcas\LaravelCountries\Models\CountryTranslation"
      +translatedAttributes: array:2 [▶]
      +translationForeignKey: "lc_country_id"
      defaultLocale: null
    }
    1 => Lwwcas\LaravelCountries\Models\Country {#289 ▶}
    2 => Lwwcas\LaravelCountries\Models\Country {#290 ▶}
    3 => Lwwcas\LaravelCountries\Models\Country {#291 ▶}
    4 => Lwwcas\LaravelCountries\Models\Country {#292 ▶}
    ...
  ]
  escapeWhenCastingToString: false
}

```

:::

::: info
All the other output functions are similar to what we've seen above. So, let's keep things simple and focus on documenting the scopes for filtering colors. This will help ensure clarity and ease when you're using these functions in different contexts to manipulate or retrieve specific flag colors. Let's dive into making the scopes straightforward and well-documented for efficient filtering!
:::


## Where Flag Color Web

```php
->whereFlagColorWeb(string|array $code)
```

::: code-group

```php [One Color]
Country::whereFlagColorWeb('blue')->get();
```

```php [Many Colors]
Country::whereFlagColorWeb(['blue,' 'green'])->get();
```

:::

## Where Flag Contrast

```php
->whereFlagContrast(string|array $code)
```

::: code-group

```php [One Color]
Country::whereFlagContrast('#000000')->get();
```

```php [Many Colors]
Country::whereFlagContrast(['#000000,' '#FFFFFF'])->get();
```

:::

## Where Flag Color Hex

```php
->whereFlagColorHex(string|array $code)
```

::: code-group

```php [One Color]
Country::whereFlagColorHex("#0032A0")->get();
```

```php [Many Colors]
Country::whereFlagColorHex(["#FEDF00", "#D1001F"])->get();
```

:::

## Where Flag Color RGB

```php
->whereFlagColorRGB(string|array $code)
```

::: code-group

```php [One Color]
Country::whereFlagColorRGB("0,50,160")->get();
```

```php [Many Colors]
Country::whereFlagColorRGB(["254,223,0", "209,0,31"])->get();
```

:::

## Where Flag Color CMYK

```php
->whereFlagColorCMYK(string|array $code)
```

::: code-group

```php [One Color]
Country::whereFlagColorCMYK("100,69,0,37")->get();
```

```php [Many Colors]
Country::whereFlagColorCMYK(["0,12,100,0", "0,100,85,18"])->get();
```

:::

## Where Flag Color HSL

```php
->whereFlagColorHSL(string|array $code)
```

::: code-group

```php [One Color]
Country::whereFlagColorHSL("224,100%,31%")->get();
```

```php [Many Colors]
Country::whereFlagColorHSL(["52,100%,50%", "350,100%,41%"])->get();
```

:::

## Where Flag Color HSV

```php
->whereFlagColorHSV(string|array $code)
```

::: code-group

```php [One Color]
Country::whereFlagColorHSV("204,48%,87%")->get();
```

```php [Many Colors]
Country::whereFlagColorHSV(["0,0%,100%", "42,94%,96%"])->get();
```

:::

## Where Flag Color Pantone

```php
->whereFlagColorPantone(string|array $code)
```

::: code-group

```php [One Color]
Country::whereFlagColorPantone("Pantone 292 C")->get();
```

```php [Many Colors]
Country::whereFlagColorPantone(["Pantone White", "Pantone 1235 C"])->get();
```

:::
