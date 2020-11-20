<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class BM_Bermuda extends Seeder
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
        $this->name = 'Bermuda';
        $this->official_name = 'Bermuda';
        $this->iso_alpha_2 = 'BM';
        $this->iso_alpha_3 = 'BMU';
        $this->iso_numeric = '60';
        $this->international_phone = '1-441';
 
        $this->languages = ['en'];
        $this->tld = ['.bm'];
        $this->wmo = 'BE';
        $this->geoname_id = '3573345';
 
        $this->emoji = [
            'img' => '🇧🇲',
            'uCode' => 'U+1F1E7 U+1F1F2',
        ];
        $this->color = [
            'hex' => [
                '#ed0a3f',
                '#0066ff',
                '#ffffff',
            ],
            'rgb' => [
                '237,10,63',
                '0,102,255',
                '255,255,255',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '32 20 N',
                'desc' => '32.302669525146484',
            ],
            'longitude' => [
                'classic' => '64 45 W',
                'desc' => '-64.7516860961914',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '32.390556',
                'min' => '32.246944',
            ],
            'longitude' => [
                'max' => '-64.633333',
                'min' => '-64.882778',
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
      "properties": { "cca2": "bm" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-64.855835, 32.27861],
              [-64.86111, 32.27638],
              [-64.873062, 32.276939],
              [-64.875565, 32.281387],
              [-64.876114, 32.286942],
              [-64.874451, 32.29305],
              [-64.85362, 32.30888],
              [-64.844452, 32.31472],
              [-64.83806, 32.314163],
              [-64.8389, 32.30861],
              [-64.848816, 32.302727],
              [-64.85884, 32.2963],
              [-64.861488, 32.287975],
              [-64.85278, 32.281662],
              [-64.855835, 32.27861]
            ]
          ],
          [
            [
              [-64.643341, 32.354439],
              [-64.65056, 32.354439],
              [-64.656113, 32.355827],
              [-64.68251, 32.356667],
              [-64.68584, 32.357216],
              [-64.666397, 32.367218],
              [-64.65529, 32.370827],
              [-64.64723, 32.36972],
              [-64.64279, 32.366661],
              [-64.63945, 32.362778],
              [-64.63863, 32.357216],
              [-64.643341, 32.354439]
            ]
          ],
          [
            [
              [-64.78334, 32.270554],
              [-64.80334, 32.262497],
              [-64.82306, 32.260551],
              [-64.84673, 32.262447],
              [-64.858269, 32.2668],
              [-64.85789, 32.270767],
              [-64.84579, 32.272282],
              [-64.8333, 32.268497],
              [-64.81194, 32.271713],
              [-64.784729, 32.27861],
              [-64.780014, 32.281662],
              [-64.77734, 32.286652],
              [-64.7883, 32.29668],
              [-64.747787, 32.312218],
              [-64.718338, 32.340271],
              [-64.696396, 32.371384],
              [-64.6925, 32.374992],
              [-64.68362, 32.380829],
              [-64.67778, 32.382217],
              [-64.67168, 32.379997],
              [-64.67418, 32.374992],
              [-64.68713, 32.367588],
              [-64.6962, 32.359837],
              [-64.6998, 32.349056],
              [-64.69862, 32.343605],
              [-64.692429, 32.335442],
              [-64.694695, 32.33015],
              [-64.70623, 32.327499],
              [-64.72139, 32.320274],
              [-64.7489, 32.295273],
              [-64.76112, 32.284996],
              [-64.77, 32.27916],
              [-64.78334, 32.270554]
            ]
          ]
        ]
      }
    }
  ]
}
';
    }
}
