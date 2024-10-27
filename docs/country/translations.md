# About Translatable

This package relies on **[Spatie's Laravel Translatable](https://github.com/spatie/laravel-translatable)** to handle translations efficiently.

::: tip
Learn more about the package we trust to efficiently translate regions within our own package!
**[Spatie's Laravel Translatable](/introduction/available-languages.html#required-dependencies)**
:::

## Usage

To start using `Country::class`, just add this to your code:

```php{1}
use Lwwcas\LaravelCountries\Models\Country;

Country::all();

```

Although this method allows you to access very specific queries within the country translation table for particular purposes, it's not the most common way to utilize all the features that country translations offer.

::: warning
We don't recommend using this approach to access the information.
:::

## How it Works

The magic happens when you set your default language:

**[More about config translate](/introduction/available-languages.html#configuration)**

```text
usually in config file app.php as

'locale' => env('APP_LOCALE', 'en')

and in config file translatable.php as

'locales' => [
    'en',
    'fr',
    'es' => [
        'MX', // mexican spanish
        'CO', // colombian spanish
    ],
],

```

Let's suppose we start with English:

Now, we can perform all kinds of queries on `Country::class` in any previously installed language, and we'll access the same region.

For instance, if we try to find Portugal like this:

```php{3}
use Lwwcas\LaravelCountries\Models\Country;

Country::::whereName('Portugal')->first();
```

Written in English, we'll get the same Portugal as if we search for Portugal in Russian:

```php{3}
use Lwwcas\LaravelCountries\Models\Country;

Country::::whereName('Португалия')->first();
```

Similarly, if we search using slugs:

```php{3,5}
use Lwwcas\LaravelCountries\Models\Country;

Country::::whereName('Португалия')->first();
or
Country::whereSlug('portugaliia')->first();
```

We'll get the same result a `Country::class` collection with Portugal in English.

## Scopes

Returns all country being translated in:

::: code-group

```php [english]
use Lwwcas\LaravelCountries\Models\Country;

Region::translatedIn('en')->get();

```

```php [spanish]
use Lwwcas\LaravelCountries\Models\Country;

Region::translatedIn('es')->get();

```

:::

Returns all regions not being translated in:

::: code-group

```php [english]
use Lwwcas\LaravelCountries\Models\Country;

Country::notTranslatedIn('en')->get();

```

```php [spanish]
use Lwwcas\LaravelCountries\Models\Country;

Country::notTranslatedIn('es')->get();

```

:::

## Methods

This returns an instance of `Country::class` using the default or given locale. It can also use the configured fallback locale if first locale isn't present.

```php
->translate(?string $locale = null, bool $withFallback = false)
```

```php
$country->translate(); // returns the german translation model
$country->translate('fr'); // returns the french translation model
$country->translate('it'); // returns null
$country->translate('it', true); // returns the english translation model
```

This returns an instance of `Country::class` using the default or given locale and will always use fallback if needed.

```php
->translateOrDefault(?string $locale = null)
```

```php
$country->translateOrDefault(); // returns the german translation model
$country->translateOrDefault('fr'); // returns the french translation model
$country->translateOrDefault('it'); // returns the english translation model
```

This returns an instance of `Country::class` using the default or given locale and will create a new instance if needed.

```php
->translateOrNew(?string $locale = null)
```

```php
$country->translateOrNew(); // returns the german translation model
$country->translateOrNew('fr'); // returns the french translation model
$country->translateOrNew('it'); // returns the new italian translation model
```

Check if the post has a translation in default or given locale.

```php
->hasTranslation(?string $locale = null)
```

```php
$country->hasTranslation(); // true
$country->hasTranslation('fr'); // true
$country->hasTranslation('cn'); // false
```

Returns all the translations as array - the structure is the same as it's accepted by the fill(array $data) method.

```php
->getTranslationsArray()
```

```php
$country->getTranslationsArray();

// Returns
[
 'en' => ['name' => 'Africa'],
 'fr' => ['name' => 'Afrique'],
 'de' => ['name' => 'Afrika'],
];
```
