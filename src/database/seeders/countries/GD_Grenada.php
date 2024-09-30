<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelRssReader\Abstract\CountrySeeder;

class GD_Grenada extends CountrySeeder
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
    public $region = 'americas';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->name = 'Grenada';
        $this->official_name = 'Grenada';
        $this->iso_alpha_2 = 'GD';
        $this->iso_alpha_3 = 'GRD';
        $this->iso_numeric = '308';
        $this->international_phone = '1-473';

        $this->languages = ['en'];
        $this->tld = ['.gd'];
        $this->wmo = 'GD';
        $this->geoname_id = '3580239';

        $this->emoji = [
            'img' => '🇬🇩',
            'uCode' => 'U+1F1EC U+1F1E9',
        ];
        $this->color = [
            'hex' => [
                '#01a368',
                '#f8d568',
                '#ed0a3f',
            ],
            'rgb' => [
                '1,163,104',
                '248,213,104',
                '237,10,63',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '12 07 N',
                'desc' => '12.178866386413574',
            ],
            'longitude' => [
                'classic' => '61 40 W',
                'desc' => '-61.64693069458008',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '12.666667',
                'min' => '11.983333',
            ],
            'longitude' => [
                'max' => '-61.25',
                'min' => '-61.8',
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
      "properties": { "cca2": "gd" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-61.74695, 11.997499],
              [-61.7525, 11.996387],
              [-61.78015, 12],
              [-61.78361, 12.001389],
              [-61.78722, 12.004721],
              [-61.78973, 12.009165],
              [-61.72472, 12.17222],
              [-61.7075, 12.19694],
              [-61.686668, 12.218054],
              [-61.675835, 12.227777],
              [-61.65861, 12.236666],
              [-61.653061, 12.237778],
              [-61.64751, 12.237499],
              [-61.6175, 12.232777],
              [-61.61195, 12.23111],
              [-61.610001, 12.227777],
              [-61.606392, 12.224165],
              [-61.60473, 12.220554],
              [-61.59972, 12.186666],
              [-61.59639, 12.125555],
              [-61.61111, 12.079443],
              [-61.628616, 12.048054],
              [-61.63167, 12.044167],
              [-61.6425, 12.034166],
              [-61.65139, 12.02916],
              [-61.683334, 12.016109],
              [-61.717506, 12.003887],
              [-61.74695, 11.997499]
            ]
          ],
          [
            [
              [-61.58, 12.29555],
              [-61.585556, 12.29444],
              [-61.589172, 12.29805],
              [-61.58889, 12.30361],
              [-61.585556, 12.314444],
              [-61.58334, 12.319166],
              [-61.5789, 12.323055],
              [-61.573891, 12.320833],
              [-61.572227, 12.315832],
              [-61.5725, 12.308887],
              [-61.57417, 12.30361],
              [-61.58, 12.29555]
            ]
          ],
          [
            [
              [-61.42834, 12.453609],
              [-61.491669, 12.434999],
              [-61.49556, 12.438055],
              [-61.49695, 12.443609],
              [-61.49556, 12.469444],
              [-61.493896, 12.475],
              [-61.490837, 12.47889],
              [-61.43445, 12.529165],
              [-61.427505, 12.52889],
              [-61.42556, 12.526943],
              [-61.42056, 12.51278],
              [-61.41945, 12.5075],
              [-61.41862, 12.494999],
              [-61.425285, 12.457499],
              [-61.42834, 12.453609]
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
