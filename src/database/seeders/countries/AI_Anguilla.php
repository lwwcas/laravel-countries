<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class AI_Anguilla extends CountrySeeder
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
        $this->name = 'Anguilla';

        // Set the country's official name
        $this->official_name = 'Anguilla';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'AI';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'AIA';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '660';

        // Set the international dialing code
        $this->international_phone = '+1-264';

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.ai'];

        // Define alternative top-level domains
        $this->alternative_tlds = [
            '.com.ai', // Used for commercial entities
            '.org.ai', // Used by non-profit organizations
            '.net.ai', // Used by network providers
            '.off.ai', // Used by official entities
        ];

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '50 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '20 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '80%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Ministry of Infrastructure, Communications, Utilities, Housing and Tourism'; // Government body responsible for ICT

        // List popular web technologies in Anguilla
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress']; // Popular web technologies in Anguilla

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'AI';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3573511';

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
            'coins_main' => ['1', '2'],
            // Subunit coins
            'coins_sub' => ['1', '2', '5', '10', '25'],
        ];

        // Set the population
        $this->population = 15094; // As of recent estimates

        // Set the area in square kilometers
        $this->area = 91; // km²

        // Set the capital city
        $this->capital = 'The Valley';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Time zone identifier
            'timezone_id' => 'America/Anguilla',
            // Standard time offset
            'standard_time' => 'UTC−4', // Atlantic Standard Time (does not observe DST)
        ];

        // Set the independence day
        $this->independence_day = null; // Anguilla is a British Overseas Territory

        // List international organizations the country is part of
        $this->international_organizations = ['CARICOM (Associate)', 'OECS', 'OCT Association']; // International affiliations

        // Set the GDP in billions of USD
        $this->gdp = 0.31; // GDP in billions of USD

        // List the predominant religions
        $this->religions = ['Christianity']; // Predominant religion

        // Describe the form of government
        $this->government = 'British Overseas Territory'; // Under constitutional monarchy

        // Set the national sport
        $this->national_sport = 'Boat racing'; // Traditional sport

        // Define bordering countries
        $this->borders = []; // Island territory with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇦🇮',
            // Unicode code points
            'uCode' => 'U+1F1E6 U+1F1EE',
            // HTML entities
            'html' => '&#x1F1E6;&#x1F1EE;',
            // CSS entities
            'css' => '\\1F1E6\\1F1EE',
            // Decimal Unicode entities
            'decimal' => '&#127462;&#127470;',
            // Direct UTF-8 string
            'utf8' => '🇦🇮',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE6\uD83C\uDDEE',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-ai:',
            // Hexadecimal entity
            'hex' => '&#x1F1E6;&#x1F1EE;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'navy',
                // Hexadecimal color code
                'hex' => '#00247D',
                // RGB color values
                'rgb' => '0,36,125',
                // CMYK color values
                'cmyk' => '100,71,0,51',
                // HSL color values
                'hsl' => '219,100%,24%',
                // HSV color values
                'hsv' => '219,100%,49%',
                // Pantone color code
                'pantone' => 'Pantone 280 C',
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
                'hsl' => '350,82%,45%',
                // HSV color values
                'hsv' => '350,90%,81%',
                // Pantone color code
                'pantone' => 'Pantone 186 C',
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
                'name' => 'Light Blue',
                // Web color name
                'web_name' => 'lightblue',
                // Hexadecimal color code
                'hex' => '#66CCFF',
                // RGB color values
                'rgb' => '102,204,255',
                // CMYK color values
                'cmyk' => '60,20,0,0',
                // HSL color values
                'hsl' => '195,100%,70%',
                // HSV color values
                'hsv' => '195,60%,100%',
                // Pantone color code
                'pantone' => 'Pantone 298 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
            [
                // Color name
                'name' => 'Orange',
                // Web color name
                'web_name' => 'orange',
                // Hexadecimal color code
                'hex' => '#FF7F32',
                // RGB color values
                'rgb' => '255,127,50',
                // CMYK color values
                'cmyk' => '0,50,80,0',
                // HSL color values
                'hsl' => '20,100%,60%',
                // HSV color values
                'hsv' => '20,80%,100%',
                // Pantone color code
                'pantone' => 'Pantone 151 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '18.2206',
            // Longitude in decimal degrees
            'longitude' => '-63.0686',
            // Degrees with decimal
            'dd' => '18.2206° N, 63.0686° W',
            // Degrees, minutes, seconds
            'dms' => '18°13\'14.16" N, 63°04\'07.00" W',
            // Degrees and decimal minutes
            'dm' => '18°13.236\' N, 63°04.116\' W',
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
      "properties": { "cca2": "ai" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-63.167778, 18.164444],
            [-63.158615, 18.175831],
            [-63.155281, 18.179443],
            [-63.141396, 18.194164],
            [-63.057503, 18.256386],
            [-63.053337, 18.259163],
            [-63.048615, 18.261387],
            [-63.022507, 18.268887],
            [-62.978889, 18.276665],
            [-62.972504, 18.276665],
            [-62.970001, 18.272221],
            [-62.969452, 18.266388],
            [-62.986671, 18.235554],
            [-62.993057, 18.227219],
            [-63.021118, 18.214443],
            [-63.030838, 18.210278],
            [-63.074173, 18.192776],
            [-63.140007, 18.168331],
            [-63.150841, 18.165554],
            [-63.15667, 18.164997],
            [-63.167778, 18.164444]
          ]
        ]
      }
    }
  ]
}
';
    }
}
