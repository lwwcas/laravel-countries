<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class WF_WallisandFutunaIslands extends Seeder
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
        $this->name = 'Wallis and Futuna Islands';
        $this->official_name = 'Territory of the Wallis and Futuna Islands';
        $this->iso_alpha_2 = 'WF';
        $this->iso_alpha_3 = 'WLF';
        $this->iso_numeric = '876';
        $this->international_phone = '681';
 
        $this->languages = ['fr'];
        $this->tld = ['.wf'];
        $this->wmo = 'FW';
        $this->geoname_id = '4034749';
 
        $this->emoji = [
            'img' => '🇼🇫',
            'uCode' => 'U+1F1FC U+1F1EB',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '13 18 S',
                'desc' => '-13.299612045288086',
            ],
            'longitude' => [
                'classic' => '176 12 W',
                'desc' => '-176.1701202392578',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '-13.183333',
                'min' => '-14.35',
            ],
            'longitude' => [
                'max' => '-176.083333',
                'min' => '-178.183333',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"wf"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-178.042511,-14.31945],[-178.060822,-14.323891],[-178.134216,-14.31778],[-178.140564,-14.316389],[-178.1539,-14.308058],[-178.171112,-14.287781],[-178.177826,-14.278057],[-178.180878,-14.272779],[-178.188324,-14.25611],[-178.191101,-14.243334],[-178.189453,-14.23611],[-178.185577,-14.231668],[-178.177826,-14.23305],[-178.129974,-14.24694],[-178.124695,-14.250278],[-178.044769,-14.31444],[-178.042267,-14.316668],[-178.042511,-14.31945]]],[[[-176.161438,-13.35278],[-176.165039,-13.35305],[-176.167816,-13.35278],[-176.170319,-13.35111],[-176.177246,-13.34139],[-176.18808,-13.31361],[-176.191101,-13.286945],[-176.185822,-13.25778],[-176.183075,-13.24361],[-176.178345,-13.23222],[-176.160553,-13.21611],[-176.156158,-13.213614],[-176.15033,-13.214169],[-176.145844,-13.21806],[-176.123627,-13.25139],[-176.121948,-13.256392],[-176.121094,-13.26333],[-176.138611,-13.33833],[-176.140564,-13.34361],[-176.14447,-13.34667],[-176.161438,-13.35278]]]]}}]}';
    }
}
