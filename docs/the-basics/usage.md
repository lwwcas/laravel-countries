# Basic Usage

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

This is the easiest and most straightforward way to get a list of countries.

Whether you need country names, codes, or even their flags, this method provides it all in a simple and efficient way. It’s perfect for quickly accessing country information without any hassle.

::: tip
If you liked this simple version, you definitely need to check out the **[`Full version`](/list-country/pair-list.html)** of the country list! There's so much more you can do more details, more options, and even deeper customizations to fit all your needs.
:::

## ID and Name

Offers a list of countries with IDs associated with their translated names. Useful for quickly fetching country names based on their IDs.

::: code-group

```php [Input]
use Lwwcas\LaravelCountries\Models\Country;

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

## Alpha-2 and Name

Offers a list mapping ISO Alpha-2 codes to Names.

::: code-group

```php [Input]
use Lwwcas\LaravelCountries\Models\Country;

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

## Only Emoji in Img

Returns a list of emojis img.

::: code-group

```php [Input]
use Lwwcas\LaravelCountries\Models\Country;

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
