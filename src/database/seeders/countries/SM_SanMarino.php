<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class SM_SanMarino extends Seeder
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
        $this->name = 'San Marino';
        $this->official_name = 'Most Serene Republic of San Marino';
        $this->iso_alpha_2 = 'SM';
        $this->iso_alpha_3 = 'SMR';
        $this->iso_numeric = '674';
        $this->international_phone = '378';
 
        $this->languages = ['it'];
        $this->tld = ['.sm'];
        $this->wmo = '0';
        $this->geoname_id = '3168068';
 
        $this->emoji = [
            'img' => '🇸🇲',
            'uCode' => 'U+1F1F8 U+1F1F2',
        ];
        $this->color = [
            'hex' => [
                '#ffffff',
                '#007fff',
            ],
            'rgb' => [
                '255,255,255',
                '0,127,255',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '43 46 N',
                'desc' => '43.938133239746094',
            ],
            'longitude' => [
                'classic' => '12 25 E',
                'desc' => '12.463393211364746',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '43.966667',
                'min' => '43.908333',
            ],
            'longitude' => [
                'max' => '12.5',
                'min' => '12.416667',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"sm"},"geometry":{"type":"Polygon","coordinates":[[[12.415798,43.957954],[12.450554,43.979721],[12.453888,43.981667],[12.4625,43.984718],[12.471666,43.986938],[12.492777,43.989166],[12.505554,43.988609],[12.509998,43.986938],[12.510277,43.982773],[12.511665,43.943329],[12.510555,43.939163],[12.496387,43.923332],[12.494999,43.914719],[12.487778,43.90583],[12.474443,43.897217],[12.464722,43.895554],[12.459166,43.896111],[12.416388,43.904716],[12.412222,43.906105],[12.407822,43.913658],[12.403889,43.926666],[12.404999,43.948326],[12.408888,43.954994],[12.415798,43.957954]]]}}]}';
    }
}
