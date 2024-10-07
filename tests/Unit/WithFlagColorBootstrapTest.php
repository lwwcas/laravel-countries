<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;

it('should can generate flag gradient on default', function () {
    $country = CountryFactory::new()->create();

    $gradient = $country->getFlagGradient();
    $colors = implode(', ', $country->getFlagColorsHex());

    expect($gradient)->not()->toBeNull();
    expect($gradient)->toBeString();
    expect($gradient)->toContain('background: linear-gradient');
    expect($gradient)->toContain($colors);
});

it('should can generate flag gradient start on left', function () {
    $country = CountryFactory::new()->create();

    $gradient = $country->getFlagGradient('left');
    $colors = implode(', ', $country->getFlagColorsHex());

    expect($gradient)->not()->toBeNull();
    expect($gradient)->toBeString();
    expect($gradient)->toContain('background: linear-gradient(90deg');
    expect($gradient)->toContain($colors);
});

it('should can generate flag gradient start on right', function () {
    $country = CountryFactory::new()->create();

    $gradient = $country->getFlagGradient('right');
    $colors = implode(', ', $country->getFlagColorsHex());

    expect($gradient)->not()->toBeNull();
    expect($gradient)->toBeString();
    expect($gradient)->toContain('background: linear-gradient(270deg');
    expect($gradient)->toContain($colors);
});

it('should can generate flag gradient start on top', function () {
    $country = CountryFactory::new()->create();

    $gradient = $country->getFlagGradient('top');
    $colors = implode(', ', $country->getFlagColorsHex());

    expect($gradient)->not()->toBeNull();
    expect($gradient)->toBeString();
    expect($gradient)->toContain('background: linear-gradient(0deg');
    expect($gradient)->toContain($colors);
});

it('should can generate flag gradient start on bottom', function () {
    $country = CountryFactory::new()->create();

    $gradient = $country->getFlagGradient('bottom');
    $colors = implode(', ', $country->getFlagColorsHex());

    expect($gradient)->not()->toBeNull();
    expect($gradient)->toBeString();
    expect($gradient)->toContain('background: linear-gradient(180deg');
    expect($gradient)->toContain($colors);
});

it('should can generate a combined flag gradient on default', function () {
    $country = CountryFactory::new()->create();
    $otherCountry = CountryFactory::new()->create();

    $gradient = $country->getCombinedFlagGradient($otherCountry);
    $colors = implode(', ', $country->getFlagColorsHex());
    $otherColors = implode(', ', $otherCountry->getFlagColorsHex());

    expect($gradient)->not()->toBeNull();
    expect($gradient)->toBeString();
    expect($gradient)->toContain('background: linear-gradient');
    expect($gradient)->toContain($colors);
    expect($gradient)->toContain($otherColors);
});

it('should can generate a flag stripes on default', function () {
    $country = CountryFactory::new()->create();

    $stripes = $country->getFlagStripes();
    $firstColor = $country->getFlagColorsHex()[0];

    expect($stripes)->not()->toBeNull();
    expect($stripes)->toBeString();
    expect($stripes)->toContain('background: linear-gradient');
    expect($stripes)->toContain($firstColor);
});

it('should can generate a flag stripes on horizontal', function () {
    $country = CountryFactory::new()->create();

    $stripes = $country->getFlagStripes('horizontal');
    $firstColor = $country->getFlagColorsHex()[0];

    expect($stripes)->not()->toBeNull();
    expect($stripes)->toBeString();
    expect($stripes)->toContain('background: linear-gradient(to right');
    expect($stripes)->toContain($firstColor);
});

it('should can generate a flag stripes on vertical', function () {
    $country = CountryFactory::new()->create();

    $stripes = $country->getFlagStripes('vertical');
    $firstColor = $country->getFlagColorsHex()[0];

    expect($stripes)->not()->toBeNull();
    expect($stripes)->toBeString();
    expect($stripes)->toContain('background: linear-gradient(to bottom');
    expect($stripes)->toContain($firstColor);
});

it('should can generate a flag borders', function () {
    $country = CountryFactory::new()->create();

    $borders = $country->getFlagBorders();
    $firstColor = $country->getFlagColorsHex()[0];

    expect($borders)->not()->toBeNull();
    expect($borders)->toBeString();
    expect($borders)->toContain('border-top: 5px solid');
    expect($borders)->toContain($firstColor);
});
