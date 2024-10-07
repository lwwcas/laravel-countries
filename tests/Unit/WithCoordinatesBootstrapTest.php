<?php
use Lwwcas\LaravelCountries\Database\Factories\CountryCoordinatesFactory;
use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Database\Factories\CountryRegionFactory;

it('should return the latitude in decimal degrees', function () {
    $country = CountryFactory::new()->create();
    CountryCoordinatesFactory::new()->create([
        'lc_country_id' => $country->id,
        'latitude' => '8.8390',
    ]);

    expect($country->latitude())->toEqual(8.8390);
});

it('should return the longitude in decimal degrees', function () {
    $country = CountryFactory::new()->create();
    CountryCoordinatesFactory::new()->create([
        'lc_country_id' => $country->id,
        'longitude' => '8.8390',
    ]);

    expect($country->longitude())->toEqual(8.8390);
});

it('should return the coordinates in Degrees With Decimal', function () {
    $country = CountryFactory::new()->create();
    $coordinates = CountryCoordinatesFactory::new()->create([
        'lc_country_id' => $country->id,
    ]);

    expect($country->coordinatesInDegreesWithDecimal())->toEqual($coordinates->degrees_with_decimal);
});

it('should return the coordinates in dd', function () {
    $country = CountryFactory::new()->create();
    $coordinates = CountryCoordinatesFactory::new()->create([
        'lc_country_id' => $country->id,
    ]);

    expect($country->coordinatesInDD())->toEqual($coordinates->degrees_with_decimal);
});

it('should return the coordinates in Degrees Minutes Seconds', function () {
    $country = CountryFactory::new()->create();
    $coordinates = CountryCoordinatesFactory::new()->create([
        'lc_country_id' => $country->id,
    ]);

    expect($country->coordinatesInDegreesMinutesSeconds())->toEqual($coordinates->degrees_minutes_seconds);
});

it('should return the coordinates in dms', function () {
    $country = CountryFactory::new()->create();
    $coordinates = CountryCoordinatesFactory::new()->create([
        'lc_country_id' => $country->id,
    ]);

    expect($country->coordinatesInDMS())->toEqual($coordinates->degrees_minutes_seconds);
});

it('should return the coordinates in Degrees And Decimal Minutes', function () {
    $country = CountryFactory::new()->create();
    $coordinates = CountryCoordinatesFactory::new()->create([
        'lc_country_id' => $country->id,
    ]);

    expect($country->coordinatesInDegreesAndDecimalMinutes())->toEqual($coordinates->degrees_and_decimal_minutes);
});

it('should return the coordinates in ddm', function () {
    $country = CountryFactory::new()->create();
    $coordinates = CountryCoordinatesFactory::new()->create([
        'lc_country_id' => $country->id,
    ]);

    expect($country->coordinatesInDDM())->toEqual($coordinates->degrees_and_decimal_minutes);
});

it('should returns coordinates in decimal format', function () {
    $country = CountryFactory::new()->create();
    CountryCoordinatesFactory::new()->create([
        'lc_country_id' => $country->id,
    ]);

    $data = $country->coordinatesInDecimal();

    expect($data)->not()->toBeNull();
    expect($data)->toBeArray();

    expect($data)->toHaveKey('latitude');
    expect($data)->toHaveKey('longitude');
});

it('should returns true when the country is located in the northern hemisphere', function () {
    $country = CountryFactory::new()->create();
    CountryCoordinatesFactory::new()->create([
        'lc_country_id' => $country->id,
        'latitude' => '8.8390'
    ]);

    $data = $country->isInNorthernHemisphere();

    expect($data)->not()->toBeNull();
    expect($data)->not()->toBeString();
    expect($data)->toBeTrue();
});

it('should returns true when the country is located in the south hemisphere', function () {
    $country = CountryFactory::new()->create();
    CountryCoordinatesFactory::new()->create([
        'lc_country_id' => $country->id,
        'latitude' => '-8.8390',
    ]);

    $data = $country->isInSouthernHemisphere();

    expect($data)->not()->toBeNull();
    expect($data)->not()->toBeString();
    expect($data)->toBeTrue();
});

it('should returns coordinates in klm format', function () {
    $country = CountryFactory::new()->create();
    CountryCoordinatesFactory::new()->create([
        'lc_country_id' => $country->id,
    ]);

    $data = $country->coordinatesInKLM();

    expect($data)->not()->toBeNull();
    expect($data)->toBeString();
});

it('should returns coordinates in geo tags format', function () {
    $country = CountryFactory::new()->create();
    CountryCoordinatesFactory::new()->create([
        'lc_country_id' => $country->id,
    ]);

    $data = $country->coordinatesInGeoTags();

    expect($data)->not()->toBeNull();
    expect($data)->toBeString();

    expect($data)->toContain("geotagged");
    expect($data)->toContain("geo:lat=");
    expect($data)->toContain("geo:lon=");
});

it('should returns coordinates in meta tag ICBM format', function () {
    $country = CountryFactory::new()->create();
    CountryCoordinatesFactory::new()->create([
        'lc_country_id' => $country->id,
    ]);

    $data = $country->coordinatesInGeoTagsMetaTagICBM();

    expect($data)->not()->toBeNull();
    expect($data)->toBeString();

    expect($data)->toContain("name=\"ICBM\"");
    expect($data)->toContain($country->latitude());
    expect($data)->toContain($country->longitude());
});

it('should returns coordinates in geo meta tag format', function () {
    $region = CountryRegionFactory::new()->create([
        'en' => [
            'name' => 'Europe'
        ]
    ]);
    $country = CountryFactory::new()->create([
        'lc_region_id' => $region->id,
        'en' => [
            'name' => 'Brasil'
        ]
    ]);
    CountryCoordinatesFactory::new()->create([
        'lc_country_id' => $country->id,
    ]);

    $locale = 'en';
    $data = $country->coordinatesInGeoMetaTags($locale);

    expect($data)->not()->toBeNull();
    expect($data)->toBeString();

    expect($data)->toContain("name=\"geo.position\"");
    expect($data)->toContain("name=\"geo.placename\" ");
    expect($data)->toContain("name=\"geo.region\" ");
    expect($data)->toContain($country->latitude());
    expect($data)->toContain($country->longitude());
});

it('should returns coordinates in geo json format', function () {
    $country = CountryFactory::new()->create();
    CountryCoordinatesFactory::new()->create([
        'lc_country_id' => $country->id,
    ]);

    $data = $country->coordinatesInGeoJSON();

    expect($data)->not()->toBeNull();
    expect($data)->toBeString();
    expect($data)->toBeJson();

    expect($data)->toContain("\"type\": \"Point\"");
});

it('should returns coordinates in csv format', function () {
    $country = CountryFactory::new()->create();
    CountryCoordinatesFactory::new()->create([
        'lc_country_id' => $country->id,
    ]);

    $data = $country->coordinatesInCSV();

    expect($data)->not()->toBeNull();
    expect($data)->toBeString();

    expect($data)->toContain("latitude,longitude");
});
