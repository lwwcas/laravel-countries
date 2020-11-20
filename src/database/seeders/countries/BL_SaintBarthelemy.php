<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class BL_SaintBarthelemy extends Seeder
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
        $this->name = 'Saint Barthélemy';
        $this->official_name = 'Collectivity of Saint Barthélemy';
        $this->iso_alpha_2 = 'BL';
        $this->iso_alpha_3 = 'BLM';
        $this->iso_numeric = '652';
        $this->international_phone = '590';
 
        $this->languages = ['fr'];
        $this->tld = ['.bl'];
        $this->wmo = '0';
        $this->geoname_id = '3578476';
 
        $this->emoji = [
            'img' => '🇧🇱',
            'uCode' => 'U+1F1E7 U+1F1F1',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '17 90 N',
                'desc' => '17.89626121520996',
            ],
            'longitude' => [
                'classic' => '62 85 W',
                'desc' => '-62.83061218261719',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '17.960853',
                'min' => '17.8708287',
            ],
            'longitude' => [
                'max' => '-62.7892148',
                'min' => '-62.9118453',
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
      "properties": { "cca2": "bl" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-63.02834, 18.01555],
            [-63.03334, 18.01555],
            [-63.072784, 18.024998],
            [-63.07917, 18.02666],
            [-63.11611, 18.042774],
            [-63.139839, 18.058601],
            [-63.109867, 18.066116],
            [-63.030273, 18.07037],
            [-63.01146, 18.06728],
            [-63.010284, 18.047775],
            [-63.01222, 18.035553],
            [-63.01667, 18.024998],
            [-63.019447, 18.020554],
            [-63.02834, 18.01555]
          ]
        ]
      }
    }
  ]
}
';
    }
}
