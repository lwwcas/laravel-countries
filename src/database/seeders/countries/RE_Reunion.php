<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class RE_Reunion extends Seeder
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
    public $region = 'africa';
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->name = 'Réunion';
        $this->official_name = 'Réunion Island';
        $this->iso_alpha_2 = 'RE';
        $this->iso_alpha_3 = 'REU';
        $this->iso_numeric = '638';
        $this->international_phone = '262';
 
        $this->languages = ['fr'];
        $this->tld = ['.re'];
        $this->wmo = 'RE';
        $this->geoname_id = '935317';
 
        $this->emoji = [
            'img' => '🇷🇪',
            'uCode' => 'U+1F1F7 U+1F1EA',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '',
                'desc' => '-21.146299362182617',
            ],
            'longitude' => [
                'classic' => '',
                'desc' => '55.631248474121094',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '-20',
                'min' => '-21.366667',
            ],
            'longitude' => [
                'max' => '57',
                'min' => '55.216667',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"re"},"geometry":{"type":"Polygon","coordinates":[[[55.709999,-20.998058],[55.744995,-21.057503],[55.783607,-21.103336],[55.787216,-21.10667],[55.800278,-21.11528],[55.820831,-21.123611],[55.839165,-21.127224],[55.844994,-21.128891],[55.849159,-21.131668],[55.851387,-21.136391],[55.85305,-21.168613],[55.825554,-21.319447],[55.823883,-21.324722],[55.821106,-21.328892],[55.806938,-21.341667],[55.793327,-21.349724],[55.787498,-21.351112],[55.721939,-21.364445],[55.674164,-21.37389],[55.659439,-21.373611],[55.533333,-21.354725],[55.427773,-21.3125],[55.351944,-21.274445],[55.34333,-21.268612],[55.293327,-21.20639],[55.229721,-21.076389],[55.225555,-21.06139],[55.219719,-21.027779],[55.221382,-21.022224],[55.294441,-20.921669],[55.405273,-20.868893],[55.414993,-20.865559],[55.448883,-20.856392],[55.456108,-20.85667],[55.570831,-20.878891],[55.612221,-20.888615],[55.657494,-20.901669],[55.662498,-20.903614],[55.669716,-20.910557],[55.687775,-20.928059],[55.697777,-20.945835],[55.702774,-20.955002],[55.705551,-20.965836],[55.709999,-20.998058]]]}}]}';
    }
}
