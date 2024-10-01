<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class KY_CaymanIslands extends CountrySeeder
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
        $this->name = 'Cayman Islands';

        // Set the country's official name
        $this->official_name = 'Cayman Islands';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'KY';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'CYM';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '163';

        // Set the international dialing code
        $this->international_phone = '1-345';

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.ky'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '70 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '40 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '90%'; // As per recent estimates

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Office of Cyber Security and Information Assurance';

        // List popular web technologies in Cayman Islands
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'GC';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3580718';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Cayman Islands dollar',
            // Currency code
            'code' => 'KYD',
            // Currency symbol
            'symbol' => '$',
            // Main unit
            'main_unit' => 'dollar',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['1', '5', '10', '25', '50', '100'],
            // Main coins
            'coins_main' => ['1'],
            // Subunit coins (only numbers)
            'coins_sub' => ['1', '5', '10', '25', '50'],
        ];

        // Set the population
        $this->population = 65813; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 264; // km²

        // Set the capital city
        $this->capital = 'George Town';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/Cayman',
                // Standard time offset
                'standard_time' => 'UTC-5',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // The Cayman Islands are a British Overseas Territory

        // List international organizations the country is part of
        $this->international_organizations = [
            // As a British Overseas Territory, the Cayman Islands are not members of international organizations independently
        ];

        // Set the GDP in billions of USD
        $this->gdp = 3.0; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Protestantism, Roman Catholicism)',
        ];

        // Describe the form of government
        $this->government = 'Self-governing British Overseas Territory';

        // Set the national sport
        $this->national_sport = 'Cricket'; // Cricket is popular in the Cayman Islands

        // Define bordering countries
        $this->borders = []; // It is an island nation with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇰🇾',
            // Unicode code points
            'uCode' => 'U+1F1F0 U+1F1FE',
            // HTML entities
            'html' => '&#x1F1F0;&#x1F1FE;',
            // CSS entities
            'css' => '\\1F1F0\\1F1FE',
            // Decimal Unicode entities
            'decimal' => '&#127472;&#127486;',
            // Direct UTF-8 string
            'utf8' => '🇰🇾',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF0\uD83C\uDDFE',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-ky:',
            // Hexadecimal entity
            'hex' => '&#x1F1F0;&#x1F1FE;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#00247D',
                // RGB color values
                'rgb' => '0,36,125',
                // CMYK color values
                'cmyk' => '100,71,0,51',
                // HSL color values
                'hsl' => '221°,100%,24%',
                // HSV color values
                'hsv' => '221°,100%,49%',
                // Pantone color code
                'pantone' => '280 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#CF142B',
                // RGB color values
                'rgb' => '207,20,43',
                // CMYK color values
                'cmyk' => '0,90,79,19',
                // HSL color values
                'hsl' => '350°,82%,44%',
                // HSV color values
                'hsv' => '350°,90%,81%',
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
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#009B48',
                // RGB color values
                'rgb' => '0,155,72',
                // CMYK color values
                'cmyk' => '100,0,54,39',
                // HSL color values
                'hsl' => '147°,100%,30%',
                // HSV color values
                'hsv' => '147°,100%,61%',
                // Pantone color code
                'pantone' => '355 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '19.3133',
            // Longitude in decimal degrees
            'longitude' => '-81.2546',
            // Degrees with decimal
            'dd' => '19.3133° N, 81.2546° W',
            // Degrees, minutes, seconds
            'dms' => '19°18\'47.88" N, 81°15\'16.56" W',
            // Degrees and decimal minutes
            'dm' => '19°18.798\' N, 81°15.276\' W',
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
      "properties": { "cca2": "ky" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-81.09723, 19.308887],
              [-81.10556, 19.302776],
              [-81.260284, 19.265274],
              [-81.266953, 19.26472],
              [-81.38417, 19.26472],
              [-81.390015, 19.26472],
              [-81.39418, 19.267498],
              [-81.397232, 19.271942],
              [-81.400558, 19.282219],
              [-81.40112, 19.28833],
              [-81.400558, 19.30778],
              [-81.39917, 19.313053],
              [-81.395, 19.326111],
              [-81.37195, 19.30917],
              [-81.367233, 19.306942],
              [-81.35556, 19.303886],
              [-81.341675, 19.304165],
              [-81.316956, 19.306389],
              [-81.31111, 19.30778],
              [-81.301392, 19.312222],
              [-81.27251, 19.325554],
              [-81.26945, 19.32944],
              [-81.275284, 19.34333],
              [-81.254456, 19.35389],
              [-81.15001, 19.354164],
              [-81.115005, 19.353333],
              [-81.108337, 19.3525],
              [-81.09917, 19.3475],
              [-81.09611, 19.34333],
              [-81.093063, 19.332775],
              [-81.093338, 19.319164],
              [-81.095, 19.31361],
              [-81.09723, 19.308887]
            ]
          ],
          [
            [
              [-80.0975, 19.65416],
              [-80.103897, 19.65361],
              [-80.109726, 19.655277],
              [-80.11168, 19.66222],
              [-80.11, 19.6675],
              [-80.10695, 19.671665],
              [-80.08057, 19.695],
              [-80.07584, 19.6975],
              [-79.99084, 19.711388],
              [-79.97696, 19.711666],
              [-79.97084, 19.710278],
              [-79.966675, 19.707222],
              [-79.965286, 19.703053],
              [-79.96918, 19.699718],
              [-79.974457, 19.69778],
              [-80.0975, 19.65416]
            ]
          ],
          [
            [
              [-79.86639, 19.686943],
              [-79.87889, 19.68528],
              [-79.88556, 19.686108],
              [-79.89056, 19.689163],
              [-79.89334, 19.69333],
              [-79.88972, 19.69666],
              [-79.769455, 19.761665],
              [-79.76306, 19.762218],
              [-79.756958, 19.76055],
              [-79.74112, 19.754444],
              [-79.73611, 19.75222],
              [-79.73279, 19.748608],
              [-79.73279, 19.74472],
              [-79.73668, 19.741386],
              [-79.753067, 19.729443],
              [-79.771118, 19.718887],
              [-79.78667, 19.713333],
              [-79.86639, 19.686943]
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
