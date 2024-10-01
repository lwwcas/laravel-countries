<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class LC_SaintLucia extends CountrySeeder
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
        $this->name = 'Saint Lucia';

        // Set the country's official name
        $this->official_name = 'Saint Lucia';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'LC';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'LCA';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '662';

        // Set the international dialing code
        $this->international_phone = '1-758';

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.lc'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '30 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '20 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '65%'; // As per recent estimates

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'None'; // No dedicated cybersecurity agency

        // List popular web technologies in Saint Lucia
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'ST';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3576468';

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
            // Subunit coins (only numbers)
            'coins_sub' => ['1', '2', '5', '10', '25'],
        ];

        // Set the population
        $this->population = 183627; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 617; // km²

        // Set the capital city
        $this->capital = 'Castries';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/St_Lucia',
                // Standard time offset
                'standard_time' => 'UTC-4',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1979-02-22'; // Independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Commonwealth of Nations',
            'Organization of American States (OAS)',
            'Caribbean Community (CARICOM)',
            'Association of Caribbean States (ACS)',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'Non-Aligned Movement',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 1.92; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism, Protestantism)',
        ];

        // Describe the form of government
        $this->government = 'Unitary parliamentary constitutional monarchy';

        // Set the national sport
        $this->national_sport = 'Cricket'; // Cricket is popular in Saint Lucia

        // Define bordering countries
        $this->borders = []; // It is an island nation with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇱🇨',
            // Unicode code points
            'uCode' => 'U+1F1F1 U+1F1E8',
            // HTML entities
            'html' => '&#x1F1F1;&#x1F1E8;',
            // CSS entities
            'css' => '\\1F1F1\\1F1E8',
            // Decimal Unicode entities
            'decimal' => '&#127473;&#127464;',
            // Direct UTF-8 string
            'utf8' => '🇱🇨',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF1\uD83C\uDDE8',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-lc:',
            // Hexadecimal entity
            'hex' => '&#x1F1F1;&#x1F1E8;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#6CCFF6',
                // RGB color values
                'rgb' => '108,207,246',
                // CMYK color values
                'cmyk' => '56,16,0,4',
                // HSL color values
                'hsl' => '196°,89%,69%',
                // HSV color values
                'hsv' => '196°,56%,96%',
                // Pantone color code
                'pantone' => 'Process Cyan',
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
                'hsl' => '0°,0%,0%',
                // HSV color values
                'hsv' => '0°,0%,0%',
                // Pantone color code
                'pantone' => 'Black C',
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
                'hsl' => '0°,0%,100%',
                // HSV color values
                'hsv' => '0°,0%,100%',
                // Pantone color code
                'pantone' => 'White',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
            [
                // Color name
                'name' => 'Gold',
                // Web color name
                'web_name' => 'gold',
                // Hexadecimal color code
                'hex' => '#FCD116',
                // RGB color values
                'rgb' => '252,209,22',
                // CMYK color values
                'cmyk' => '0,17,91,1',
                // HSL color values
                'hsl' => '47°,98%,54%',
                // HSV color values
                'hsv' => '47°,91%,99%',
                // Pantone color code
                'pantone' => '116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '13.9094',
            // Longitude in decimal degrees
            'longitude' => '-60.9789',
            // Degrees with decimal
            'dd' => '13.9094° N, 60.9789° W',
            // Degrees, minutes, seconds
            'dms' => '13°54\'33.84" N, 60°58\'44.04" W',
            // Degrees and decimal minutes
            'dm' => '13°54.564\' N, 60°58.734\' W',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"lc"},"geometry":{"type":"Polygon","coordinates":[[[-60.954727,13.709444],[-60.956116,13.714998],[-60.968056,13.728054],[-60.986389,13.744444],[-60.995003,13.749722],[-61.001396,13.750832],[-61.01445,13.75],[-61.026115,13.752499],[-61.039169,13.761389],[-61.05056,13.770555],[-61.067505,13.78861],[-61.072784,13.796944],[-61.074448,13.801943],[-61.075005,13.808054],[-61.079727,13.873333],[-61.079445,13.879999],[-61.075005,13.896944],[-61.035004,13.969721],[-61.011673,14.009722],[-60.945839,14.104721],[-60.936394,14.109165],[-60.930283,14.109444],[-60.919724,14.105555],[-60.91584,14.102499],[-60.914452,14.099722],[-60.888062,14.013054],[-60.878616,13.975832],[-60.878059,13.956665],[-60.885284,13.854166],[-60.886116,13.848055],[-60.890007,13.82361],[-60.900284,13.778332],[-60.938339,13.717777],[-60.951393,13.709999],[-60.954727,13.709444]]]}}]}';
    }
}
