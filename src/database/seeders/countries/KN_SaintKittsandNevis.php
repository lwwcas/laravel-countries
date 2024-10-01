<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class KN_SaintKittsandNevis extends CountrySeeder
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
        // Set the country's common name
        $this->name = 'Saint Kitts and Nevis';

        // Set the country's official name
        $this->official_name = 'Federation of Saint Christopher and Nevis';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'KN';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'KNA';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '659';

        // Set the international dialing code
        $this->international_phone = '1-869';

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.kn'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '25 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '15 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '80%'; // As per recent estimates

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'None'; // No dedicated cybersecurity agency

        // List popular web technologies in Saint Kitts and Nevis
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'AT';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3575174';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'East Caribbean dollar',
            // Currency code
            'code' => 'XCD',
            // Currency symbol
            'symbol' => '$',
            // Main unit
            'main_unit' => 'dollar',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['5', '10', '20', '50', '100'],
            // Main coins
            'coins_main' => ['1', '2'],
            // Subunit coins (only numbers)
            'coins_sub' => ['1', '2', '5', '10', '25'],
        ];

        // Set the population
        $this->population = 53192; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 261; // km²

        // Set the capital city
        $this->capital = 'Basseterre';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/St_Kitts',
                // Standard time offset
                'standard_time' => 'UTC-4',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1983-09-19'; // Independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Commonwealth of Nations',
            'Organization of American States (OAS)',
            'Caribbean Community (CARICOM)',
            'Association of Caribbean States (ACS)',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'Non-Aligned Movement',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 1.0; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Anglican, Methodist, Roman Catholic)',
        ];

        // Describe the form of government
        $this->government = 'Federal parliamentary constitutional monarchy';

        // Set the national sport
        $this->national_sport = 'Cricket'; // Cricket is popular in Saint Kitts and Nevis

        // Define bordering countries
        $this->borders = []; // It is an island nation with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇰🇳',
            // Unicode code points
            'uCode' => 'U+1F1F0 U+1F1F3',
            // HTML entities
            'html' => '&#x1F1F0;&#x1F1F3;',
            // CSS entities
            'css' => '\\1F1F0\\1F1F3',
            // Decimal Unicode entities
            'decimal' => '&#127472;&#127475;',
            // Direct UTF-8 string
            'utf8' => '🇰🇳',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF0\uD83C\uDDF3',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-kn:',
            // Hexadecimal entity
            'hex' => '&#x1F1F0;&#x1F1F3;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#009E49',
                // RGB color values
                'rgb' => '0,158,73',
                // CMYK color values
                'cmyk' => '100,0,54,38',
                // HSL color values
                'hsl' => '146°,100%,31%',
                // HSV color values
                'hsv' => '146°,100%,62%',
                // Pantone color code
                'pantone' => '355 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Yellow',
                // Web color name
                'web_name' => 'yellow',
                // Hexadecimal color code
                'hex' => '#FCD116',
                // RGB color values
                'rgb' => '252,209,22',
                // CMYK color values
                'cmyk' => '0,17,91,1',
                // HSL color values
                'hsl' => '47°,98%,54%',
                // HSV color values
                'hsv' => '47°,91%,99%',
                // Pantone color code
                'pantone' => '116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
            [
                // Color name
                'name' => 'Black',
                // Web color name
                'web_name' => 'black',
                // Hexadecimal color code
                'hex' => '#000000',
                // RGB color values
                'rgb' => '0,0,0',
                // CMYK color values
                'cmyk' => '0,0,0,100',
                // HSL color values
                'hsl' => '0°,0%,0%',
                // HSV color values
                'hsv' => '0°,0%,0%',
                // Pantone color code
                'pantone' => 'Black C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#CE1126',
                // RGB color values
                'rgb' => '206,17,38',
                // CMYK color values
                'cmyk' => '0,92,82,19',
                // HSL color values
                'hsl' => '350°,84%,44%',
                // HSV color values
                'hsv' => '350°,92%,81%',
                // Pantone color code
                'pantone' => '186 C',
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
                'hsl' => '0°,0%,100%',
                // HSV color values
                'hsv' => '0°,0%,100%',
                // Pantone color code
                'pantone' => 'White',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '17.3578',
            // Longitude in decimal degrees
            'longitude' => '-62.7829',
            // Degrees with decimal
            'dd' => '17.3578° N, 62.7829° W',
            // Degrees, minutes, seconds
            'dms' => '17°21\'28.08" N, 62°46\'58.44" W',
            // Degrees and decimal minutes
            'dm' => '17°21.468\' N, 62°46.974\' W',
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
      "properties": { "cca2": "kn" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-62.55278, 17.09417],
              [-62.585007, 17.09166],
              [-62.59139, 17.091942],
              [-62.61056, 17.09528],
              [-62.617226, 17.102497],
              [-62.62195, 17.111385],
              [-62.62528, 17.120831],
              [-62.626114, 17.126663],
              [-62.625557, 17.139164],
              [-62.62361, 17.151108],
              [-62.620285, 17.16333],
              [-62.610001, 17.191109],
              [-62.59972, 17.19722],
              [-62.582779, 17.199718],
              [-62.576118, 17.19944],
              [-62.54861, 17.189999],
              [-62.54472, 17.186665],
              [-62.5425, 17.18222],
              [-62.54139, 17.176941],
              [-62.535278, 17.144997],
              [-62.53417, 17.13361],
              [-62.535278, 17.120831],
              [-62.538612, 17.108608],
              [-62.54445, 17.09972],
              [-62.54778, 17.09611],
              [-62.55278, 17.09417]
            ]
          ],
          [
            [
              [-62.70167, 17.336941],
              [-62.6225, 17.241943],
              [-62.62056, 17.23139],
              [-62.62167, 17.224442],
              [-62.62528, 17.22083],
              [-62.65389, 17.208885],
              [-62.66222, 17.239166],
              [-62.67111, 17.257221],
              [-62.677223, 17.264999],
              [-62.6925, 17.27833],
              [-62.7075, 17.285831],
              [-62.71389, 17.28611],
              [-62.72501, 17.284164],
              [-62.73806, 17.284721],
              [-62.75944, 17.287498],
              [-62.778336, 17.292221],
              [-62.793335, 17.299999],
              [-62.83528, 17.324444],
              [-62.83917, 17.327774],
              [-62.861671, 17.366386],
              [-62.863892, 17.370831],
              [-62.856392, 17.38583],
              [-62.84945, 17.393055],
              [-62.83861, 17.401943],
              [-62.8175, 17.410831],
              [-62.81278, 17.409443],
              [-62.734726, 17.36805],
              [-62.73, 17.365276],
              [-62.70167, 17.336941]
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
