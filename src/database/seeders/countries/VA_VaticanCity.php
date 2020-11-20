<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class VA_VaticanCity extends Seeder
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
        $this->name = 'Vatican City';
        $this->official_name = 'Vatican City State';
        $this->iso_alpha_2 = 'VA';
        $this->iso_alpha_3 = 'VAT';
        $this->iso_numeric = '336';
        $this->international_phone = '';
 
        $this->languages = ['it','la'];
        $this->tld = ['.va'];
        $this->wmo = '0';
        $this->geoname_id = '3164670';
 
        $this->emoji = [
            'img' => '🇻🇦',
            'uCode' => 'U+1F1FB U+1F1E6',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '41 54 N',
                'desc' => '41.90308380126953',
            ],
            'longitude' => [
                'classic' => '12 27 E',
                'desc' => '12.452852249145508',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '41.9',
                'min' => '41.9',
            ],
            'longitude' => [
                'max' => '12.45',
                'min' => '12.45',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"va"},"geometry":{"type":"Polygon","coordinates":[[[12.445090330889,41.903117521785],[12.451653339581,41.907989033391],[12.456660170954,41.901426024699],[12.445090330889,41.903117521785]]]}}]}';
    }
}
