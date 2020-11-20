<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class MC_Monaco extends Seeder
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
        $this->name = 'Monaco';
        $this->official_name = 'Principality of Monaco';
        $this->iso_alpha_2 = 'MC';
        $this->iso_alpha_3 = 'MCO';
        $this->iso_numeric = '492';
        $this->international_phone = '377';
 
        $this->languages = ['fr'];
        $this->tld = ['.mc'];
        $this->wmo = '0';
        $this->geoname_id = '2993457';
 
        $this->emoji = [
            'img' => '🇲🇨',
            'uCode' => 'U+1F1F2 U+1F1E8',
        ];
        $this->color = [
            'hex' => [
                '#ff0000',
                '#ffffff',
            ],
            'rgb' => [
                '255,0,0',
                '255,255,255',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '43 44 N',
                'desc' => '43.738929748535156',
            ],
            'longitude' => [
                'classic' => '7 24 E',
                'desc' => '7.425483226776123',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '43.745833',
                'min' => '43.716667',
            ],
            'longitude' => [
                'max' => '7.439444',
                'min' => '7.4',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"mc"},"geometry":{"type":"Polygon","coordinates":[[[7.439293,43.757523],[7.423055,43.739998],[7.4175,43.734161],[7.391609,43.727547],[7.386389,43.741943],[7.386389,43.745552],[7.387777,43.748604],[7.403055,43.761383],[7.416111,43.770554],[7.419999,43.772499],[7.424722,43.773048],[7.429444,43.771385],[7.4325,43.769165],[7.438333,43.760277],[7.439293,43.757523]]]}}]}';
    }
}
