<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class CX_ChristmasIsland extends Seeder
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
        $this->name = 'Christmas Island';
        $this->official_name = 'Territory of Christmas Island';
        $this->iso_alpha_2 = 'CX';
        $this->iso_alpha_3 = 'CXR';
        $this->iso_numeric = '162';
        $this->international_phone = '61';
 
        $this->languages = ['en'];
        $this->tld = ['.cx'];
        $this->wmo = 'KI';
        $this->geoname_id = '2078138';
 
        $this->emoji = [
            'img' => '🇨🇽',
            'uCode' => 'U+1F1E8 U+1F1FD',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '10 30 S',
                'desc' => '-10.490290641784668',
            ],
            'longitude' => [
                'classic' => '105 40 E',
                'desc' => '105.63275146484375',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '-10.4',
                'min' => '-10.566667',
            ],
            'longitude' => [
                'max' => '105.75',
                'min' => '105.566667',
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
      "properties": { "cca2": "cx" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [105.701401, -10.51097],
            [105.683098, -10.47414],
            [105.644501, -10.46614],
            [105.628998, -10.43731],
            [105.654602, -10.41489],
            [105.715202, -10.38447],
            [105.736603, -10.38408],
            [105.7509, -10.39408],
            [105.7519, -10.48375],
            [105.736298, -10.50456],
            [105.701401, -10.51097]
          ]
        ]
      }
    }
  ]
}
';
    }
}
