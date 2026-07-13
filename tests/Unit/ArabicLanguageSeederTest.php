<?php

use Lwwcas\LaravelCountries\Database\Seeders\Languages\ArabicLanguageSeeder;

/**
 * @return array<string, string>
 */
function arabicCountriesFromSeeder(): array
{
    return (new ArabicLanguageSeeder())->countries();
}

/**
 * @return array<string, string>
 */
function arabicRegionsFromSeeder(): array
{
    $seeder = new ArabicLanguageSeeder();
    $property = (new ReflectionClass($seeder))->getProperty('regions');
    $property->setAccessible(true);

    /** @var array<string, string> $regions */
    $regions = $property->getValue($seeder);

    return $regions;
}

it('provides arabic translations for all seeded countries', function () {
    $countries = arabicCountriesFromSeeder();

    expect($countries)->toBeArray();
    expect(count($countries))->toBeGreaterThanOrEqual(245);
});

it('uses corrected arabic country names for previously mistranslated entries', function (string $iso, string $expected) {
    $countries = arabicCountriesFromSeeder();

    expect($countries[$iso])->toBe($expected);
})->with([
    'Ecuador' => ['EC', 'الإكوادور'],
    'Grenada' => ['GD', 'غرينادا'],
    'Egypt' => ['EG', 'مصر'],
    'Ghana' => ['GH', 'غانا'],
    'Kenya' => ['KE', 'كينيا'],
    'Qatar' => ['QA', 'قطر'],
    'Yemen' => ['YE', 'اليمن'],
    'Western Sahara' => ['EH', 'الصحراء الغربية'],
]);

it('does not keep invalid legacy country codes in arabic seeder', function () {
    $countries = arabicCountriesFromSeeder();

    expect($countries)->not->toHaveKey('HE');
    expect($countries)->not->toContain('Egito', 'Iêmen', 'Serra Leoa', 'Gabaon');
});

it('names the oceania region distinctly from australia', function () {
    $regions = arabicRegionsFromSeeder();
    $countries = arabicCountriesFromSeeder();

    expect($regions['oceania'])->toBe('أوقيانوسيا');
    expect($countries['AU'])->toBe('أستراليا');
});
