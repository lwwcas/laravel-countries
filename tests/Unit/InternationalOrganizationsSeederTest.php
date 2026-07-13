<?php

use Lwwcas\LaravelCountries\Database\Seeders\Countries\AL_Albania;
use Lwwcas\LaravelCountries\Database\Seeders\Countries\AT_Austria;
use Lwwcas\LaravelCountries\Database\Seeders\Countries\CH_Switzerland;
use Lwwcas\LaravelCountries\Database\Seeders\Countries\CY_Cyprus;
use Lwwcas\LaravelCountries\Database\Seeders\Countries\DE_Germany;
use Lwwcas\LaravelCountries\Database\Seeders\Countries\IE_Ireland;
use Lwwcas\LaravelCountries\Database\Seeders\Countries\NO_Norway;
use Lwwcas\LaravelCountries\Database\Seeders\Countries\RE_Reunion;
use Lwwcas\LaravelCountries\Database\Seeders\Countries\RO_Romania;
use Lwwcas\LaravelCountries\Database\Seeders\Countries\UA_Ukraine;

/**
 * @return array<int, string>
 */
function internationalOrganizationsFromSeeder(string $seederClass): array
{
    $reflection = new ReflectionClass($seederClass);
    $contents = file_get_contents($reflection->getFileName());

    if (! preg_match('/\$this->international_organizations\s*=\s*(\[.*?\]);/s', $contents, $matches)) {
        throw new RuntimeException("Could not parse international_organizations from {$seederClass}");
    }

    /** @var array<int, string> $organizations */
    $organizations = eval('return '.$matches[1].';');

    return $organizations;
}

it('stores international organizations as an array on country extras', function () {
    $country = \Lwwcas\LaravelCountries\Database\Factories\CountryFactory::new()->create();

    $extras = \Lwwcas\LaravelCountries\Database\Factories\CountryExtrasFactory::new()->create([
        'lc_country_id' => $country->id,
        'international_organizations' => ['European Union (EU)', 'Schengen Area'],
    ]);

    expect($extras->international_organizations)
        ->toBeArray()
        ->toContain('European Union (EU)', 'Schengen Area');
});

it('includes schengen area for germany and switzerland seeders', function (string $seederClass) {
    $organizations = internationalOrganizationsFromSeeder($seederClass);

    expect($organizations)->toContain('Schengen Area');
})->with([
    'Germany' => DE_Germany::class,
    'Switzerland' => CH_Switzerland::class,
]);

it('marks romania as a schengen area member', function () {
    $organizations = internationalOrganizationsFromSeeder(RO_Romania::class);

    expect($organizations)->toContain('Schengen Area');
    expect($organizations)->not->toContain('Schengen Area (candidate)');
});

it('includes european economic area for eu and efta members', function (string $seederClass) {
    $organizations = internationalOrganizationsFromSeeder($seederClass);

    expect($organizations)->toContain('European Economic Area (EEA)');
})->with([
    'Germany' => DE_Germany::class,
    'Austria' => AT_Austria::class,
    'Norway' => NO_Norway::class,
]);

it('does not mark cyprus or ireland as schengen members', function (string $seederClass) {
    $organizations = internationalOrganizationsFromSeeder($seederClass);

    expect($organizations)->not->toContain('Schengen Area');
})->with([
    'Cyprus' => CY_Cyprus::class,
    'Ireland' => IE_Ireland::class,
]);

it('marks official european union candidates', function (string $seederClass) {
    $organizations = internationalOrganizationsFromSeeder($seederClass);

    expect($organizations)->toContain('European Union candidate');
})->with([
    'Albania' => AL_Albania::class,
    'Ukraine' => UA_Ukraine::class,
]);

it('describes reunion as an eu overseas territory of france', function () {
    $organizations = internationalOrganizationsFromSeeder(RE_Reunion::class);

    expect($organizations)->toContain('European Union (as an overseas territory of France)');
});
