<?php

namespace Lwwcas\LaravelCountries\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Models\CountryRegion;

class Builder
{
    public static function country(Seeder $country): void
    {
        $region = CountryRegion::whereSlug($country->region, $country->lang)
            ->firstOrFail();

        $_country = $region->countries()->create([
            'official_name' => $country->official_name,
            'iso_alpha_2' => $country->iso_alpha_2,
            'iso_alpha_3' => $country->iso_alpha_3,
            'iso_numeric' => $country->iso_numeric,
            'international_phone' => $country->international_phone,
            'languages' => json_encode($country->languages),
            'tld' => json_encode($country->tld),
            'wmo' => $country->wmo,
            'geoname_id' => $country->geoname_id,
            'emoji' => json_encode($country->emoji),
            'color_hex' => json_encode($country->color['hex']),
            'color_rgb' => json_encode($country->color['rgb']),
            'coordinates' => json_encode($country->coordinates),
            'coordinates_limit' => json_encode($country->coordinates_limit),
            'visible' => true,
        ]);

        $geographical = $country->geographical;
        if (isset($geographical['type'])) {
            $_country->geographical()->create([
                'type' => $geographical['type'],
                'features_type' => $geographical['features'][0]['type'],
                'properties' => json_encode($geographical['features'][0]['properties']),
                'geometry' => json_encode($geographical['features'][0]['geometry']),
            ]);
        }
    }

    public static function regions(): void
    {
        $regions = [
            'Africa',
            'Americas',
            'Asia',
            'Europe',
            'Oceania',
        ];

        foreach ($regions as $region) {
            CountryRegion::create([
                'en' => [
                    'slug' => Str::slug($region, '-'),
                    'name' => Str::title(trim($region)),
                ],
            ]);
        }

        return;
    }
}
