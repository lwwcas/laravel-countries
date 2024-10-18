# Emoji

This section lets you easily grab country flags as emojis! It's a fun and simple way to display flags in your projects, perfect for user interfaces or anywhere you need a quick, compact flag representation.

This is perfect for adding a fun and universal representation of countries in your project, whether it's for visual displays, user interfaces, or any context where a compact flag representation is needed.

## Flag Emoji By

Returns the flag emoji based on the specified type.

```php
->getFlagEmojiBy(string $type = 'img')
```

```php [Example]
$country = Country::inRandomOrder()->first();

$country->getFlagEmojiBy(); // Get Img
$country->getFlagEmojiBy('img'); // Get Img
$country->getFlagEmojiBy('utf8'); // Get Utf8
$country->getFlagEmojiBy('utf16'); // Get Utf16
$country->getFlagEmojiBy('uCode'); // Get uCode
$country->getFlagEmojiBy('hex'); // Get Hex
$country->getFlagEmojiBy('html'); // Get Html
$country->getFlagEmojiBy('css'); // Get Css
$country->getFlagEmojiBy('decimal'); // Get Decimal
$country->getFlagEmojiBy('shortcode'); // Get Short Code
```

## Flag Emoji Image

Returns the flag emoji

```php
->getFlagEmoji()
```

```php [Example]
$country = Country::inRandomOrder()->first();

// all functions are the same and return the same value
$country->getFlagEmoji();
$country->getFlagEmojiImage();
$country->getFlagEmojiImg();
```

### Output Html

Returns the flag emoji as an image wrapped in an HTML element.

```php
->getFlagEmojiImgWithHtmlCode()
```

::: code-group

```php [Input]
$country = Country::inRandomOrder()->first();

$country->getFlagEmojiImgWithHtmlCode();
```

```html [Output]
<span>🇾🇪</span>
```

:::

## Flag Emoji UTF8

Returns the flag emoji in UTF-8 format.

```php
->getFlagEmojiUtf8()
```

```php [Example]
$country = Country::inRandomOrder()->first();

$country->getFlagEmojiUtf8();
```

### Output Html

Returns the flag emoji in UTF-8 format wrapped in an HTML element.

```php
->getFlagEmojiUtf8WithHtmlCode()
```

::: code-group

```php [Input]
$country = Country::inRandomOrder()->first();

$country->getFlagEmojiUtf8WithHtmlCode();
```

```html [Output]
<span>🇷🇺</span>
```

:::

## Flag Emoji UTF16

Returns the flag emoji in UTF-16 format.

```php
->getFlagEmojiUtf16()
```

```php [Example]
$country = Country::inRandomOrder()->first();

$country->getFlagEmojiUtf16();
```

### Output Html

Returns the flag emoji in UTF-16 format wrapped in an HTML element.

```php
// Output Html and Css Code
->getFlagEmojiUtf16WithCode(string $divId = 'emoji-utf16')
// Output Html Code
->getFlagEmojiUtf16WithHtmlCode(string $divId = 'emoji-utf16')
// Output Script Code
->getFlagEmojiUtf16WithScriptCode(string $divId = 'emoji-utf16', bool $withTag = false)
```

::: code-group

```php [Input]
$country = Country::inRandomOrder()->first();

$country->getFlagEmojiUtf16WithCode();
```

```html [Output]
<span id="emoji-utf16"></span>

<script>
    document.getElementById("emoji-utf16").innerText = "\uD83C\uDDE7\uD83C\uDDF7";
</script>
```

:::

### Output Html and JavaScript

Returns the flag emoji in UTF-16 format wrapped in an HTML element and includes JavaScript to update the HTML element.

::: code-group

```php [Input]
$country = Country::inRandomOrder()->first();

$country->getFlagEmojiUtf16WithHtmlCode();
```

```html [Output]
<span id="emoji-utf16"></span>
```

:::

::: code-group

```php [Input]
$country = Country::inRandomOrder()->first();

$country->getFlagEmojiUtf16WithScriptCode();
```

```html [Output]
<script>
    document.getElementById("emoji-utf16").innerText = "\uD83C\uDDE7\uD83C\uDDF7";
</script>
```

```html [Output Without Tag]
    document.getElementById("emoji-utf16").innerText = "\uD83C\uDDE7\uD83C\uDDF7";
```

:::

## Flag Emoji Unicode Code

Returns the flag emoji as a Unicode code point.

## Flag Emoji Hexadecimal

Returns the flag emoji as a hexadecimal representation.

### Output Html

Returns the flag emoji as a hexadecimal representation wrapped in an HTML element.

## Flag Emoji HTML Entity

Returns the flag emoji as an HTML entity.

### Output Html

Returns the flag emoji as an HTML entity wrapped in an HTML element.

## Flag Emoji CSS

Returns the flag emoji as a CSS value.

### Output CSS and Html

Returns the flag emoji as a CSS value and includes an HTML element for styling the flag emoji.

## Flag Emoji Decimal

Returns the flag emoji as a decimal representation.

### Output Html

Returns the flag emoji as a decimal representation wrapped in an HTML element.

## Flag Emoji Shortcode

Returns the flag emoji as a shortcode.
