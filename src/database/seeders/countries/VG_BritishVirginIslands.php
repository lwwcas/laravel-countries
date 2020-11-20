<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class VG_BritishVirginIslands extends Seeder
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
        $this->name = 'British Virgin Islands';
        $this->official_name = 'Virgin Islands';
        $this->iso_alpha_2 = 'VG';
        $this->iso_alpha_3 = 'VGB';
        $this->iso_numeric = '92';
        $this->international_phone = '1-284';
 
        $this->languages = ['en'];
        $this->tld = ['.vg'];
        $this->wmo = 'VI';
        $this->geoname_id = '3577718';
 
        $this->emoji = [
            'img' => '🇻🇬',
            'uCode' => 'U+1F1FB U+1F1EC',
        ];
        $this->color = [
            'hex' => [
                '#29ab87',
                '#fbe870',
                '#ffffff',
            ],
            'rgb' => [
                '41,171,135',
                '251,232,112',
                '255,255,255',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '',
                'desc' => '18.443071365356445',
            ],
            'longitude' => [
                'classic' => '',
                'desc' => '-64.57130432128906',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '18.766667',
                'min' => '18.3',
            ],
            'longitude' => [
                'max' => '-64.266667',
                'min' => '-64.85',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"vg"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-64.66084,18.383888],[-64.667236,18.383888],[-64.69917,18.39139],[-64.70029,18.395554],[-64.69723,18.400276],[-64.66833,18.428333],[-64.65251,18.441109],[-64.640289,18.445],[-64.61168,18.452499],[-64.57501,18.458054],[-64.56778,18.457222],[-64.56222,18.455276],[-64.558334,18.451942],[-64.55695,18.44694],[-64.55695,18.440552],[-64.561951,18.425831],[-64.563614,18.42139],[-64.5675,18.418331],[-64.57695,18.413887],[-64.66084,18.383888]]],[[[-64.422501,18.43861],[-64.4364,18.431389],[-64.43779,18.434998],[-64.43861,18.440552],[-64.43834,18.453053],[-64.415558,18.50361],[-64.412231,18.506107],[-64.32556,18.51],[-64.32223,18.506107],[-64.323624,18.501663],[-64.326675,18.496944],[-64.33057,18.494164],[-64.422501,18.43861]]],[[[-64.3114,18.746109],[-64.30501,18.738609],[-64.292511,18.729164],[-64.27834,18.721107],[-64.27196,18.713333],[-64.26973,18.708885],[-64.26918,18.70333],[-64.27,18.69639],[-64.275284,18.695],[-64.278061,18.69194],[-64.283066,18.693333],[-64.29529,18.70333],[-64.302505,18.710552],[-64.31584,18.719166],[-64.335007,18.72361],[-64.367233,18.72361],[-64.388062,18.725555],[-64.40028,18.729164],[-64.408066,18.735832],[-64.407227,18.74194],[-64.4014,18.741108],[-64.39612,18.742496],[-64.38417,18.743889],[-64.35722,18.742496],[-64.35139,18.74305],[-64.32973,18.748608],[-64.31696,18.748333],[-64.3114,18.746109]]]]}}]}';
    }
}
