<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class NR_Nauru extends Seeder
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
        $this->name = 'Nauru';
        $this->official_name = 'Republic of Nauru';
        $this->iso_alpha_2 = 'NR';
        $this->iso_alpha_3 = 'NRU';
        $this->iso_numeric = '520';
        $this->international_phone = '674';
 
        $this->languages = ['en','na'];
        $this->tld = ['.nr'];
        $this->wmo = 'NW';
        $this->geoname_id = '2110425';
 
        $this->emoji = [
            'img' => '🇳🇷',
            'uCode' => 'U+1F1F3 U+1F1F7',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '0 32 S',
                'desc' => '-0.5316064953804016',
            ],
            'longitude' => [
                'classic' => '166 55 E',
                'desc' => '166.9364013671875',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '-0.5',
                'min' => '-0.55',
            ],
            'longitude' => [
                'max' => '166.95',
                'min' => '166.916667',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"nr"},"geometry":{"type":"Polygon","coordinates":[[[166.929138,-0.552222],[166.922211,-0.552222],[166.916931,-0.550833],[166.909149,-0.544722],[166.904419,-0.535833],[166.904419,-0.528889],[166.907745,-0.511945],[166.916077,-0.499444],[166.920258,-0.496667],[166.930542,-0.493333],[166.948303,-0.496667],[166.953033,-0.499444],[166.958588,-0.506389],[166.958008,-0.513333],[166.955811,-0.518611],[166.9422,-0.544722],[166.938873,-0.548889],[166.935242,-0.551667],[166.929138,-0.552222]]]}}]}';
    }
}
