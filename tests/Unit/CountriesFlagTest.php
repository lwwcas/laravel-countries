<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Models\Country;

it('finds country by flag color', function () {
    $greenHex = '#008000';
    $greenRgb = '0,128,0';

    CountryFactory::new()->create([
        'color_hex' => $greenHex,
        'color_rgb' => $greenRgb,
    ]);

    $countriesHex = Country::whereFlagColor($greenHex)->get();
    $countriesRgb = Country::whereFlagColor($greenRgb)->get();

    expect($countriesHex)->not()->toBeNull();
    expect($countriesRgb)->not()->toBeNull();

    expect($countriesHex)->toHaveCount(1);
    expect($countriesRgb)->toHaveCount(1);
});

it('can find a country by flag emoji and Ucode', function () {
    $country = CountryFactory::new()->create(['emoji' => ['img' => '🇵🇹', 'uCode' => 'U+1F1FA U+1F1F8']]);
    $foundCountryByEmoji = Country::whereFlagEmoji("🇵🇹")->first();
    $foundCountryByCode = Country::whereFlagEmoji("U+1F1FA U+1F1F8")->first();

    expect($foundCountryByEmoji)->not()->toBeNull();
    expect($foundCountryByEmoji->id)->toBe($country->id);

    expect($foundCountryByCode)->not()->toBeNull();
    expect($foundCountryByCode->id)->toBe($country->id);
});

it('tests colors', function () {
    $greenHex = '#008000';
    $greenRgb = '0,128,0';

    CountryFactory::new()->create([
        'color_hex' => $greenHex,
        'color_rgb' => $greenRgb,
    ]);

    $country = Country::first();

    expect($country->colors('hex'))->not()->toBeNull();
    expect($country->colors('rgb'))->not()->toBeNull();
    expect($country->colors('hex'))->toBeArray();
    expect($country->colors('rgb'))->toBeArray();

    expect($country->colors('hex'))->toMatchArray([
        0 => $greenHex
    ]);
    expect($country->colors('rgb'))->toMatchArray([
        0 => $greenRgb
    ]);
});

it('can generate flag data', function () {
    $country = CountryFactory::new()->create();

    $data = $country->flag();

    expect($data)->not()->toBeNull();
    expect($data)->toBeInstanceOf(Illuminate\Support\Collection::class)
        ->toHaveKey('emoji')
        ->toHaveKey('colors');

    expect($data['emoji'])->toHaveKey('icon');
    expect($data['emoji'])->toHaveKey('uCode');
    expect($data['colors'])->toHaveKey('rgb');
    expect($data['colors'])->toHaveKey('hex');
});

it('returns the correct flag emoji', function () {
    $country = CountryFactory::new()->create(['emoji' => ['img' => '🇵🇹', 'uCode' => 'U+1F1FA U+1F1F8']]);

    expect($country->flagEmoji())->not()->toBeNull();
    expect($country->flagEmoji())->toEqual($country->emoji['img']);
});

it('returns the correct flag emoji Ucode', function () {
    $country = CountryFactory::new()->create(['emoji' => ['img' => '🇵🇹', 'uCode' => 'U+1F1FA U+1F1F8']]);

    expect($country->flagCode())->not()->toBeNull();
    expect($country->flagCode())->toEqual($country->emoji['uCode']);
});

it('returns the correct flag colors in Hex and RGB', function () {
    $greenHex = '#008000';
    $greenRgb = '0,128,0';

    $country = CountryFactory::new()->create([
        'color_hex' => $greenHex,
        'color_rgb' => $greenRgb,
    ]);

    expect($country->flagColors('hex'))->not()->toBeNull();
    expect($country->flagColors('rgb'))->not()->toBeNull();
    expect($country->flagColors('hex'))->toBeArray();
    expect($country->flagColors('rgb'))->toBeArray();

    expect($country->flagColors('hex'))->toMatchArray([
        0 => $greenHex
    ]);
    expect($country->flagColors('rgb'))->toMatchArray([
        0 => $greenRgb
    ]);
});

it('returns the correct flag colors in Hex', function () {
    $greenHex = '#008000';

    $country = CountryFactory::new()->create([
        'color_hex' => $greenHex
    ]);

    expect($country->flagColorsInHex())->not()->toBeNull();
    expect($country->flagColorsInHex())->toBeArray();

    expect($country->flagColorsInHex())->toMatchArray([
        0 => $greenHex
    ]);
});

it('returns the correct flag colors in Rgb', function () {
    $greenRgb = '0,128,0';

    $country = CountryFactory::new()->create([
        'color_rgb' => $greenRgb,
    ]);

    expect($country->flagColorsInRgb())->not()->toBeNull();
    expect($country->flagColorsInRgb())->toBeArray();

    expect($country->flagColorsInRgb())->toMatchArray([
        0 => $greenRgb
    ]);
});

it('can generate flag gradient on default', function () {
    $country = CountryFactory::new()->create();

    $gradient = $country->generateFlagGradient();
    $colors = implode(', ' ,$country->color_hex);

    expect($gradient)->not()->toBeNull();
    expect($gradient)->toBeString();
    expect($gradient)->toContain('background: linear-gradient');
    expect($gradient)->toContain($colors);
});

it('can generate flag gradient start on left', function () {
    $country = CountryFactory::new()->create();

    $gradient = $country->generateFlagGradient('left');
    $colors = implode(', ' ,$country->color_hex);

    expect($gradient)->not()->toBeNull();
    expect($gradient)->toBeString();
    expect($gradient)->toContain('background: linear-gradient(90deg');
    expect($gradient)->toContain($colors);
});

it('can generate flag gradient start on right', function () {
    $country = CountryFactory::new()->create();

    $gradient = $country->generateFlagGradient('right');
    $colors = implode(', ' ,$country->color_hex);

    expect($gradient)->not()->toBeNull();
    expect($gradient)->toBeString();
    expect($gradient)->toContain('background: linear-gradient(270deg');
    expect($gradient)->toContain($colors);
});

it('can generate flag gradient start on top', function () {
    $country = CountryFactory::new()->create();

    $gradient = $country->generateFlagGradient('top');
    $colors = implode(', ' ,$country->color_hex);

    expect($gradient)->not()->toBeNull();
    expect($gradient)->toBeString();
    expect($gradient)->toContain('background: linear-gradient(0deg');
    expect($gradient)->toContain($colors);
});

it('can generate flag gradient start on bottom', function () {
    $country = CountryFactory::new()->create();

    $gradient = $country->generateFlagGradient('bottom');
    $colors = implode(', ' ,$country->color_hex);

    expect($gradient)->not()->toBeNull();
    expect($gradient)->toBeString();
    expect($gradient)->toContain('background: linear-gradient(180deg');
    expect($gradient)->toContain($colors);
});

it('can generate a combined flag gradient on default', function () {
    $country = CountryFactory::new()->create();
    $otherCountry = CountryFactory::new()->create();

    $gradient = $country->generateCombinedFlagGradient($otherCountry);
    $colors = implode(', ', $country->color_hex);
    $otherColors = implode(', ', $otherCountry->color_hex);

    expect($gradient)->not()->toBeNull();
    expect($gradient)->toBeString();
    expect($gradient)->toContain('background: linear-gradient');
    expect($gradient)->toContain($colors);
    expect($gradient)->toContain($otherColors);
});

it('can generate a flag stripes on default', function () {
    $country = CountryFactory::new()->create();

    $stripes = $country->generateFlagStripes();
    $firstColor = $country->color_hex[0];

    expect($stripes)->not()->toBeNull();
    expect($stripes)->toBeString();
    expect($stripes)->toContain('background: linear-gradient');
    expect($stripes)->toContain($firstColor);
});

it('can generate a flag stripes on horizontal', function () {
    $country = CountryFactory::new()->create();

    $stripes = $country->generateFlagStripes('horizontal');
    $firstColor = $country->color_hex[0];

    expect($stripes)->not()->toBeNull();
    expect($stripes)->toBeString();
    expect($stripes)->toContain('background: linear-gradient(to right');
    expect($stripes)->toContain($firstColor);
});

it('can generate a flag stripes on vertical', function () {
    $country = CountryFactory::new()->create();

    $stripes = $country->generateFlagStripes('vertical');
    $firstColor = $country->color_hex[0];

    expect($stripes)->not()->toBeNull();
    expect($stripes)->toBeString();
    expect($stripes)->toContain('background: linear-gradient(to bottom');
    expect($stripes)->toContain($firstColor);
});

it('can generate a flag borders', function () {
    $country = CountryFactory::new()->create();

    $borders = $country->generateFlagBorders();
    $firstColor = $country->color_hex[0];

    expect($borders)->not()->toBeNull();
    expect($borders)->toBeString();
    expect($borders)->toContain('border-top: 5px solid');
    expect($borders)->toContain($firstColor);
});
