<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class LI_Liechtenstein extends Seeder
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
        $this->name = 'Liechtenstein';
        $this->official_name = 'Principality of Liechtenstein';
        $this->iso_alpha_2 = 'LI';
        $this->iso_alpha_3 = 'LIE';
        $this->iso_numeric = '438';
        $this->international_phone = '423';
 
        $this->languages = ['de'];
        $this->tld = ['.li'];
        $this->wmo = '0';
        $this->geoname_id = '3042058';
 
        $this->emoji = [
            'img' => '🇱🇮',
            'uCode' => 'U+1F1F1 U+1F1EE',
        ];
        $this->color = [
            'hex' => [
                '#0000ff',
                '#ff0000',
            ],
            'rgb' => [
                '0,0,255',
                '255,0,0',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '47 16 N',
                'desc' => '47.14126968383789',
            ],
            'longitude' => [
                'classic' => '9 32 E',
                'desc' => '9.552783012390137',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '47.233333',
                'min' => '47.05',
            ],
            'longitude' => [
                'max' => '9.75',
                'min' => '9.5',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"li"},"geometry":{"type":"Polygon","coordinates":[[[9.533569,47.274544],[9.566387,47.243889],[9.622776,47.150551],[9.633888,47.130554],[9.63611,47.103607],[9.634998,47.094994],[9.627222,47.086388],[9.610277,47.070274],[9.603611,47.065826],[9.598635,47.063835],[9.544722,47.07],[9.538055,47.07],[9.506388,47.06472],[9.485277,47.061104],[9.474637,47.057457],[9.510277,47.092499],[9.512499,47.100273],[9.512777,47.109444],[9.511389,47.121666],[9.505554,47.139999],[9.49861,47.15361],[9.489721,47.16555],[9.484444,47.179718],[9.484165,47.192215],[9.485832,47.200272],[9.491388,47.215271],[9.502222,47.231384],[9.533569,47.274544]]]}}]}';
    }
}
