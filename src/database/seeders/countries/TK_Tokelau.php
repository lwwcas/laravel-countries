<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class TK_Tokelau extends Seeder
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
        $this->name = 'Tokelau';
        $this->official_name = 'Tokelau';
        $this->iso_alpha_2 = 'TK';
        $this->iso_alpha_3 = 'TKL';
        $this->iso_numeric = '772';
        $this->international_phone = '690';
 
        $this->languages = ['en'];
        $this->tld = ['.tk'];
        $this->wmo = 'TK';
        $this->geoname_id = '4031074';
 
        $this->emoji = [
            'img' => '🇹🇰',
            'uCode' => 'U+1F1F9 U+1F1F0',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '9 00 S',
                'desc' => '-8.979207992553711',
            ],
            'longitude' => [
                'classic' => '172 00 W',
                'desc' => '-172.2017059326172',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '-8.533333',
                'min' => '-9.433333',
            ],
            'longitude' => [
                'max' => '-171.183333',
                'min' => '-172.516667',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"tk"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-171.214722,-9.377499],[-171.219177,-9.38111],[-171.223907,-9.37889],[-171.23056,-9.35556],[-171.22998,-9.34806],[-171.224701,-9.34556],[-171.218628,-9.34694],[-171.215576,-9.35111],[-171.211426,-9.363056],[-171.214722,-9.377499]]],[[[-171.843079,-9.207502],[-171.844452,-9.21417],[-171.848053,-9.218889],[-171.853638,-9.218334],[-171.856766,-9.212779],[-171.858032,-9.209723],[-171.859161,-9.209723],[-171.860535,-9.20667],[-171.862518,-9.19028],[-171.864746,-9.181114],[-171.862213,-9.17778],[-171.86142,-9.17445],[-171.858368,-9.17055],[-171.853882,-9.16806],[-171.850006,-9.16972],[-171.847504,-9.174168],[-171.844757,-9.18472],[-171.844757,-9.19083],[-171.843628,-9.194447],[-171.843079,-9.207502]]],[[[-172.483917,-8.58722],[-172.488617,-8.5875],[-172.493042,-8.5825],[-172.49942,-8.56611],[-172.500336,-8.560556],[-172.496979,-8.553888],[-172.492249,-8.55361],[-172.488892,-8.555834],[-172.483612,-8.566666],[-172.481934,-8.58056],[-172.483917,-8.58722]]]]}}]}';
    }
}
