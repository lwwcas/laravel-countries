<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

trait HasWhereFlagColors
{
    /**
     * Scope a query to only include countries that have a given flag color.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeWhereFlagColor($query, string|array $name)
    {
        if (is_array($name)) {
            $namesInTitle = array_map(fn ($name) => Str::title($name), $name);

            return $this->whereFlagByManyColors($namesInTitle, 'flag_colors');
        }

        $name = (string) Str::title($name);

        return $this->whereFlagByOneColor($name, 'flag_colors');
    }

    /**
     * Scope a query to only include countries that have a given flag color in Web
     * color notation.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeWhereFlagColorWeb($query, string|array $name)
    {
        if (is_array($name)) {
            $namesInLowercase = array_map(fn ($name) => Str::lower($name), $name);

            return $this->whereFlagByManyColors($namesInLowercase, 'flag_colors_web');
        }

        $name = (string) Str::lower($name);

        return $this->whereFlagByOneColor($name, 'flag_colors_web');
    }

    /**
     * Scope a query to only include countries that have a given contrast color.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeWhereFlagContrast($query, string|array $contrast)
    {
        if (is_array($contrast)) {
            return $this->whereFlagByManyColors($contrast, 'flag_colors_contrast');
        }

        return $this->whereFlagByOneColor($contrast, 'flag_colors_contrast');
    }

    /**
     * Scope a query to only include countries that have a given flag color in Hex.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeWhereFlagColorHex($query, string|array $hex)
    {
        if (is_array($hex)) {
            return $this->whereFlagByManyColors($hex, 'flag_colors_hex');
        }

        return $this->whereFlagByOneColor($hex, 'flag_colors_hex');
    }

    /**
     * Scope a query to only include countries that have a given flag color in RGB.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeWhereFlagColorRGB($query, string|array $rgb)
    {
        if (is_array($rgb)) {
            return $this->whereFlagByManyColors($rgb, 'flag_colors_rgb');
        }

        return $this->whereFlagByOneColor($rgb, 'flag_colors_rgb');
    }

    /**
     * Scope a query to only include countries that have a given flag color in CMYK.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeWhereFlagColorCMYK($query, string|array $cmyk)
    {
        if (is_array($cmyk)) {
            return $this->whereFlagByManyColors($cmyk, 'flag_colors_cmyk');
        }

        return $this->whereFlagByOneColor($cmyk, 'flag_colors_cmyk');
    }

    /**
     * Scope a query to only include countries that have a given flag color in HSL.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeWhereFlagColorHSL($query, string|array $hsl)
    {
        if (is_array($hsl)) {
            return $this->whereFlagByManyColors($hsl, 'flag_colors_hsl');
        }

        return $this->whereFlagByOneColor($hsl, 'flag_colors_hsl');
    }

    /**
     * Scope a query to only include countries that have a given flag color in HSV.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeWhereFlagColorHSV($query, string|array $hsv)
    {
        if (is_array($hsv)) {
            return $this->whereFlagByManyColors($hsv, 'flag_colors_hsv');
        }

        return $this->whereFlagByOneColor($hsv, 'flag_colors_hsv');
    }

    /**
     * Scope a query to only include countries that have a given Pantone color code.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeWhereFlagColorPantone($query, string|array $pantone)
    {
        if (is_array($pantone)) {
            return $this->whereFlagByManyColors($pantone, 'flag_colors_pantone');
        }

        return $this->whereFlagByOneColor($pantone, 'flag_colors_pantone');
    }

    /**
     * Scope a query to only include countries that have one color.
     *
     * @param  Builder  $query
     * @return Builder
     */
    protected function scopeWhereFlagByOneColor($query, string $name, string $tableName)
    {
        return $query->whereLike($tableName, '%'.$name.'%');
    }

    /**
     * Scope a query to only include countries that have all the given colors.
     *
     * @param  Builder  $query
     * @return Builder
     */
    protected function scopeWhereFlagByManyColors($query, array $names, string $tableName)
    {
        return $query->where(function ($query) use ($names, $tableName) {
            foreach ($names as $color) {
                $query->orWhereLike($tableName, '%'.$color.'%');
            }
        });
    }
}
