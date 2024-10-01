<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class MS_Montserrat extends CountrySeeder
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
        $this->name = 'Montserrat';

        // Set the country's official name
        $this->official_name = 'Montserrat';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'MS';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'MSR';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '500';

        // Set the international dialing code
        $this->international_phone = '1-664';

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.ms'];

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
        $this->internet_penetration = '65%'; // Moderate internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Montserrat CERT';

        // List popular web technologies in Montserrat
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'MS';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3578097';

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
            'coins_main' => ['1'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '25'],
        ];

        // Set the population
        $this->population = 4992; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 102; // km²

        // Set the capital city
        $this->capital = 'Plymouth (de jure), Brades (de facto)';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/Montserrat',
                // Standard time offset
                'standard_time' => 'UTC-4',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Montserrat is a British Overseas Territory and does not have an independence day

        // List international organizations the country is part of
        $this->international_organizations = [
            'World Health Organization (WHO)',
            'United Nations (via the United Kingdom)',
            'Caribbean Community (CARICOM)',
            'Organization of Eastern Caribbean States (OECS)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.063; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Anglicanism, Catholicism, Protestantism)',
        ];

        // Describe the form of government
        $this->government = 'British Overseas Territory';

        // Set the national sport
        $this->national_sport = 'Cricket'; // Cricket is highly popular in Montserrat

        // Define bordering countries
        $this->borders = []; // As an island, Montserrat has no bordering countries

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇲🇸',
            // Unicode code points
            'uCode' => 'U+1F1F2 U+1F1F8',
            // HTML entities
            'html' => '&#x1F1F2;&#x1F1F8;',
            // CSS entities
            'css' => '\\1F1F2\\1F1F8',
            // Decimal Unicode entities
            'decimal' => '&#127474;&#127480;',
            // Direct UTF-8 string
            'utf8' => '🇲🇸',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF2\uD83C\uDDF8',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-ms:',
            // Hexadecimal entity
            'hex' => '&#x1F1F2;&#x1F1F8;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#00247D',
                // RGB color values
                'rgb' => '0,36,125',
                // CMYK color values
                'cmyk' => '100,71,0,51',
                // HSL color values
                'hsl' => '220°,100%,24%',
                // HSV color values
                'hsv' => '220°,100%,49%',
                // Pantone color code
                'pantone' => '280 C',
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
                'hsl' => '351°,82%,45%',
                // HSV color values
                'hsv' => '351°,90%,81%',
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
                'hsl' => '0°,0%,100%',
                // HSV color values
                'hsv' => '0°,0%,100%',
                // Pantone color code
                'pantone' => 'White',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '16.7425',
            // Longitude in decimal degrees
            'longitude' => '-62.1874',
            // Degrees with decimal
            'dd' => '16.7425° N, 62.1874° W',
            // Degrees, minutes, seconds
            'dms' => '16°44\'33" N, 62°11\'15" W',
            // Degrees and decimal minutes
            'dm' => '16°44.55\' N, 62°11.25\' W',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"ms"},"geometry":{"type":"Polygon","coordinates":[[[-62.171394,16.671387],[-62.190002,16.672497],[-62.208618,16.683609],[-62.212502,16.686943],[-62.229729,16.70472],[-62.236671,16.711941],[-62.237228,16.717499],[-62.23584,16.730553],[-62.20723,16.811108],[-62.20195,16.81361],[-62.176392,16.808609],[-62.148056,16.751663],[-62.146393,16.746666],[-62.137505,16.692776],[-62.140282,16.688332],[-62.15139,16.678055],[-62.155556,16.675278],[-62.165558,16.671665],[-62.171394,16.671387]]]}}]}';
    }
}
