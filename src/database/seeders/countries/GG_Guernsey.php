<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class GG_Guernsey extends Seeder
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
        $this->name = 'Guernsey';
        $this->official_name = 'Bailiwick of Guernsey';
        $this->iso_alpha_2 = 'GG';
        $this->iso_alpha_3 = 'GGY';
        $this->iso_numeric = '831';
        $this->international_phone = '44';
 
        $this->languages = ['en','fr'];
        $this->tld = ['.gg'];
        $this->wmo = '0';
        $this->geoname_id = '3042362';
 
        $this->emoji = [
            'img' => '🇬🇬',
            'uCode' => 'U+1F1EC U+1F1EC',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '49 28 N',
                'desc' => '49.72008514404297',
            ],
            'longitude' => [
                'classic' => '2 35 W',
                'desc' => '-2.1999685764312744',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '49.733333',
                'min' => '49.401111',
            ],
            'longitude' => [
                'max' => '-2.158056',
                'min' => '-2.7',
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
      "properties": { "cca2": "gg" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-2.59083, 49.422493],
            [-2.59722, 49.422493],
            [-2.654445, 49.425827],
            [-2.66583, 49.428055],
            [-2.66917, 49.43055],
            [-2.670278, 49.434166],
            [-2.66917, 49.438332],
            [-2.656111, 49.456665],
            [-2.65222, 49.458885],
            [-2.57917, 49.490829],
            [-2.539167, 49.5075],
            [-2.53389, 49.508888],
            [-2.501667, 49.507774],
            [-2.50028, 49.5],
            [-2.52667, 49.427498],
            [-2.53028, 49.425278],
            [-2.55556, 49.423332],
            [-2.59083, 49.422493]
          ]
        ]
      }
    }
  ]
}
';
    }
}
