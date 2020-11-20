<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class ST_SaoTomeandPrincipe extends Seeder
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
        $this->name = 'São Tomé and Príncipe';
        $this->official_name = 'Democratic Republic of São Tomé and Príncipe';
        $this->iso_alpha_2 = 'ST';
        $this->iso_alpha_3 = 'STP';
        $this->iso_numeric = '678';
        $this->international_phone = '239';
 
        $this->languages = ['pt'];
        $this->tld = ['.st'];
        $this->wmo = 'TP';
        $this->geoname_id = '2410758';
 
        $this->emoji = [
            'img' => '🇸🇹',
            'uCode' => 'U+1F1F8 U+1F1F9',
        ];
        $this->color = [
            'hex' => [
                '#12ad2b',
                '#ffff00',
                '#ff0000',
                '#000000',
            ],
            'rgb' => [
                '18,173,43',
                '255,255,0',
                '255,0,0',
                '0,0,0',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '1 00 N',
                'desc' => '0.275555282831192',
            ],
            'longitude' => [
                'classic' => '7 00 E',
                'desc' => '6.631628036499023',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '1.733333',
                'min' => '-0.016667',
            ],
            'longitude' => [
                'max' => '7.483333',
                'min' => '6.466667',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"st"},"geometry":{"type":"MultiPolygon","coordinates":[[[[6.5238890000001,0.01833],[6.518611,0.01833],[6.514444,0.021111000000133],[6.5075,0.041667],[6.46583,0.193056],[6.4644440000001,0.19861],[6.46722,0.25972200000012],[6.49055,0.30500000000012],[6.493055,0.308889],[6.53361,0.3438890000001],[6.617777,0.403611],[6.655,0.409167],[6.661666,0.409167],[6.666666,0.40833300000014],[6.687778,0.402222],[6.716666,0.3775],[6.751389,0.33027800000014],[6.76667,0.29056],[6.76583,0.28444],[6.755555,0.23972],[6.752777,0.228889],[6.750278,0.224722],[6.73861,0.208889],[6.6611110000001,0.104167],[6.6577770000001,0.100556],[6.5616660000001,0.027222],[6.5238890000001,0.01833]]],[[[7.423055,1.556111],[7.399166,1.530555],[7.3477770000001,1.565],[7.338055,1.577222],[7.327222,1.607222],[7.32861,1.612778],[7.37305,1.6875],[7.402499,1.70055],[7.406666,1.7019440000001],[7.451111,1.693055],[7.4613890000001,1.682778],[7.46417,1.6786110000001],[7.46417,1.671667],[7.462777,1.6347220000001],[7.423055,1.556111]]]]}}]}';
    }
}
