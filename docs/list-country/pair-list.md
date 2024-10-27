# Pair List

This collection of methods always returns a Laravel collection with a list of items based on the method used.
These methods are helpful to quickly retrieve specific fields from the country data.

## ID and Official Name

Returns a list of countries with their IDs as keys and their official names as values. This cached list improves performance by reducing database queries.

::: code-group

```php [Input]
Country::getList()->idAndOfficialName();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    248 => "Islamic Emirate of Afghanistan"
    260 => "Åland Islands"
    251 => "Republic of Albania"
    305 => "People's Democratic Republic of Algeria"
    256 => "American Samoa"
    246 => "Principality of Andorra"
    253 => "Republic of Angola"
    250 => "Anguilla"
    254 => "Antarctica"
    ...
```

:::

## ID and UID

Provides a list of countries where each ID is mapped to its unique identifier (UID). This helps in efficiently retrieving UIDs without frequent database access.

::: code-group

```php [Input]
Country::getList()->idAndUid();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    248 => "01J9VCYESCNW4EWFYB9ENTNCN2"
    260 => "01J9VCYEYFYD063XMYZR653QEB"
    251 => "01J9VCYET590JW3HK27CHBXYPH"
    305 => "01J9VCYFDSTZ8F5VSDB2XFHGQJ"
    256 => "01J9VCYEX2RXVM2XNS61VZ11KR"
    246 => "01J9VCYERPV0Q73J9MA9TBEKJ6"
    253 => "01J9VCYETMYK5GYHBD84539V1W"
    250 => "01J9VCYESY8K411YFR48P7JPP1"
    254 => "01J9VCYEV40SY7GX48CKEK4N05"
    ...
```

:::

## ID and Name

Offers a list of countries with IDs associated with their translated names. Useful for quickly fetching country names based on their IDs.

::: code-group

```php [Input]
Country::getList()->idAndName();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    248 => "Afghanistan"
    260 => "Åland Islands"
    251 => "Albania"
    305 => "Algeria"
    256 => "American Samoa"
    246 => "Andorra"
    253 => "Angola"
    250 => "Anguilla"
    254 => "Antarctica"
    ...
```

:::

## ID and Alpha-2 Code

Generates a list mapping country IDs to their ISO Alpha-2 codes. This aids in converting IDs to standard two-letter country codes efficiently.

::: code-group

```php [Input]
Country::getList()->idAndAlpha2();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    248 => "AF"
    260 => "AX"
    251 => "AL"
    305 => "DZ"
    256 => "AS"
    246 => "AD"
    253 => "AO"
    250 => "AI"
    254 => "AQ"
    ...
```

:::

## ID and Alpha-3 Code

Provides a list of countries with IDs linked to their ISO Alpha-3 codes. Ideal for applications needing quick access to three-letter country codes from IDs.

::: code-group

```php [Input]
Country::getList()->idAndAlpha3();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    248 => "AFG"
    260 => "ALA"
    251 => "ALB"
    305 => "DZA"
    256 => "ASM"
    246 => "AND"
    253 => "AGO"
    250 => "AIA"
    254 => "ATA"
    ...
```

:::

## UID and Name

Offers a list mapping unique identifiers (UIDs) to country names. This cached list facilitates efficient retrieval of country names based on UIDs.

::: code-group

```php [Input]
Country::getList()->uidAndName();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    "01J9VCYESCNW4EWFYB9ENTNCN2" => "Afghanistan"
    "01J9VCYEYFYD063XMYZR653QEB" => "Åland Islands"
    "01J9VCYET590JW3HK27CHBXYPH" => "Albania"
    "01J9VCYFDSTZ8F5VSDB2XFHGQJ" => "Algeria"
    "01J9VCYEX2RXVM2XNS61VZ11KR" => "American Samoa"
    "01J9VCYERPV0Q73J9MA9TBEKJ6" => "Andorra"
    "01J9VCYETMYK5GYHBD84539V1W" => "Angola"
    "01J9VCYESY8K411YFR48P7JPP1" => "Anguilla"
    "01J9VCYEV40SY7GX48CKEK4N05" => "Antarctica"
    ...
```

:::

## UID and Official Name

Provides a list of countries where each UID is linked to its official name. Reduces database queries by caching the data for improved performance.

::: code-group

```php [Input]
Country::getList()->uidAndOfficialName();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    "01J9VCYESCNW4EWFYB9ENTNCN2" => "Islamic Emirate of Afghanistan"
    "01J9VCYEYFYD063XMYZR653QEB" => "Åland Islands"
    "01J9VCYET590JW3HK27CHBXYPH" => "Republic of Albania"
    "01J9VCYFDSTZ8F5VSDB2XFHGQJ" => "People's Democratic Republic of Algeria"
    "01J9VCYEX2RXVM2XNS61VZ11KR" => "American Samoa"
    "01J9VCYERPV0Q73J9MA9TBEKJ6" => "Principality of Andorra"
    "01J9VCYETMYK5GYHBD84539V1W" => "Republic of Angola"
    "01J9VCYESY8K411YFR48P7JPP1" => "Anguilla"
    "01J9VCYEV40SY7GX48CKEK4N05" => "Antarctica"
    ...
```

:::

## UID and Alpha-2 Code

Generates a list associating UIDs with ISO Alpha-2 codes. Helps in converting unique identifiers to two-letter country codes efficiently.

::: code-group

```php [Input]
Country::getList()->uidAndAlpha2();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    "01J9VCYESCNW4EWFYB9ENTNCN2" => "AF"
    "01J9VCYEYFYD063XMYZR653QEB" => "AX"
    "01J9VCYET590JW3HK27CHBXYPH" => "AL"
    "01J9VCYFDSTZ8F5VSDB2XFHGQJ" => "DZ"
    "01J9VCYEX2RXVM2XNS61VZ11KR" => "AS"
    "01J9VCYERPV0Q73J9MA9TBEKJ6" => "AD"
    "01J9VCYETMYK5GYHBD84539V1W" => "AO"
    "01J9VCYESY8K411YFR48P7JPP1" => "AI"
    "01J9VCYEV40SY7GX48CKEK4N05" => "AQ"
    ...
```

:::

## UID and Alpha-3 Code

Returns a list mapping UIDs to ISO Alpha-3 codes. Useful for applications requiring three-letter country codes based on unique identifiers.

::: code-group

```php [Input]
Country::getList()->uidAndAlpha3();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    "01J9VCYESCNW4EWFYB9ENTNCN2" => "AFG"
    "01J9VCYEYFYD063XMYZR653QEB" => "ALA"
    "01J9VCYET590JW3HK27CHBXYPH" => "ALB"
    "01J9VCYFDSTZ8F5VSDB2XFHGQJ" => "DZA"
    "01J9VCYEX2RXVM2XNS61VZ11KR" => "ASM"
    "01J9VCYERPV0Q73J9MA9TBEKJ6" => "AND"
    "01J9VCYETMYK5GYHBD84539V1W" => "AGO"
    "01J9VCYESY8K411YFR48P7JPP1" => "AIA"
    "01J9VCYEV40SY7GX48CKEK4N05" => "ATA"
    ...
```

:::

## Name and Official Name

Provides a list where country names are mapped to their official names. Useful for displaying formal country names when only common names are available.

::: code-group

```php [Input]
Country::getList()->nameAndOfficialName();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    "Afghanistan" => "Islamic Emirate of Afghanistan"
    "Åland Islands" => "Åland Islands"
    "Albania" => "Republic of Albania"
    "Algeria" => "People's Democratic Republic of Algeria"
    "American Samoa" => "American Samoa"
    "Andorra" => "Principality of Andorra"
    "Angola" => "Republic of Angola"
    "Anguilla" => "Anguilla"
    "Antarctica" => "Antarctica"
    ...
```

:::

## Name and Alpha-2 Code

Generates a list associating country names with their ISO Alpha-2 codes. Aids in efficiently converting country names to two-letter codes.

::: code-group

```php [Input]
Country::getList()->nameAndAlpha2();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    "Afghanistan" => "AF"
    "Åland Islands" => "AX"
    "Albania" => "AL"
    "Algeria" => "DZ"
    "American Samoa" => "AS"
    "Andorra" => "AD"
    "Angola" => "AO"
    "Anguilla" => "AI"
    "Antarctica" => "AQ"
    ...
```

:::

## Name and Alpha-3 Code

Returns a list mapping country names to ISO Alpha-3 codes. Ideal for applications needing three-letter country codes from country names.

::: code-group

```php [Input]
Country::getList()->nameAndAlpha3();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    "Afghanistan" => "AFG"
    "Åland Islands" => "ALA"
    "Albania" => "ALB"
    "Algeria" => "DZA"
    "American Samoa" => "ASM"
    "Andorra" => "AND"
    "Angola" => "AGO"
    "Anguilla" => "AIA"
    "Antarctica" => "ATA"
    ...
```

:::

## Official Name and Alpha-2 Code

Provides a list mapping official country names to ISO Alpha-2 codes. Helps in converting official names to standard two-letter country codes.

::: code-group

```php [Input]
Country::getList()->officialNameAndAlpha2();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    "Islamic Emirate of Afghanistan" => "AF"
    "Åland Islands" => "AX"
    "Republic of Albania" => "AL"
    "People's Democratic Republic of Algeria" => "DZ"
    "American Samoa" => "AS"
    "Principality of Andorra" => "AD"
    "Republic of Angola" => "AO"
    "Anguilla" => "AI"
    "Antarctica" => "AQ"
    ...
```

:::

## Official Name and Alpha-3 Code

Generates a list associating official country names with ISO Alpha-3 codes. Useful for retrieving three-letter codes from official names.

::: code-group

```php [Input]
Country::getList()->officialNameAndAlpha3();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    "Islamic Emirate of Afghanistan" => "AFG"
    "Åland Islands" => "ALA"
    "Republic of Albania" => "ALB"
    "People's Democratic Republic of Algeria" => "DZA"
    "American Samoa" => "ASM"
    "Principality of Andorra" => "AND"
    "Republic of Angola" => "AGO"
    "Anguilla" => "AIA"
    "Antarctica" => "ATA"
    ...
```

:::

## Alpha-2 and ID

Offers a list mapping ISO Alpha-2 codes to id.

::: code-group

```php [Input]
Country::getList()->alpha2AndId();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    "AF" => 248
    "AX" => 260
    "AL" => 251
    "DZ" => 305
    "AS" => 256
    "AD" => 246
    "AO" => 253
    "AI" => 250
    "AQ" => 254
    ...
```

:::

## Alpha-2 and UID

Offers a list mapping ISO Alpha-2 codes to uid.

::: code-group

```php [Input]
Country::getList()->alpha2AndUid();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    "AF" => "01J9VCYESCNW4EWFYB9ENTNCN2"
    "AX" => "01J9VCYEYFYD063XMYZR653QEB"
    "AL" => "01J9VCYET590JW3HK27CHBXYPH"
    "DZ" => "01J9VCYFDSTZ8F5VSDB2XFHGQJ"
    "AS" => "01J9VCYEX2RXVM2XNS61VZ11KR"
    "AD" => "01J9VCYERPV0Q73J9MA9TBEKJ6"
    "AO" => "01J9VCYETMYK5GYHBD84539V1W"
    "AI" => "01J9VCYESY8K411YFR48P7JPP1"
    "AQ" => "01J9VCYEV40SY7GX48CKEK4N05"
    ...
```

:::

## Alpha-2 and Name

Offers a list mapping ISO Alpha-2 codes to Names.

::: code-group

```php [Input]
Country::getList()->alpha2AndName();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    "AF" => "Afghanistan"
    "AX" => "Åland Islands"
    "AL" => "Albania"
    "DZ" => "Algeria"
    "AS" => "American Samoa"
    "AD" => "Andorra"
    "AO" => "Angola"
    "AI" => "Anguilla"
    "AQ" => "Antarctica"
    ...
```

:::

## Alpha-2 and Official Name

Offers a list mapping ISO Alpha-2 codes to Official Name.

::: code-group

```php [Input]
Country::getList()->alpha2AndOfficialName();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    "AF" => "Islamic Emirate of Afghanistan"
    "AX" => "Åland Islands"
    "AL" => "Republic of Albania"
    "DZ" => "People's Democratic Republic of Algeria"
    "AS" => "American Samoa"
    "AD" => "Principality of Andorra"
    "AO" => "Republic of Angola"
    "AI" => "Anguilla"
    "AQ" => "Antarctica"
    ...
```

:::

## Alpha-2 and Alpha-3 Codes

Offers a list mapping ISO Alpha-2 codes to ISO Alpha-3 codes. Useful for converting between two-letter and three-letter country codes.

::: code-group

```php [Input]
Country::getList()->alpha2AndAlpha3();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    "AF" => "AFG"
    "AX" => "ALA"
    "AL" => "ALB"
    "DZ" => "DZA"
    "AS" => "ASM"
    "AD" => "AND"
    "AO" => "AGO"
    "AI" => "AIA"
    "AQ" => "ATA"
    ...
```

:::

## Alpha-3 and ID

Offers a list mapping ISO Alpha-3 codes to id.

::: code-group

```php [Input]
Country::getList()->alpha3AndId();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    "AFG" => 248
    "ALA" => 260
    "ALB" => 251
    "DZA" => 305
    "ASM" => 256
    "AND" => 246
    "AGO" => 253
    "AIA" => 250
    "ATA" => 254
    ...
```

:::

## Alpha-3 and UID

Offers a list mapping ISO Alpha-3 codes to uid.

::: code-group

```php [Input]
Country::getList()->alpha3AndUid();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    "AFG" => "01J9VCYESCNW4EWFYB9ENTNCN2"
    "ALA" => "01J9VCYEYFYD063XMYZR653QEB"
    "ALB" => "01J9VCYET590JW3HK27CHBXYPH"
    "DZA" => "01J9VCYFDSTZ8F5VSDB2XFHGQJ"
    "ASM" => "01J9VCYEX2RXVM2XNS61VZ11KR"
    "AND" => "01J9VCYERPV0Q73J9MA9TBEKJ6"
    "AGO" => "01J9VCYETMYK5GYHBD84539V1W"
    "AIA" => "01J9VCYESY8K411YFR48P7JPP1"
    "ATA" => "01J9VCYEV40SY7GX48CKEK4N05"
    ...
```

:::

## Alpha-3 and Name

Offers a list mapping ISO Alpha-3 codes to Names.

::: code-group

```php [Input]
Country::getList()->alpha3AndName();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    "AFG" => "Afghanistan"
    "ALA" => "Åland Islands"
    "ALB" => "Albania"
    "DZA" => "Algeria"
    "ASM" => "American Samoa"
    "AND" => "Andorra"
    "AGO" => "Angola"
    "AIA" => "Anguilla"
    "ATA" => "Antarctica"
    ...
```

:::

## Alpha-3 and Official Name

Offers a list mapping ISO Alpha-3 codes to Official Name.

::: code-group

```php [Input]
Country::getList()->alpha3AndOfficialName();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    "AFG" => "Islamic Emirate of Afghanistan"
    "ALA" => "Åland Islands"
    "ALB" => "Republic of Albania"
    "DZA" => "People's Democratic Republic of Algeria"
    "ASM" => "American Samoa"
    "AND" => "Principality of Andorra"
    "AGO" => "Republic of Angola"
    "AIA" => "Anguilla"
    "ATA" => "Antarctica"
    ...
```

:::

## Flags

The flags method returns a Facade called `FlagEmoji`, which can be used to work with the collection of flag emojis.

::: tip
Read more about **[`FlagEmoji`](/flag/emoji.html)** Facade
:::

## ID and Emoji

Returns a list of countries with IDs associated with their flag emojis. Enables easy retrieval of country flags using country IDs.

::: code-group

```php [Input]
Country::getList()->idAndEmoji();
```

```php [Output]
Lwwcas\LaravelCountries\Facades\FlagEmoji ▼
  flag_emoji: null
  on_data: array:9 [▼
    248 => Lwwcas\LaravelCountries\Facades\FlagEmoji {▼
      flag_emoji: array:9 [▼
        "css" => "\1F1E6\1F1EB"
        "hex" => "&#x1F1E6;&#x1F1EB;"
        "img" => "🇦🇫"
        "html" => "&#x1F1E6;&#x1F1EB;"
        "utf8" => "🇦🇫"
        "uCode" => "U+1F1E6 U+1F1EB"
        "utf16" => "\uD83C\uDDE6\uD83C\uDDEB"
        "decimal" => "&#127462;&#127467;"
        "shortcode" => ":flag-af:"
      ]
      on_data: null
      key: null
      attributes: array:9 [▶]
    }
    260 => Lwwcas\LaravelCountries\Facades\FlagEmoji {▼
      flag_emoji: array:9 [▼
        "css" => "\1F1E6\1F1FD"
        "hex" => "&#x1F1E6;&#x1F1FD;"
        "img" => "🇦🇽"
        "html" => "&#x1F1E6;&#x1F1FD;"
        "utf8" => "🇦🇽"
        "uCode" => "U+1F1E6 U+1F1FD"
        "utf16" => "\uD83C\uDDE6\uD83C\uDDFD"
        "decimal" => "&#127462;&#127485;"
        "shortcode" => ":flag-ax:"
      ]
      on_data: null
      key: null
      attributes: array:9 [▶]
    }
    251 => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶}
    305 => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶}
    256 => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶}
    246 => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶}
    253 => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶}
    250 => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶}
    254 => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶}
    ...
  ]
  key: null
  attributes: Illuminate\Support\Collection { ▶}
}
```

:::

## UID and Emoji

Offers a list of countries with UIDs connected to their flag emojis. Allows quick retrieval of country flags using UIDs.

::: code-group

```php [Input]
Country::getList()->uidAndEmoji();
```

```php [Output]
Lwwcas\LaravelCountries\Facades\FlagEmoji ▼
  flag_emoji: null
  on_data: array:9 [▼
    "01J9VCYESCNW4EWFYB9ENTNCN2" => Lwwcas\LaravelCountries\Facades\FlagEmoji {▼
      flag_emoji: array:9 [▼
        "css" => "\1F1E6\1F1EB"
        "hex" => "&#x1F1E6;&#x1F1EB;"
        "img" => "🇦🇫"
        "html" => "&#x1F1E6;&#x1F1EB;"
        "utf8" => "🇦🇫"
        "uCode" => "U+1F1E6 U+1F1EB"
        "utf16" => "\uD83C\uDDE6\uD83C\uDDEB"
        "decimal" => "&#127462;&#127467;"
        "shortcode" => ":flag-af:"
      ]
      on_data: null
      key: null
      attributes: array:9 [▶]
    }
    "01J9VCYEYFYD063XMYZR653QEB" => Lwwcas\LaravelCountries\Facades\FlagEmoji {▼
      flag_emoji: array:9 [▼
        "css" => "\1F1E6\1F1FD"
        "hex" => "&#x1F1E6;&#x1F1FD;"
        "img" => "🇦🇽"
        "html" => "&#x1F1E6;&#x1F1FD;"
        "utf8" => "🇦🇽"
        "uCode" => "U+1F1E6 U+1F1FD"
        "utf16" => "\uD83C\uDDE6\uD83C\uDDFD"
        "decimal" => "&#127462;&#127485;"
        "shortcode" => ":flag-ax:"
      ]
      on_data: null
      key: null
      attributes: array:9 [▶]
    }
    "01J9VCYET590JW3HK27CHBXYPH" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶ }
    "01J9VCYFDSTZ8F5VSDB2XFHGQJ" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶ }
    "01J9VCYEX2RXVM2XNS61VZ11KR" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶ }
    "01J9VCYERPV0Q73J9MA9TBEKJ6" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶ }
    "01J9VCYETMYK5GYHBD84539V1W" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶ }
    "01J9VCYESY8K411YFR48P7JPP1" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶ }
    "01J9VCYEV40SY7GX48CKEK4N05" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶ }
    ...
  ]
  key: null
  attributes: Illuminate\Support\Collection { ▶}
}
```

:::

## Name and Emoji

Offers a list of countries where names are linked to their flag emojis. Enables displaying country flags when only the country names are known.

::: code-group

```php [Input]
Country::getList()->nameAndEmoji();
```

```php [Output]
Lwwcas\LaravelCountries\Facades\FlagEmoji ▼
  flag_emoji: null
  on_data: array:9 [▼
    "Afghanistan" => Lwwcas\LaravelCountries\Facades\FlagEmoji {▼
      flag_emoji: array:9 [▼
        "css" => "\1F1E6\1F1EB"
        "hex" => "&#x1F1E6;&#x1F1EB;"
        "img" => "🇦🇫"
        "html" => "&#x1F1E6;&#x1F1EB;"
        "utf8" => "🇦🇫"
        "uCode" => "U+1F1E6 U+1F1EB"
        "utf16" => "\uD83C\uDDE6\uD83C\uDDEB"
        "decimal" => "&#127462;&#127467;"
        "shortcode" => ":flag-af:"
      ]
      on_data: null
      key: null
      attributes: array:9 [▶]
    }
    "Åland Islands" => Lwwcas\LaravelCountries\Facades\FlagEmoji {▼
      flag_emoji: array:9 [▼
        "css" => "\1F1E6\1F1FD"
        "hex" => "&#x1F1E6;&#x1F1FD;"
        "img" => "🇦🇽"
        "html" => "&#x1F1E6;&#x1F1FD;"
        "utf8" => "🇦🇽"
        "uCode" => "U+1F1E6 U+1F1FD"
        "utf16" => "\uD83C\uDDE6\uD83C\uDDFD"
        "decimal" => "&#127462;&#127485;"
        "shortcode" => ":flag-ax:"
      ]
      on_data: null
      key: null
      attributes: array:9 [▶]
    }
    "Albania" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "Algeria" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "American Samoa" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "Andorra" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "Angola" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "Anguilla" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "Antarctica" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    ...
  ]
  key: null
  attributes: Illuminate\Support\Collection { ▶}
}
```

:::

## Official Name and Emoji

Returns a list linking official country names to their flag emojis. Allows displaying country flags using official country names.

::: code-group

```php [Input]
Country::getList()->officialNameAndEmoji();
```

```php [Output]
Lwwcas\LaravelCountries\Facades\FlagEmoji ▼
  flag_emoji: null
  on_data: array:9 [▼
    "Islamic Emirate of Afghanistan" => Lwwcas\LaravelCountries\Facades\FlagEmoji {▼
      flag_emoji: array:9 [▼
        "css" => "\1F1E6\1F1EB"
        "hex" => "&#x1F1E6;&#x1F1EB;"
        "img" => "🇦🇫"
        "html" => "&#x1F1E6;&#x1F1EB;"
        "utf8" => "🇦🇫"
        "uCode" => "U+1F1E6 U+1F1EB"
        "utf16" => "\uD83C\uDDE6\uD83C\uDDEB"
        "decimal" => "&#127462;&#127467;"
        "shortcode" => ":flag-af:"
      ]
      on_data: null
      key: null
      attributes: array:9 [▶]
    }
    "Åland Islands" => Lwwcas\LaravelCountries\Facades\FlagEmoji {▼
      flag_emoji: array:9 [▼
        "css" => "\1F1E6\1F1FD"
        "hex" => "&#x1F1E6;&#x1F1FD;"
        "img" => "🇦🇽"
        "html" => "&#x1F1E6;&#x1F1FD;"
        "utf8" => "🇦🇽"
        "uCode" => "U+1F1E6 U+1F1FD"
        "utf16" => "\uD83C\uDDE6\uD83C\uDDFD"
        "decimal" => "&#127462;&#127485;"
        "shortcode" => ":flag-ax:"
      ]
      on_data: null
      key: null
      attributes: array:9 [▶]
    }
    "Republic of Albania" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "People's Democratic Republic of Algeria" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "American Samoa" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "Principality of Andorra" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "Republic of Angola" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "Anguilla" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "Antarctica" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    ...
  ]
  key: null
  attributes: Illuminate\Support\Collection { ▶}
}
```

:::

## Alpha-2 Code and Emoji

Provides a list associating ISO Alpha-2 codes with their corresponding flag emojis. Aids in displaying country flags using two-letter country codes.

::: code-group

```php [Input]
Country::getList()->alpha2AndEmoji();
```

```php [Output]
Lwwcas\LaravelCountries\Facades\FlagEmoji ▼
  flag_emoji: null
  on_data: array:9 [▼
    "AF" => Lwwcas\LaravelCountries\Facades\FlagEmoji {▼
      flag_emoji: array:9 [▼
        "css" => "\1F1E6\1F1EB"
        "hex" => "&#x1F1E6;&#x1F1EB;"
        "img" => "🇦🇫"
        "html" => "&#x1F1E6;&#x1F1EB;"
        "utf8" => "🇦🇫"
        "uCode" => "U+1F1E6 U+1F1EB"
        "utf16" => "\uD83C\uDDE6\uD83C\uDDEB"
        "decimal" => "&#127462;&#127467;"
        "shortcode" => ":flag-af:"
      ]
      on_data: null
      key: null
      attributes: array:9 [▶]
    }
    "AX" => Lwwcas\LaravelCountries\Facades\FlagEmoji {▼
      flag_emoji: array:9 [▼
        "css" => "\1F1E6\1F1FD"
        "hex" => "&#x1F1E6;&#x1F1FD;"
        "img" => "🇦🇽"
        "html" => "&#x1F1E6;&#x1F1FD;"
        "utf8" => "🇦🇽"
        "uCode" => "U+1F1E6 U+1F1FD"
        "utf16" => "\uD83C\uDDE6\uD83C\uDDFD"
        "decimal" => "&#127462;&#127485;"
        "shortcode" => ":flag-ax:"
      ]
      on_data: null
      key: null
      attributes: array:9 [▶]
    }
    "AL" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "DZ" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "AS" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "AD" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "AO" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "AI" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "AQ" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    ...
  ]
  key: null
  attributes: Illuminate\Support\Collection { ▶}
}
```

:::

## Alpha-3 Code and Emoji

Generates a list mapping ISO Alpha-3 codes to their flag emojis. Useful for displaying country flags when only three-letter codes are available.

::: code-group

```php [Input]
Country::getList()->alpha3AndEmoji();
```

```php [Output]
Lwwcas\LaravelCountries\Facades\FlagEmoji ▼
  flag_emoji: null
  on_data: array:9 [▼
    "AFG" => Lwwcas\LaravelCountries\Facades\FlagEmoji {▼
      flag_emoji: array:9 [▼
        "css" => "\1F1E6\1F1EB"
        "hex" => "&#x1F1E6;&#x1F1EB;"
        "img" => "🇦🇫"
        "html" => "&#x1F1E6;&#x1F1EB;"
        "utf8" => "🇦🇫"
        "uCode" => "U+1F1E6 U+1F1EB"
        "utf16" => "\uD83C\uDDE6\uD83C\uDDEB"
        "decimal" => "&#127462;&#127467;"
        "shortcode" => ":flag-af:"
      ]
      on_data: null
      key: null
      attributes: array:9 [▶]
    }
    "ALA" => Lwwcas\LaravelCountries\Facades\FlagEmoji {▼
      flag_emoji: array:9 [▼
        "css" => "\1F1E6\1F1FD"
        "hex" => "&#x1F1E6;&#x1F1FD;"
        "img" => "🇦🇽"
        "html" => "&#x1F1E6;&#x1F1FD;"
        "utf8" => "🇦🇽"
        "uCode" => "U+1F1E6 U+1F1FD"
        "utf16" => "\uD83C\uDDE6\uD83C\uDDFD"
        "decimal" => "&#127462;&#127485;"
        "shortcode" => ":flag-ax:"
      ]
      on_data: null
      key: null
      attributes: array:9 [▶]
    }
    "ALB" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "DZA" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "ASM" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "AND" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "AGO" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "AIA" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    "ATA" => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▶},
    ...
  ]
  key: null
  attributes: Illuminate\Support\Collection { ▶}
}
```

:::
