<?php

namespace Lwwcas\LaravelCountries\Trait;

use Lwwcas\LaravelCountries\Models\Country;

trait WithFlagColorBootstrap
{
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
    public function getFlagGradient(string $startsOn = null): string|null
    {
        $direction = $this->getGradientDirection($startsOn);
        $hexColors = $this->getFlagColorsHex();
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

    public function getCombinedFlagGradient(Country $otherCountry, string $startsOn = null): string|null
    {
        $thisColors = $this->getFlagColorsHex();
        $otherColors = $otherCountry->getFlagColorsHex();
        $direction = $this->getGradientDirection($startsOn);

        $colors = array_merge($thisColors, $otherColors);

        if (empty($colors)) {
            return null;
        }

        return 'background: linear-gradient(' . $direction . ', ' . implode(', ', $colors) . ');';
    }

    /**
     * Generate a CSS linear gradient string from the country's flag colors.
     *
     * @param string $direction The direction of the stripes. Can be 'horizontal' or 'vertical'.
     *
     * @return string|null The CSS gradient string or null if no colors are set.
     */
    public function getFlagStripes(string $direction = 'horizontal'): string|null
    {
        $colors = $this->getFlagColorsHex();
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
    public function getFlagBorders(): string|null
    {
        $colors = $this->getFlagColorsHex();
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
