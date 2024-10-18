# Facade

The `FlagEmoji` facade is designed to enable you to interact with `flag emoji attributes` independently from the broader country data.

It uses a collection of flag emoji attributes, allowing you to retrieve, manipulate, and access specific emoji information in various formats (e.g., UTF-8, CSS, hexadecimal, etc.).

This is particularly useful for displaying flags or performing operations on flag emojis without dealing with the entire country dataset.

::: tip
And all the methods you can see on the **[`Emoji page`](/flag/emoji.html#emoji)**
:::

## Usage

You can easily initialize the `FlagEmoji` facade by passing a single flag's attributes or a collection of them:

```php{3}
use Lwwcas\LaravelCountries\Facades\FlagEmoji;

new FlagEmoji([
    "css" => "\\1F1F5\\1F1F9",
    "hex" => "&#x1F1F5;&#x1F1F9;",
    "img" => "🇵🇹",
    "html" => "&#x1F1F5;&#x1F1F9;",
    "utf8" => "🇵🇹",
    "uCode" => "U+1F1F5 U+1F1F9",
    "utf16" => "\\uD83C\\uDDF5\\uD83C\\uDDF9",
    "decimal" => "&#127477;&#127481;",
    "shortcode" => ":flag-pt:"
]);
```

You can also pass a collection of flag attributes, which can be generated through a query result:

```php{4}
use Lwwcas\LaravelCountries\Facades\FlagEmoji;

$response = $country->withNamesSlugsAndFlags()->pluck('flag_emoji', 'uid');
return (new FlagEmoji($result));

```

## Method Listing

Whether you're working with collections or individual flags, these methods ensure easy access and flexibility in handling flag emoji data.

## Get

Retrieves a specific flag emoji attribute by key. If no key is provided, it returns all flag emoji attributes as a collection.

```php
->get($flagKey = null)
```

```php
$flagEmoji = new FlagEmoji($attributes);
$flagEmoji->get(); // Returns all attributes
$flagEmoji->get('css'); // Returns the CSS representation of the emoji
```

## First

Returns the first flag emoji attribute from the collection.

```php
->first()
```

```php
$firstFlag = $flagEmoji->first();
```

## Last

Retrieves the last flag emoji attribute from the collection.

```php
->last()
```

```php
$lastFlag = $flagEmoji->last();
```

## Key

Returns the key of the current flag emoji.

```php
->key()
```

```php
$keyFlag = $flagEmoji->key();
```

## keys

Returns a collection of the keys of all flag emoji attributes.

```php
->keys()
```

```php
$keysFlag = $flagEmoji->keys();
```
