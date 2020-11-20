<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class CC_CocosKeelingIslands extends Seeder
{
 
    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public $lang = 'en';
 
    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public $region = 'oceania';
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->name = 'Cocos [Keeling] Islands';
        $this->official_name = 'Territory of the Cocos (Keeling) Islands';
        $this->iso_alpha_2 = 'CC';
        $this->iso_alpha_3 = 'CCK';
        $this->iso_numeric = '166';
        $this->international_phone = '61';
 
        $this->languages = ['en'];
        $this->tld = ['.cc'];
        $this->wmo = 'KK';
        $this->geoname_id = '1547376';
 
        $this->emoji = [
            'img' => '🇨🇨',
            'uCode' => 'U+1F1E8 U+1F1E8',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '12 30 S',
                'desc' => '-12.200602531433105',
            ],
            'longitude' => [
                'classic' => '96 50 E',
                'desc' => '96.85894012451172',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '-11.833333',
                'min' => '-12.204167',
            ],
            'longitude' => [
                'max' => '96.918056',
                'min' => '96.816667',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "properties": { "cca2": "cc" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [96.914154, -12.19805],
              [96.90248, -12.199999],
              [96.914703, -12.151945],
              [96.921646, -12.16806],
              [96.924423, -12.182777],
              [96.9211, -12.191389],
              [96.914154, -12.19805]
            ]
          ],
          [
            [
              [96.862762, -12.19611],
              [96.852478, -12.19944],
              [96.84221, -12.19611],
              [96.833878, -12.190834],
              [96.81944, -12.178057],
              [96.81749, -12.16667],
              [96.820831, -12.1325],
              [96.826385, -12.12833],
              [96.866928, -12.188055],
              [96.862762, -12.19611]
            ]
          ]
        ]
      }
    }
  ]
}
';
    }
}
