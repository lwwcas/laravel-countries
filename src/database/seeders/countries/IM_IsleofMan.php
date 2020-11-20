<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class IM_IsleofMan extends Seeder
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
        $this->name = 'Isle of Man';
        $this->official_name = 'Isle of Man';
        $this->iso_alpha_2 = 'IM';
        $this->iso_alpha_3 = 'IMN';
        $this->iso_numeric = '833';
        $this->international_phone = '44';
 
        $this->languages = ['en','gv'];
        $this->tld = ['.im'];
        $this->wmo = '0';
        $this->geoname_id = '3042225';
 
        $this->emoji = [
            'img' => '🇮🇲',
            'uCode' => 'U+1F1EE U+1F1F2',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '54 15 N',
                'desc' => '54.22451400756836',
            ],
            'longitude' => [
                'classic' => '4 30 W',
                'desc' => '-4.562133312225342',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '54.4',
                'min' => '54.033333',
            ],
            'longitude' => [
                'max' => '-4.316667',
                'min' => '-4.833333',
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
      "properties": { "cca2": "im" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-4.777779, 54.05555],
            [-4.78389, 54.056938],
            [-4.7875, 54.059441],
            [-4.788611, 54.063049],
            [-4.788611, 54.067215],
            [-4.713889, 54.214439],
            [-4.710279, 54.217216],
            [-4.69889, 54.219162],
            [-4.645834, 54.238052],
            [-4.641389, 54.239998],
            [-4.625, 54.248886],
            [-4.618056, 54.254166],
            [-4.601945, 54.267776],
            [-4.595834, 54.273888],
            [-4.588056, 54.283607],
            [-4.578056, 54.296944],
            [-4.554723, 54.331108],
            [-4.553334, 54.335274],
            [-4.552778, 54.343887],
            [-4.541389, 54.35611],
            [-4.5275, 54.367218],
            [-4.485001, 54.387215],
            [-4.443056, 54.398048],
            [-4.368056, 54.416664],
            [-4.360278, 54.416107],
            [-4.354167, 54.410828],
            [-4.352778, 54.409164],
            [-4.308333, 54.300552],
            [-4.307501, 54.296944],
            [-4.309445, 54.293327],
            [-4.321667, 54.276665],
            [-4.386111, 54.195549],
            [-4.394444, 54.186386],
            [-4.470556, 54.137497],
            [-4.491112, 54.126663],
            [-4.550556, 54.097771],
            [-4.623889, 54.068604],
            [-4.684445, 54.076942],
            [-4.690556, 54.078331],
            [-4.704722, 54.07972],
            [-4.720834, 54.076111],
            [-4.777779, 54.05555]
          ]
        ]
      }
    }
  ]
}
';
    }
}
