<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class MQ_Martinique extends CountrySeeder
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
        $this->name = 'Martinique';
        $this->official_name = 'Martinique';
        $this->iso_alpha_2 = 'MQ';
        $this->iso_alpha_3 = 'MTQ';
        $this->iso_numeric = '474';
        $this->international_phone = '596';

        $this->languages = ['fr'];
        $this->tld = ['.mq'];
        $this->wmo = 'MR';
        $this->geoname_id = '3570311';

        $this->emoji = [
            'img' => '🇲🇶',
            'uCode' => 'U+1F1F2 U+1F1F6',
        ];
        $this->color = [
            'hex' => [
                '#ffffff',
                '#0000ff',
            ],
            'rgb' => [
                '255,255,255',
                '0,0,255',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '',
                'desc' => '14.642807960510254',
            ],
            'longitude' => [
                'classic' => '',
                'desc' => '-60.97755432128906',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '14.866667',
                'min' => '14.383333',
            ],
            'longitude' => [
                'max' => '-60.816667',
                'min' => '-61.966667',
            ],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"mq"},"geometry":{"type":"Polygon","coordinates":[[[-60.86084,14.402777],[-60.886948,14.465555],[-60.975006,14.471388],[-61.011116,14.469999],[-61.03389,14.465832],[-61.172501,14.693054],[-61.231674,14.809444],[-61.231392,14.815554],[-61.226669,14.832222],[-61.212784,14.846666],[-61.198616,14.858889],[-61.174728,14.876944],[-61.165001,14.880278],[-61.158615,14.879999],[-61.14473,14.877777],[-61.100006,14.861387],[-61.094727,14.859165],[-61.039726,14.831944],[-61.034447,14.829166],[-60.940834,14.740833],[-60.942505,14.727777],[-60.90667,14.652498],[-60.849724,14.594721],[-60.829727,14.57],[-60.817223,14.47611],[-60.816673,14.470554],[-60.820557,14.455832],[-60.82695,14.439722],[-60.82917,14.434444],[-60.839447,14.415277],[-60.855003,14.403055],[-60.86084,14.402777]]]}}]}';
    }
}
