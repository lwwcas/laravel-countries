<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class HK_HongKongSARChina extends CountrySeeder
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
    public ?string $region = 'asia';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Hong Kong';

        // Set the country's official name
        $this->official_name = 'Hong Kong Special Administrative Region of the People\'s Republic of China';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'HK';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'HKG';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '344';

        // Set the international dialing code
        $this->international_phone = '852';

        // Define the languages spoken in the territory
        $this->languages = ['zh', 'en']; // Chinese and English are official languages

        // Define the top-level domain(s)
        $this->tld = ['.hk'];

        // Define alternative top-level domains
        $this->alternative_tlds = ['.香港']; // Chinese character TLD

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '150 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '80 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '90%'; // High internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Office of the Government Chief Information Officer (OGCIO)';

        // List popular web technologies in Hong Kong
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress', 'Java'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'HK';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '1819730';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Hong Kong dollar',
            // Currency code
            'code' => 'HKD',
            // Currency symbol
            'symbol' => '$',
            // Main unit
            'main_unit' => 'dollar',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['10', '20', '50', '100', '500', '1000'],
            // Main coins
            'coins_main' => ['1', '2', '5', '10'],
            // Subunit coins
            'coins_sub' => ['10', '20', '50 cents'],
        ];

        // Set the population
        $this->population = 7481800; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 1106; // km²

        // Set the capital city
        $this->capital = null; // Hong Kong is a city territory

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Asia/Hong_Kong',
                // Standard time offset
                'standard_time' => 'UTC+8',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Hong Kong is a Special Administrative Region of China

        // List international organizations the territory is part of
        $this->international_organizations = [
            'World Trade Organization (WTO)',
            'Asia-Pacific Economic Cooperation (APEC)',
            'International Olympic Committee (IOC)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 366; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Buddhism',
            'Taoism',
            'Confucianism',
            'Christianity',
        ];

        // Describe the form of government
        $this->government = 'Special Administrative Region of the People\'s Republic of China';

        // Set the national sport
        $this->national_sport = 'Dragon Boat Racing'; // Popular sport in Hong Kong

        // Define bordering countries
        $this->borders = [
            ['name' => 'China', 'iso_alpha_2' => 'CN'],
        ];

        // Define the territory's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇭🇰',
            // Unicode code points
            'uCode' => 'U+1F1ED U+1F1F0',
            // HTML entities
            'html' => '&#x1F1ED;&#x1F1F0;',
            // CSS entities
            'css' => '\\1F1ED\\1F1F0',
            // Decimal Unicode entities
            'decimal' => '&#127469;&#127472;',
            // Direct UTF-8 string
            'utf8' => '🇭🇰',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDED\uD83C\uDDF0',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-hk:',
            // Hexadecimal entity
            'hex' => '&#x1F1ED;&#x1F1F0;',
        ];

        // Define the colors of the territory's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Flag Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#BA1F1A',
                // RGB color values
                'rgb' => '186,31,26',
                // CMYK color values
                'cmyk' => '0,83,86,27',
                // HSL color values
                'hsl' => '2,76%,41%',
                // HSV color values
                'hsv' => '2,86%,73%',
                // Pantone color code
                'pantone' => '1795 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'White',
                // Web color name
                'web_name' => 'white',
                // Hexadecimal color code
                'hex' => '#FFFFFF',
                // RGB color values
                'rgb' => '255,255,255',
                // CMYK color values
                'cmyk' => '0,0,0,0',
                // HSL color values
                'hsl' => '0,0%,100%',
                // HSV color values
                'hsv' => '0,0%,100%',
                // Pantone color code
                'pantone' => 'White',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '22.3193',
            // Longitude in decimal degrees
            'longitude' => '114.1694',
            // Degrees with decimal
            'dd' => '22.3193° N, 114.1694° E',
            // Degrees, minutes, seconds
            'dms' => '22°19\'9.48" N, 114°10\'9.84" E',
            // Degrees and decimal minutes
            'dm' => '22°19.158\' N, 114°10.164\' E',
            // GPS formats
            'gps' => [],
        ];


        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "properties": { "cca2": "hk" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [114.246094, 22.203327],
              [114.241364, 22.200829],
              [114.207489, 22.217773],
              [114.137207, 22.255554],
              [114.125809, 22.265553],
              [114.123306, 22.269718],
              [114.122208, 22.27528],
              [114.124977, 22.28],
              [114.12886, 22.28305],
              [114.13443, 22.284721],
              [114.146378, 22.286385],
              [114.194427, 22.291664],
              [114.201103, 22.290554],
              [114.206703, 22.28477],
              [114.23082, 22.269165],
              [114.234993, 22.266109],
              [114.244141, 22.25444],
              [114.246643, 22.25],
              [114.248322, 22.244995],
              [114.248871, 22.207771],
              [114.246094, 22.203327]
            ]
          ],
          [
            [
              [113.896652, 22.195827],
              [113.843048, 22.193607],
              [113.833527, 22.198067],
              [113.830833, 22.202774],
              [113.822769, 22.219994],
              [113.825272, 22.232216],
              [113.834991, 22.244438],
              [113.842484, 22.251389],
              [113.883041, 22.281387],
              [113.887772, 22.283886],
              [113.897774, 22.28805],
              [114.043587, 22.340275],
              [114.04776, 22.339996],
              [114.050262, 22.335831],
              [114.049698, 22.32888],
              [114.026657, 22.306942],
              [113.99498, 22.266388],
              [113.992477, 22.261665],
              [113.992203, 22.236382],
              [113.964996, 22.218052],
              [113.909416, 22.196941],
              [113.896652, 22.195827]
            ]
          ],
          [
            [
              [114.314148, 22.342773],
              [114.309982, 22.339718],
              [114.304153, 22.340275],
              [114.298599, 22.34222],
              [114.295258, 22.345829],
              [114.294144, 22.351387],
              [114.294434, 22.36194],
              [114.296097, 22.368053],
              [114.310928, 22.36182],
              [114.313873, 22.359997],
              [114.315536, 22.354996],
              [114.315536, 22.348885],
              [114.314148, 22.342773]
            ]
          ],
          [
            [
              [114.219437, 22.47444],
              [114.239433, 22.430828],
              [114.308594, 22.47416],
              [114.313873, 22.475552],
              [114.318878, 22.47444],
              [114.386932, 22.43333],
              [114.389977, 22.429718],
              [114.390266, 22.423328],
              [114.38443, 22.374996],
              [114.382202, 22.369717],
              [114.37886, 22.365829],
              [114.329697, 22.37704],
              [114.29261, 22.381836],
              [114.262077, 22.359589],
              [114.274292, 22.32425],
              [114.306572, 22.285427],
              [114.296104, 22.260561],
              [114.198029, 22.318054],
              [114.025543, 22.35194],
              [113.932213, 22.35444],
              [113.909988, 22.362495],
              [113.902481, 22.369995],
              [113.899986, 22.37444],
              [113.895264, 22.40222],
              [113.896652, 22.40694],
              [113.900543, 22.41],
              [113.949417, 22.446384],
              [114.033691, 22.508739],
              [114.03333040044, 22.509138149175],
              [114.22259578298, 22.550548246897],
              [114.222267, 22.550041],
              [114.219437, 22.47444]
            ]
          ]
        ]
      }
    }
  ]
}
';
    }
}
