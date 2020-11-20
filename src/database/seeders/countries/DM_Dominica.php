<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class DM_Dominica extends Seeder
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
        $this->name = 'Dominica';
        $this->official_name = 'Commonwealth of Dominica';
        $this->iso_alpha_2 = 'DM';
        $this->iso_alpha_3 = 'DMA';
        $this->iso_numeric = '212';
        $this->international_phone = '1-767';
 
        $this->languages = ['en'];
        $this->tld = ['.dm'];
        $this->wmo = 'DO';
        $this->geoname_id = '3575830';
 
        $this->emoji = [
            'img' => '🇩🇲',
            'uCode' => 'U+1F1E9 U+1F1F2',
        ];
        $this->color = [
            'hex' => [
                '#008000',
                '#ffff00',
                '#000000',
                '#ffffff',
                '#ff0000',
            ],
            'rgb' => [
                '0,128,0',
                '255,255,0',
                '0,0,0',
                '255,255,255',
                '255,0,0',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '15 25 N',
                'desc' => '15.3991060256958',
            ],
            'longitude' => [
                'classic' => '61 20 W',
                'desc' => '-61.33945846557617',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '15.633333',
                'min' => '15.2',
            ],
            'longitude' => [
                'max' => '-61.25',
                'min' => '-61.483333',
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
      "properties": { "cca2": "dm" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-61.363617, 15.198055],
            [-61.37056, 15.199165],
            [-61.374168, 15.202499],
            [-61.375839, 15.207499],
            [-61.377502, 15.236387],
            [-61.377785, 15.248055],
            [-61.374451, 15.268332],
            [-61.374168, 15.274443],
            [-61.391396, 15.349722],
            [-61.392784, 15.354721],
            [-61.395004, 15.359444],
            [-61.422783, 15.4175],
            [-61.450562, 15.455555],
            [-61.462502, 15.471109],
            [-61.474724, 15.486387],
            [-61.476395, 15.491388],
            [-61.491394, 15.540554],
            [-61.482506, 15.587776],
            [-61.474724, 15.61861],
            [-61.468056, 15.628054],
            [-61.452225, 15.631943],
            [-61.433617, 15.631666],
            [-61.427223, 15.630278],
            [-61.31778, 15.581944],
            [-61.304169, 15.57361],
            [-61.267227, 15.516666],
            [-61.253334, 15.461388],
            [-61.250557, 15.329166],
            [-61.250839, 15.323055],
            [-61.254448, 15.291666],
            [-61.25528, 15.285],
            [-61.25695, 15.278889],
            [-61.265007, 15.258055],
            [-61.270004, 15.248333],
            [-61.280281, 15.237499],
            [-61.363617, 15.198055]
          ]
        ]
      }
    }
  ]
}
';
    }
}
