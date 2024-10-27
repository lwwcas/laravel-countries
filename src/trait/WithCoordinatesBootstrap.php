<?php

namespace Lwwcas\LaravelCountries\Trait;

trait WithCoordinatesBootstrap
{
    /**
     * Get the latitude of the country in decimal degrees.
     *
     * @return float|null The latitude of the country in decimal degrees, or null if the value is not set.
     */
    public function latitude(): ?float
    {
        return $this->coordinates->latitude ?? null;
    }

    /**
     * Get the longitude of the country in decimal degrees.
     *
     * @return float|null The longitude of the country in decimal degrees, or null if the value is not set.
     */
    public function longitude(): ?float
    {
        return $this->coordinates->longitude ?? null;
    }

    /**
     * Get the coordinates in decimal format.
     *
     * @return array|null an array with keys 'latitude' and 'longitude' with decimal values, or null if the values are not set.
     */
    public function coordinatesInDecimal(): array
    {
        return [
            'latitude' => $this->latitude() ?? null,
            'longitude' => $this->longitude() ?? null,
        ];
    }

    /**
     * Get the coordinates in the format of degrees with decimal minutes.
     *
     * @return string|null The coordinates in the format of degrees with decimal minutes, or null if the value is not set.
     */
    public function coordinatesInDegreesWithDecimal(): ?string
    {
        return $this->coordinates->degrees_with_decimal ?? null;
    }

    /**
     * Get the coordinates in the format of degrees with decimal minutes.
     *
     * @return string|null The coordinates in the format of degrees with decimal minutes, or null if the value is not set.
     */
    public function coordinatesInDD(): ?string
    {
        return $this->coordinatesInDegreesWithDecimal();
    }

    /**
     * Get the coordinates in the format of degrees with minutes and seconds.
     *
     * @return string|null The coordinates in the format of degrees with minutes and seconds, or null if the value is not set.
     */
    public function coordinatesInDegreesMinutesSeconds(): ?string
    {
        return $this->coordinates->degrees_minutes_seconds ?? null;
    }

    /**
     * Get the coordinates in the format of degrees with minutes and seconds.
     *
     * @return string|null The coordinates in the format of degrees with minutes and seconds, or null if the value is not set.
     */
    public function coordinatesInDMS(): ?string
    {
        return $this->coordinatesInDegreesMinutesSeconds();
    }

    /**
     * Get the coordinates in the format of degrees with decimal minutes.
     *
     * @return string|null The coordinates in the format of degrees with decimal minutes, or null if the value is not set.
     */

    public function coordinatesInDegreesAndDecimalMinutes(): ?string
    {
        return $this->coordinates->degrees_and_decimal_minutes ?? null;
    }

    /**
     * Get the coordinates in the format of degrees with decimal minutes.
     *
     * @return string|null The coordinates in the format of degrees with decimal minutes, or null if the value is not set.
     */

    public function coordinatesInDDM(): ?string
    {
        return $this->coordinatesInDegreesAndDecimalMinutes();
    }

    /**
     * Check if the country is in the Northern Hemisphere.
     *
     * @return bool
     */
    public function isInNorthernHemisphere(): bool
    {
        return $this->latitude() > 0;
    }

    /**
     * Check if the country is in the Southern Hemisphere.
     *
     * @return bool
     */
    public function isInSouthernHemisphere(): bool
    {
        return $this->latitude() < 0;
    }

    /**
     * Get the coordinates in KML format.
     * (Keyhole Markup Language)
     *
     * @return string The coordinates in KML format.
     *
     */
    public function coordinatesInKLM(): string
    {
        $decimalCoordinates = $this->coordinatesInDecimal();
        $latitude = (float) $decimalCoordinates['latitude'];
        $longitude = (float) $decimalCoordinates['longitude'];

        return <<<KML
<?xml version="1.0" encoding="UTF-8"?>
<kml xmlns="http://www.opengis.net/kml/2.2">
    <Placemark>
        <name>{$this->official_name}</name>
        <description>{$latitude},{$longitude}</description>
        <Point>
            <coordinates>{$longitude},{$latitude}</coordinates>
        </Point>
    </Placemark>
</kml>
KML;
    }

    /**
     * Get the coordinates in geo tags format.
     *
     * @return string The coordinates in geo tags format.
     */
    public function coordinatesInGeoTags(): string
    {
        $coordinates = $this->coordinatesInDecimal();
        $latitude = (float) $coordinates['latitude'];
        $longitude = (float) $coordinates['longitude'];

        return "geotagged\n" .
            "geo:lat=" . number_format($latitude, 6) . "\n" .
            "geo:lon=" . number_format($longitude, 6);
    }

    /**
     * Get the coordinates in the format of a meta tag for ICBM (GeoURL).
     *
     * @return string The coordinates in the format of a meta tag for ICBM (GeoURL).
     */
    public function coordinatesInGeoTagsMetaTagICBM(): string {
        $coordinates = $this->coordinatesInDecimal();
        $latitude = (float) $coordinates['latitude'];
        $longitude = (float) $coordinates['longitude'];

        return '<meta name="ICBM" content="' . number_format($latitude, 6) . ', ' . number_format($longitude, 6) . '">';
    }

    /**
     * Get the coordinates in geo meta tags format.
     *
     * @param string $locale The locale to use for the placename and region.
     * @return string The coordinates in geo meta tags format.
     */
    public function coordinatesInGeoMetaTags(string $locale = 'en'): string
    {
        $coordinates = $this->coordinatesInDecimal();
        $latitude = (float) $coordinates['latitude'];
        $longitude = (float) $coordinates['longitude'];
        $placename = $this->translate($locale)->name ?? $this->official_name;
        $region = $this->region()->first()->translate($locale)->name ?? '';

        return '<meta name="geo.position" content="' . number_format($latitude, 6) . '; ' . number_format($longitude, 6) . '">' . PHP_EOL .
            '<meta name="geo.placename" content="' . htmlspecialchars($placename) . '">' . PHP_EOL .
            '<meta name="geo.region" content="' . htmlspecialchars($region) . '">';
    }

    /**
     * Get the coordinates in geoJSON format.
     *
     * @return string The coordinates in geoJSON format.
     */
    public function coordinatesInGeoJSON(): string
    {
        $coordinates = $this->coordinatesInDecimal();
        $latitude = (float) $coordinates['latitude'];
        $longitude = (float) $coordinates['longitude'];

        $geoJSON = [
            'type' => 'Point',
            'coordinates' => [$longitude, $latitude],
        ];

        return json_encode($geoJSON, JSON_PRETTY_PRINT);
    }

    /**
     * Get the coordinates in CSV format.
     * (Comma-Separated Values)
     *
     * @return string The coordinates in CSV format, with a header row.
     */
    public function coordinatesInCSV(): string
    {
        $coordinates = $this->coordinatesInDecimal();
        $latitude = (float) $coordinates['latitude'];
        $longitude = (float) $coordinates['longitude'];

        return "latitude,longitude\n" . "{$latitude},{$longitude}";
    }

}
