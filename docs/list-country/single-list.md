# Single List

This collection of methods always returns a Laravel collection with a list of items based on the method used.
These methods are helpful to quickly retrieve specific fields from the country data.

## Only ID

Returns a list of country IDs.

::: code-group

```php [Input]
Country::getList()->onlyId();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    0 => 248
    1 => 260
    2 => 251
    3 => 305
    4 => 256
    5 => 246
    6 => 253
    7 => 250
    8 => 254
    9 => 249
    ...
```

:::


## Only UID

Returns a list of country UIDs.

::: code-group

```php [Input]
Country::getList()->onlyUid();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    0 => "01J9VCYESCNW4EWFYB9ENTNCN2"
    1 => "01J9VCYEYFYD063XMYZR653QEB"
    2 => "01J9VCYET590JW3HK27CHBXYPH"
    3 => "01J9VCYFDSTZ8F5VSDB2XFHGQJ"
    4 => "01J9VCYEX2RXVM2XNS61VZ11KR"
    5 => "01J9VCYERPV0Q73J9MA9TBEKJ6"
    6 => "01J9VCYETMYK5GYHBD84539V1W"
    7 => "01J9VCYESY8K411YFR48P7JPP1"
    8 => "01J9VCYEV40SY7GX48CKEK4N05"
    9 => "01J9VCYESPTRKZR0ZDH10EWX56"
    ...
```

:::

## Only Name

Returns a list of country names

::: code-group

```php [Input]
Country::getList()->onlyName();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    0 => "Afghanistan"
    1 => "Åland Islands"
    2 => "Albania"
    3 => "Algeria"
    4 => "American Samoa"
    5 => "Andorra"
    6 => "Angola"
    7 => "Anguilla"
    8 => "Antarctica"
    9 => "Antigua and Barbuda"
    ...
```

:::

## Only Official Names

Returns a list of official country names.

::: code-group

```php [Input]
Country::getList()->onlyOfficialName();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    0 => "Islamic Emirate of Afghanistan"
    1 => "Åland Islands"
    2 => "Republic of Albania"
    3 => "People's Democratic Republic of Algeria"
    4 => "American Samoa"
    5 => "Principality of Andorra"
    6 => "Republic of Angola"
    7 => "Anguilla"
    8 => "Antarctica"
    9 => "Antigua and Barbuda"
    ...
```

:::

## Only Iso

Returns a list of ISO 3166-1 alpha-2 codes.

::: code-group

```php [Input]
Country::getList()->onlyIso();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    0 => "AF"
    1 => "AX"
    2 => "AL"
    3 => "DZ"
    4 => "AS"
    5 => "AD"
    6 => "AO"
    7 => "AI"
    8 => "AQ"
    9 => "AG"
    ...
```

:::

## Only Alpha 2

Returns a list of ISO 3166-1 alpha-2 codes.

::: code-group

```php [Input]
Country::getList()->onlyAlpha2();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    0 => "AF"
    1 => "AX"
    2 => "AL"
    3 => "DZ"
    4 => "AS"
    5 => "AD"
    6 => "AO"
    7 => "AI"
    8 => "AQ"
    9 => "AG"
    ...
```

:::

## Only Alpha 3

Returns a list of ISO 3166-1 alpha-3 codes.

::: code-group

```php [Input]
Country::getList()->onlyAlpha3();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    0 => "AFG"
    1 => "ALA"
    2 => "ALB"
    3 => "DZA"
    4 => "ASM"
    5 => "AND"
    6 => "AGO"
    7 => "AIA"
    8 => "ATA"
    9 => "ATG"
    ...
```

:::

## Flags

The flags method (`onlyFlag()` and `onlyEmoji()`) returns a Facade called `FlagEmoji`, which can be used to work with the collection of flag emojis.

::: tip
Read more about **[`FlagEmoji`](/flag/emoji.html)** Facade
:::

## Only Flag

Returns a list of country flag emojis.

::: code-group

```php [Input]
Country::getList()->onlyFlag();
```

```php [Output]
Lwwcas\LaravelCountries\Facades\FlagEmoji {▼
   flag_emoji: null
   on_data: array:245 [▼
    0 => Lwwcas\LaravelCountries\Facades\FlagEmoji {#527 ▼
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
    1 => Lwwcas\LaravelCountries\Facades\FlagEmoji {#526 ▼
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
    2 => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▼
      flag_emoji: array:9 [▼
        "css" => "\1F1E6\1F1F1"
        "hex" => "&#x1F1E6;&#x1F1F1;"
        "img" => "🇦🇱"
        "html" => "&#x1F1E6;&#x1F1F1;"
        "utf8" => "🇦🇱"
        "uCode" => "U+1F1E6 U+1F1F1"
        "utf16" => "\uD83C\uDDE6\uD83C\uDDF1"
        "decimal" => "&#127462;&#127473;"
        "shortcode" => ":flag-al:"
      ]
      on_data: null
      key: null
      attributes: array:9 [▶]
    }
    ...
```

:::

## Only Emoji

Returns a list of country flag emojis.

::: code-group

```php [Input]
Country::getList()->onlyEmoji();
```

```php [Output]
Lwwcas\LaravelCountries\Facades\FlagEmoji {▼
   flag_emoji: null
   on_data: array:245 [▼
    0 => Lwwcas\LaravelCountries\Facades\FlagEmoji {#527 ▼
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
    1 => Lwwcas\LaravelCountries\Facades\FlagEmoji {#526 ▼
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
    2 => Lwwcas\LaravelCountries\Facades\FlagEmoji { ▼
      flag_emoji: array:9 [▼
        "css" => "\1F1E6\1F1F1"
        "hex" => "&#x1F1E6;&#x1F1F1;"
        "img" => "🇦🇱"
        "html" => "&#x1F1E6;&#x1F1F1;"
        "utf8" => "🇦🇱"
        "uCode" => "U+1F1E6 U+1F1F1"
        "utf16" => "\uD83C\uDDE6\uD83C\uDDF1"
        "decimal" => "&#127462;&#127473;"
        "shortcode" => ":flag-al:"
      ]
      on_data: null
      key: null
      attributes: array:9 [▶]
    }
    ...
```

:::

## Only Emoji in Img

Returns a list of emojis img.

::: code-group

```php [Input]
Country::getList()->onlyEmojiInImg();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    0 => "🇦🇫"
    1 => "🇦🇽"
    2 => "🇦🇱"
    3 => "🇩🇿"
    4 => "🇦🇸"
    5 => "🇦🇩"
    6 => "🇦🇴"
    7 => "🇦🇮"
    8 => "🇦🇶"
    9 => "🇦🇬"
    ...
```

:::

## Only Emoji in UTF8

Returns a list of emojis UTF8.

::: code-group

```php [Input]
Country::getList()->onlyEmojiInUtf8();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    0 => "🇦🇫"
    1 => "🇦🇽"
    2 => "🇦🇱"
    3 => "🇩🇿"
    4 => "🇦🇸"
    5 => "🇦🇩"
    6 => "🇦🇴"
    7 => "🇦🇮"
    8 => "🇦🇶"
    9 => "🇦🇬"
    ...
```

:::

## Only Emoji in UTF16

Returns a list of emojis UTF16.

::: code-group

```php [Input]
Country::getList()->onlyEmojiInUtf16();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    0 => "\uD83C\uDDE6\uD83C\uDDEB"
    1 => "\uD83C\uDDE6\uD83C\uDDFD"
    2 => "\uD83C\uDDE6\uD83C\uDDF1"
    3 => "\uD83C\uDDE9\uD83C\uDDFF"
    4 => "\uD83C\uDDE6\uD83C\uDDF8"
    5 => "\uD83C\uDDE6\uD83C\uDDE9"
    6 => "\uD83C\uDDE6\uD83C\uDDF4"
    7 => "\uD83C\uDDE6\uD83C\uDDEE"
    8 => "\uD83C\uDDE6\uD83C\uDDF6"
    9 => "\uD83C\uDDE6\uD83C\uDDEC"
    ...
```

:::

## Only Emoji in HTML

Returns a list of emojis html.

::: code-group

```php [Input]
Country::getList()->onlyEmojiInHtml();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    0 => "&#x1F1E6;&#x1F1EB;"
    1 => "&#x1F1E6;&#x1F1FD;"
    2 => "&#x1F1E6;&#x1F1F1;"
    3 => "&#x1F1E9;&#x1F1FF;"
    4 => "&#x1F1E6;&#x1F1F8;"
    5 => "&#x1F1E6;&#x1F1E9;"
    6 => "&#x1F1E6;&#x1F1F4;"
    7 => "&#x1F1E6;&#x1F1EE;"
    8 => "&#x1F1E6;&#x1F1F6;"
    9 => "&#x1F1E6;&#x1F1EC;"
    ...
```

:::

## Only Emoji in CSS

Returns a list of emojis css.

::: code-group

```php [Input]
Country::getList()->onlyEmojiInCss();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    0 => "\1F1E6\1F1EB"
    1 => "\1F1E6\1F1FD"
    2 => "\1F1E6\1F1F1"
    3 => "\1F1E9\1F1FF"
    4 => "\1F1E6\1F1F8"
    5 => "\1F1E6\1F1E9"
    6 => "\1F1E6\1F1F4"
    7 => "\1F1E6\1F1EE"
    8 => "\1F1E6\1F1F6"
    9 => "\1F1E6\1F1EC"
    ...
```

:::

## Only Emoji in Hex

Returns a list of emojis hex.

::: code-group

```php [Input]
Country::getList()->onlyEmojiInHex();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    0 => "&#x1F1E6;&#x1F1EB;"
    1 => "&#x1F1E6;&#x1F1FD;"
    2 => "&#x1F1E6;&#x1F1F1;"
    3 => "&#x1F1E9;&#x1F1FF;"
    4 => "&#x1F1E6;&#x1F1F8;"
    5 => "&#x1F1E6;&#x1F1E9;"
    6 => "&#x1F1E6;&#x1F1F4;"
    7 => "&#x1F1E6;&#x1F1EE;"
    8 => "&#x1F1E6;&#x1F1F6;"
    9 => "&#x1F1E6;&#x1F1EC;"
    ...
```

:::

## Only Emoji in uCode

Returns a list of emojis uCode.

::: code-group

```php [Input]
Country::getList()->onlyEmojiInUCode();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    0 => "U+1F1E6 U+1F1EB"
    1 => "U+1F1E6 U+1F1FD"
    2 => "U+1F1E6 U+1F1F1"
    3 => "U+1F1E9 U+1F1FF"
    4 => "U+1F1E6 U+1F1F8"
    5 => "U+1F1E6 U+1F1E9"
    6 => "U+1F1E6 U+1F1F4"
    7 => "U+1F1E6 U+1F1EE"
    8 => "U+1F1E6 U+1F1F6"
    9 => "U+1F1E6 U+1F1EC"
    ...
```

:::

## Only Emoji in Decimal

Returns a list of emojis decimal.

::: code-group

```php [Input]
Country::getList()->onlyEmojiInDecimal();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    0 => "&#127462;&#127467;"
    1 => "&#127462;&#127485;"
    2 => "&#127462;&#127473;"
    3 => "&#127465;&#127487;"
    4 => "&#127462;&#127480;"
    5 => "&#127462;&#127465;"
    6 => "&#127462;&#127476;"
    7 => "&#127462;&#127470;"
    8 => "&#127462;&#127478;"
    9 => "&#127462;&#127468;"
    ...
```

:::

## Only Emoji in short code

Returns a list of emojis shortcode.

::: code-group

```php [Input]
Country::getList()->onlyEmojiInShortCode();
```

```php [Output]
Illuminate\Support\Collection {
  items: array:245 [▼
    0 => ":flag-af:"
    1 => ":flag-ax:"
    2 => ":flag-al:"
    3 => ":flag-dz:"
    4 => ":flag-as:"
    5 => ":flag-ad:"
    6 => ":flag-ao:"
    7 => ":flag-ai:"
    8 => ":flag-aq:"
    9 => ":flag-ag:"
    ...
```

:::
