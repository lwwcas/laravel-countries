<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class GI_Gibraltar extends Seeder
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
        $this->name = 'Gibraltar';
        $this->official_name = 'Gibraltar';
        $this->iso_alpha_2 = 'GI';
        $this->iso_alpha_3 = 'GIB';
        $this->iso_numeric = '292';
        $this->international_phone = '350';
 
        $this->languages = ['en'];
        $this->tld = ['.gi'];
        $this->wmo = 'GI';
        $this->geoname_id = '2411586';
 
        $this->emoji = [
            'img' => '🇬🇮',
            'uCode' => 'U+1F1EC U+1F1EE',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '36 08 N',
                'desc' => '36.135841369628906',
            ],
            'longitude' => [
                'classic' => '5 21 W',
                'desc' => '-5.349248886108398',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '36.15',
                'min' => '36.1',
            ],
            'longitude' => [
                'max' => '-5.333333',
                'min' => '-5.35',
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
      "properties": { "cca2": "gi" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-5.334508, 36.16256],
            [-5.33755, 36.149441],
            [-5.335851, 36.138794],
            [-5.33823, 36.112175],
            [-5.345253, 36.11274],
            [-5.35624, 36.126785],
            [-5.354994, 36.145363],
            [-5.344573, 36.150234],
            [-5.355799, 36.163307],
            [-5.334508, 36.16256]
          ]
        ]
      }
    }
  ]
}
';
    }
}
