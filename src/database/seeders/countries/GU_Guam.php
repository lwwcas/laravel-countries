<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelRssReader\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class GU_Guam extends CountrySeeder
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
        $this->name = 'Guam';
        $this->official_name = 'Guam';
        $this->iso_alpha_2 = 'GU';
        $this->iso_alpha_3 = 'GUM';
        $this->iso_numeric = '316';
        $this->international_phone = '1-671';

        $this->languages = ['en','ch','es'];
        $this->tld = ['.gu'];
        $this->wmo = 'GM';
        $this->geoname_id = '4043988';

        $this->emoji = [
            'img' => '🇬🇺',
            'uCode' => 'U+1F1EC U+1F1FA',
        ];
        $this->color = [
            'hex' => [
                '#4f69c6',
                '#ca3435',
            ],
            'rgb' => [
                '79,105,198',
                '202,52,53',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '13 28 N',
                'desc' => '13.42112922668457',
            ],
            'longitude' => [
                'classic' => '144 47 E',
                'desc' => '144.73971557617188',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '13.652320',
                'min' => '13.240590',
            ],
            'longitude' => [
                'max' => '144.953995',
                'min' => '144.619263',
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
      "properties": { "cca2": "gu" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [144.709412, 13.234997],
            [144.702454, 13.234997],
            [144.693024, 13.238886],
            [144.680542, 13.246943],
            [144.670258, 13.256943],
            [144.650543, 13.284443],
            [144.644989, 13.292221],
            [144.634155, 13.352221],
            [144.644989, 13.398888],
            [144.655243, 13.427776],
            [144.702454, 13.46833],
            [144.719116, 13.478886],
            [144.732727, 13.485554],
            [144.743011, 13.488886],
            [144.762207, 13.496943],
            [144.778595, 13.5075],
            [144.795807, 13.524166],
            [144.809418, 13.544165],
            [144.816925, 13.56361],
            [144.828583, 13.612219],
            [144.834686, 13.626108],
            [144.84024, 13.634165],
            [144.850525, 13.644165],
            [144.858856, 13.649443],
            [144.86911, 13.652777],
            [144.875244, 13.65361],
            [144.879944, 13.651388],
            [144.947754, 13.598886],
            [144.951355, 13.595552],
            [144.953308, 13.590832],
            [144.953308, 13.584164],
            [144.946625, 13.570831],
            [144.92804, 13.542221],
            [144.910797, 13.518888],
            [144.904694, 13.511665],
            [144.870514, 13.478331],
            [144.849976, 13.464998],
            [144.83609, 13.458332],
            [144.806641, 13.440275],
            [144.79248, 13.427776],
            [144.786102, 13.420277],
            [144.780823, 13.41222],
            [144.774414, 13.398333],
            [144.768311, 13.377775],
            [144.763611, 13.34222],
            [144.762756, 13.32972],
            [144.762756, 13.309721],
            [144.760803, 13.291666],
            [144.756104, 13.276388],
            [144.751923, 13.266943],
            [144.743561, 13.254999],
            [144.736908, 13.248331],
            [144.729401, 13.24222],
            [144.72052, 13.237497],
            [144.709412, 13.234997]
          ]
        ]
      }
    }
  ]
}
';
    }
}
