<?php

namespace Lwwcas\LaravelCountries\Database\Seeders;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Models\Country;
use Lwwcas\LaravelCountries\Models\CountryRegion;
use Lwwcas\LaravelCountries\Models\CountryRegionTranslation;
use Lwwcas\LaravelCountries\Models\CountryTranslation;

class Builder
{

    /**
     * Create a country
     *
     * @param CountrySeeder $country
     * @return void
     * @throws Exception
     */
    public static function country(CountrySeeder $country): void
    {
        self::builder($country);
        return;
    }

    protected static function builder(CountrySeeder $country)
    {
        DB::beginTransaction();

        $region = CountryRegion::whereSlug($country->region, $country->lang)
            ->firstOrFail();

        $countryCreated = $region->countries()->create([
            'capital' => $country->capital,
            'official_name' => $country->official_name,
            'iso_alpha_2' => $country->iso_alpha_2,
            'iso_alpha_3' => $country->iso_alpha_3,
            'iso_numeric' => $country->iso_numeric,
            'international_phone' => $country->international_phone,
            'geoname_id' => $country->geoname_id,
            'wmo' => $country->wmo,
            'independence_day' => $country->independence_day,
            'population' => $country->population,
            'area' => $country->area,
            'gdp' => $country->gdp,
            'languages' => $country->languages,
            'tld' => $country->tld,
            'alternative_tld' => $country->alternative_tlds,
            'borders' => array_map('strtolower', array_column($country->borders, 'iso_alpha_2')) ?? [],
            'timezones' => [
                'main' => $country->timezones[0] ?? [],
                'others' => array_slice($country->timezones, 1) ?? [],
            ],

            'currency' => [
                'name' => $country->currency['name'] ?? null,
                'code' => $country->currency['code'] ?? null,
                'symbol' => $country->currency['symbol'] ?? null,
                'banknotes' => $country->currency['banknotes'] ?? [],
                'coins' => [
                    'main' => $country->currency['coins_main'] ?? [],
                    'sub' => $country->currency['coins_sub'] ?? [],
                ],
                'unit' => [
                    'main' => $country->currency['main_unit'] ?? null,
                    'sub' => $country->currency['sub_unit'] ?? null,
                    'to_unit' => $country->currency['sub_unit_to_unit'] ?? null,
                ],
            ],

            'flag_emoji' => [
                'img' => $country->emoji['img'] ?? null,
                'utf8' => $country->emoji['utf8'] ?? null,
                'utf16' => $country->emoji['utf16'] ?? null,
                'uCode' => $country->emoji['uCode'] ?? null,
                'hex' => $country->emoji['hex'] ?? null,
                'html' => $country->emoji['html'] ?? null,
                'css' => $country->emoji['css'] ?? null,
                'decimal' => $country->emoji['decimal'] ?? null,
                'shortcode' => $country->emoji['shortcode'] ?? null,
            ],

            'flag_colors' => array_column($country->flag_colors, 'name'),
            'flag_colors_web' => array_column($country->flag_colors, 'web_name'),
            'flag_colors_contrast' => array_column($country->flag_colors, 'contrast'),
            'flag_colors_hex' => array_column($country->flag_colors, 'hex'),
            'flag_colors_rgb' => array_column($country->flag_colors, 'rgb'),
            'flag_colors_cmyk' => array_column($country->flag_colors, 'cmyk'),
            'flag_colors_hsl' => array_column($country->flag_colors, 'hsl'),
            'flag_colors_hsv' => array_column($country->flag_colors, 'hsv'),
            'flag_colors_pantone' => array_column($country->flag_colors, 'pantone'),

            'is_visible' => true,

            'en' => [
                'name' => $country->name,
                'slug' => Str::slug($country->name, '-'),
            ],
        ]);

        $countryCreated->extras()->create([
            'national_sport' => $country->national_sport,
            'cybersecurity_agency' => $country->cybersecurity_agency,
            'popular_technologies' => $country->popular_technologies ?? [],
            'internet' => [
                'speed' => [
                    'average_fixed' => $country->internet_speed['average_speed_fixed'] ?? null,
                    'average_mobile' => $country->internet_speed['average_speed_mobile'] ?? null,
                ],
                'penetration' => $country->internet_penetration,

            ],
            'religions' => $country->religions ?? [],
            'international_organizations' => $country->international_organizations ?? [],
        ]);

        $countryCreated->coordinates()->create([
            'latitude' => $country->coordinates['latitude'] ?? null,
            'longitude' => $country->coordinates['longitude'] ?? null,
            'degrees_with_decimal' => $country->coordinates['dd'] ?? null,
            'degrees_minutes_seconds' => $country->coordinates['dms'] ?? null,
            'degrees_and_decimal_minutes' => $country->coordinates['dm'] ?? null,
            'gps' => [],
        ]);

        $geographical = $country->geographical;
        if (isset($geographical['type'])) {
            $countryCreated->geographical()->create([
                'type' => $geographical['type'],
                'features_type' => $geographical['features'][0]['type'],
                'properties' => $geographical['features'][0]['properties'],
                'geometry' => $geographical['features'][0]['geometry'],
            ]);
        }

        DB::commit();
        return;
    }

    /**
     * Create regions translations.
     *
     * @param array $regions
     * @param String $lang
     * @return void
     * @throws Exception
     */
    public static function regionsTranslations(array $regions, String $lang): void
    {
        DB::beginTransaction();

        foreach ($regions as $slug => $region) {
            $response = CountryRegion::whereTranslation('locale', 'en')
                ->whereTranslation('slug', $slug)
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

    /**
     * Create countries translations.
     *
     * @param array $countries
     * @param String $lang
     * @return void
     */
    public static function countriesTranslations(array $countries, String $lang): void
    {
        DB::beginTransaction();

        foreach ($countries as $iso => $country) {
            $response = Country::where('iso_alpha_2', $iso)
                ->orWhere('iso_alpha_3', $iso)
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
