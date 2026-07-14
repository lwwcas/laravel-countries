<?php

use Lwwcas\LaravelCountries\Database\Seeders\Countries\XK_Kosovo;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\ArabicLanguageSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\DutchLanguageSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\FrenchLanguageSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\GermanLanguageSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\ItalianLanguageSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\PortugueseLanguageSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\RussianLanguageSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\SpanishLanguageSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\TurkishLanguageSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\LwwcasDatabaseSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\RegionsSeeder;
use Lwwcas\LaravelCountries\Models\Country;

it('seeds Kosovo with its commonly used codes and country data', function () {
    $this->seed(RegionsSeeder::class);
    $this->seed(XK_Kosovo::class);

    $kosovo = Country::where('iso_alpha_2', 'XK')->firstOrFail();

    expect($kosovo)
        ->official_name->toBe('Republic of Kosovo')
        ->iso_alpha_3->toBe('XKX')
        ->iso_numeric->toBe(983)
        ->international_phone->toBe('383')
        ->capital->toBe('Pristina')
        ->languages->toBe(['sq', 'sr'])
        ->borders->toEqualCanonicalizing(['al', 'me', 'mk', 'rs']);

    expect($kosovo->translate('en')->name)->toBe('Kosovo');
    expect($kosovo->coordinates)->not->toBeNull();
    expect($kosovo->geographical)->not->toBeNull();
});

it('registers the Kosovo seeder in the main database seeder', function () {
    $source = file_get_contents((new ReflectionClass(LwwcasDatabaseSeeder::class))->getFileName());

    expect($source)
        ->toContain('use Lwwcas\LaravelCountries\Database\Seeders\Countries\XK_Kosovo;')
        ->toContain('$this->call(XK_Kosovo::class);');
});

it('includes Kosovo in every supported language seeder', function (string $seeder, string $expected) {
    $countries = (new $seeder)->countries();

    expect($countries)->toHaveKey('XK', $expected);
})->with([
    'Arabic' => [ArabicLanguageSeeder::class, 'كوسوفو'],
    'Dutch' => [DutchLanguageSeeder::class, 'Kosovo'],
    'French' => [FrenchLanguageSeeder::class, 'Kosovo'],
    'German' => [GermanLanguageSeeder::class, 'Kosovo'],
    'Italian' => [ItalianLanguageSeeder::class, 'Kosovo'],
    'Portuguese' => [PortugueseLanguageSeeder::class, 'Kosovo'],
    'Russian' => [RussianLanguageSeeder::class, 'Косово'],
    'Spanish' => [SpanishLanguageSeeder::class, 'Kosovo'],
    'Turkish' => [TurkishLanguageSeeder::class, 'Kosova'],
]);
