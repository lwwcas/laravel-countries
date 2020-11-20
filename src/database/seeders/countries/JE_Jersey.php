<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class JE_Jersey extends Seeder
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
        $this->name = 'Jersey';
        $this->official_name = 'Bailiwick of Jersey';
        $this->iso_alpha_2 = 'JE';
        $this->iso_alpha_3 = 'JEY';
        $this->iso_numeric = '832';
        $this->international_phone = '44';
 
        $this->languages = ['en','fr'];
        $this->tld = ['.je'];
        $this->wmo = '0';
        $this->geoname_id = '3042142';
 
        $this->emoji = [
            'img' => '🇯🇪',
            'uCode' => 'U+1F1EF U+1F1EA',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '49 15 N',
                'desc' => '49.2285041809082',
            ],
            'longitude' => [
                'classic' => '2 10 W',
                'desc' => '-2.1228928565979004',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '49.305833',
                'min' => '49.112778',
            ],
            'longitude' => [
                'max' => '-1.927778',
                'min' => '-2.253889',
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
      "properties": { "cca2": "je" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-2.015, 49.214165],
            [-2.02111, 49.177216],
            [-2.04139, 49.172493],
            [-2.06694, 49.16777],
            [-2.08917, 49.181107],
            [-2.12278, 49.195831],
            [-2.133056, 49.19861],
            [-2.14611, 49.19944],
            [-2.15222, 49.19861],
            [-2.16, 49.19444],
            [-2.16222, 49.191383],
            [-2.18194, 49.18417],
            [-2.205278, 49.18083],
            [-2.22639, 49.18972],
            [-2.2475, 49.24944],
            [-2.24722, 49.253052],
            [-2.240556, 49.258049],
            [-2.23556, 49.259163],
            [-2.229167, 49.259438],
            [-2.15417, 49.261108],
            [-2.04139, 49.243889],
            [-2.03556, 49.242775],
            [-2.01944, 49.234993],
            [-2.01611, 49.232498],
            [-2.01583, 49.228333],
            [-2.015, 49.214165]
          ]
        ]
      }
    }
  ]
}
';
    }
}
