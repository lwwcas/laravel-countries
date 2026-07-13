<?php

use Lwwcas\LaravelCountries\Commands\WCountriesInstallCommand;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\TurkishLanguageSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\LanguagesSeeder;

/**
 * @return array<string, string>
 */
function turkishCountriesFromSeeder(): array
{
    return (new TurkishLanguageSeeder)->countries();
}

/**
 * @return array<string, string>
 */
function turkishRegionsFromSeeder(): array
{
    $seeder = new TurkishLanguageSeeder;
    $property = (new ReflectionClass($seeder))->getProperty('regions');
    $property->setAccessible(true);

    /** @var array<string, string> $regions */
    $regions = $property->getValue($seeder);

    return $regions;
}

it('provides turkish translations for all seeded countries', function () {
    $countries = turkishCountriesFromSeeder();

    expect($countries)->toBeArray();
    expect(count($countries))->toBeGreaterThanOrEqual(245);
});

it('uses turkish locale and region labels', function () {
    $regions = turkishRegionsFromSeeder();

    expect($regions)->toMatchArray([
        'africa' => 'Afrika',
        'americas' => 'Amerika',
        'asia' => 'Asya',
        'europe' => 'Avrupa',
        'oceania' => 'Okyanusya',
    ]);
});

it('translates key countries into turkish', function (string $iso, string $expected) {
    $countries = turkishCountriesFromSeeder();

    expect($countries[$iso])->toBe($expected);
})->with([
    'Turkey' => ['TR', 'Türkiye'],
    'Germany' => ['DE', 'Almanya'],
    'United States' => ['US', 'Amerika Birleşik Devletleri'],
    'Cyprus' => ['CY', 'Kıbrıs'],
]);

it('registers turkish in the install command languages', function () {
    $command = new WCountriesInstallCommand;

    expect($command->languages)->toHaveKey('Turkish', TurkishLanguageSeeder::class);
    expect($command->languagesByLocale)->toHaveKey('tr', 'Turkish');
});

it('includes turkish seeder in languages seeder', function () {
    $source = file_get_contents((new ReflectionClass(LanguagesSeeder::class))->getFileName());

    expect($source)->toContain('TurkishLanguageSeeder');
    expect($source)->toContain('$this->call(Turkish::class)');
});
