<?php

namespace Lwwcas\LaravelCountries\Database\Seeders;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Models\Country;
use Lwwcas\LaravelCountries\Models\CountryRegion;
use Lwwcas\LaravelCountries\Models\CountryRegionTranslation;
use Lwwcas\LaravelCountries\Models\CountryTranslation;

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
            'en' => [
                'name' => $country->name,
                'slug' => Str::slug($country->name, '-'),
            ],
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

    public static function regionsTranslations(array $regions, String $lang): void
    {
        DB::beginTransaction();

        foreach ($regions as $slug => $region) {
            $response = CountryRegion::whereTranslation('locale', 'en')
                ->whereTranslation('name', $slug)
                ->first();

            if ($response == null) {
                DB::rollBack();
                throw new Exception('Region ' . $region . ' not found');
            }

            CountryRegionTranslation::create([
                'lc_region_id' => $response->id,
                'locale' => $lang,
                'slug' => Str::slug($region, '-'),
                'name' => Str::title(trim($region)),
            ]);
        }

        DB::commit();
        return;
    }

    public static function countriesTranslations(array $countries, String $lang): void
    {
        DB::beginTransaction();

        foreach ($countries as $iso => $country) {
            $response = Country::where('iso_alpha_2', $iso)
                ->orWhere('iso_alpha_3', $iso)
                ->orWhere('iso_numeric', $iso)
                ->first();

            if ($response == null) {
                continue;
            }

            CountryTranslation::create([
                'lc_country_id' => $response->id,
                'locale' => $lang,
                'slug' => Str::slug($country, '-'),
                'name' => Str::title(trim($country)),
            ]);
        }

        DB::commit();
        return;
    }
}
