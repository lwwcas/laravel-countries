<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class BV_BouvetIsland extends CountrySeeder
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
        $this->name = 'Bouvet Island';

        // Set the country's official name
        $this->official_name = 'Bouvet Island';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'BV';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'BVT';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '074';

        // Set the international dialing code
        $this->international_phone = null; // Uninhabited, no dialing code

        // Define the languages spoken in the country
        $this->languages = []; // Uninhabited, no official languages

        // Define the top-level domain(s)
        $this->tld = ['.bv']; // Assigned but not in active use

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => null, // Uninhabited, no internet infrastructure
            // Average mobile connection speed
            'average_speed_mobile' => null,
        ];

        // Define internet penetration rate
        $this->internet_penetration = null; // Uninhabited

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = null; // Not applicable

        // List popular web technologies in Bouvet Island
        $this->popular_technologies = []; // Not applicable

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = null; // No specific WMO code

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3371123';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Norwegian krone',
            // Currency code
            'code' => 'NOK',
            // Currency symbol
            'symbol' => 'kr',
            // Main unit
            'main_unit' => 'krone',
            // Subunit
            'sub_unit' => 'øre',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['50', '100', '200', '500', '1,000'],
            // Main coins
            'coins_main' => ['1', '5', '10', '20'],
            // Subunit coins
            'coins_sub' => [], // 50 øre coin was withdrawn
        ];

        // Set the population
        $this->population = 0; // Uninhabited

        // Set the area in square kilometers
        $this->area = 49; // km²

        // Set the capital city
        $this->capital = null; // Uninhabited, no capital

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Time zone identifier
            'timezone_id' => 'UTC',
            // Standard time offset
            'standard_time' => 'UTC+0',
        ];

        // Set the independence day
        $this->independence_day = null; // Dependency of Norway

        // List international organizations the country is part of
        $this->international_organizations = []; // Represented by Norway

        // Set the GDP in billions of USD
        $this->gdp = null; // Not applicable

        // List the predominant religions
        $this->religions = []; // Uninhabited

        // Describe the form of government
        $this->government = 'Uninhabited dependency of Norway';

        // Set the national sport
        $this->national_sport = null; // Not applicable

        // Define bordering countries
        $this->borders = []; // Island with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇧🇻',
            // Unicode code points
            'uCode' => 'U+1F1E7 U+1F1FB',
            // HTML entities
            'html' => '&#x1F1E7;&#x1F1FB;',
            // CSS entities
            'css' => '\\1F1E7\\1F1FB',
            // Decimal Unicode entities
            'decimal' => '&#127463;&#127483;',
            // Direct UTF-8 string
            'utf8' => '🇧🇻',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE7\uD83C\uDDFB',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-bv:',
            // Hexadecimal entity
            'hex' => '&#x1F1E7;&#x1F1FB;',
        ];

        // Define the colors of the country's flag with accurate color values
        // Bouvet Island uses the flag of Norway
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#BA0C2F',
                // RGB color values
                'rgb' => '186,12,47',
                // CMYK color values
                'cmyk' => '0,94,75,27',
                // HSL color values
                'hsl' => '348,89%,39%',
                // HSV color values
                'hsv' => '348,94%,73%',
                // Pantone color code
                'pantone' => '200 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'navy blue',
                // Hexadecimal color code
                'hex' => '#00205B',
                // RGB color values
                'rgb' => '0,32,91',
                // CMYK color values
                'cmyk' => '100,65,0,64',
                // HSL color values
                'hsl' => '220,100%,18%',
                // HSV color values
                'hsv' => '220,100%,36%',
                // Pantone color code
                'pantone' => '281 C',
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
            'latitude' => '-54.4208',
            // Longitude in decimal degrees
            'longitude' => '3.3464',
            // Degrees with decimal
            'dd' => '54.4208° S, 3.3464° E',
            // Degrees, minutes, seconds
            'dms' => '54°25\'14.88" S, 3°20\'47.04" E',
            // Degrees and decimal minutes
            'dm' => '54°25.248\' S, 3°20.784\' E',
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
      "properties": { "cca2": "bv" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [3.361389, -54.462784],
            [3.354167, -54.458618],
            [3.346111, -54.451118],
            [3.341666, -54.440002],
            [3.341666, -54.43306],
            [3.343055, -54.426949],
            [3.347777, -54.416115],
            [3.351388, -54.411118],
            [3.355, -54.406395],
            [3.366944, -54.399727],
            [3.388333, -54.39167],
            [3.396667, -54.38945],
            [3.413333, -54.385559],
            [3.433333, -54.383614],
            [3.443889, -54.384171],
            [3.478889, -54.398056],
            [3.483611, -54.402229],
            [3.484722, -54.40834],
            [3.483611, -54.414726],
            [3.478611, -54.42556],
            [3.4725, -54.435837],
            [3.465555, -54.445557],
            [3.459444, -54.448891],
            [3.444167, -54.452225],
            [3.399167, -54.45195],
            [3.388611, -54.452507],
            [3.379167, -54.453896],
            [3.361389, -54.462784]
          ]
        ]
      }
    }
  ]
}
';
    }
}
