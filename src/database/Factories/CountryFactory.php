<?php

namespace Lwwcas\LaravelCountries\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Database\Factories\CountryRegionFactory;
use Lwwcas\LaravelCountries\enum\LanguageEnum;
use Lwwcas\LaravelCountries\enum\TLDEnum;
use Lwwcas\LaravelCountries\Models\Country;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CountryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     */
    protected $model = Country::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->country();
        $languages = fake()->randomElements(LanguageEnum::class);
        $tld = fake()->randomElements(TLDEnum::class);

        $emoji = [
            'img' => fake()->emoji(),
            'uCode'=> fake()->numerify('U+##### U+#####'),
        ];

        $coordinates = $this->generateCoordinates();

        $colors = $this->generateColors();

        return [
            'lc_region_id' => CountryRegionFactory::new()->create()->id,
            'uuid' => fake()->uuid(),
            'official_name' => Str::title($name),
            'iso_alpha_2' => fake()->countryCode(),
            'iso_alpha_3' => fake()->countryISOAlpha3(),
            'iso_numeric' => fake()->randomNumber(3, false),
            'geoname_id' => fake()->randomNumber(7, true),
            'international_phone' => fake()->randomNumber(3, false),
            'languages' => $languages,
            'tld' => json_encode($tld),
            'wmo' => Str::upper(fake()->randomLetter() . fake()->randomLetter()),
            'emoji' => $emoji,
            'color_hex' => $colors['hex'],
            'color_rgb' => $colors['rgb'],
            'coordinates' => $coordinates['classic'],
            'coordinates_limit' => $coordinates['limit'],
            'visible' => true,
        ];
    }

    /**
     * Generates an array of random hex and rgb colors.
     *
     * The number of colors is randomly determined between 1 and 4.
     * The function returns an associative array with two keys: 'hex' and 'rgb'.
     * The 'hex' key contains an array of hex color codes.
     * The 'rgb' key contains an array of rgb color codes.
     *
     * @return array
     */
    protected function generateColors(): array
    {
        $rand = fake()->numberBetween(1, 4);
        $hexColors = [];
        $rbgColors = [];

        foreach (range(1, $rand) as $item) {
            $hexColors[] = fake()->hexColor();
            $rbgColors[] = fake()->rgbColor();
        }

        return [
            'hex' => $hexColors,
            'rgb' => $rbgColors,
        ];
    }

    /**
     * Generate an array of coordinates in both decimal and classic formats.
     *
     * The returned array will have the following structure:
     * [
     *     'classic' => [
     *         'latitude' => [
     *             'desc' => string,
     *             'classic' => string
     *         ],
     *         'longitude' => [
     *             'desc' => string,
     *             'classic' => string
     *         ]
     *     ],
     *     'limit' => [
     *         'latitude' => [
     *             'desc' => string,
     *             'classic' => string
     *         ],
     *         'longitude' => [
     *             'desc' => string,
     *             'classic' => string
     *         ]
     *     ]
     * ]
     *
     * @return array
     */
    protected function generateCoordinates(): array
    {
        $latDecimal = fake()->latitude();
        $longDecimal = fake()->longitude();
        $coordinates = [
            'latitude' => [
                'desc' => $latDecimal,
                'classic' => $this->convertDecimalToClassic($latDecimal),
            ],
            'longitude' => [
                'desc' => $longDecimal,
                'classic' => $this->convertDecimalToClassic($longDecimal),
            ]
        ];

        $latLimitDecimal = fake()->latitude();
        $longLimitDecimal = fake()->longitude();
        $coordinatesLimit = [
            'latitude' => [
                'desc' => $latLimitDecimal,
                'classic' => $this->convertDecimalToClassic($latLimitDecimal),
            ],
            'longitude' => [
                'desc' => $longLimitDecimal,
                'classic' => $this->convertDecimalToClassic($longLimitDecimal),
            ]
        ];

        return [
            'classic' => $coordinates,
            'limit' => $coordinatesLimit
        ];
    }

    /**
     * Convert a coordinate in the decimal format (e.g. 42.50)
     * to the classic format (e.g. "42 30 N").
     *
     * @param float $decimal The coordinate in the decimal format.
     * @return string The coordinate in the classic format.
     */
    protected function convertDecimalToClassic(float $decimalLatitude): string
    {
        $hemisphere = $decimalLatitude >= 0 ? 'N' : 'S';

        $absoluteLatitude = abs($decimalLatitude);

        $degrees = (int) $absoluteLatitude;
        $minutes = ($absoluteLatitude - $degrees) * 60;
        $wholeMinutes = (int) $minutes;
        $seconds = ($minutes - $wholeMinutes) * 60;

        return sprintf(
            '%d %d %.2f %s',
            $degrees,
            $wholeMinutes,
            $seconds,
            $hemisphere
        );
    }

}
