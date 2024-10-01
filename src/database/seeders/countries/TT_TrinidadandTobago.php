<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class TT_TrinidadandTobago extends CountrySeeder
{

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public ?string $lang = 'en';

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public ?string $region = 'americas';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->name = 'Trinidad and Tobago';
        $this->official_name = 'Republic of Trinidad and Tobago';
        $this->iso_alpha_2 = 'TT';
        $this->iso_alpha_3 = 'TTO';
        $this->iso_numeric = '780';
        $this->international_phone = '1-868';

        $this->languages = ['en'];
        $this->tld = ['.tt'];
        $this->wmo = 'TD';
        $this->geoname_id = '3573591';

        $this->emoji = [
            'img' => '🇹🇹',
            'uCode' => 'U+1F1F9 U+1F1F9',
        ];
        $this->color = [
            'hex' => [
                '#ff0000',
                '#ffffff',
                '#000000',
            ],
            'rgb' => [
                '255,0,0',
                '255,255,255',
                '0,0,0',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '11 00 N',
                'desc' => '10.68574047088623',
            ],
            'longitude' => [
                'classic' => '61 00 W',
                'desc' => '-61.1640625',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '20',
                'min' => '10.033333',
            ],
            'longitude' => [
                'max' => '-60.5',
                'min' => '-74',
            ],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"tt"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-60.92306,10.79722],[-60.94445,10.76222],[-60.963058,10.739166],[-60.987228,10.714722],[-61.01306,10.702221],[-61.01806,10.700277],[-61.027504,10.689165],[-61.03306,10.680555],[-61.035278,10.675833],[-61.04584,10.491943],[-61.04501,10.486387],[-61.02195,10.394722],[-61.02,10.389721],[-61.003334,10.358889],[-60.99556,10.346109],[-60.992226,10.3425],[-61.00084,10.158609],[-61.008057,10.140554],[-61.08362,10.102777],[-61.10722,10.091944],[-61.15223,10.075554],[-61.199722,10.06944],[-61.20612,10.068888],[-61.40528,10.06694],[-61.526672,10.068333],[-61.67445,10.075277],[-61.679726,10.07694],[-61.70556,10.078888],[-61.803337,10.08166],[-61.808891,10.08055],[-61.833618,10.071388],[-61.85834,10.062222],[-61.88028,10.0425],[-61.90278,10.03805],[-61.909172,10.037498],[-61.91473,10.03916],[-61.91806,10.042776],[-61.92306,10.051109],[-61.92445,10.05528],[-61.92417,10.062222],[-61.922501,10.067778],[-61.91528,10.074165],[-61.81778,10.127777],[-61.647781,10.19722],[-61.511116,10.234444],[-61.5014,10.238333],[-61.49278,10.243332],[-61.464447,10.27028],[-61.45834,10.27833],[-61.455,10.289165],[-61.45251,10.299166],[-61.460556,10.56361],[-61.465561,10.57889],[-61.47362,10.597776],[-61.489723,10.630833],[-61.50194,10.639721],[-61.54389,10.668333],[-61.54861,10.670555],[-61.59778,10.684444],[-61.60473,10.684721],[-61.61973,10.679165],[-61.626114,10.67861],[-61.65445,10.678055],[-61.65945,10.680277],[-61.66278,10.683887],[-61.663895,10.706388],[-61.66222,10.709166],[-61.65806,10.711666],[-61.605835,10.741665],[-61.59972,10.742777],[-61.480003,10.750555],[-61.432503,10.752777],[-61.42667,10.753887],[-61.422501,10.756388],[-61.390839,10.775555],[-61.378334,10.783888],[-61.2425,10.790277],[-61.1964,10.789444],[-61.185005,10.791666],[-61.175,10.795555],[-61.17084,10.798054],[-61.15639,10.81111],[-61.146118,10.814722],[-61.14056,10.815832],[-61.079445,10.824165],[-61.075562,10.826111],[-61.03389,10.83861],[-61.01694,10.84194],[-60.928337,10.83861],[-60.910835,10.83417],[-60.907784,10.83083],[-60.90806,10.823889],[-60.91028,10.819166],[-60.92306,10.79722]]],[[[-60.63945,11.203054],[-60.644173,11.201387],[-60.66889,11.198889],[-60.68778,11.201944],[-60.736389,11.18361],[-60.74111,11.181665],[-60.75417,11.174166],[-60.76222,11.168333],[-60.7975,11.141666],[-60.839172,11.152498],[-60.84473,11.154165],[-60.847504,11.158333],[-60.848335,11.16389],[-60.847229,11.176943],[-60.75667,11.242222],[-60.70084,11.27583],[-60.657784,11.30139],[-60.532501,11.344999],[-60.526672,11.346109],[-60.521118,11.33361],[-60.520561,11.3275],[-60.52473,11.273888],[-60.527229,11.262499],[-60.53111,11.259165],[-60.534447,11.257221],[-60.63945,11.203054]]]]}}]}';
    }
}
