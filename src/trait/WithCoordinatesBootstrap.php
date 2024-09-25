<?php

namespace Lwwcas\LaravelCountries\Trait;

trait WithCoordinatesBootstrap
{
    /**
     * Get the coordinates in classic degree format (e.g. 10 00 S, 55 00 W).
     *
     * @return array<string, string> ['latitude' => '10 00 S', 'longitude' => '55 00 W']
     */
    public function coordinatesInClassic(): array
    {
        return [
            'latitude' => $this->coordinates->latitude->classic ?? null,
            'longitude' => $this->coordinates->longitude->classic ?? null,
        ];
    }

    /**
     * Get the coordinates in decimal format.
     *
     * @return array|null an array with keys 'latitude' and 'longitude' with decimal values, or null if the values are not set.
     */
    public function coordinatesInDecimal(): array
    {
        return [
            'latitude' => $this->coordinates->latitude->desc ?? null,
            'longitude' => $this->coordinates->longitude->desc ?? null,
        ];
    }

    /**
     * Calculate the center of the country's geographical limits.
     *
     * @return array<string, float> ['latitude' => float, 'longitude' => float]
     */
    public function getCenterOfLimits(): array
    {
        $minLatitude = $this->coordinates->latitude->desc;
        $maxLatitude = $this->coordinates_limit->latitude->desc;
        $centerLatitude = ($minLatitude + $maxLatitude) / 2;

        $minLongitude = $this->coordinates->longitude->desc;
        $maxLongitude = $this->coordinates_limit->longitude->desc;
        $centerLongitude = ($minLongitude + $maxLongitude) / 2;

        return [
            'latitude' => $centerLatitude,
            'longitude' => $centerLongitude,
        ];
    }

    /**
     * Check if the country is in the Northern Hemisphere.
     *
     * @return bool
     */
    public function isInNorthernHemisphere(): bool
    {
        return $this->coordinates->latitude->classic > 0;
    }

    /**
     * Check if the country is in the Southern Hemisphere.
     *
     * @return bool
     */
    public function isInSouthernHemisphere(): bool
    {
        return $this->coordinates->latitude->classic < 0;
    }

    /**
     * Convert the country's coordinates from the classic format to the decimal format.
     *
     * @return array<string, float> ['latitude' => float, 'longitude' => float]
     */
    public function convertClassicToDecimal(): array
    {
        $classicCoordinates = $this->coordinatesInClassic();

        return [
            'latitude' => (string) $this->classicCoordinateToDecimal($classicCoordinates['latitude']),
            'longitude' => (string) $this->classicCoordinateToDecimal($classicCoordinates['longitude']),
        ];
    }

    /**
     * Get the coordinates in decimal format with degrees, minutes, and seconds.
     *
     * @return string The coordinates in the format 'dd.dddd° dd dddd°' where 'dd' is the degree, 'ddd' is the minute, and 'dddd' is the second.
     * Output example: 13.299612° S 176.170120° W
     */
    public function coordinatesInDecimalDegrees(): string
    {
        $coordinates = $this->coordinatesInDecimal();

        $latitude = (float) $coordinates['latitude'];
        $latitudeDirection = $latitude < 0 ? 'S' : 'N';

        $longitude = (float) $coordinates['longitude'];
        $longitudeDirection = $longitude < 0 ? 'W' : 'E';

        return sprintf('%.6f° %s %.6f° %s', abs($latitude), $latitudeDirection, abs($longitude), $longitudeDirection);
    }


    /**
     * Get the coordinates in degrees minutes seconds format.
     *
     * @return string The coordinates in the format 'dd° mm' ss.s" direction' where 'dd' is the degree, 'mm' is the minute, 'ss.s' is the second, and 'direction' is 'N' or 'S'.
     * Output example: 13° 17' 58.60" S 176° 10' 42.43" W
     */
    public function coordinatesInDegreesMinutesSeconds()
    {
        $coordinates = $this->coordinatesInDecimal();
        $decimalLatitude = (float) $coordinates['latitude'];
        $decimalLongitude = (float) $coordinates['longitude'];

        /**
         * Convert a coordinate in decimal format to the format 'dd° mm' ss.s" direction'
         * where 'dd' is the degree, 'mm' is the minute, 'ss.s' is the second, and 'direction' is 'N' or 'S'.
         * Output example: 13° 17' 58.60" S
         *
         * @param float $decimal The coordinate in decimal format.
         * @return string The coordinate in the format 'dd° mm' ss.s" direction'
         */
        function convertToDMS($decimal)
        {
            $degrees = (int) abs($decimal);
            $minutes = (int) abs(($decimal - $degrees) * 60);
            $seconds = round(abs(($decimal - $degrees - $minutes / 60) * 3600), 2);

            return sprintf("%d° %d' %.2f\" %s", $degrees, $minutes, $seconds, $decimal < 0 ? 'S' : 'N');
        }

        $latitudeDMS = convertToDMS($decimalLatitude);
        $longitudeDMS = convertToDMS($decimalLongitude);

        $longitudeDirection = $decimalLongitude < 0 ? 'W' : 'E';
        $longitudeDMS = str_replace('N', $longitudeDirection, $longitudeDMS);
        $longitudeDMS = str_replace('S', $longitudeDirection, $longitudeDMS);

        return "$latitudeDMS $longitudeDMS";
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
