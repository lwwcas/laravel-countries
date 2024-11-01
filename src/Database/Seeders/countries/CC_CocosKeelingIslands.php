<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class CC_CocosKeelingIslands extends CountrySeeder
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
    public ?string $region = 'oceania';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Cocos (Keeling) Islands';

        // Set the country's official name
        $this->official_name = 'Territory of the Cocos (Keeling) Islands';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'CC';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'CCK';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '166';

        // Set the international dialing code
        $this->international_phone = '+61'; // Uses Australia's country code

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.cc'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => null, // Data not readily available
            // Average mobile connection speed
            'average_speed_mobile' => null,
        ];

        // Define internet penetration rate
        $this->internet_penetration = null; // Data not readily available

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = null; // Covered under Australian agencies

        // List popular web technologies in Cocos (Keeling) Islands
        $this->popular_technologies = []; // Not applicable

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = null; // No specific WMO code

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '1547376';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Australian dollar',
            // Currency code
            'code' => 'AUD',
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
            'coins_sub' => ['0.05', '0.10', '0.20', '0.50'],
        ];

        // Set the population
        $this->population = 544; // As per 2016 census

        // Set the area in square kilometers
        $this->area = 14; // km²

        // Set the capital city
        $this->capital = 'West Island';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Time zone identifier
            'timezone_id' => 'Indian/Cocos',
            // Standard time offset
            'standard_time' => 'UTC+6:30', // Cocos Islands Time
        ];

        // Set the independence day
        $this->independence_day = null; // Territory of Australia

        // List international organizations the country is part of
        $this->international_organizations = []; // Represented by Australia

        // Set the GDP in billions of USD
        $this->gdp = null; // Data not readily available

        // List the predominant religions
        $this->religions = ['Islam']; // Predominantly Muslim population

        // Describe the form of government
        $this->government = 'External territory of Australia';

        // Set the national sport
        $this->national_sport = null; // Not officially declared

        // Define bordering countries
        $this->borders = []; // Island territory with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇨🇨',
            // Unicode code points
            'uCode' => 'U+1F1E8 U+1F1E8',
            // HTML entities
            'html' => '&#x1F1E8;&#x1F1E8;',
            // CSS entities
            'css' => '\\1F1E8\\1F1E8',
            // Decimal Unicode entities
            'decimal' => '&#127464;&#127464;',
            // Direct UTF-8 string
            'utf8' => '🇨🇨',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE8\uD83C\uDDE8',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-cc:',
            // Hexadecimal entity
            'hex' => '&#x1F1E8;&#x1F1E8;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#006847',
                // RGB color values
                'rgb' => '0,104,71',
                // CMYK color values
                'cmyk' => '100,0,32,59',
                // HSL color values
                'hsl' => '160,100%,20%',
                // HSV color values
                'hsv' => '160,100%,41%',
                // Pantone color code
                'pantone' => '348 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Yellow',
                // Web color name
                'web_name' => 'yellow',
                // Hexadecimal color code
                'hex' => '#FFCC00',
                // RGB color values
                'rgb' => '255,204,0',
                // CMYK color values
                'cmyk' => '0,20,100,0',
                // HSL color values
                'hsl' => '48,100%,50%',
                // HSV color values
                'hsv' => '48,100%,100%',
                // Pantone color code
                'pantone' => '116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '-12.1889',
            // Longitude in decimal degrees
            'longitude' => '96.8333',
            // Degrees with decimal
            'dd' => '12.1889° S, 96.8333° E',
            // Degrees, minutes, seconds
            'dms' => '12°11\'20.04" S, 96°49\'59.88" E',
            // Degrees and decimal minutes
            'dm' => '12°11.334\' S, 96°49.998\' E',
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
      "properties": { "cca2": "cc" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [96.914154, -12.19805],
              [96.90248, -12.199999],
              [96.914703, -12.151945],
              [96.921646, -12.16806],
              [96.924423, -12.182777],
              [96.9211, -12.191389],
              [96.914154, -12.19805]
            ]
          ],
          [
            [
              [96.862762, -12.19611],
              [96.852478, -12.19944],
              [96.84221, -12.19611],
              [96.833878, -12.190834],
              [96.81944, -12.178057],
              [96.81749, -12.16667],
              [96.820831, -12.1325],
              [96.826385, -12.12833],
              [96.866928, -12.188055],
              [96.862762, -12.19611]
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
