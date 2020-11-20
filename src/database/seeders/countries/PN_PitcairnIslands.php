<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class PN_PitcairnIslands extends Seeder
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
        $this->name = 'Pitcairn Islands';
        $this->official_name = 'Pitcairn Group of Islands';
        $this->iso_alpha_2 = 'PN';
        $this->iso_alpha_3 = 'PCN';
        $this->iso_numeric = '612';
        $this->international_phone = '64';
 
        $this->languages = ['en'];
        $this->tld = ['.pn'];
        $this->wmo = 'PT';
        $this->geoname_id = '4030699';
 
        $this->emoji = [
            'img' => '🇵🇳',
            'uCode' => 'U+1F1F5 U+1F1F3',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '25 04 S',
                'desc' => '-24.372114181518555',
            ],
            'longitude' => [
                'classic' => '130 06 W',
                'desc' => '-128.31124877929688',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '-23.916667',
                'min' => '-25.066667',
            ],
            'longitude' => [
                'max' => '-124.783333',
                'min' => '-130.733333',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"pn"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-130.076935,-25.07972],[-130.08139,-25.08223],[-130.088043,-25.081673],[-130.093323,-25.07972],[-130.10083,-25.07611],[-130.104431,-25.07278],[-130.107483,-25.068058],[-130.107483,-25.063335],[-130.104431,-25.058617],[-130.10083,-25.05584],[-130.093872,-25.05528],[-130.08725,-25.05611],[-130.065002,-25.063335],[-130.061951,-25.06694],[-130.064209,-25.071388],[-130.076935,-25.07972]]],[[[-124.780853,-24.675835],[-124.787781,-24.676666],[-124.792801,-24.67444],[-124.796661,-24.67111],[-124.796082,-24.667503],[-124.795853,-24.66611],[-124.790573,-24.66416],[-124.783142,-24.66279],[-124.772522,-24.66695],[-124.771133,-24.67111],[-124.775574,-24.67389],[-124.780853,-24.675835]]],[[[-128.289185,-24.40972],[-128.29306,-24.41305],[-128.29892,-24.412781],[-128.304199,-24.41056],[-128.31308,-24.40472],[-128.32782,-24.390556],[-128.34198,-24.36972],[-128.344177,-24.364723],[-128.346954,-24.35361],[-128.34726,-24.340557],[-128.344757,-24.33584],[-128.336945,-24.329166],[-128.332214,-24.32727],[-128.326935,-24.326115],[-128.313324,-24.325],[-128.307526,-24.32667],[-128.303894,-24.33028],[-128.299469,-24.338615],[-128.293884,-24.3525],[-128.286682,-24.386391],[-128.285553,-24.39861],[-128.286682,-24.40472],[-128.289185,-24.40972]]]]}}]}';
    }
}
