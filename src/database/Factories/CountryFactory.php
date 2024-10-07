<?php

namespace Lwwcas\LaravelCountries\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Database\Factories\CountryRegionFactory;
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
        $name = fake()->country() . ' ' . fake()->word();
        $colors = $this->randomColors();

        return [
            'lc_region_id' => CountryRegionFactory::new()->create()->id,
            'uid' => fake()->unixTime(),

            'official_name' => Str::title($name),
            'capital' => 'Capital ' . Str::title($name),
            'iso_alpha_2' => fake()->countryCode(),
            'iso_alpha_3' => fake()->countryISOAlpha3(),
            'iso_numeric' => fake()->randomNumber(3, false),

            'international_phone' => fake()->randomNumber(3, true),
            'geoname_id' => fake()->randomNumber(7, true),
            'wmo' => Str::upper(fake()->randomLetter() . fake()->randomLetter()),
            'independence_day' => fake()->date('Y-m-d'),

            'population' => fake()->date('Y-m-d'),
            'area' => fake()->randomNumber(3, false),
            'gdp' => fake()->randomNumber(3, false),

            'languages' => $this->randomLanguages(),
            'tld' => $this->randomLtd(),
            'alternative_tld' => $this->randomLtd(),
            'borders' => $this->randomLanguages(),
            'timezones' => null,

            'currency' => [
                'name' => fake()->word(),
                'code' => fake()->currencyCode(),
                'symbol' => fake()->currencyCode() . fake()->randomLetter(),
                'banknotes' => [
                    2, 5, 10, 20, 50, 100
                ],
                'coins' => [
                    'main' => [1, 2],
                    'sub' => [1, 5, 10, 25, 50],
                ],
                'unit' => [
                    'main' => fake()->word(),
                    'sub' => fake()->word(),
                    'to_unit' => fake()->randomElements([1, 100, 1000, null])[0],
                ],
            ],

            'flag_emoji' => [
                'img' => fake()->emoji(),
                'utf8' => '&#'. fake()->numberBetween(128512, 128567)  . ';',
                'utf16' => '\\uD83C\\uDDE6\\uD83C\\uDDE9',
                'uCode' => 'U+1F1E6 U+1F1E9',
                'hex' => '&#x1F1E6;&#x1F1E9',
                'html' => '&#x1F1E6;&#x1F1E9;',
                'css' => '\\1F1E6\\1F1E9',
                'decimal' => '&#127462;&#127465;',
                'shortcode' => ':flag-'. Str::lower(fake()->countryCode()) .':',
            ],

            'flag_colors' => $colors['flag_colors'],
            'flag_colors_web' => $colors['flag_colors_web'],
            'flag_colors_contrast' => $colors['flag_colors_contrast'],
            'flag_colors_hex' => $colors['flag_colors_hex'],
            'flag_colors_rgb' => $colors['flag_colors_rgb'],
            'flag_colors_cmyk' => $colors['flag_colors_cmyk'],
            'flag_colors_hsl' => $colors['flag_colors_hsl'],
            'flag_colors_hsv' => $colors['flag_colors_hsv'],
            'flag_colors_pantone' => $colors['flag_colors_pantone'],

            'is_visible' => true,
        ];
    }

    /**
     * Generates a random list of languages.
     *
     * Returns an empty array if the first random digit is 0.
     * Otherwise, generates a list of random language codes with
     * the same length as the random digit.
     *
     * @return string[]
     */
    protected function randomLanguages()
    {
        $rand = fake()->randomDigit();
        if ($rand === 0) {
            return [];
        }

        $languages = [];
        foreach (range(1, $rand) as $item) {
             $languages[] = fake()->languageCode();
        }

        return $languages;
    }

    /**
     * Generates a random list of top-level domains.
     *
     * Returns an empty array if the first random digit is 0.
     * Otherwise, generates a list of random top-level domains with
     * the same length as the random digit.
     *
     * The top-level domains are generated by prefixing the language code
     * with a period ('.').
     *
     * @return string[]
     */
    protected function randomLtd()
    {
        $rand = fake()->randomDigit();
        if ($rand === 0) {
            return [];
        }

        $ltd = [];
        foreach (range(1, $rand) as $item) {
            $ltd[] = '.' . fake()->languageCode();
        }

        return $ltd;
    }


    /**
     * Generates a random list of color data for a country.
     *
     * Each list contains a random number of colors, between 1 and 5.
     *
     * The colors are generated in the following formats:
     * - flag_colors: a list of color names
     * - flag_colors_web: a list of color names as web-safe color codes
     * - flag_colors_contrast: a list of either #FFFFFF or #000000
     * - flag_colors_hex: a list of hex color codes
     * - flag_colors_rgb: a list of RGB color codes
     * - flag_colors_cmyk: a list of CMYK color codes
     * - flag_colors_hsl: a list of HSL color codes
     * - flag_colors_hsv: a list of HSV color codes
     * - flag_colors_pantone: a list of Pantone color codes
     *
     * @return array
     */
    protected function randomColors(): array
    {
        $result = [
            'flag_colors' => [],
            'flag_colors_web' => [],
            'flag_colors_contrast' => [],
            'flag_colors_hex' => [],
            'flag_colors_rgb' => [],
            'flag_colors_cmyk' => [],
            'flag_colors_hsl' => [],
            'flag_colors_hsv' => [],
            'flag_colors_pantone' => [],
        ];

        $rand = rand(1, 5);
        $contrast = [
            '#FFFFFF',
            '#000000',
        ];
        $colorName = [
            'Red',
            'Blue',
            'Green',
            'Yellow',
            'Purple',
            'Orange',
            'Pink',
            'Brown',
            'Black',
            'White',
            'Gray',
            'Cyan',
            'Magenta',
            'Violet',
            'Teal',
        ];

        foreach (range(1, $rand) as $item) {
            $color = fake()->randomElements($colorName)[0];
            $result['flag_colors'][] = $color;
            $result['flag_colors_web'][] = Str::slug($color);
            $result['flag_colors_contrast'][] = fake()->randomElements($contrast)[0];
            $result['flag_colors_hex'][] = fake()->hexColor();
            $result['flag_colors_rgb'][] = fake()->rgbColor();
            $result['flag_colors_cmyk'][] = fake()->numberBetween(0, 100) . ',' . fake()->numberBetween(0, 100) . ',' . fake()->numberBetween(0, 100) . ',' . fake()->numberBetween(0, 100);
            $result['flag_colors_hsl'][] = fake()->numberBetween(0, 100) . ',' . fake()->numberBetween(0, 100) . '%,' . fake()->numberBetween(0, 100) . '%';
            $result['flag_colors_hsv'][] = fake()->numberBetween(0, 100) . ',' . fake()->numberBetween(0, 100) . '%,' . fake()->numberBetween(0, 100) . '%';
            $result['flag_colors_pantone'][] = 'Pantone ' . fake()->numberBetween(10, 900) . ' C' ;
        }

        return $result;
    }


}
