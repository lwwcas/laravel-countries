<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class VC_SaintVincentandGrenadines extends CountrySeeder
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
        $this->name = 'Saint Vincent and the Grenadines';

        // Set the country's official name
        $this->official_name = 'Saint Vincent and the Grenadines';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'VC';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'VCT';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '670';

        // Set the international dialing code
        $this->international_phone = '1-784';

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.vc'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '20 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '10 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '45%'; // Moderate internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Cybercrime Unit of Saint Vincent and the Grenadines Police Force';

        // List popular web technologies in Saint Vincent and the Grenadines
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'VC';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3577815';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Eastern Caribbean dollar',
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
            // Subunit coins (only numbers as per your instruction)
            'coins_sub' => ['5', '10', '25'],
        ];

        // Set the population
        $this->population = 110947; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 389; // km²

        // Set the capital city
        $this->capital = 'Kingstown';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/St_Vincent',
                // Standard time offset
                'standard_time' => 'UTC-4',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1979-10-27'; // Independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Caribbean Community (CARICOM)',
            'Organization of Eastern Caribbean States (OECS)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.79; // GDP in billions of USD (2023 estimates)

        // List the predominant religions
        $this->religions = [
            'Christianity (Anglican, Methodist, Roman Catholic)',
        ];

        // Describe the form of government
        $this->government = 'Parliamentary democracy and constitutional monarchy';

        // Set the national sport
        $this->national_sport = 'Cricket'; // Cricket is the most popular sport in Saint Vincent and the Grenadines

        // Define bordering countries (Saint Vincent and the Grenadines is an island nation, no land borders)
        $this->borders = [];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇻🇨',
            // Unicode code points
            'uCode' => 'U+1F1FB U+1F1E8',
            // HTML entities
            'html' => '&#x1F1FB;&#x1F1E8;',
            // CSS entities
            'css' => '\\1F1FB\\1F1E8',
            // Decimal Unicode entities
            'decimal' => '&#127483;&#127464;',
            // Direct UTF-8 string
            'utf8' => '🇻🇨',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDFB\uD83C\uDDE8',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-vc:',
            // Hexadecimal entity
            'hex' => '&#x1F1FB;&#x1F1E8;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
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
                'hsl' => '210°,100%,39%',
                // HSV color values
                'hsv' => '210°,100%,78%',
                // Pantone color code
                'pantone' => '293 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Gold',
                // Web color name
                'web_name' => 'yellow',
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
                'pantone' => '109 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
            [
                // Color name
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#009739',
                // RGB color values
                'rgb' => '0,151,57',
                // CMYK color values
                'cmyk' => '100,0,62,41',
                // HSL color values
                'hsl' => '151°,100%,29%',
                // HSV color values
                'hsv' => '151°,100%,59%',
                // Pantone color code
                'pantone' => '355 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '13.1567',
            // Longitude in decimal degrees
            'longitude' => '-61.2258',
            // Degrees with decimal
            'd' => '13.1567° N, 61.2258° W',
            // Degrees, minutes, seconds
            'dms' => '13°9\'24.12" N, 61°13\'32.88" W',
            // Degrees and decimal minutes
            'dm' => '13°9.402\' N, 61°13.548\' W',
            // GPS formats (empty as per your request)
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"vc"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-61.416946,12.590277],[-61.443893,12.584444],[-61.448616,12.586943],[-61.452225,12.590277],[-61.45417,12.593887],[-61.446396,12.607222],[-61.44334,12.611111],[-61.437782,12.612499],[-61.425835,12.612499],[-61.412506,12.60861],[-61.406952,12.606943],[-61.40306,12.603888],[-61.40528,12.599165],[-61.416946,12.590277]]],[[[-61.32806,12.68778],[-61.3325,12.686666],[-61.33639,12.689444],[-61.347778,12.698889],[-61.347778,12.70167],[-61.32973,12.732498],[-61.32667,12.736387],[-61.323616,12.737499],[-61.31056,12.734999],[-61.30584,12.725832],[-61.305,12.720276],[-61.30584,12.71417],[-61.31473,12.702221],[-61.32084,12.694166],[-61.32806,12.68778]]],[[[-61.216667,12.998055],[-61.23945,12.974998],[-61.2475,12.980833],[-61.252228,12.988609],[-61.22806,13.023333],[-61.20612,13.042776],[-61.199722,13.04472],[-61.19723,13.033609],[-61.213615,13.002222],[-61.216667,12.998055]]],[[[-61.17306,13.1325],[-61.18445,13.13028],[-61.243614,13.156111],[-61.263062,13.178333],[-61.27889,13.203609],[-61.28139,13.207777],[-61.278061,13.25028],[-61.265556,13.273054],[-61.20889,13.36778],[-61.20528,13.370832],[-61.182503,13.382221],[-61.177223,13.384165],[-61.14389,13.378332],[-61.141113,13.374166],[-61.12361,13.33111],[-61.12222,13.32555],[-61.120285,13.307499],[-61.123337,13.248888],[-61.124168,13.242777],[-61.13,13.220276],[-61.148056,13.167776],[-61.165,13.138332],[-61.16806,13.13444],[-61.17306,13.1325]]]]}}]}';
    }
}
