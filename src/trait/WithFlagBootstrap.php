<?php

namespace Lwwcas\LaravelCountries\Trait;

use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Models\Country;

trait WithFlagBootstrap
{
    /**
     * Find a country by flag color.
     *
     * @param string $flagColor
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereFlagColor($query, $flagColor)
    {
        $flagColorFormatted = '%' . Str::lower($flagColor) . '%';
        return $query
            ->where('color_hex', 'LIKE', $flagColorFormatted)
            ->orWhere('color_rgb', 'LIKE', $flagColorFormatted)
            ->withTranslation();
    }

    /**
     * Find a country by flag emoji.
     *
     * @param string $flagEmoji
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereFlagEmoji($query, $flagEmoji)
    {
        $formattedFlagEmoji = '%' . $flagEmoji . '%';
        return $query
            ->where('emoji->img', 'LIKE', $formattedFlagEmoji)
            ->orWhere('emoji->uCode', 'LIKE', $formattedFlagEmoji)
            ->withTranslation();
    }

    /**
     * Get the flag colors.
     *
     * @param string $type hex or rgb
     *
     * @return array
     */
    public function colors(string $type = 'hex'): array
    {
        $colors = [];
        if ($type == 'hex') {
            $colors = $this->color_hex;
        }
        if ($type == 'rgb') {
            $colors = $this->color_rgb;
        }

        return (array) $colors;
    }

    /**
     * Get the flag information of the country in a format that is easier to consume.
     *
     * @return string|null
     */
    public function flag()
    {
        return collect([
            'emoji' => [
                'icon' => $this->flagEmoji(),
                'uCode' => $this->flagCode(),
            ],
            'colors' => [
                'rgb' => $this->flagColorsInRgb(),
                'hex' => $this->flagColorsInHex(),
            ],
        ]);
    }

    /**
     * Get the flag emoji of the country.
     *
     * @return string|null
     */
    public function flagEmoji(): string|null
    {
        return $this->emoji['img'];
    }

    /**
     * Get the flag's Unicode code point as a string.
     *
     * @return string|null
     */
    public function flagCode(): string|null
    {
        return $this->emoji['uCode'];
    }

    /**
     * Get the flag colors as an array.
     *
     * @param string $type The type of color representation. Can be 'hex' or 'rgb'.
     *
     * @return array The flag colors in the specified format.
     */
    public function flagColors(string $type = 'hex'): array
    {
        return $this->colors($type);
    }

    /**
     * Get the flag colors in RGB format.
     *
     * @return array The flag colors in RGB format.
     */
    public function flagColorsInRgb(): array
    {
        return $this->flagColors('rgb');
    }

    /**
     * Get the flag colors in HEX format.
     *
     * @return array The flag colors in HEX format.
     */
    public function flagColorsInHex(): array
    {
        return $this->flagColors('hex');
    }

    /**
     * Get the gradient direction based on the given direction string.
     *
     * The direction can be 'top', 'bottom', 'left', 'right', or 'random'. If 'random'
     * is given, a random direction will be chosen from the predefined directions.
     *
     * @param string $startsOn The direction string.
     *
     * @return string The gradient direction in degrees.
     */
    protected function getGradientDirection(string $startsOn = null): string
    {
        $gradientDirections = [
            'random' => null,
            'top' => '0deg',
            'bottom' => '180deg',
            'left' => '90deg',
            'right' => '270deg',
        ];

        $direction = $gradientDirections['left'];
        if (array_key_exists($startsOn, $gradientDirections)) {
            $direction = $gradientDirections[$startsOn];
        }

        if ($direction === null) {
            unset($gradientDirections['random']);
            $direction = $gradientDirections[array_rand($gradientDirections)];
        }

        return $direction;
    }


    /**
     * Generate a CSS linear gradient string from the country's flag colors.
     *
     * @param string $startsOn The direction of the stripes. Can be 'top', 'bottom', 'left', 'right', or 'random'.
     *
     * @return string|null The CSS gradient string or null if no colors are set.
     */
    public function generateFlagGradient(string $startsOn = null): string|null
    {
        $direction = $this->getGradientDirection($startsOn);
        $hexColors = $this->color_hex;
        if (empty($hexColors)) {
            return null;
        }

        $cssGradient = implode(', ', $hexColors);
        return "background: linear-gradient($direction, $cssGradient);";
    }


    /**
     * Generate a CSS linear gradient string from the combined flag colors of two countries.
     *
     * @param Country $otherCountry The other country to combine with.
     * @param string $startsOn The direction of the stripes. Can be 'top', 'bottom', 'left', 'right', or 'random'.
     *
     * @return string|null The CSS gradient string or null if no colors are set.
     */

    public function generateCombinedFlagGradient(Country $otherCountry, string $startsOn = null): string|null
    {
        $thisColors = $this->color_hex;
        $otherColors = $otherCountry->color_hex;
        $direction = $this->getGradientDirection($startsOn);

        $colors = array_merge($thisColors, $otherColors);

        if (empty($colors)) {
            return null;
        }

        return 'background: linear-gradient('. $direction .', ' . implode(', ', $colors) . ');';
    }

    /**
     * Generate a CSS linear gradient string from the country's flag colors.
     *
     * @param string $direction The direction of the stripes. Can be 'horizontal' or 'vertical'.
     *
     * @return string|null The CSS gradient string or null if no colors are set.
     */
    public function generateFlagStripes(string $direction = 'horizontal'): string|null
    {
        $colors = $this->color_hex;
        if (empty($colors)) {
            return null;
        }

        $percentage = 100 / count($colors);
        $stripes = [];
        foreach ($colors as $color) {
            $stripes[] = $color . ' ' . $percentage . '%';
        }

        $gradientDirection = ($direction === 'vertical') ? 'to bottom' : 'to right';
        return 'background: linear-gradient(' . $gradientDirection . ', ' . implode(', ', $stripes) . ');';
    }

    /**
     * Generate a CSS string for a country's flag borders.
     *
     * This method will return a string of CSS rules that will generate a border around
     * an element, with each side of the border in a different color. The colors are
     * taken from the country's flag. If no colors are set, the method will return a
     * default border of white.
     *
     * @return string A CSS string of border rules.
     */
    public function generateFlagBorders(): string|null
    {
        $colors = $this->color_hex;
        if (empty($colors)) {
            return null;
        }

        $borders = [];
        $sides = ['top', 'right', 'bottom', 'left'];

        foreach ($colors as $index => $color) {
            $borders[] = 'border-' . $sides[$index % 4] . ': 5px solid ' . $color . ';';
        }

        return implode(' ', $borders);
    }

}
