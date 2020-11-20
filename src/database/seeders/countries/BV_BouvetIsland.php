<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class BV_BouvetIsland extends Seeder
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
        $this->name = 'Bouvet Island';
        $this->official_name = 'Bouvet Island';
        $this->iso_alpha_2 = 'BV';
        $this->iso_alpha_3 = 'BVT';
        $this->iso_numeric = '74';
        $this->international_phone = '47';
 
        $this->languages = ['no','nb','nn'];
        $this->tld = ['.bv'];
        $this->wmo = 'BV';
        $this->geoname_id = '3371123';
 
        $this->emoji = [
            'img' => '🇧🇻',
            'uCode' => 'U+1F1E7 U+1F1FB',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '54 26 S',
                'desc' => '-54.4342041015625',
            ],
            'longitude' => [
                'classic' => '3 24 E',
                'desc' => '3.4102511405944824',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '-54.386111',
                'min' => '-54.452778',
            ],
            'longitude' => [
                'max' => '3.433889',
                'min' => '3.285278',
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
      "properties": { "cca2": "bv" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [3.361389, -54.462784],
            [3.354167, -54.458618],
            [3.346111, -54.451118],
            [3.341666, -54.440002],
            [3.341666, -54.43306],
            [3.343055, -54.426949],
            [3.347777, -54.416115],
            [3.351388, -54.411118],
            [3.355, -54.406395],
            [3.366944, -54.399727],
            [3.388333, -54.39167],
            [3.396667, -54.38945],
            [3.413333, -54.385559],
            [3.433333, -54.383614],
            [3.443889, -54.384171],
            [3.478889, -54.398056],
            [3.483611, -54.402229],
            [3.484722, -54.40834],
            [3.483611, -54.414726],
            [3.478611, -54.42556],
            [3.4725, -54.435837],
            [3.465555, -54.445557],
            [3.459444, -54.448891],
            [3.444167, -54.452225],
            [3.399167, -54.45195],
            [3.388611, -54.452507],
            [3.379167, -54.453896],
            [3.361389, -54.462784]
          ]
        ]
      }
    }
  ]
}
';
    }
}
