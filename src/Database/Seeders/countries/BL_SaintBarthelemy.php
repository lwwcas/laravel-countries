<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class BL_SaintBarthelemy extends CountrySeeder
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
        $this->name = 'Saint Barthélemy';

        // Set the country's official name
        $this->official_name = 'Collectivity of Saint Barthélemy';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'BL';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'BLM';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '652';

        // Set the international dialing code
        $this->international_phone = '590'; // Shared with Guadeloupe and Saint Martin

        // Define the languages spoken in the country
        $this->languages = ['fr']; // French is the official language

        // Define the top-level domain(s)
        $this->tld = ['.bl']; // Note: As of now, .bl is assigned but not in active use

        // Define alternative top-level domains
        $this->alternative_tlds = ['.gp', '.fr']; // .gp (Guadeloupe), .fr (France) are commonly used

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '20 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '15 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '80%'; // Estimated percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Agence nationale de la sécurité des systèmes d\'information (ANSSI)'; // Under French administration

        // List popular web technologies in Saint Barthélemy
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = ''; // No specific WMO code; operates under France's code

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3578476';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Euro',
            // Currency code
            'code' => 'EUR',
            // Currency symbol
            'symbol' => '€',
            // Main unit
            'main_unit' => 'euro',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['5', '10', '20', '50', '100', '200', '500'],
            // Main coins
            'coins_main' => ['1', '2'],
            // Subunit coins
            'coins_sub' => ['1', '2', '5', '10', '20', '50'],
        ];

        // Set the population
        $this->population = 9793; // As per 2017 estimates

        // Set the area in square kilometers
        $this->area = 25; // km²

        // Set the capital city
        $this->capital = 'Gustavia';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Time zone identifier
            'timezone_id' => 'America/St_Barthelemy',
            // Standard time offset
            'standard_time' => 'UTC−4', // Atlantic Standard Time
        ];

        // Set the independence day
        $this->independence_day = null; // Saint Barthélemy is an overseas collectivity of France

        // List international organizations the country is part of
        $this->international_organizations = []; // Represented by France in international organizations

        // Set the GDP in millions of USD
        $this->gdp = null; // Specific GDP data may not be available; economy is tourism-based

        // List the predominant religions
        $this->religions = ['Christianity (Roman Catholicism)'];

        // Describe the form of government
        $this->government = 'Overseas collectivity of France';

        // Set the national sport
        $this->national_sport = 'Sailing and water sports'; // Popular activities

        // Define bordering countries
        $this->borders = []; // Island territory with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇧🇱',
            // Unicode code points
            'uCode' => 'U+1F1E7 U+1F1F1',
            // HTML entities
            'html' => '&#x1F1E7;&#x1F1F1;',
            // CSS entities
            'css' => '\\1F1E7\\1F1F1',
            // Decimal Unicode entities
            'decimal' => '&#127463;&#127473;',
            // Direct UTF-8 string
            'utf8' => '🇧🇱',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE7\uD83C\uDDF1',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-bl:',
            // Hexadecimal entity
            'hex' => '&#x1F1E7;&#x1F1F1;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            // Saint Barthélemy uses the French flag
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#002395',
                // RGB color values
                'rgb' => '0,35,149',
                // CMYK color values
                'cmyk' => '100,76,0,42',
                // HSL color values
                'hsl' => '226,100%,29%',
                // HSV color values
                'hsv' => '226,100%,58%',
                // Pantone color code
                'pantone' => 'Reflex Blue C',
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
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#ED2939',
                // RGB color values
                'rgb' => '237,41,57',
                // CMYK color values
                'cmyk' => '0,83,76,7',
                // HSL color values
                'hsl' => '355,83%,55%',
                // HSV color values
                'hsv' => '355,83%,93%',
                // Pantone color code
                'pantone' => 'Red 032 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '17.9000',
            // Longitude in decimal degrees
            'longitude' => '-62.8333',
            // Degrees with decimal
            'dd' => '17.9000° N, 62.8333° W',
            // Degrees, minutes, seconds
            'dms' => '17°54\'00.00" N, 62°49\'59.88" W',
            // Degrees and decimal minutes
            'dm' => '17°54.000\' N, 62°49.998\' W',
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
      "properties": { "cca2": "bl" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-63.02834, 18.01555],
            [-63.03334, 18.01555],
            [-63.072784, 18.024998],
            [-63.07917, 18.02666],
            [-63.11611, 18.042774],
            [-63.139839, 18.058601],
            [-63.109867, 18.066116],
            [-63.030273, 18.07037],
            [-63.01146, 18.06728],
            [-63.010284, 18.047775],
            [-63.01222, 18.035553],
            [-63.01667, 18.024998],
            [-63.019447, 18.020554],
            [-63.02834, 18.01555]
          ]
        ]
      }
    }
  ]
}
';
    }
}
