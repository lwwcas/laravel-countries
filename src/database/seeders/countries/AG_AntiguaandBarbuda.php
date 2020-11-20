<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class AG_AntiguaandBarbuda extends Seeder
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
        $this->name = 'Antigua and Barbuda';
        $this->official_name = 'Antigua and Barbuda';
        $this->iso_alpha_2 = 'AG';
        $this->iso_alpha_3 = 'ATG';
        $this->iso_numeric = '28';
        $this->international_phone = '1-268';

        $this->languages = ['en'];
        $this->tld = ['.ag'];
        $this->wmo = 'AT';
        $this->geoname_id = '3576396';

        $this->emoji = [
            'img' => '🇦🇬',
            'uCode' => 'U+1F1E6 U+1F1EC',
        ];
        $this->color = [
            'hex' => [
                '#ff0000',
                '#ffffff',
                '#0000ff',
                '#000000',
                '#ffff00',
            ],
            'rgb' => [
                '255,0,0',
                '255,255,255',
                '0,0,255',
                '0,0,0',
                '255,255,0',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '17 03 N',
                'desc' => '17.09273910522461',
            ],
            'longitude' => [
                'classic' => '61 48 W',
                'desc' => '-61.81040954589844',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '17.733333',
                'min' => '16.916667',
            ],
            'longitude' => [
                'max' => '-61.666667',
                'min' => '-62.333333',
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
      "properties": { "cca2": "ag" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-61.686668, 17.024441],
              [-61.73806, 16.989719],
              [-61.82917, 16.996944],
              [-61.87611, 17.016941],
              [-61.88056, 17.01972],
              [-61.88361, 17.023609],
              [-61.88583, 17.028053],
              [-61.887222, 17.033054],
              [-61.89111, 17.09417],
              [-61.887222, 17.10527],
              [-61.88417, 17.109722],
              [-61.832779, 17.16389],
              [-61.826393, 17.16722],
              [-61.79445, 17.16333],
              [-61.784172, 17.15833],
              [-61.74417, 17.13722],
              [-61.674171, 17.093609],
              [-61.67028, 17.090275],
              [-61.668892, 17.085],
              [-61.66639, 17.04583],
              [-61.6675, 17.04055],
              [-61.682503, 17.0275],
              [-61.686668, 17.024441]
            ]
          ],
          [
            [
              [-61.72917, 17.608608],
              [-61.73112, 17.547222],
              [-61.73278, 17.541111],
              [-61.73889, 17.540554],
              [-61.75194, 17.549442],
              [-61.81556, 17.583885],
              [-61.834724, 17.588608],
              [-61.839447, 17.586666],
              [-61.842781, 17.582775],
              [-61.8475, 17.58083],
              [-61.85306, 17.583054],
              [-61.856674, 17.5925],
              [-61.873894, 17.688889],
              [-61.875282, 17.69861],
              [-61.873062, 17.703888],
              [-61.85028, 17.722775],
              [-61.84556, 17.724998],
              [-61.83917, 17.72472],
              [-61.78722, 17.700554],
              [-61.78361, 17.69722],
              [-61.74334, 17.653053],
              [-61.74028, 17.649166],
              [-61.73806, 17.644722],
              [-61.73167, 17.624996],
              [-61.72917, 17.608608]
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
