<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class MF_SaintMartin extends Seeder
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
        $this->name = 'Saint Martin';
        $this->official_name = 'Saint Martin';
        $this->iso_alpha_2 = 'MF';
        $this->iso_alpha_3 = 'MAF';
        $this->iso_numeric = '663';
        $this->international_phone = '590';
 
        $this->languages = ['en','fr','nl'];
        $this->tld = ['.fr','.gp'];
        $this->wmo = '0';
        $this->geoname_id = '3578421';
 
        $this->emoji = [
            'img' => '🇲🇫',
            'uCode' => 'U+1F1F2 U+1F1EB',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '18 05 N',
                'desc' => '18.042224884033203',
            ],
            'longitude' => [
                'classic' => '63 57 W',
                'desc' => '-63.06623458862305',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '18.1251338',
                'min' => '18.0465757',
            ],
            'longitude' => [
                'max' => '-62.9703926',
                'min' => '-63.153326',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"mf"},"geometry":{"type":"Polygon","coordinates":[[[-63.00667,18.080555],[-63.01146,18.06728],[-63.030273,18.07037],[-63.109867,18.066116],[-63.139839,18.058601],[-63.14389,18.06194],[-63.14612,18.066387],[-63.14667,18.071941],[-63.142227,18.074165],[-63.045006,18.121387],[-63.03917,18.121944],[-63.01917,18.117775],[-63.016113,18.11389],[-63.006393,18.086941],[-63.00667,18.080555]]]}}]}';
    }
}
