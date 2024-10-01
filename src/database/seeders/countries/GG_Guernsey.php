<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class GG_Guernsey extends CountrySeeder
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
        $this->name = 'Guernsey';

        // Set the country's official name
        $this->official_name = 'Bailiwick of Guernsey';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'GG';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'GGY';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '831';

        // Set the international dialing code
        $this->international_phone = '44-1481';

        // Define the languages spoken in the country
        $this->languages = ['en', 'fr']; // English is the official language, with French also recognized

        // Define the top-level domain(s)
        $this->tld = ['.gg'];

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
        $this->internet_penetration = '95%'; // High internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'None'; // No dedicated cybersecurity agency

        // List popular web technologies in Guernsey
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'GU';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3042362';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Guernsey pound',
            // Currency code
            'code' => 'GGP',
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
            'coins_sub' => ['1p', '2p', '5p', '10p', '20p', '50p'],
        ];

        // Set the population
        $this->population = 63026; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 78; // km²

        // Set the capital city
        $this->capital = 'St. Peter Port';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Europe/Guernsey',
                // Standard time offset
                'standard_time' => 'UTC+0', // Greenwich Mean Time (GMT)
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC+1', // British Summer Time (BST)
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Guernsey is a Crown dependency

        // List international organizations the country is part of
        $this->international_organizations = [
            'British–Irish Council',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 3.2; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Anglicanism, Methodism, Roman Catholicism)',
        ];

        // Describe the form of government
        $this->government = 'Parliamentary democracy under constitutional monarchy';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is popular in Guernsey

        // Define bordering countries
        $this->borders = []; // Guernsey is an island and has no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇬🇬',
            // Unicode code points
            'uCode' => 'U+1F1EC U+1F1EC',
            // HTML entities
            'html' => '&#x1F1EC;&#x1F1EC;',
            // CSS entities
            'css' => '\\1F1EC\\1F1EC',
            // Decimal Unicode entities
            'decimal' => '&#127468;&#127468;',
            // Direct UTF-8 string
            'utf8' => '🇬🇬',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDEC\uD83C\uDDEC',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-gg:',
            // Hexadecimal entity
            'hex' => '&#x1F1EC;&#x1F1EC;',
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
                'name' => 'Gold',
                // Web color name
                'web_name' => 'yellow',
                // Hexadecimal color code
                'hex' => '#FEE715',
                // RGB color values
                'rgb' => '254,231,21',
                // CMYK color values
                'cmyk' => '0,9,92,0',
                // HSL color values
                'hsl' => '52,99%,54%',
                // HSV color values
                'hsv' => '52,92%,100%',
                // Pantone color code
                'pantone' => '116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '49.4657',
            // Longitude in decimal degrees
            'longitude' => '-2.5853',
            // Degrees with decimal
            'dd' => '49.4657° N, 2.5853° W',
            // Degrees, minutes, seconds
            'dms' => '49°27\'56.52" N, 2°35\'7.08" W',
            // Degrees and decimal minutes
            'dm' => '49°27.942\' N, 2°35.118\' W',
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
      "properties": { "cca2": "gg" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-2.59083, 49.422493],
            [-2.59722, 49.422493],
            [-2.654445, 49.425827],
            [-2.66583, 49.428055],
            [-2.66917, 49.43055],
            [-2.670278, 49.434166],
            [-2.66917, 49.438332],
            [-2.656111, 49.456665],
            [-2.65222, 49.458885],
            [-2.57917, 49.490829],
            [-2.539167, 49.5075],
            [-2.53389, 49.508888],
            [-2.501667, 49.507774],
            [-2.50028, 49.5],
            [-2.52667, 49.427498],
            [-2.53028, 49.425278],
            [-2.55556, 49.423332],
            [-2.59083, 49.422493]
          ]
        ]
      }
    }
  ]
}
';
    }
}
