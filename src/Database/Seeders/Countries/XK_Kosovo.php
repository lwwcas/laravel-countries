<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class XK_Kosovo extends CountrySeeder
{
    public ?string $lang = 'en';

    public ?string $region = 'europe';

    public function run(): void
    {
        $this->name = 'Kosovo';
        $this->official_name = 'Republic of Kosovo';

        // XK/XKX and 983 are user-assigned codes commonly used for Kosovo.
        // Kosovo is not currently assigned official ISO 3166-1 codes.
        $this->iso_alpha_2 = 'XK';
        $this->iso_alpha_3 = 'XKX';
        $this->iso_numeric = '983';

        $this->international_phone = '383';
        $this->languages = ['sq', 'sr'];

        // Kosovo does not currently have an assigned country-code TLD.
        $this->tld = [];
        $this->alternative_tlds = [];

        $this->internet_speed = [
            'average_speed_fixed' => '78 Mbps',
            'average_speed_mobile' => '80 Mbps',
        ];
        $this->internet_penetration = '96%';
        $this->cybersecurity_agency = 'Cyber Security Agency (Agjencia për Siguri Kibernetike)';
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'WordPress'];

        // KV is used by the WMO for Kosovo.
        $this->wmo = 'KV';
        $this->geoname_id = '831053';

        $this->currency = [
            'name' => 'Euro',
            'code' => 'EUR',
            'symbol' => '€',
            'main_unit' => 'euro',
            'sub_unit' => 'cent',
            'sub_unit_to_unit' => 100,
            'banknotes' => ['5', '10', '20', '50', '100', '200', '500'],
            'coins_main' => ['1', '2'],
            'coins_sub' => ['1', '2', '5', '10', '20', '50'],
        ];

        $this->population = 1588566;
        $this->area = 10887;
        $this->capital = 'Pristina';
        $this->timezones = [
            [
                'timezone_id' => 'Europe/Belgrade',
                'standard_time' => 'UTC+1',
                'daylight_saving_time' => 'UTC+2',
            ],
        ];
        $this->independence_day = '2008-02-17';

        $this->international_organizations = [
            'International Monetary Fund (IMF)',
            'World Bank Group',
            'European Bank for Reconstruction and Development (EBRD)',
            'International Olympic Committee (IOC)',
        ];
        $this->gdp = 11;
        $this->religions = ['Islam', 'Christianity'];
        $this->government = 'Unitary parliamentary republic';
        $this->national_sport = 'Football (Soccer)';

        $this->borders = [
            ['name' => 'Albania', 'iso_alpha_2' => 'AL'],
            ['name' => 'Montenegro', 'iso_alpha_2' => 'ME'],
            ['name' => 'North Macedonia', 'iso_alpha_2' => 'MK'],
            ['name' => 'Serbia', 'iso_alpha_2' => 'RS'],
        ];

        $this->emoji = [
            'img' => '🇽🇰',
            'uCode' => 'U+1F1FD U+1F1F0',
            'html' => '&#x1F1FD;&#x1F1F0;',
            'css' => '\1F1FD\1F1F0',
            'decimal' => '&#127485;&#127472;',
            'utf8' => '🇽🇰',
            'utf16' => '\uD83C\uDDFD\uD83C\uDDF0',
            'shortcode' => ':flag-xk:',
            'hex' => '&#x1F1FD;&#x1F1F0;',
        ];

        $this->flag_colors = [
            [
                'name' => 'Blue',
                'web_name' => 'blue',
                'hex' => '#244AA5',
                'rgb' => '36,74,165',
                'cmyk' => '78,55,0,35',
                'hsl' => '222°,64%,39%',
                'hsv' => '222°,78%,65%',
                'pantone' => '2935 C',
                'contrast' => '#FFFFFF',
            ],
            [
                'name' => 'Gold',
                'web_name' => 'gold',
                'hex' => '#D0A650',
                'rgb' => '208,166,80',
                'cmyk' => '0,20,62,18',
                'hsl' => '40°,57%,56%',
                'hsv' => '40°,62%,82%',
                'pantone' => '117 C',
                'contrast' => '#000000',
            ],
            [
                'name' => 'White',
                'web_name' => 'white',
                'hex' => '#FFFFFF',
                'rgb' => '255,255,255',
                'cmyk' => '0,0,0,0',
                'hsl' => '0°,0%,100%',
                'hsv' => '0°,0%,100%',
                'pantone' => 'White',
                'contrast' => '#000000',
            ],
        ];

        $this->coordinates = [
            'latitude' => '42.6026',
            'longitude' => '20.9030',
            'dd' => '42.6026° N, 20.9030° E',
            'dms' => '42°36\'9.36" N, 20°54\'10.8" E',
            'dm' => '42°36.156\' N, 20°54.18\' E',
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical(): string
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"xk"},"geometry":{"type":"Polygon","coordinates":[[[20.76216,42.05186],[21.3527,42.2068],[21.5766,42.2452],[21.5433,42.3203],[21.6629,42.4392],[21.775,42.6827],[21.633,42.6772],[21.4387,42.8626],[21.2742,42.9096],[21.0594,43.1309],[20.818,43.272],[20.635,43.216],[20.5229,42.954],[20.2837,42.7725],[20.0707,42.5886],[20.241,42.315],[20.4427,42.1957],[20.5229,42.2179],[20.5902,42.1075],[20.76216,42.05186]]]}}]}';
    }
}
