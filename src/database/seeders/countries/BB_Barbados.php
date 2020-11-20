<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class BB_Barbados extends Seeder
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
        $this->name = 'Barbados';
        $this->official_name = 'Barbados';
        $this->iso_alpha_2 = 'BB';
        $this->iso_alpha_3 = 'BRB';
        $this->iso_numeric = '52';
        $this->international_phone = '1-246';
 
        $this->languages = ['en'];
        $this->tld = ['.bb'];
        $this->wmo = 'BR';
        $this->geoname_id = '3374084';
 
        $this->emoji = [
            'img' => '🇧🇧',
            'uCode' => 'U+1F1E7 U+1F1E7',
        ];
        $this->color = [
            'hex' => [
                '#00008b',
                '#ffff00',
                '#000000',
            ],
            'rgb' => [
                '0,0,139',
                '255,255,0',
                '0,0,0',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '13 10 N',
                'desc' => '13.178098678588867',
            ],
            'longitude' => [
                'classic' => '59 32 W',
                'desc' => '-59.5485954284668',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '13.333333',
                'min' => '13.033333',
            ],
            'longitude' => [
                'max' => '-59.416667',
                'min' => '-59.65',
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
      "properties": { "cca2": "bb" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-59.533058, 13.050554],
            [-59.543335, 13.067499],
            [-59.547501, 13.070555],
            [-59.571114, 13.075832],
            [-59.60334, 13.08],
            [-59.60778, 13.082499],
            [-59.611389, 13.085833],
            [-59.625557, 13.099722],
            [-59.628616, 13.103333],
            [-59.642227, 13.14361],
            [-59.643333, 13.149166],
            [-59.659447, 13.287777],
            [-59.65834, 13.299166],
            [-59.653061, 13.315554],
            [-59.650841, 13.320276],
            [-59.64473, 13.328054],
            [-59.641113, 13.331388],
            [-59.631111, 13.334999],
            [-59.619728, 13.337221],
            [-59.612503, 13.336943],
            [-59.59584, 13.331944],
            [-59.591118, 13.329721],
            [-59.573616, 13.299166],
            [-59.56945, 13.290277],
            [-59.566116, 13.279722],
            [-59.565285, 13.274166],
            [-59.559448, 13.259443],
            [-59.554451, 13.25111],
            [-59.551674, 13.246944],
            [-59.545006, 13.239721],
            [-59.521118, 13.214443],
            [-59.513062, 13.208611],
            [-59.479446, 13.185833],
            [-59.470001, 13.18111],
            [-59.463615, 13.180277],
            [-59.442223, 13.173054],
            [-59.4375, 13.170832],
            [-59.429169, 13.164999],
            [-59.426949, 13.153889],
            [-59.427223, 13.146944],
            [-59.430283, 13.135277],
            [-59.439445, 13.116665],
            [-59.444725, 13.108055],
            [-59.450279, 13.099443],
            [-59.456673, 13.092222],
            [-59.464447, 13.085554],
            [-59.5, 13.059444],
            [-59.510284, 13.054998],
            [-59.533058, 13.050554]
          ]
        ]
      }
    }
  ]
}
';
    }
}
