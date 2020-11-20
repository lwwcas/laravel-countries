<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class AI_Anguilla extends Seeder
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
        $this->name = 'Anguilla';
        $this->official_name = 'Anguilla';
        $this->iso_alpha_2 = 'AI';
        $this->iso_alpha_3 = 'AIA';
        $this->iso_numeric = '660';
        $this->international_phone = '1-264';
 
        $this->languages = ['en'];
        $this->tld = ['.ai'];
        $this->wmo = '0';
        $this->geoname_id = '3573511';
 
        $this->emoji = [
            'img' => '🇦🇮',
            'uCode' => 'U+1F1E6 U+1F1EE',
        ];
        $this->color = [
            'hex' => [
                '#ff861f',
                '#93ccea',
                '#ffffff',
            ],
            'rgb' => [
                '255,134,31',
                '147,204,234',
                '255,255,255',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '18 15 N',
                'desc' => '18.22646713256836',
            ],
            'longitude' => [
                'classic' => '63 10 W',
                'desc' => '-63.0473518371582',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '18.6',
                'min' => '18.15',
            ],
            'longitude' => [
                'max' => '-62.916667',
                'min' => '-63.433333',
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
      "properties": { "cca2": "ai" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-63.167778, 18.164444],
            [-63.158615, 18.175831],
            [-63.155281, 18.179443],
            [-63.141396, 18.194164],
            [-63.057503, 18.256386],
            [-63.053337, 18.259163],
            [-63.048615, 18.261387],
            [-63.022507, 18.268887],
            [-62.978889, 18.276665],
            [-62.972504, 18.276665],
            [-62.970001, 18.272221],
            [-62.969452, 18.266388],
            [-62.986671, 18.235554],
            [-62.993057, 18.227219],
            [-63.021118, 18.214443],
            [-63.030838, 18.210278],
            [-63.074173, 18.192776],
            [-63.140007, 18.168331],
            [-63.150841, 18.165554],
            [-63.15667, 18.164997],
            [-63.167778, 18.164444]
          ]
        ]
      }
    }
  ]
}
';
    }
}
