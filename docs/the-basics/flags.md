# Basic Usage Flags

On the Flags and Emoji page you can find everything you need to know about

::: tip
More in **[`Flags Emoji`](/flag/emoji.html)**
:::

## Usage

To get a flag, use the following code:

```php{5}
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();

$country->getFlagEmoji();
// Output 🇵🇹

```

For each of these formats, we provide dedicated `getters` and `where` methods to make their usage even easy-to-use and more convenient for you.

## Flag Img

```php{5}
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();

$country->getFlagEmoji();
// Output 🇵🇹

```

## Flag UCode

```php{5}
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();

$country->getFlagEmojiUCode();
// Output U+1F1F5 U+1F1F9

```

## Flag Shor Code

```php{5}
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();

$country->getFlagEmojiShortCode();
// Output :flag-pt:

```
