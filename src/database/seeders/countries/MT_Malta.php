<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class MT_Malta extends Seeder
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
        $this->name = 'Malta';
        $this->official_name = 'Republic of Malta';
        $this->iso_alpha_2 = 'MT';
        $this->iso_alpha_3 = 'MLT';
        $this->iso_numeric = '470';
        $this->international_phone = '356';
 
        $this->languages = ['mt','en'];
        $this->tld = ['.mt'];
        $this->wmo = 'ML';
        $this->geoname_id = '2562770';
 
        $this->emoji = [
            'img' => '🇲🇹',
            'uCode' => 'U+1F1F2 U+1F1F9',
        ];
        $this->color = [
            'hex' => [
                '#ff0000',
                '#ffffff',
            ],
            'rgb' => [
                '255,0,0',
                '255,255,255',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '35 50 N',
                'desc' => '35.93336486816406',
            ],
            'longitude' => [
                'classic' => '14 35 E',
                'desc' => '14.381033897399902',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '36.081944',
                'min' => '35.783889',
            ],
            'longitude' => [
                'max' => '14.575',
                'min' => '14.185556',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"mt"},"geometry":{"type":"MultiPolygon","coordinates":[[[[14.562222,35.820274],[14.519722,35.799995],[14.42389,35.818604],[14.379721,35.844444],[14.374998,35.8475],[14.366943,35.854721],[14.347221,35.872498],[14.339443,35.879715],[14.336388,35.883888],[14.333055,35.894997],[14.324999,35.972771],[14.326387,35.97888],[14.332499,35.98111],[14.361666,35.99139],[14.368332,35.992493],[14.374998,35.990829],[14.443333,35.960274],[14.510277,35.92528],[14.548332,35.89222],[14.563889,35.877777],[14.57,35.869438],[14.568054,35.829437],[14.565832,35.824165],[14.562222,35.820274]]],[[[14.2675,36.011383],[14.251389,36.011383],[14.237221,36.012772],[14.196943,36.021942],[14.19111,36.02444],[14.185833,36.033333],[14.180832,36.055275],[14.18111,36.060829],[14.190832,36.066383],[14.208887,36.071663],[14.229166,36.074997],[14.245832,36.074165],[14.253332,36.073051],[14.314999,36.053329],[14.320555,36.051109],[14.34111,36.033882],[14.34083,36.029716],[14.335833,36.027222],[14.275,36.011665],[14.2675,36.011383]]]]}}]}';
    }
}
