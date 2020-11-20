<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class SG_Singapore extends Seeder
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
        $this->name = 'Singapore';
        $this->official_name = 'Republic of Singapore';
        $this->iso_alpha_2 = 'SG';
        $this->iso_alpha_3 = 'SGP';
        $this->iso_numeric = '702';
        $this->international_phone = '65';
 
        $this->languages = ['en','ms','ta','zh'];
        $this->tld = ['.sg',".\u65b0\u52a0\u5761",".\u0b9a\u0bbf\u0b99\u0bcd\u0b95\u0baa\u0bcd\u0baa\u0bc2\u0bb0\u0bcd"];
        $this->wmo = 'SR';
        $this->geoname_id = '1880251';
 
        $this->emoji = [
            'img' => '🇸🇬',
            'uCode' => 'U+1F1F8 U+1F1EC',
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
                'classic' => '1 22 N',
                'desc' => '1.3219958543777466',
            ],
            'longitude' => [
                'classic' => '103 48 E',
                'desc' => '103.8205337524414',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '4',
                'min' => '1.159444',
            ],
            'longitude' => [
                'max' => '104.4075',
                'min' => '102',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"sg"},"geometry":{"type":"Polygon","coordinates":[[[103.99054,1.383291],[103.996918,1.376667],[103.998863,1.371666],[103.998016,1.365555],[103.994133,1.355278],[103.98497,1.344167],[103.959976,1.320833],[103.844971,1.259166],[103.838867,1.258889],[103.798309,1.259444],[103.652763,1.300277],[103.648033,1.3025],[103.644699,1.305833],[103.642197,1.31],[103.640808,1.315555],[103.641083,1.321111],[103.643311,1.331388],[103.669968,1.390833],[103.672203,1.395555],[103.67775,1.403611],[103.684402,1.411111],[103.694962,1.421111],[103.703308,1.426111],[103.713593,1.429444],[103.804138,1.445],[103.8172,1.445277],[103.829422,1.443611],[103.848312,1.434722],[103.87941,1.417222],[103.891647,1.408611],[103.896362,1.406389],[103.967743,1.387222],[103.99054,1.383291]]]}}]}';
    }
}
