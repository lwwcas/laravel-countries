<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class GI_Gibraltar extends CountrySeeder
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
        $this->name = 'Gibraltar';

        // Set the country's official name
        $this->official_name = 'Gibraltar';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'GI';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'GIB';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '292';

        // Set the international dialing code
        $this->international_phone = '350';

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.gi'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '70 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '30 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '95%'; // High internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'None'; // No dedicated cybersecurity agency

        // List popular web technologies in Gibraltar
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'GI';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '2411586';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Gibraltar pound',
            // Currency code
            'code' => 'GIP',
            // Currency symbol
            'symbol' => '£',
            // Main unit
            'main_unit' => 'pound',
            // Subunit
            'sub_unit' => 'penny',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['5', '10', '20', '50', '100'],
            // Main coins
            'coins_main' => ['1', '2'],
            // Subunit coins
            'coins_sub' => ['1p', '2p', '5p', '10p', '20p', '50p'],
        ];

        // Set the population
        $this->population = 33718; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 6.7; // km²

        // Set the capital city
        $this->capital = 'Gibraltar';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Europe/Gibraltar',
                // Standard time offset
                'standard_time' => 'UTC+1', // Central European Time (CET)
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC+2', // Central European Summer Time (CEST)
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Gibraltar is a British Overseas Territory

        // List international organizations the country is part of
        $this->international_organizations = [
            'Commonwealth of Nations',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 2.0; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism, Anglicanism)',
            'Islam',
            'Judaism',
            'Hinduism',
        ];

        // Describe the form of government
        $this->government = 'Self-governing British Overseas Territory';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is popular in Gibraltar

        // Define bordering countries
        $this->borders = [
            ['name' => 'Spain', 'iso_alpha_2' => 'ES'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇬🇮',
            // Unicode code points
            'uCode' => 'U+1F1EC U+1F1EE',
            // HTML entities
            'html' => '&#x1F1EC;&#x1F1EE;',
            // CSS entities
            'css' => '\\1F1EC\\1F1EE',
            // Decimal Unicode entities
            'decimal' => '&#127468;&#127470;',
            // Direct UTF-8 string
            'utf8' => '🇬🇮',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDEC\uD83C\uDDEE',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-gi:',
            // Hexadecimal entity
            'hex' => '&#x1F1EC;&#x1F1EE;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#C8102E',
                // RGB color values
                'rgb' => '200,16,46',
                // CMYK color values
                'cmyk' => '0,92,77,22',
                // HSL color values
                'hsl' => '348,85%,42%',
                // HSV color values
                'hsv' => '348,92%,78%',
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
                'name' => 'Gold',
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
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '36.1408',
            // Longitude in decimal degrees
            'longitude' => '-5.3536',
            // Degrees with decimal
            'dd' => '36.1408° N, 5.3536° W',
            // Degrees, minutes, seconds
            'dms' => '36°8\'26.88" N, 5°21\'12.96" W',
            // Degrees and decimal minutes
            'dm' => '36°8.448\' N, 5°21.216\' W',
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
      "properties": { "cca2": "gi" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-5.334508, 36.16256],
            [-5.33755, 36.149441],
            [-5.335851, 36.138794],
            [-5.33823, 36.112175],
            [-5.345253, 36.11274],
            [-5.35624, 36.126785],
            [-5.354994, 36.145363],
            [-5.344573, 36.150234],
            [-5.355799, 36.163307],
            [-5.334508, 36.16256]
          ]
        ]
      }
    }
  ]
}
';
    }
}
