<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class YT_Mayotte extends Seeder
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
        $this->name = 'Mayotte';
        $this->official_name = 'Department of Mayotte';
        $this->iso_alpha_2 = 'YT';
        $this->iso_alpha_3 = 'MYT';
        $this->iso_numeric = '175';
        $this->international_phone = '262';
 
        $this->languages = ['fr'];
        $this->tld = ['.yt'];
        $this->wmo = '0';
        $this->geoname_id = '1024031';
 
        $this->emoji = [
            'img' => '🇾🇹',
            'uCode' => 'U+1F1FE U+1F1F9',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '12 50 S',
                'desc' => '-12.79636001586914',
            ],
            'longitude' => [
                'classic' => '45 10 E',
                'desc' => '45.14227294921875',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '-12.641389',
                'min' => '-12.993889',
            ],
            'longitude' => [
                'max' => '45.288611',
                'min' => '45.024444',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"yt"},"geometry":{"type":"MultiPolygon","coordinates":[[[[45.282494,-12.804167],[45.277771,-12.805],[45.272774,-12.796946],[45.268883,-12.7875],[45.262497,-12.76889],[45.263885,-12.765],[45.266663,-12.76083],[45.272774,-12.75361],[45.276382,-12.75],[45.283051,-12.7475],[45.286659,-12.75],[45.290833,-12.76417],[45.293327,-12.781668],[45.291939,-12.786945],[45.282494,-12.804167]]],[[[45.204994,-12.84972],[45.176384,-12.92089],[45.177219,-12.928223],[45.17805,-12.93139],[45.181107,-12.97139],[45.136383,-12.9925],[45.124161,-12.99139],[45.097496,-12.985834],[45.07,-12.957224],[45.06055,-12.89639],[45.063049,-12.89306],[45.067215,-12.89056],[45.080276,-12.88972],[45.086388,-12.89056],[45.091385,-12.8925],[45.095276,-12.901945],[45.096107,-12.907778],[45.099442,-12.91056],[45.113106,-12.901278],[45.11594,-12.90211],[45.11927,-12.90211],[45.123272,-12.898945],[45.124939,-12.892445],[45.124107,-12.88528],[45.103607,-12.82833],[45.058327,-12.750834],[45.041939,-12.74083],[45.039993,-12.73611],[45.039162,-12.713335],[45.045273,-12.69528],[45.078888,-12.6625],[45.208328,-12.7275],[45.222771,-12.73944],[45.23027,-12.752224],[45.22916,-12.7575],[45.204994,-12.84972]]]]}}]}';
    }
}
