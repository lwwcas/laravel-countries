<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class PM_SaintPierreandMiquelon extends CountrySeeder
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
        $this->name = 'Saint Pierre and Miquelon';
        $this->official_name = 'Saint Pierre and Miquelon';
        $this->iso_alpha_2 = 'PM';
        $this->iso_alpha_3 = 'SPM';
        $this->iso_numeric = '666';
        $this->international_phone = '508';

        $this->languages = ['fr'];
        $this->tld = ['.pm'];
        $this->wmo = 'FP';
        $this->geoname_id = '3424932';

        $this->emoji = [
            'img' => '🇵🇲',
            'uCode' => 'U+1F1F5 U+1F1F2',
        ];
        $this->color = [
            'hex' => [
                '#0000ff',
                '#ffffff',
                '#ff0000',
            ],
            'rgb' => [
                '0,0,255',
                '255,255,255',
                '255,0,0',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '46 50 N',
                'desc' => '46.90594482421875',
            ],
            'longitude' => [
                'classic' => '56 20 W',
                'desc' => '-56.336585998535156',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '47.139722',
                'min' => '46.748333',
            ],
            'longitude' => [
                'max' => '-56.120556',
                'min' => '-56.405278',
            ],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"pm"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-56.15083,46.758049],[-56.22028,46.74721],[-56.22666,46.750832],[-56.235001,46.759438],[-56.237221,46.763885],[-56.235832,46.76944],[-56.22583,46.77916],[-56.205,46.796661],[-56.19444,46.80527],[-56.188889,46.808884],[-56.182503,46.810547],[-56.17389,46.80999],[-56.16666,46.809158],[-56.15028,46.80555],[-56.144447,46.801384],[-56.145836,46.79639],[-56.15028,46.791107],[-56.14416,46.75972],[-56.15083,46.758049]]],[[[-56.271111,46.99416],[-56.275558,46.988884],[-56.28083,46.984436],[-56.28667,46.981102],[-56.29333,46.979431],[-56.29695,46.9836],[-56.29806,46.988327],[-56.30167,46.99277],[-56.339439,46.992493],[-56.346947,46.991104],[-56.34805,46.986382],[-56.33808,46.975746],[-56.32699,46.97224],[-56.30771,46.968151],[-56.30771,46.960556],[-56.314137,46.94537],[-56.31764,46.930767],[-56.31472,46.90416],[-56.31111,46.899719],[-56.30583,46.895828],[-56.28917,46.889717],[-56.273056,46.88916],[-56.25695,46.885551],[-56.242775,46.878876],[-56.237503,46.874992],[-56.235001,46.87027],[-56.23305,46.865273],[-56.23194,46.855827],[-56.23333,46.850273],[-56.236389,46.84444],[-56.241386,46.838326],[-56.246391,46.834717],[-56.33139,46.782768],[-56.3375,46.779991],[-56.34389,46.77833],[-56.368332,46.784721],[-56.37444,46.788887],[-56.394447,46.822495],[-56.39695,46.826942],[-56.398056,46.831665],[-56.39639,46.837212],[-56.391388,46.843323],[-56.38666,46.846939],[-56.37417,46.852219],[-56.35389,46.856102],[-56.347778,46.858887],[-56.3425,46.863052],[-56.33222,46.886383],[-56.33083,46.891663],[-56.32944,46.897217],[-56.32556,46.923882],[-56.32645,46.931938],[-56.32778,46.937771],[-56.33083,46.94833],[-56.35556,46.9886],[-56.36611,47.001938],[-56.385559,47.053047],[-56.39584,47.09166],[-56.398056,47.101387],[-56.39778,47.106659],[-56.390282,47.118881],[-56.38,47.12749],[-56.37417,47.131104],[-56.36111,47.135826],[-56.34722,47.136658],[-56.34472,47.13221],[-56.32584,47.0886],[-56.289444,47.070831],[-56.259727,47.05249],[-56.24944,47.044716],[-56.246391,47.039719],[-56.24722,47.034996],[-56.271111,46.99416]]]]}}]}';
    }
}
