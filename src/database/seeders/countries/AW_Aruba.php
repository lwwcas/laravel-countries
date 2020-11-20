<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class AW_Aruba extends Seeder
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
        $this->name = 'Aruba';
        $this->official_name = 'Aruba';
        $this->iso_alpha_2 = 'AW';
        $this->iso_alpha_3 = 'ABW';
        $this->iso_numeric = '533';
        $this->international_phone = '297';
 
        $this->languages = ['nl','pa'];
        $this->tld = ['.aw'];
        $this->wmo = 'NU';
        $this->geoname_id = '3577279';
 
        $this->emoji = [
            'img' => '🇦🇼',
            'uCode' => 'U+1F1E6 U+1F1FC',
        ];
        $this->color = [
            'hex' => [
                '#fbe870',
                '#4997d0',
                '#ff8833',
                '#ed0a3f',
            ],
            'rgb' => [
                '251,232,112',
                '73,151,208',
                '255,136,51',
                '237,10,63',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '12 30 N',
                'desc' => '12.506523132324219',
            ],
            'longitude' => [
                'classic' => '69 58 W',
                'desc' => '-69.96931457519531',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '12.616667',
                'min' => '12.416667',
            ],
            'longitude' => [
                'max' => '-69.85',
                'min' => '-70.066667',
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
      "properties": { "cca2": "aw" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-69.882233, 12.41111],
            [-69.946945, 12.436666],
            [-70.056122, 12.534443],
            [-70.059448, 12.538055],
            [-70.060287, 12.544167],
            [-70.063339, 12.621666],
            [-70.063065, 12.628611],
            [-70.058899, 12.631109],
            [-70.053345, 12.629721],
            [-70.035278, 12.61972],
            [-70.031113, 12.616943],
            [-69.932236, 12.528055],
            [-69.896957, 12.480833],
            [-69.891403, 12.472221],
            [-69.885559, 12.457777],
            [-69.873901, 12.421944],
            [-69.873337, 12.415833],
            [-69.876114, 12.411665],
            [-69.882233, 12.41111]
          ]
        ]
      }
    }
  ]
}
';
    }
}
