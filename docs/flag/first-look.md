# Your First Look

You'll discover how we offer country flags in various formats, making it super easy for you to display them in your projects. Whether you need flags as emojis, in HTML, or even CSS formats, we've got you covered! You can access these flags in multiple ways, ensuring flexibility and compatibility with your needs.

From classic emoji flags to Unicode, you have plenty of options to choose from when representing countries visually.

## Usage

To get a flag, use the following code:

```php{5}
->getFlagEmoji()
```

```php{5}
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();

$country->getFlagEmoji();

// Output 🇵🇹

```

## Flag Formats

You can explore various formats that we offer to represent country flags. These formats are designed to make it easy for developers to display flags in different environments and use cases. Each flag is available in the following formats:

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

- **CSS:** Use this to display flags with CSS-based methods.
- **Hexadecimal Code (Hex):** A format for rendering flags with hexadecimal character references.
- **Image (img):** The standard emoji representation of the flag, which can be displayed directly as an image.
- **HTML:** The flag in HTML entity code, which can be embedded into web content.
- **UTF-8:** The UTF-8 encoding of the flag for web and software applications.
- **Unicode Code (UCode):** The Unicode points of the flag in the "U+" format, widely used across platforms.
- **UTF-16:** The UTF-16 encoding format for the flag, often used in systems that require specific Unicode encoding.
- **Decimal Code:** The decimal representation of the flag, ideal for HTML environments.
- **Shortcode:** A handy shortcode for platforms that support shortcodes (e.g., Slack, GitHub) to display flags easily.


For each of these formats, we provide dedicated `getters` and `where` methods to make their usage even easy-to-use and more convenient for you.


## Flag Colors Formats

You can explore the various formats available for representing flag colors. We offer a comprehensive set of color data for each flag, making it easy for you to display them in the format that best suits your project.

Each color is represented in different formats, including:

```json
{
  "name": ["Blue", "Yellow", "Red"],
  "web_name": ["blue", "yellow", "red"],
  "hex": ["#0032A0", "#FEDF00", "#D1001F"],
  "rgb": ["0,50,160", "254,223,0", "209,0,31"],
  "cmyk": ["100,69,0,37", "0,12,100,0", "0,100,85,18"],
  "hsl": ["224,100%,31%", "52,100%,50%", "350,100%,41%"],
  "hsv": ["224,100%,63%", "52,100%,100%", "350,100%,82%"],
  "pantone": ["Pantone 286 C", "Pantone 116 C", "Pantone 199 C"],
  "contrast": ["#FFFFFF", "#000000", "#FFFFFF"]
}
```

- **Hexadecimal Code (Hex):** A six-character code (e.g., `#0032A0`, `#FEDF00`, `#D1001F`) used in web development to define specific colors. It’s a universal standard in HTML and CSS.
- **RGB (Red, Green, Blue):** A digital color format (e.g., `0,50,160`, `254,223,0`, `209,0,31`) that breaks down colors into red, green, and blue components, making it ideal for digital displays like screens and mobile devices.
- **CMYK (Cyan, Magenta, Yellow, Key/Black):** A color format (e.g., `100,69,0,37`, `0,12,100,0`, `0,100,85,18`) primarily used in printing, ensuring accurate reproduction of colors on paper for high-quality print jobs.
- **HSL (Hue, Saturation, Lightness):** A format (e.g., `224,100%,31%`, `52,100%,50%`, `350,100%,41%`) that describes colors based on how humans perceive them. This is particularly useful when designing interfaces that require aesthetic control over shades and tints.
- **HSV (Hue, Saturation, Value):** Similar to HSL (e.g., `224,100%,63%`, `52,100%,100%`, `350,100%,82%`), but more focused on how colors are represented in digital images, where saturation and brightness are critical.
- **Pantone:** A globally standardized color system (e.g., `Pantone 286 C`, `Pantone 116 C`, `Pantone 199 C`) widely used in industries such as printing, fashion, and manufacturing for precise color matching.
- **Contrast:** Indicates the ideal contrast color (e.g., `#FFFFFF`, `#000000`, `#FFFFFF`) for text or elements displayed on top of the flag color. This ensures optimal readability, whether it's black or white text on colored backgrounds.


Each color also includes a contrast color to ensure readability when displayed on backgrounds of that color.
