<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class MO_MacauSARChina extends Seeder
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
    public $region = 'asia';
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->name = 'Macau SAR China';
        $this->official_name = 'Macao Special Administrative Region of the People\'s Republic of China';
        $this->iso_alpha_2 = 'MO';
        $this->iso_alpha_3 = 'MAC';
        $this->iso_numeric = '446';
        $this->international_phone = '853';
 
        $this->languages = ['zh','pt'];
        $this->tld = ['.mo'];
        $this->wmo = 'MU';
        $this->geoname_id = '1821275';
 
        $this->emoji = [
            'img' => '🇲🇴',
            'uCode' => 'U+1F1F2 U+1F1F4',
        ];
        $this->color = [
            'hex' => [
                '#008000',
                '#ffffff',
            ],
            'rgb' => [
                '0,128,0',
                '255,255,255',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '22 10 N',
                'desc' => '22.140748977661133',
            ],
            'longitude' => [
                'classic' => '113 33 E',
                'desc' => '113.56034088134766',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '22.216389',
                'min' => '22.1125',
            ],
            'longitude' => [
                'max' => '113.592222',
                'min' => '113.531389',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"mo"},"geometry":{"type":"Polygon","coordinates":[[[113.531662,22.194736],[113.531372,22.201939],[113.532494,22.20583],[113.536102,22.211662],[113.545258,22.214439],[113.554428,22.21273],[113.556374,22.193607],[113.555817,22.186939],[113.552467,22.183052],[113.546097,22.184441],[113.531662,22.194736]]]}}]}';
    }
}
