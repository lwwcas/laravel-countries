# Workflow

`Country::class` includes a variety of PHP functions. Many of these functions are used by the package itself; however, you are free to use them in your own applications if you find them convenient.

The `Country::class` offers a variety of functions that provide quick access to `$this->coordinates`, allowing you to retrieve geographical data rapidly. Many of these functions are used internally by the package, but you are free to utilize them in your own applications for convenience.

## Usage

To start working with the `CountryCoordinates::class` model, you can use the following code:

```php{1}
use Lwwcas\LaravelCountries\Models\CountryCoordinates;

$geoData = CountryCoordinates::all();

```

This will return all geographical records available, including information such as latitude, longitude, and altitude.

## Usage With a Country

The `CountryCoordinates` data is designed to be seamlessly integrated with country-specific information.

```php {5,6}
use Lwwcas\LaravelCountries\Models\CountryCoordinates;

$coordinates = CountryCoordinates::inRandomOrder()->first();

$country = $coordinates->country()->first();
$latitude = $coordinates->latitude;
// 41.3275
```

or directly

```php {3,4}
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();
$latitude = $country->latitude();
// 41.3275
```

## Latitude

Retrieves the latitude of the country in decimal degrees.

```php
->latitude()
```

```php {4} [Example]
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();
$country->latitude();
```

## Longitude

Retrieves the longitude of the country in decimal degrees.

```php
->longitude()
```

```php {4} [Example]
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();
$country->longitude();
```

## Coordinates In Decimal

Retrieves an array with both latitude and longitude in decimal degrees.

```php
->coordinatesInDecimal()
```

::: code-group

```php {4} [Input]
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();
$country->coordinatesInDecimal();

```

```php [Output]
    [
        'latitude' => 42.5063,
        'longitude' => 1.5218,
    ];
```

:::

## Coordinates In Degrees With Decimal

Retrieves the coordinates in degrees with decimal minutes.

```php
->coordinatesInDegreesWithDecimal()
->coordinatesInDD()
```

::: code-group

```php {4} [Input]
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();
$country->coordinatesInDegreesWithDecimal();

// or

$country->coordinatesInDD();

```

```php [Output]
(string) 42.5063° N, 1.5218° E
```

:::

## Coordinates In Degrees Minutes Seconds

Retrieves the coordinates in degrees, minutes, and seconds (DMS) format.

```php
->coordinatesInDegreesMinutesSeconds()
->coordinatesInDMS()
```

::: code-group

```php {4} [Input]
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();
$country->coordinatesInDegreesMinutesSeconds();

// or

$country->coordinatesInDMS();

```

```php [Output]
(string) 42°30'22.68" N, 1°31'18.48" E
```

:::

## Coordinates In Degrees And Decimal Minutes

Retrieves the coordinates in degrees and decimal minutes format.

```php
->coordinatesInDegreesAndDecimalMinutes()
->coordinatesInDDM()
```

::: code-group

```php {4} [Input]
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();
$country->coordinatesInDegreesAndDecimalMinutes();

// or

$country->coordinatesInDDM();

```

```php [Output]
(string) 42°30.378' N, 1°31.308' E
```

:::

## Is In Northern Hemisphere

Checks if the country is in the Northern Hemisphere.

```php
->isInNorthernHemisphere()
```

```php {4} [Example]
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();
$country->isInNorthernHemisphere();
// True or False
```

## Is In Southern Hemisphere

Checks if the country is in the Southern Hemisphere.

```php
->isInSouthernHemisphere()
```

```php {4} [Example]
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();
$country->isInSouthernHemisphere();
// True or False
```

## Coordinates In KLM

Retrieves the coordinates in KML (Keyhole Markup Language) format.

```php
->coordinatesInKLM()
```

::: code-group

```php {4} [Input]
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();
$country->coordinatesInKLM();

```

```xml [Output]
<?xml version="1.0" encoding="UTF-8"?>
<kml xmlns="http://www.opengis.net/kml/2.2">
    <Placemark>
        <name>Republic of Guinea-Bissau</name>
        <description>11.8037,-15.1804</description>
        <Point>
            <coordinates>-15.1804,11.8037</coordinates>
        </Point>
    </Placemark>
</kml>
```

:::

## Coordinates In GeoTags

Retrieves the coordinates in geo tags format.

```php
->coordinatesInGeoTags()
```

::: code-group

```php {4} [Input]
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();
$country->coordinatesInGeoTags();

```

```Text [Output]
geotagged
geo:lat=35.126400
geo:lon=33.429900
```

:::

## Coordinates In GeoTags Meta Tag ICBM

Retrieves the coordinates in the format of an ICBM meta tag.

```php
->coordinatesInGeoTagsMetaTagICBM()
```

::: code-group

```php {4} [Input]
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();
$country->coordinatesInGeoTagsMetaTagICBM();

```

```html [Output]
<meta name="ICBM" content="9.945600, -9.696600">
```

:::

## Coordinates In Geo Meta Tags

Retrieves the coordinates in geo meta tags format, with placename and region.

```php
->coordinatesInGeoMetaTags($locale = 'en')
```

::: code-group

```php {4} [Input]
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();
$country->coordinatesInGeoMetaTags();

```

```html [Output]
<meta name="geo.position" content="-23.442500; -58.443800">
<meta name="geo.placename" content="Paraguay">
<meta name="geo.region" content="Americas">
```

:::

## Coordinates In GeoJSON

Retrieves the coordinates in GeoJSON format.

```php
->coordinatesInGeoJSON()
```

::: code-group

```php {4} [Input]
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();
$country->coordinatesInGeoJSON();

```

```json [Output]
{
    "type": "Point",
    "coordinates": [
        4.3517,
        50.8503
    ]
}
```

:::

## Coordinates In CSV

Retrieves the coordinates in CSV (Comma-Separated Values) format.

```php
->coordinatesInCSV()
```

::: code-group

```php {4} [Input]
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();
$country->coordinatesInCSV();

```

```csv [Output]
latitude,longitude
15.2,-86.2419
```

:::
