<?php

namespace Lwwcas\LaravelCountries\trait;

trait WithCoordinatesBootstrap
{
    /**
     * Get the coordinates in classic degree format (e.g. 10 00 S, 55 00 W).
     *
     * @return array<string, string> ['latitude' => '10 00 S', 'longitude' => '55 00 W']
     */
    public function getClassicCoordinates(): array
    {
        return [
            'latitude' => $this->coordinates['latitude']['classic'] ?? '',
            'longitude' => $this->coordinates['longitude']['classic'] ?? '',
        ];
    }

    /**
     * Get the coordinates in decimal format.
     *
     * @return array|null an array with keys 'latitude' and 'longitude' with decimal values, or null if the values are not set.
     */
    public function getDecimalCoordinates()
    {
        return [
            'latitude' => $this->coordinates['latitude']['desc'] ?? null,
            'longitude' => $this->coordinates['longitude']['desc'] ?? null,
        ];
    }

    /**
     * Calculate the center of the country's geographical limits.
     *
     * @return array<string, float> ['latitude' => float, 'longitude' => float]
     */
    public function getCenterOfLimits(): array
    {
        $minLatitude = $this->coordinates_limit['latitude']['min'];
        $maxLatitude = $this->coordinates_limit['latitude']['max'];
        $centerLatitude = ($minLatitude + $maxLatitude) / 2;

        $minLongitude = $this->coordinates_limit['longitude']['min'];
        $maxLongitude = $this->coordinates_limit['longitude']['max'];
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
    public function isInNorthernHemisphere()
    {
        return $this->coordinates['latitude']['classic'] > 0;
    }

    /**
     * Check if the country is in the Southern Hemisphere.
     *
     * @return bool
     */
    public function isInSouthernHemisphere()
    {
        return $this->coordinates['latitude']['classic'] < 0;
    }

    /**
     * Convert a coordinate in the classic format (e.g. "42 30 N")
     * to the decimal format (e.g. 42.50).
     *
     * @param string $coordinate The coordinate in the classic format.
     * @return float The coordinate in the decimal format.
     */
    public function convertClassicToDecimal($coordinate)
    {
        $pattern = '/(\d+) (\d+) ([NSWE])/';
        preg_match($pattern, $coordinate, $matches);

        $wholeDegrees = (int) $matches[1];
        $minutes = (int) $matches[2];
        $direction = $matches[3];

        $decimalDegrees = $wholeDegrees + ($minutes / 60);

        if (in_array($direction, ['S', 'W'])) {
            $decimalDegrees = -$decimalDegrees;
        }

        return $decimalDegrees;
    }

    /**
     * Convert a coordinate in the decimal format (e.g. 42.50)
     * to the classic format (e.g. "42 30 N").
     *
     * @param float $decimal The coordinate in the decimal format.
     * @param string $type The type of coordinate, either 'latitude' or 'longitude'.
     * @return string The coordinate in the classic format.
     */
    public function convertDecimalToClassic($decimal, $type = 'latitude')
    {
        $sign = $type === 'latitude' ? ($decimal >= 0 ? 1 : -1) : ($decimal >= 0 ? 1 : -1);
        $coordinate = abs($decimal);
        $degrees = floor($coordinate);
        $minutes = round(($coordinate - $degrees) * 60);

        $direction = $type === 'latitude'
            ? ($sign === 1 ? 'N' : 'S')
            : ($sign === 1 ? 'E' : 'W');

        return sprintf('%d %02d %s', $degrees, $minutes, $direction);
    }

    /**
     * Check if a given point (latitude and longitude) is inside the country's
     * geographical boundaries.
     *
     * @param float $latitude The latitude of the point to check.
     * @param float $longitude The longitude of the point to check.
     * @return bool True if the point is inside the country's boundaries, false otherwise.
     */
    public function isPointInsideCountryBoundaries(float $latitude, float $longitude): bool
    {
        $coordinatesLimit = json_decode($this->coordinates_limit, true);

        $latitudeMin = $coordinatesLimit['latitude']['min'];
        $latitudeMax = $coordinatesLimit['latitude']['max'];
        $longitudeMin = $coordinatesLimit['longitude']['min'];
        $longitudeMax = $coordinatesLimit['longitude']['max'];

        return $latitude >= $latitudeMin
            && $latitude <= $latitudeMax
            && $longitude >= $longitudeMin
            && $longitude <= $longitudeMax;
    }

    /**
     * Check if the country's geographical boundaries cover a given range of coordinates.
     *
     * @param float $minLatitude The minimum latitude of the range.
     * @param float $maxLatitude The maximum latitude of the range.
     * @param float $minLongitude The minimum longitude of the range.
     * @param float $maxLongitude The maximum longitude of the range.
     * @return bool True if the country covers the given range, false otherwise.
     */
    public function coversCoordinatesRange(float $minLatitude, float $maxLatitude, float $minLongitude, float $maxLongitude): bool
    {
        $coordinatesLimit = json_decode($this->coordinates_limit, true);

        $latitudeInRange = $coordinatesLimit['latitude']['min'] <= $minLatitude
            && $coordinatesLimit['latitude']['max'] >= $maxLatitude;

        $longitudeInRange = $coordinatesLimit['longitude']['min'] <= $minLongitude
            && $coordinatesLimit['longitude']['max'] >= $maxLongitude;

        return $latitudeInRange && $longitudeInRange;
    }

}
