<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class GD_Grenada extends CountrySeeder
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
        $this->name = 'Grenada';

        // Set the country's official name
        $this->official_name = 'Grenada';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'GD';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'GRD';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '308';

        // Set the international dialing code
        $this->international_phone = '1-473';

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.gd'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '25 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '10 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '55%'; // Growing internet access in Grenada

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'None'; // No dedicated cybersecurity agency

        // List popular web technologies in Grenada
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'GD';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3580239';

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
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '25 cents'],
        ];

        // Set the population
        $this->population = 112519; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 344; // km²

        // Set the capital city
        $this->capital = 'St. George\'s';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/Grenada',
                // Standard time offset
                'standard_time' => 'UTC-4', // Atlantic Standard Time (AST)
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1974-02-07'; // Independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Caribbean Community (CARICOM)',
            'Commonwealth of Nations',
            'Organization of Eastern Caribbean States (OECS)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 1.21; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism, Protestantism)',
        ];

        // Describe the form of government
        $this->government = 'Parliamentary democracy and constitutional monarchy';

        // Set the national sport
        $this->national_sport = 'Cricket'; // Cricket is the most popular sport in Grenada

        // Define bordering countries
        $this->borders = []; // Grenada is an island nation and has no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇬🇩',
            // Unicode code points
            'uCode' => 'U+1F1EC U+1F1E9',
            // HTML entities
            'html' => '&#x1F1EC;&#x1F1E9;',
            // CSS entities
            'css' => '\\1F1EC\\1F1E9',
            // Decimal Unicode entities
            'decimal' => '&#127468;&#127465;',
            // Direct UTF-8 string
            'utf8' => '🇬🇩',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDEC\uD83C\uDDE9',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-gd:',
            // Hexadecimal entity
            'hex' => '&#x1F1EC;&#x1F1E9;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Flag Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#CE1126',
                // RGB color values
                'rgb' => '206,17,38',
                // CMYK color values
                'cmyk' => '0,92,82,19',
                // HSL color values
                'hsl' => '350,84%,44%',
                // HSV color values
                'hsv' => '350,92%,81%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Flag Yellow',
                // Web color name
                'web_name' => 'yellow',
                // Hexadecimal color code
                'hex' => '#FFD100',
                // RGB color values
                'rgb' => '255,209,0',
                // CMYK color values
                'cmyk' => '0,18,100,0',
                // HSL color values
                'hsl' => '48,100%,50%',
                // HSV color values
                'hsv' => '48,100%,100%',
                // Pantone color code
                'pantone' => '116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
            [
                // Color name
                'name' => 'Flag Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#009739',
                // RGB color values
                'rgb' => '0,151,57',
                // CMYK color values
                'cmyk' => '100,0,100,41',
                // HSL color values
                'hsl' => '140,100%,30%',
                // HSV color values
                'hsv' => '140,100%,59%',
                // Pantone color code
                'pantone' => '348 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '12.1165',
            // Longitude in decimal degrees
            'longitude' => '-61.6790',
            // Degrees with decimal
            'dd' => '12.1165° N, 61.6790° W',
            // Degrees, minutes, seconds
            'dms' => '12°6\'59.40" N, 61°40\'44.40" W',
            // Degrees and decimal minutes
            'dm' => '12°6.990\' N, 61°40.740\' W',
            // Various GPS formats
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
      "properties": { "cca2": "gd" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-61.74695, 11.997499],
              [-61.7525, 11.996387],
              [-61.78015, 12],
              [-61.78361, 12.001389],
              [-61.78722, 12.004721],
              [-61.78973, 12.009165],
              [-61.72472, 12.17222],
              [-61.7075, 12.19694],
              [-61.686668, 12.218054],
              [-61.675835, 12.227777],
              [-61.65861, 12.236666],
              [-61.653061, 12.237778],
              [-61.64751, 12.237499],
              [-61.6175, 12.232777],
              [-61.61195, 12.23111],
              [-61.610001, 12.227777],
              [-61.606392, 12.224165],
              [-61.60473, 12.220554],
              [-61.59972, 12.186666],
              [-61.59639, 12.125555],
              [-61.61111, 12.079443],
              [-61.628616, 12.048054],
              [-61.63167, 12.044167],
              [-61.6425, 12.034166],
              [-61.65139, 12.02916],
              [-61.683334, 12.016109],
              [-61.717506, 12.003887],
              [-61.74695, 11.997499]
            ]
          ],
          [
            [
              [-61.58, 12.29555],
              [-61.585556, 12.29444],
              [-61.589172, 12.29805],
              [-61.58889, 12.30361],
              [-61.585556, 12.314444],
              [-61.58334, 12.319166],
              [-61.5789, 12.323055],
              [-61.573891, 12.320833],
              [-61.572227, 12.315832],
              [-61.5725, 12.308887],
              [-61.57417, 12.30361],
              [-61.58, 12.29555]
            ]
          ],
          [
            [
              [-61.42834, 12.453609],
              [-61.491669, 12.434999],
              [-61.49556, 12.438055],
              [-61.49695, 12.443609],
              [-61.49556, 12.469444],
              [-61.493896, 12.475],
              [-61.490837, 12.47889],
              [-61.43445, 12.529165],
              [-61.427505, 12.52889],
              [-61.42556, 12.526943],
              [-61.42056, 12.51278],
              [-61.41945, 12.5075],
              [-61.41862, 12.494999],
              [-61.425285, 12.457499],
              [-61.42834, 12.453609]
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
