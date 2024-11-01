<?php

namespace Lwwcas\LaravelCountries\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Models\CountryRegion;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            'africa' => [
                'name' => 'Africa',
                'iso_alpha_2' => 'AF', // ISO 3166-1 Alpha-2 code
                'icao_region' => 'AFI', // International Civil Aviation Organization (ICAO) region
                'iucn_region' => 'Africa', // International Union for Conservation of Nature (IUCN) region
                'tdwg' => 'AFR', // World Geographical Scheme for Recording Plant Distributions code
            ],
            'americas' => [
                'name' => 'Americas',
                'iso_alpha_2' => 'AM', // ISO 3166-1 Alpha-2 code
                'icao_region' => 'NAT', // International Civil Aviation Organization (ICAO) region
                'iucn_region' => 'Americas', // International Union for Conservation of Nature (IUCN) region
                'tdwg' => 'NAM/SAM', // World Geographical Scheme for Recording Plant Distributions (North and South America)
            ],
            'asia' => [
                'name' => 'Asia',
                'iso_alpha_2' => 'AS', // ISO 3166-1 Alpha-2 code
                'icao_region' => 'ASI', // International Civil Aviation Organization (ICAO) region
                'iucn_region' => 'Asia', // International Union for Conservation of Nature (IUCN) region
                'tdwg' => 'ASI', // World Geographical Scheme for Recording Plant Distributions code
            ],
            'europe' => [
                'name' => 'Europe',
                'iso_alpha_2' => 'EU', // ISO 3166-1 Alpha-2 code
                'icao_region' => 'EUR', // International Civil Aviation Organization (ICAO) region
                'iucn_region' => 'Europe', // International Union for Conservation of Nature (IUCN) region
                'tdwg' => 'EUR', // World Geographical Scheme for Recording Plant Distributions code
            ],
            'oceania' => [
                'name' => 'Oceania',
                'iso_alpha_2' => 'OC', // ISO 3166-1 Alpha-2 code
                'icao_region' => 'PAC', // International Civil Aviation Organization (ICAO) region
                'iucn_region' => 'Oceania', // International Union for Conservation of Nature (IUCN) region
                'tdwg' => 'OCN', // World Geographical Scheme for Recording Plant Distributions code
            ],
        ];

        if (Schema::hasTable('lc_regions') == false) {
            return;
        }

        foreach ($regions as $region) {
            $countryRegion = CountryRegion::whereSlug(Str::slug($region['name'], '-'), 'en')
                ->first();

            if ($countryRegion != null) {
                $countryRegion->delete();
                $countryRegion->translations()->delete();
            }

            CountryRegion::create([
                'iso_alpha_2' => $region['iso_alpha_2'],
                'icao' => $region['icao_region'],
                'iucn' => $region['iucn_region'],
                'tdwg' => $region['tdwg'],
                'is_visible' => true,

                'en' => [
                    'slug' => Str::slug($region['name'], '-'),
                    'name' => Str::title($region['name']),
                ],
            ]);
        }

        return;

    }
}
