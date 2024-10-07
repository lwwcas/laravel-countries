<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;

dataset('getters.flagColors', [
    'getFlagColors',
    'getFlagColorsName',
    'getFlagColorsWeb',
    'getFlagColorsContrast',
    'getFlagColorsHex',
    'getFlagColorsRgb',
    'getFlagColorsCmyk',
    'getFlagColorsHsl',
    'getFlagColorsHsv',
    'getFlagColorsPantone',
]);

it('should getters of flag colors returns an array', function ($getter) {
    $country = CountryFactory::new()->make();

    expect($country->{$getter}())->toBeArray();
})->with('getters.flagColors');

it('should getters of flag colors returns empty array if no colors are set', function ($getter) {
    $country = CountryFactory::new()->make([
        'flag_colors' => null,
        'flag_colors_hex' => null,
        'flag_colors_rgb' => null,
        'flag_colors_contrast' => null,
        'flag_colors_web' => null,
        'flag_colors_cmyk' => null,
        'flag_colors_hsl' => null,
        'flag_colors_hsv' => null,
        'flag_colors_pantone' => null,
    ]);

    expect($country->{$getter}())->toBeArray();
    expect($country->{$getter}())->toBeEmpty();
})->with('getters.flagColors');
