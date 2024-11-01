<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class JE_Jersey extends CountrySeeder
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
    public ?string $region = 'europe';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Jersey';

        // Set the country's official name
        $this->official_name = 'Bailiwick of Jersey';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'JE';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'JEY';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '832';

        // Set the international dialing code
        $this->international_phone = '44-1534';

        // Define the languages spoken in the country
        $this->languages = ['en', 'fr', 'nrf']; // English, French, Jèrriais

        // Define the top-level domain(s)
        $this->tld = ['.je'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '100 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '50 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '90%'; // As per recent estimates

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Jersey Cyber Security Centre';

        // List popular web technologies in Jersey
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'JE';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3042142';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Jersey pound',
            // Currency code
            'code' => 'JEP',
            // Currency symbol
            'symbol' => '£',
            // Main unit
            'main_unit' => 'pound',
            // Subunit
            'sub_unit' => 'penny',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['1', '5', '10', '20', '50'],
            // Main coins
            'coins_main' => ['1', '2'],
            // Subunit coins
            'coins_sub' => ['1', '2', '5', '10', '20', '50'],
        ];

        // Set the population
        $this->population = 100800; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 118.2; // km²

        // Set the capital city
        $this->capital = 'Saint Helier';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Europe/Jersey',
                // Standard time offset
                'standard_time' => 'UTC+0', // Greenwich Mean Time (GMT)
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC+1', // British Summer Time (BST)
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Jersey is a Crown Dependency

        // List international organizations the country is part of
        $this->international_organizations = [
            // As a Crown Dependency, Jersey is not a member of international organizations independently
        ];

        // Set the GDP in billions of USD
        $this->gdp = 5.1; // Estimated GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Anglican, Methodist, Catholic)',
        ];

        // Describe the form of government
        $this->government = 'Self-governing British Crown Dependency';

        // Set the national sport
        $this->national_sport = 'Rugby Union'; // Rugby is popular in Jersey

        // Define bordering countries
        $this->borders = []; // It is an island with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇯🇪',
            // Unicode code points
            'uCode' => 'U+1F1EF U+1F1EA',
            // HTML entities
            'html' => '&#x1F1EF;&#x1F1EA;',
            // CSS entities
            'css' => '\\1F1EF\\1F1EA',
            // Decimal Unicode entities
            'decimal' => '&#127471;&#127466;',
            // Direct UTF-8 string
            'utf8' => '🇯🇪',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDEF\uD83C\uDDEA',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-je:',
            // Hexadecimal entity
            'hex' => '&#x1F1EF;&#x1F1EA;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
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
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#BF0A30',
                // RGB color values
                'rgb' => '191,10,48',
                // CMYK color values
                'cmyk' => '0,95,75,25',
                // HSL color values
                'hsl' => '347,90%,39%',
                // HSV color values
                'hsv' => '347,95%,75%',
                // Pantone color code
                'pantone' => '186 C',
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
                'hsl' => '47,98%,54%',
                // HSV color values
                'hsv' => '47,91%,99%',
                // Pantone color code
                'pantone' => '116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '49.2144',
            // Longitude in decimal degrees
            'longitude' => '-2.1313',
            // Degrees with decimal
            'dd' => '49.2144° N, 2.1313° W',
            // Degrees, minutes, seconds
            'dms' => '49°12\'51.84" N, 2°7\'52.68" W',
            // Degrees and decimal minutes
            'dm' => '49°12.864\' N, 2°7.878\' W',
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
      "properties": { "cca2": "je" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-2.015, 49.214165],
            [-2.02111, 49.177216],
            [-2.04139, 49.172493],
            [-2.06694, 49.16777],
            [-2.08917, 49.181107],
            [-2.12278, 49.195831],
            [-2.133056, 49.19861],
            [-2.14611, 49.19944],
            [-2.15222, 49.19861],
            [-2.16, 49.19444],
            [-2.16222, 49.191383],
            [-2.18194, 49.18417],
            [-2.205278, 49.18083],
            [-2.22639, 49.18972],
            [-2.2475, 49.24944],
            [-2.24722, 49.253052],
            [-2.240556, 49.258049],
            [-2.23556, 49.259163],
            [-2.229167, 49.259438],
            [-2.15417, 49.261108],
            [-2.04139, 49.243889],
            [-2.03556, 49.242775],
            [-2.01944, 49.234993],
            [-2.01611, 49.232498],
            [-2.01583, 49.228333],
            [-2.015, 49.214165]
          ]
        ]
      }
    }
  ]
}
';
    }
}
