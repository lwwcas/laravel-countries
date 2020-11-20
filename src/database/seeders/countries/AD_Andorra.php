<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class AD_Andorra extends Seeder
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
    public $region = 'europe';
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->name = 'Andorra';
        $this->official_name = 'Principality of Andorra';
        $this->iso_alpha_2 = 'AD';
        $this->iso_alpha_3 = 'AND';
        $this->iso_numeric = '20';
        $this->international_phone = '376';
 
        $this->languages = ['ca'];
        $this->tld = ['.ad'];
        $this->wmo = '0';
        $this->geoname_id = '3041565';
 
        $this->emoji = [
            'img' => '🇦🇩',
            'uCode' => 'U+1F1E6 U+1F1E9',
        ];
        $this->color = [
            'hex' => [
                '#0000ff',
                '#ffff00',
                '#ff0000',
            ],
            'rgb' => [
                '0,0,255',
                '255,255,0',
                '255,0,0',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '42 30 N',
                'desc' => '42.5506591796875',
            ],
            'longitude' => [
                'classic' => '1 30 E',
                'desc' => '1.5762332677841187',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '42.65',
                'min' => '42.433333',
            ],
            'longitude' => [
                'max' => '1.783333',
                'min' => '1.416667',
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
      "properties": { "cca2": "ad" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [1.78172, 42.569962],
            [1.774722, 42.571106],
            [1.768055, 42.571106],
            [1.753889, 42.57],
            [1.743055, 42.563606],
            [1.735278, 42.554443],
            [1.725278, 42.529999],
            [1.724444, 42.524994],
            [1.723333, 42.515274],
            [1.723611, 42.509438],
            [1.718889, 42.503052],
            [1.661111, 42.471382],
            [1.654444, 42.467773],
            [1.541667, 42.437218],
            [1.533333, 42.436104],
            [1.512222, 42.436386],
            [1.454722, 42.441666],
            [1.448333, 42.450829],
            [1.424166, 42.493332],
            [1.421389, 42.54583],
            [1.434444, 42.576385],
            [1.445833, 42.601944],
            [1.481111, 42.647217],
            [1.491944, 42.65361],
            [1.556389, 42.656387],
            [1.563056, 42.655548],
            [1.698333, 42.626106],
            [1.738611, 42.616386],
            [1.78172, 42.569962]
          ]
        ]
      }
    }
  ]
}
';
    }
}
