<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class NU_Niue extends Seeder
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
        $this->name = 'Niue';
        $this->official_name = 'Niue';
        $this->iso_alpha_2 = 'NU';
        $this->iso_alpha_3 = 'NIU';
        $this->iso_numeric = '570';
        $this->international_phone = '683';
 
        $this->languages = ['en'];
        $this->tld = ['.nu'];
        $this->wmo = '0';
        $this->geoname_id = '4036232';
 
        $this->emoji = [
            'img' => '🇳🇺',
            'uCode' => 'U+1F1F3 U+1F1FA',
        ];
        $this->color = [
            'hex' => [
                '#ffdf00',
                '#0066ff',
            ],
            'rgb' => [
                '255,223,0',
                '0,102,255',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '19 02 S',
                'desc' => '-19.03806495666504',
            ],
            'longitude' => [
                'classic' => '169 52 W',
                'desc' => '-169.8302459716797',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '-18.933333',
                'min' => '-19.1',
            ],
            'longitude' => [
                'max' => '-169.783333',
                'min' => '-169.916667',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"nu"},"geometry":{"type":"Polygon","coordinates":[[[-169.89389,-19.145557],[-169.930878,-19.124443],[-169.951416,-19.076389],[-169.953064,-19.070278],[-169.931671,-19.016666],[-169.928894,-19.010559],[-169.894745,-18.97028],[-169.884766,-18.963333],[-169.868896,-18.963615],[-169.817505,-18.96833],[-169.812775,-18.972221],[-169.781708,-19.062778],[-169.781403,-19.067783],[-169.798096,-19.087223],[-169.824432,-19.110832],[-169.850281,-19.125835],[-169.859161,-19.130554],[-169.888062,-19.144447],[-169.89389,-19.145557]]]}}]}';
    }
}
