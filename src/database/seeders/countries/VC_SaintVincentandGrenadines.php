<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class VC_SaintVincentandGrenadines extends CountrySeeder
{

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public ?string $lang = 'en';

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public ?string $region = 'americas';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->name = 'Saint Vincent and Grenadines';
        $this->official_name = 'Saint Vincent and the Grenadines';
        $this->iso_alpha_2 = 'VC';
        $this->iso_alpha_3 = 'VCT';
        $this->iso_numeric = '670';
        $this->international_phone = '1-784';

        $this->languages = ['en'];
        $this->tld = ['.vc'];
        $this->wmo = 'VG';
        $this->geoname_id = '3577815';

        $this->emoji = [
            'img' => '🇻🇨',
            'uCode' => 'U+1F1FB U+1F1E8',
        ];
        $this->color = [
            'hex' => [
                '#2243b6',
                '#ffd82c',
                '#1cac78',
            ],
            'rgb' => [
                '34,67,182',
                '255,216,44',
                '28,172,120',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '13 15 N',
                'desc' => '13.217251777648926',
            ],
            'longitude' => [
                'classic' => '61 12 W',
                'desc' => '-61.19344711303711',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '13.366667',
                'min' => '12.533333',
            ],
            'longitude' => [
                'max' => '-61.116667',
                'min' => '-61.433333',
            ],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"vc"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-61.416946,12.590277],[-61.443893,12.584444],[-61.448616,12.586943],[-61.452225,12.590277],[-61.45417,12.593887],[-61.446396,12.607222],[-61.44334,12.611111],[-61.437782,12.612499],[-61.425835,12.612499],[-61.412506,12.60861],[-61.406952,12.606943],[-61.40306,12.603888],[-61.40528,12.599165],[-61.416946,12.590277]]],[[[-61.32806,12.68778],[-61.3325,12.686666],[-61.33639,12.689444],[-61.347778,12.698889],[-61.347778,12.70167],[-61.32973,12.732498],[-61.32667,12.736387],[-61.323616,12.737499],[-61.31056,12.734999],[-61.30584,12.725832],[-61.305,12.720276],[-61.30584,12.71417],[-61.31473,12.702221],[-61.32084,12.694166],[-61.32806,12.68778]]],[[[-61.216667,12.998055],[-61.23945,12.974998],[-61.2475,12.980833],[-61.252228,12.988609],[-61.22806,13.023333],[-61.20612,13.042776],[-61.199722,13.04472],[-61.19723,13.033609],[-61.213615,13.002222],[-61.216667,12.998055]]],[[[-61.17306,13.1325],[-61.18445,13.13028],[-61.243614,13.156111],[-61.263062,13.178333],[-61.27889,13.203609],[-61.28139,13.207777],[-61.278061,13.25028],[-61.265556,13.273054],[-61.20889,13.36778],[-61.20528,13.370832],[-61.182503,13.382221],[-61.177223,13.384165],[-61.14389,13.378332],[-61.141113,13.374166],[-61.12361,13.33111],[-61.12222,13.32555],[-61.120285,13.307499],[-61.123337,13.248888],[-61.124168,13.242777],[-61.13,13.220276],[-61.148056,13.167776],[-61.165,13.138332],[-61.16806,13.13444],[-61.17306,13.1325]]]]}}]}';
    }
}
