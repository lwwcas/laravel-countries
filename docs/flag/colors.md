# Colors

This section provides a suite of functions to retrieve the colors used in a country's flag in various formats.
You can explore the various formats available for representing flag colors. We offer a comprehensive set of color data for each flag, making it easy for you to display them in the format that best suits your project.

## Colors Formats

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

## Flag Colors

Provides an array of the country's flag colors by name. This function returns the same value as `getFlagColorsName()`.

::: code-group

```php{2} [Input]
$country = Country::inRandomOrder()->first();
$country->getFlagColors(); // [!code focus]
```

```php[Output]
array:3 [▼
  0 => "Red"
  1 => "Green"
  2 => "Yellow"
]
```

:::



## Flag Colors Name

Returns an array of the country's flag colors as color names. Use this function to obtain the names of the colors used in the country's flag.

::: code-group

```php{2} [Input]
$country = Country::inRandomOrder()->first();
$country->getFlagColorsName(); // [!code focus]
```

```php[Output]
array:3 [▼
  0 => "Red"
  1 => "Green"
  2 => "Yellow"
]
```

:::

## Flag Colors Web

Returns an array of the country's flag colors as web-safe color codes. Use this to get the colors in web-safe hexadecimal format, suitable for web design.

::: code-group

```php{2} [Input]
$country = Country::whereIso('pt')->first();
$country->getFlagColorsWeb(); // [!code focus]
```

```php[Output]
array:3 [▼
  0 => "red"
  1 => "green"
  2 => "yellow"
]
```

:::

## Flag Colors Contrast

Provides an array of the country's flag colors as contrast colors. This can be used to obtain colors that provide good contrast with the flag's colors, useful for overlays or text.

::: code-group

```php{2} [Input]
$country = Country::whereIso('PT')->first();
$country->getFlagColorsContrast(); // [!code focus]
```

```php[Output]
array:3 [▼
  0 => "#FFFFFF"
  1 => "#FFFFFF"
  2 => "#000000"
]
```

:::

## Flag Colors Hex

Returns an array of the country's flag colors as hexadecimal color codes. This function gives you the colors in standard hex format, commonly used in web development and design.

::: code-group

```php{2} [Input]
$country = Country::whereIsoAlpha2('pt')->first();
$country->getFlagColorsHex(); // [!code focus]
```

```php[Output]
array:3 [▼
  0 => "#FF0000"
  1 => "#006600"
  2 => "#FFD700"
]
```

:::


## Flag Colors RGB

Provides an array of the country's flag colors as RGB color codes. Use this to get the colors in Red-Green-Blue (RGB) format, suitable for various graphics applications.

::: code-group

```php{2} [Input]
$country = Country::whereIsoAlpha3('PRT')->first();
$country->getFlagColorsRgb(); // [!code focus]
```

```php[Output]
array:3 [▼
  0 => "255,0,0"
  1 => "0,102,0"
  2 => "255,215,0"
]
```

:::

## Flag Colors CMYK

Returns an array of the country's flag colors as CMYK color codes. This is useful for obtaining the colors in Cyan-Magenta-Yellow-Key (Black) format, commonly used in printing.

::: code-group

```php{2} [Input]
$country = Country::whereIsoNumeric(620)->first();
$country->getFlagColorsCmyk(); // [!code focus]
```

```php[Output]
array:3 [▼
  0 => "0,100,100,0"
  1 => "100,0,100,60"
  2 => "0,16,100,0"
]
```

:::

## Flag Colors HSL

Provides an array of the country's flag colors as HSL color codes. Use this function to get the colors in Hue-Saturation-Lightness format.

::: code-group

```php{2} [Input]
$country = Country::whereGeoname(2264397)->first();
$country->getFlagColorsHsl(); // [!code focus]
```

```php[Output]
array:3 [▼
  0 => "0°,100%,50%"
  1 => "120°,100%,20%"
  2 => "51°,100%,50%"
]
```

:::

## Flag Colors HSV

Returns an array of the country's flag colors as HSV color codes. This function gives the colors in Hue-Saturation-Value format.

::: code-group

```php{2} [Input]
$country = Country::whereOficialName('Portuguese Republic')->first();
$country->getFlagColorsHsv(); // [!code focus]
```

```php[Output]
array:3 [▼
  0 => "0°,100%,100%"
  1 => "120°,100%,40%"
  2 => "51°,100%,100%"
]
```

:::

## Flag Colors Pantone

Provides an array of the country's flag colors as Pantone color codes. Use this to obtain the Pantone Matching System codes for the flag's colors, useful for professional printing and design.

::: code-group

```php{2} [Input]
$country = Country::whereUid('01J9VCYGFSK2Z6G803C3GECMXM')->first();
$country->getFlagColorsPantone(); // [!code focus]
```

```php[Output]
array:3 [▼
  0 => "Red 032 C"
  1 => "349 C"
  2 => "116 C"
]
```

:::

## Output Helpers

This section offers handy helper functions to easily incorporate country flag colors into your web projects. Use them to create gradients, stripes, or borders with flag colors, adding a national touch to your websites, applications, or data visualizations!

These output helpers make it effortless to bring dynamic and colorful elements to your project, all while celebrating the unique palettes of different countries' flags!

## Flag Gradient

Generates a CSS linear gradient using the country's flag colors. You can specify the direction of the gradient top, bottom, left, right, or even random for a customized background effect.

::: info
You can also choose the direction of the gradient by selecting from options like `top`, `bottom`, `left`, `right`, or even let the function pick a `random` direction for you!
:::

```php
->getFlagGradient(string $startsOn = null)
```

::: code-group

```php{2} [Input]
$country = Country::whereIsoAlpha3('PRT')->first();
$country->getFlagGradient(); // [!code focus]
```

```css[Output]
background: linear-gradient(90deg, #FF0000, #006600, #FFD700);
```

:::

### Examples

::: details Click me to view code example

::: code-group

```blade {2} [Html]
   <div class="card">
        <h3>{{ $country->name }}</h3>
        <p>Here is a card with a gradient background using the flag colors.</p>
    </div>
```

```blade {11} [Css]
    <style>
        .card {
            width: 300px;
            height: 150px;
            border-radius: 10px;
            padding: 20px;
            color: Black;
            text-align: center;
            font-family: Arial, sans-serif;

            {!! $country->getFlagGradient(); !!}
            /* background: linear-gradient(90deg, #FF0000, #FFFFFF, #0000FF); */
        }
    </style>
```

:::

::: details Click me to view example

<img src="/assets/examples/brazil-grand-example.png" alt="example image for function" style="padding-top:15px; max-width: 450px;">
<img src="/assets/examples/congo-grand-example.png" alt="example image for function" style="padding-top:15px; max-width: 450px;">

<img src="/assets/examples/netherlands-grand-example.png" alt="example image for function" style="padding-top:15px; max-width: 450px;">
<img src="/assets/examples/portugal-grand-example.png" alt="example image for function" style="padding-top:15px; max-width: 450px;">

:::

## Combined Flag Gradient

Creates a CSS linear gradient that combines the flag colors of two countries. This is great for representing partnerships, comparisons, or any scenario involving two nations.

::: info
You can also choose the direction of the gradient by selecting from options like `top`, `bottom`, `left`, `right`, or even let the function pick a `random` direction for you!
:::

```php
->getCombinedFlagGradient(Country $otherCountry, string $startsOn = null)
```

::: code-group

```php{3} [Input]
$country = Country::whereIsoAlpha3('PRT')->first();
$country2 = Country::inRandomOrder()->first();
$country->getCombinedFlagGradient(otherCountry: $country2); // [!code focus]
```

```css[Output]
background: linear-gradient(90deg, #FF0000, #006600, #FFD700, #CE1126, #0072C6, #FFFFFF, #FFD100, #000000);
```

:::

## Flag Stripes

Generates a CSS linear gradient that displays the flag's colors in equal-width stripes. You can choose between horizontal or vertical orientation to best fit your design needs.

::: info
You can also choose the direction of the gradient by selecting from options like `horizontal`, `vertical`!
:::

```php
->getFlagStripes(string $direction = 'horizontal')
```

::: code-group

```php{2} [Input]
$country = Country::whereIso('PRT')->first();
$country->getFlagStripes(); // [!code focus]
```

```css[Output]
background: linear-gradient(to right, #FF0000 33.333333333333%, #006600 33.333333333333%, #FFD700 33.333333333333%);
```
:::

## Flag Borders

Produces a CSS string that applies the flag's colors to the borders of an element. Each side of the border can be a different color from the flag, adding a vibrant outline to your elements.

```php
->getFlagBorders()
```

::: code-group

```php{2} [Input]
$country = Country::whereIso('PT')->first();
$country->getFlagBorders(); // [!code focus]
```

```css[Output]
border-top: 5px solid #FF0000; border-right: 5px solid #006600; border-bottom: 5px solid #FFD700;
```

:::
