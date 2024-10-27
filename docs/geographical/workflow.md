# Workflow

## Usage

To start using `CountryGeographical::class`, just add this to your code:

```php{4}
use Lwwcas\LaravelCountries\Models\CountryGeographical;

$geo = CountryGeographical::inRandomOrder()->first();
$geo->getGeoData();
```

## Usage With a Country

The `CountryGeographical` data is designed to be seamlessly integrated with country-specific information.

```php{6}
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();
$geo = $country->geographical()->first();

$geoData = $geo->getGeoData();
```

or directly

```php{4}
use Lwwcas\LaravelCountries\Models\Country;

$country = Country::inRandomOrder()->first();
$geoData = $country->getGeoData();
```

## Adding CountryGeographical to Queries

In Laravel, you can easily include the geographical information of a country by leveraging the `with()` method when querying countries. This allows you to load the `CountryGeographical` data alongside the country model, providing access to region codes, time zones, and other geographical properties.

### Example Usage

To retrieve a country along with its geographical data, simply use the following query:

```php
$country = Country::with('geographical')->find($id);
