<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class AG_AntiguaandBarbuda extends CountrySeeder
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
        $this->name = 'Antigua and Barbuda';

        // Set the country's official name
        $this->official_name = 'Antigua and Barbuda';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'AG';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'ATG';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '028';

        // Set the international dialing code
        $this->international_phone = '+1-268';

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.ag'];

        // Define alternative top-level domains
        $this->alternative_tlds = [
            '.com.ag', // Used for commercial entities
            '.org.ag', // Used by non-profit organizations
            '.net.ag', // Used by network providers
            '.edu.ag', // Used by educational institutions
            '.gov.ag', // Used by government entities
        ];

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '20 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '10 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '65%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Ministry of Information, Broadcasting, Telecommunications and Information Technology'; // Government body responsible for ICT

        // List popular web technologies in Antigua and Barbuda
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress']; // Popular web technologies in Antigua and Barbuda

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'AT';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3576396';

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
            'sub_unit_to_unit' => 100, // One dollar is subdivided into 100 cents
            // Banknotes in circulation
            'banknotes' => ['5', '10', '20', '50', '100'],
            // Main coins
            'coins_main' => ['1'],
            // Subunit coins
            'coins_sub' => ['1', '2', '5', '10', '25'],
        ];

        // Set the population
        $this->population = 97929; // As of recent estimates

        // Set the area in square kilometers
        $this->area = 442.6; // km²

        // Set the capital city
        $this->capital = 'St. John\'s';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Time zone identifier
            'timezone_id' => 'America/Antigua',
            // Standard time offset
            'standard_time' => 'UTC−4', // Atlantic Standard Time (does not observe DST)
        ];

        // Set the independence day
        $this->independence_day = '1981-11-01'; // Date of Independence (YYYY-MM-DD)

        // List international organizations the country is part of
        $this->international_organizations = ['United Nations', 'Commonwealth of Nations', 'CARICOM', 'OECS', 'OAS']; // International affiliations

        // Set the GDP in billions of USD
        $this->gdp = 1.58; // GDP in billions of USD

        // List the predominant religions
        $this->religions = ['Christianity']; // Predominant religion

        // Describe the form of government
        $this->government = 'Unitary parliamentary constitutional monarchy';

        // Set the national sport
        $this->national_sport = 'Cricket'; // Popular sport

        // Define bordering countries
        $this->borders = []; // Island nation with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇦🇬',
            // Unicode code points
            'uCode' => 'U+1F1E6 U+1F1EC',
            // HTML entities
            'html' => '&#x1F1E6;&#x1F1EC;',
            // CSS entities
            'css' => '\\1F1E6\\1F1EC',
            // Decimal Unicode entities
            'decimal' => '&#127462;&#127468;',
            // Direct UTF-8 string
            'utf8' => '🇦🇬',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE6\uD83C\uDDEC',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-ag:',
            // Hexadecimal entity
            'hex' => '&#x1F1E6;&#x1F1EC;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
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
                'hsl' => '348,85%,44%',
                // HSV color values
                'hsv' => '348,92%,81%',
                // Pantone color code
                'pantone' => 'Pantone 186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#0072C6',
                // RGB color values
                'rgb' => '0,114,198',
                // CMYK color values
                'cmyk' => '100,42,0,22',
                // HSL color values
                'hsl' => '208,100%,39%',
                // HSV color values
                'hsv' => '208,100%,78%',
                // Pantone color code
                'pantone' => 'Pantone 285 C',
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
                'pantone' => 'Pantone White',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
            [
                // Color name
                'name' => 'Yellow',
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
                'pantone' => 'Pantone 109 C',
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
                'hsl' => '0,0%,0%',
                // HSV color values
                'hsv' => '0,0%,0%',
                // Pantone color code
                'pantone' => 'Pantone Black C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '17.1274',
            // Longitude in decimal degrees
            'longitude' => '-61.8468',
            // Degrees with decimal
            'dd' => '17.1274° N, 61.8468° W',
            // Degrees, minutes, seconds
            'dms' => '17°07\'38.64" N, 61°50\'48.48" W',
            // Degrees and decimal minutes
            'dm' => '17°07.644\' N, 61°50.808\' W',
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
      "properties": { "cca2": "ag" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-61.686668, 17.024441],
              [-61.73806, 16.989719],
              [-61.82917, 16.996944],
              [-61.87611, 17.016941],
              [-61.88056, 17.01972],
              [-61.88361, 17.023609],
              [-61.88583, 17.028053],
              [-61.887222, 17.033054],
              [-61.89111, 17.09417],
              [-61.887222, 17.10527],
              [-61.88417, 17.109722],
              [-61.832779, 17.16389],
              [-61.826393, 17.16722],
              [-61.79445, 17.16333],
              [-61.784172, 17.15833],
              [-61.74417, 17.13722],
              [-61.674171, 17.093609],
              [-61.67028, 17.090275],
              [-61.668892, 17.085],
              [-61.66639, 17.04583],
              [-61.6675, 17.04055],
              [-61.682503, 17.0275],
              [-61.686668, 17.024441]
            ]
          ],
          [
            [
              [-61.72917, 17.608608],
              [-61.73112, 17.547222],
              [-61.73278, 17.541111],
              [-61.73889, 17.540554],
              [-61.75194, 17.549442],
              [-61.81556, 17.583885],
              [-61.834724, 17.588608],
              [-61.839447, 17.586666],
              [-61.842781, 17.582775],
              [-61.8475, 17.58083],
              [-61.85306, 17.583054],
              [-61.856674, 17.5925],
              [-61.873894, 17.688889],
              [-61.875282, 17.69861],
              [-61.873062, 17.703888],
              [-61.85028, 17.722775],
              [-61.84556, 17.724998],
              [-61.83917, 17.72472],
              [-61.78722, 17.700554],
              [-61.78361, 17.69722],
              [-61.74334, 17.653053],
              [-61.74028, 17.649166],
              [-61.73806, 17.644722],
              [-61.73167, 17.624996],
              [-61.72917, 17.608608]
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
