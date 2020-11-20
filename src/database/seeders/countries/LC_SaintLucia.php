<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class LC_SaintLucia extends Seeder
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
        $this->name = 'Saint Lucia';
        $this->official_name = 'Saint Lucia';
        $this->iso_alpha_2 = 'LC';
        $this->iso_alpha_3 = 'LCA';
        $this->iso_numeric = '662';
        $this->international_phone = '1-758';
 
        $this->languages = ['en'];
        $this->tld = ['.lc'];
        $this->wmo = 'LC';
        $this->geoname_id = '3576468';
 
        $this->emoji = [
            'img' => '🇱🇨',
            'uCode' => 'U+1F1F1 U+1F1E8',
        ];
        $this->color = [
            'hex' => [
                '#50bfe6',
                '#fafa37',
                '#000000',
                '#ffffff',
            ],
            'rgb' => [
                '80,191,230',
                '250,250,55',
                '0,0,0',
                '255,255,255',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '13 53 N',
                'desc' => '13.86330509185791',
            ],
            'longitude' => [
                'classic' => '60 58 W',
                'desc' => '-60.9665641784668',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '14.1',
                'min' => '13.7',
            ],
            'longitude' => [
                'max' => '-60.866667',
                'min' => '-61.066667',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"lc"},"geometry":{"type":"Polygon","coordinates":[[[-60.954727,13.709444],[-60.956116,13.714998],[-60.968056,13.728054],[-60.986389,13.744444],[-60.995003,13.749722],[-61.001396,13.750832],[-61.01445,13.75],[-61.026115,13.752499],[-61.039169,13.761389],[-61.05056,13.770555],[-61.067505,13.78861],[-61.072784,13.796944],[-61.074448,13.801943],[-61.075005,13.808054],[-61.079727,13.873333],[-61.079445,13.879999],[-61.075005,13.896944],[-61.035004,13.969721],[-61.011673,14.009722],[-60.945839,14.104721],[-60.936394,14.109165],[-60.930283,14.109444],[-60.919724,14.105555],[-60.91584,14.102499],[-60.914452,14.099722],[-60.888062,14.013054],[-60.878616,13.975832],[-60.878059,13.956665],[-60.885284,13.854166],[-60.886116,13.848055],[-60.890007,13.82361],[-60.900284,13.778332],[-60.938339,13.717777],[-60.951393,13.709999],[-60.954727,13.709444]]]}}]}';
    }
}
