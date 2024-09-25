<?php
use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Database\Factories\CountryRegionFactory;
use Lwwcas\LaravelCountries\Database\Factories\CountryRegionTranslationFactory;
use Lwwcas\LaravelCountries\Database\Factories\CountryTranslationFactory;
use Lwwcas\LaravelCountries\Models\Country;

it('returns coordinates in classic format', function () {
    $country = CountryFactory::new()->create([
        'coordinates' => [
            'latitude' => [
                'desc' => '-19.000280380249023',
                'classic' => '20 00 S',
            ],
            'longitude' => [
                'desc' => '29.86876106262207',
                'classic' => '30 00 E',
            ]
        ]
    ]);

    $data = $country->coordinatesInClassic();

    expect($data)->not()->toBeNull();
    expect($data)->toBeArray();

    expect($data)->toHaveKey('latitude');
    expect($data)->toHaveKey('longitude');

    expect($data['latitude'])->toContain('20 00 S');
    expect($data['longitude'])->toContain('30 00 E');
});

it('returns coordinates in decimal format', function () {
    $country = CountryFactory::new()->create([
        'coordinates' => [
            'latitude' => [
                'desc' => '-19.000280380249023',
                'classic' => '20 00 S',
            ],
            'longitude' => [
                'desc' => '29.86876106262207',
                'classic' => '30 00 E',
            ]
        ]
    ]);

    $data = $country->coordinatesInDecimal();

    expect($data)->not()->toBeNull();
    expect($data)->toBeArray();

    expect($data)->toHaveKey('latitude');
    expect($data)->toHaveKey('longitude');

    expect($data['latitude'])->toContain('-19.000280380249023');
    expect($data['longitude'])->toContain('29.86876106262207');
});

it('gets the center of limits', function () {
    $country = CountryFactory::new()->create([
        'coordinates' => [
            'latitude' => [
                'desc' => '-19.000280380249023',
                'classic' => '20 00 S',
            ],
            'longitude' => [
                'desc' => '29.86876106262207',
                'classic' => '30 00 E',
            ]
        ]
    ]);

    $centerOfLimits = $country->getCenterOfLimits();

    expect($centerOfLimits)->toBeArray();
    expect($centerOfLimits)->toHaveKeys(['latitude', 'longitude']);
});

it('returns true when the country is located in the northern hemisphere', function () {
    $country = CountryFactory::new()->create([
        'coordinates' => [
            'latitude' => [
                'desc' => '-19.000280380249023',
                'classic' => '20 00 S',
            ],
            'longitude' => [
                'desc' => '29.86876106262207',
                'classic' => '30 00 E',
            ]
        ]
    ]);

    $data = $country->isInNorthernHemisphere();

    expect($data)->not()->toBeNull();
    expect($data)->not()->toBeString();
    expect($data)->toBeTrue();
});

it('returns true when the country is located in the south hemisphere', function () {
    $country = CountryFactory::new()->create([
        'coordinates' => [
            'latitude' => [
                'desc' => '-19.000280380249023',
                'classic' => '20 00 S',
            ],
            'longitude' => [
                'desc' => '29.86876106262207',
                'classic' => '30 00 E',
            ]
        ]
    ]);

    $data = $country->isInSouthernHemisphere();

    expect($data)->not()->toBeNull();
    expect($data)->not()->toBeString();
    expect($data)->toBeFalse();
});

it('returns coordinates in decimal degrees format', function () {
    $country = CountryFactory::new()->create([
        'coordinates' => [
            'latitude' => [
                'desc' => '-13.299612045288086',
                'classic' => '13 18 S',
            ],
            'longitude' => [
                'desc' => '-176.1701202392578',
                'classic' => '176 12 W',
            ]
        ]
    ]);

    $data = $country->coordinatesInDecimalDegrees();

    expect($data)->not()->toBeNull();
    expect($data)->toBeString();

    expect($data)->toContain('13.299612° S');
    expect($data)->toContain('176.170120° W');
});

it('returns coordinates in degrees minutes seconds format', function () {
    $country = CountryFactory::new()->create([
        'coordinates' => [
            'latitude' => [
                'desc' => '-13.329661',
                'classic' => '13 18 S',
            ],
            'longitude' => [
                'desc' => '-176.194186',
                'classic' => '176 12 W',
            ]
        ]
    ]);

    $data = $country->coordinatesInDegreesMinutesSeconds();

    expect($data)->not()->toBeNull();
    expect($data)->toBeString();

    expect($data)->toContain("13° 1579' 189526.78\" S");
    expect($data)->toContain("176° 21131' 2535759.07\" W");
});

it('returns coordinates in klm format', function () {
    $country = CountryFactory::new()->create([
        'coordinates' => [
            'latitude' => [
                'desc' => '-13.329661',
                'classic' => '13 18 S',
            ],
            'longitude' => [
                'desc' => '-176.194186',
                'classic' => '176 12 W',
            ]
        ]
    ]);

    $data = $country->coordinatesInKLM();

    expect($data)->not()->toBeNull();
    expect($data)->toBeString();
});

it('returns coordinates in geo tags format', function () {
    $country = CountryFactory::new()->create([
        'coordinates' => [
            'latitude' => [
                'desc' => '-13.329661',
                'classic' => '13 18 S',
            ],
            'longitude' => [
                'desc' => '-176.194186',
                'classic' => '176 12 W',
            ]
        ]
    ]);

    $data = $country->coordinatesInGeoTags();

    expect($data)->not()->toBeNull();
    expect($data)->toBeString();

    expect($data)->toContain("geotagged");
    expect($data)->toContain("geo:lat=-13.329661");
    expect($data)->toContain("geo:lon=-176.194186");
});

it('returns coordinates in meta tag ICBM format', function () {
    $country = CountryFactory::new()->create([
        'coordinates' => [
            'latitude' => [
                'desc' => '-13.329661',
                'classic' => '13 18 S',
            ],
            'longitude' => [
                'desc' => '-176.194186',
                'classic' => '176 12 W',
            ]
        ]
    ]);

    $data = $country->coordinatesInGeoTagsMetaTagICBM();

    expect($data)->not()->toBeNull();
    expect($data)->toBeString();

    expect($data)->toContain("name=\"ICBM\"");
    expect($data)->toContain("-13.329661");
    expect($data)->toContain("-176.194186");
});

it('returns coordinates in geo meta tag format', function () {
    $region = CountryRegionFactory::new()->create();
    CountryRegionTranslationFactory::new()->create([
        'lc_region_id' => $region->id,
        'locale' => 'en',
    ]);
    $country = CountryFactory::new()->create([
        'lc_region_id' => $region->id,
        'coordinates' => [
            'latitude' => [
                'desc' => '-13.329661',
                'classic' => '13 18 S',
            ],
            'longitude' => [
                'desc' => '-176.194186',
                'classic' => '176 12 W',
            ]
        ]
    ]);
    CountryTranslationFactory::new()->create([
        'lc_country_id' => $country->id,
        'locale' => 'en',
    ]);

    $locale = 'en';
    $data = $country->coordinatesInGeoMetaTags($locale);

    expect($data)->not()->toBeNull();
    expect($data)->toBeString();

    expect($data)->toContain("name=\"geo.position\"");
    expect($data)->toContain("name=\"geo.placename\" ");
    expect($data)->toContain("name=\"geo.region\" ");
    expect($data)->toContain("-13.329661");
    expect($data)->toContain("-176.194186");
});

it('returns coordinates in geo json format', function () {
    $country = CountryFactory::new()->create([
        'coordinates' => [
            'latitude' => [
                'desc' => '-13.329661',
                'classic' => '13 18 S',
            ],
            'longitude' => [
                'desc' => '-176.194186',
                'classic' => '176 12 W',
            ]
        ]
    ]);

    $data = $country->coordinatesInGeoJSON();

    expect($data)->not()->toBeNull();
    expect($data)->toBeString();

    expect($data)->toContain("\"type\": \"Point\"");
    expect($data)->toContain("-13.329661");
    expect($data)->toContain("-176.194186");
});

it('returns coordinates in csv format', function () {
    $country = CountryFactory::new()->create([
        'coordinates' => [
            'latitude' => [
                'desc' => '-13.329661',
                'classic' => '13 18 S',
            ],
            'longitude' => [
                'desc' => '-176.194186',
                'classic' => '176 12 W',
            ]
        ]
    ]);

    $data = $country->coordinatesInCSV();

    expect($data)->not()->toBeNull();
    expect($data)->toBeString();

    expect($data)->toContain("latitude,longitude");
    expect($data)->toContain("-13.329661");
    expect($data)->toContain("-176.194186");
});
