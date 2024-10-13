# Basic Usage Flags

## Usage

To get a flag, use the following code:

```php{5}
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();

$country->getFlagEmoji();
// Output 🇵🇹

```

## Flag Emoji Formats

We currently offer country flags in 9 different formats:

```json

{
  "css": "\\1F1F5\\1F1F9",
  "hex": "&#x1F1F5;&#x1F1F9;",
  "img": "🇵🇹",
  "html": "&#x1F1F5;&#x1F1F9;",
  "utf8": "🇵🇹",
  "uCode": "U+1F1F5 U+1F1F9",
  "utf16": "\\uD83C\\uDDF5\\uD83C\\uDDF9",
  "decimal": "&#127477;&#127481;",
  "shortcode": ":flag-pt:"
}

```

For each of these formats, we provide dedicated `getters` and `where` methods to make their usage even easy-to-use and more convenient for you.

## Flag Getters

The emoji flag getters follow a simple pattern: `getFlagEmoji + key()`.
For example, to retrieve the flag in a specific format, you would use something like `getFlagEmojiImg()` or `getFlagEmojiHtml()`.

These getters are available when working with the `Country::class` collection, allowing you to easily access the country's flag in your preferred format.

### Flag Img

```php{5}
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();

$country->getFlagEmoji();
// Output 🇵🇹

```

### Flag Utf8

```php{5}
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();

$country->getFlagEmojiUtf8();
// Output 🇵🇹

```

### Flag Utf16

```php{5}
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();

$country->getFlagEmojiUtf16();
// Output \\uD83C\\uDDF5\\uD83C\\uDDF9

```

### Flag UCode

```php{5}
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();

$country->getFlagEmojiUCode();
// Output U+1F1F5 U+1F1F9

```

### Flag Hex

```php{5}
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();

$country->getFlagEmojiHex();
// Output &#x1F1F5;&#x1F1F9;

```

### Flag Html

```php{5}
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();

$country->getFlagEmojiHtml();
// Output &#x1F1F5;&#x1F1F9;

```

### Flag Css

```php{5}
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();

$country->getFlagEmojiCss();
// Output \\1F1F5\\1F1F9

```

### Flag Decimal

```php{5}
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();

$country->getFlagEmojiDecimal();
// Output &#127477;&#127481;

```

### Flag Shor Code

```php{5}
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();

$country->getFlagEmojiShortCode();
// Output :flag-pt:

```
