<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class MS_Montserrat extends Seeder
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
        $this->name = 'Montserrat';
        $this->official_name = 'Montserrat';
        $this->iso_alpha_2 = 'MS';
        $this->iso_alpha_3 = 'MSR';
        $this->iso_numeric = '500';
        $this->international_phone = '1-664';
 
        $this->languages = ['en'];
        $this->tld = ['.ms'];
        $this->wmo = '0';
        $this->geoname_id = '3578097';
 
        $this->emoji = [
            'img' => '🇲🇸',
            'uCode' => 'U+1F1F2 U+1F1F8',
        ];
        $this->color = [
            'hex' => [
                '#000000',
                '#1cac78',
                '#23145d',
                '#ee204d',
                '#ffffff',
            ],
            'rgb' => [
                '0,0,0',
                '28,172,120',
                '35,20,93',
                '238,32,77',
                '255,255,255',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '16 45 N',
                'desc' => '16.735998153686523',
            ],
            'longitude' => [
                'classic' => '62 12 W',
                'desc' => '-62.188819885253906',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '16.816667',
                'min' => '16.666667',
            ],
            'longitude' => [
                'max' => '-62.15',
                'min' => '-62.233333',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"ms"},"geometry":{"type":"Polygon","coordinates":[[[-62.171394,16.671387],[-62.190002,16.672497],[-62.208618,16.683609],[-62.212502,16.686943],[-62.229729,16.70472],[-62.236671,16.711941],[-62.237228,16.717499],[-62.23584,16.730553],[-62.20723,16.811108],[-62.20195,16.81361],[-62.176392,16.808609],[-62.148056,16.751663],[-62.146393,16.746666],[-62.137505,16.692776],[-62.140282,16.688332],[-62.15139,16.678055],[-62.155556,16.675278],[-62.165558,16.671665],[-62.171394,16.671387]]]}}]}';
    }
}
