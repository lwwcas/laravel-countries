<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class BB_Barbados extends CountrySeeder
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
        $this->name = 'Barbados';

        // Set the country's official name
        $this->official_name = 'Barbados';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'BB';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'BRB';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '052';

        // Set the international dialing code
        $this->international_phone = '1-246';

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.bb'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '70 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '35 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '82%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Data Protection Department of Barbados';

        // List popular web technologies in Barbados
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress']; // Popular web technologies

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'BD';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3374084';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Barbadian dollar',
            // Currency code
            'code' => 'BBD',
            // Currency symbol
            'symbol' => '$',
            // Main unit
            'main_unit' => 'dollar',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['2', '5', '10', '20', '50', '100'],
            // Main coins
            'coins_main' => ['1'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '25'],
        ];

        // Set the population
        $this->population = 287025; // As of recent estimates

        // Set the area in square kilometers
        $this->area = 430; // km²

        // Set the capital city
        $this->capital = 'Bridgetown';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Time zone identifier
            'timezone_id' => 'America/Barbados',
            // Standard time offset
            'standard_time' => 'UTC−4', // Atlantic Standard Time
        ];

        // Set the independence day
        $this->independence_day = '1966-11-30'; // Date of independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = ['United Nations', 'CARICOM', 'Commonwealth of Nations', 'OAS'];

        // Set the GDP in billions of USD
        $this->gdp = 5.3; // GDP in billions of USD

        // List the predominant religions
        $this->religions = ['Christianity'];

        // Describe the form of government
        $this->government = 'Unitary parliamentary constitutional monarchy';

        // Set the national sport
        $this->national_sport = 'Cricket';

        // Define bordering countries
        $this->borders = []; // Island nation with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇧🇧',
            // Unicode code points
            'uCode' => 'U+1F1E7 U+1F1E7',
            // HTML entities
            'html' => '&#x1F1E7;&#x1F1E7;',
            // CSS entities
            'css' => '\\1F1E7\\1F1E7',
            // Decimal Unicode entities
            'decimal' => '&#127463;&#127463;',
            // Direct UTF-8 string
            'utf8' => '🇧🇧',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE7\uD83C\uDDE7',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-bb:',
            // Hexadecimal entity
            'hex' => '&#x1F1E7;&#x1F1E7;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'ultramarine blue',
                // Hexadecimal color code
                'hex' => '#00267F',
                // RGB color values
                'rgb' => '0,38,127',
                // CMYK color values
                'cmyk' => '100,70,0,50',
                // HSL color values
                'hsl' => '221,100%,25%',
                // HSV color values
                'hsv' => '221,100%,50%',
                // Pantone color code
                'pantone' => 'Pantone 280 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Gold',
                // Web color name
                'web_name' => 'gold',
                // Hexadecimal color code
                'hex' => '#FFC726',
                // RGB color values
                'rgb' => '255,199,38',
                // CMYK color values
                'cmyk' => '0,22,85,0',
                // HSL color values
                'hsl' => '42,100%,57%',
                // HSV color values
                'hsv' => '42,85%,100%',
                // Pantone color code
                'pantone' => 'Pantone 1235 C',
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
            'latitude' => '13.1939',
            // Longitude in decimal degrees
            'longitude' => '-59.5432',
            // Degrees with decimal
            'dd' => '13.1939° N, 59.5432° W',
            // Degrees, minutes, seconds
            'dms' => '13°11\'38.04" N, 59°32\'35.52" W',
            // Degrees and decimal minutes
            'dm' => '13°11.634\' N, 59°32.592\' W',
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
      "properties": { "cca2": "bb" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-59.533058, 13.050554],
            [-59.543335, 13.067499],
            [-59.547501, 13.070555],
            [-59.571114, 13.075832],
            [-59.60334, 13.08],
            [-59.60778, 13.082499],
            [-59.611389, 13.085833],
            [-59.625557, 13.099722],
            [-59.628616, 13.103333],
            [-59.642227, 13.14361],
            [-59.643333, 13.149166],
            [-59.659447, 13.287777],
            [-59.65834, 13.299166],
            [-59.653061, 13.315554],
            [-59.650841, 13.320276],
            [-59.64473, 13.328054],
            [-59.641113, 13.331388],
            [-59.631111, 13.334999],
            [-59.619728, 13.337221],
            [-59.612503, 13.336943],
            [-59.59584, 13.331944],
            [-59.591118, 13.329721],
            [-59.573616, 13.299166],
            [-59.56945, 13.290277],
            [-59.566116, 13.279722],
            [-59.565285, 13.274166],
            [-59.559448, 13.259443],
            [-59.554451, 13.25111],
            [-59.551674, 13.246944],
            [-59.545006, 13.239721],
            [-59.521118, 13.214443],
            [-59.513062, 13.208611],
            [-59.479446, 13.185833],
            [-59.470001, 13.18111],
            [-59.463615, 13.180277],
            [-59.442223, 13.173054],
            [-59.4375, 13.170832],
            [-59.429169, 13.164999],
            [-59.426949, 13.153889],
            [-59.427223, 13.146944],
            [-59.430283, 13.135277],
            [-59.439445, 13.116665],
            [-59.444725, 13.108055],
            [-59.450279, 13.099443],
            [-59.456673, 13.092222],
            [-59.464447, 13.085554],
            [-59.5, 13.059444],
            [-59.510284, 13.054998],
            [-59.533058, 13.050554]
          ]
        ]
      }
    }
  ]
}
';
    }
}
