<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class NF_NorfolkIsland extends Seeder
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
        $this->name = 'Norfolk Island';
        $this->official_name = 'Territory of Norfolk Island';
        $this->iso_alpha_2 = 'NF';
        $this->iso_alpha_3 = 'NFK';
        $this->iso_numeric = '574';
        $this->international_phone = '672';
 
        $this->languages = ['en'];
        $this->tld = ['.nf'];
        $this->wmo = 'NF';
        $this->geoname_id = '2155115';
 
        $this->emoji = [
            'img' => '🇳🇫',
            'uCode' => 'U+1F1F3 U+1F1EB',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '29 02 S',
                'desc' => '-29.036962509155273',
            ],
            'longitude' => [
                'classic' => '167 57 E',
                'desc' => '167.95523071289062',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '-28.995388',
                'min' => '-29.136588',
            ],
            'longitude' => [
                'max' => '167.996927',
                'min' => '167.916219',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"nf"},"geometry":{"type":"Polygon","coordinates":[[[167.964966,-29.081112],[167.923584,-29.056667],[167.916077,-29.043056],[167.909424,-29.009445],[167.912476,-29.00528],[167.930542,-29.000557],[167.944702,-29.001945],[167.949982,-29.004169],[167.997742,-29.025002],[168,-29.030003],[167.983307,-29.066113],[167.964966,-29.081112]]]}}]}';
    }
}
