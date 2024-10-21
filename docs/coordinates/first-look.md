# Your First Look

The `CountryCoordinates::class` model gives you access to detailed geographical data of countries. It stores essential information like coordinates, altitude, and other region-specific details, helping you understand the exact location and characteristics of any country in the world.

## Key Fields

Here's a breakdown of the main fields you'll find in the `CountryCoordinates` model:

- **Latitude**: The geographical latitude of the country.
  - Example: `"1.3521"` for Singapore.

- **Longitude**: The geographical longitude of the country.
  - Example: `"103.8198"` for Singapore.

- **Degrees with Decimal**: The geographical coordinates of the country expressed in decimal degrees.
  - Example: `"1.3521° N, 103.8198° E"` for Singapore.

- **Degrees, Minutes, Seconds (DMS)**: The geographical coordinates of the country expressed in degrees, minutes, and seconds.
  - Example: `"1°21'8"N, 103°49'11"E"` for Singapore.

- **Degrees and Decimal Minutes (DM)**: The geographical coordinates of the country expressed in degrees and decimal minutes.
  - Example: `"1°21.133'N, 103°49.183'E"` for Singapore.

## Common Queries

You can retrieve information based on specific attributes like latitude, longitude, or even by using geographical boundaries.

For example, to find countries located within specific latitude and longitude boundaries, you can do:

```php
use Lwwcas\LaravelCountries\Models\CountryCoordinates;

$nearbyCountries = CountryCoordinates::with('country')
    ->whereBetween('latitude', [40.0, 42.0])
    ->whereBetween('longitude', [-75.0, -73.0])
    ->get();

```

This query will return countries within a specific geographic range.

## Using in Your Application

Whether you need detailed coordinates for mapping purposes, or you want to include latitude and region information for geographical context, the `CountryCoordinates` model makes it easy. You can also extend this data with additional geographical details to fit your application's needs.

For example, if you're building an interactive map or displaying country-specific geographical data, `CountryCoordinates` provides all the tools you need to make this possible.
