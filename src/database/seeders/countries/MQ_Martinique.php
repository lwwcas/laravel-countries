<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class MQ_Martinique extends CountrySeeder
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
        $this->name = 'Martinique';

        // Set the country's official name
        $this->official_name = 'Martinique';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'MQ';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'MTQ';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '474';

        // Set the international dialing code
        $this->international_phone = '596';

        // Define the languages spoken in the country
        $this->languages = ['fr']; // French is the official language

        // Define the top-level domain(s)
        $this->tld = ['.mq'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '80 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '40 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '80%'; // High internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Martinique CERT';

        // List popular web technologies in Martinique
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'MQ';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3570311';

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
        $this->population = 364508; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 1128; // km²

        // Set the capital city
        $this->capital = 'Fort-de-France';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/Martinique',
                // Standard time offset
                'standard_time' => 'UTC-4',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Martinique is an overseas region of France and does not have an independence day

        // List international organizations the country is part of
        $this->international_organizations = [
            'World Health Organization (WHO)',
            'United Nations (via France)',
            'Organization of Eastern Caribbean States (OECS)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 9.8; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism)',
        ];

        // Describe the form of government
        $this->government = 'Overseas region of France';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport in Martinique

        // Define bordering countries
        $this->borders = []; // As an island, Martinique has no bordering countries

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇲🇶',
            // Unicode code points
            'uCode' => 'U+1F1F2 U+1F1F6',
            // HTML entities
            'html' => '&#x1F1F2;&#x1F1F6;',
            // CSS entities
            'css' => '\\1F1F2\\1F1F6',
            // Decimal Unicode entities
            'decimal' => '&#127474;&#127478;',
            // Direct UTF-8 string
            'utf8' => '🇲🇶',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF2\uD83C\uDDF6',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-mq:',
            // Hexadecimal entity
            'hex' => '&#x1F1F2;&#x1F1F6;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#005BAC',
                // RGB color values
                'rgb' => '0,91,172',
                // CMYK color values
                'cmyk' => '100,47,0,33',
                // HSL color values
                'hsl' => '204°,100%,34%',
                // HSV color values
                'hsv' => '204°,100%,67%',
                // Pantone color code
                'pantone' => '285 C',
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
            'latitude' => '14.6415',
            // Longitude in decimal degrees
            'longitude' => '-61.0242',
            // Degrees with decimal
            'dd' => '14.6415° N, 61.0242° W',
            // Degrees, minutes, seconds
            'dms' => '14°38\'29.4" N, 61°1\'27.12" W',
            // Degrees and decimal minutes
            'dm' => '14°38.49\' N, 61°1.452\' W',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"mq"},"geometry":{"type":"Polygon","coordinates":[[[-60.86084,14.402777],[-60.886948,14.465555],[-60.975006,14.471388],[-61.011116,14.469999],[-61.03389,14.465832],[-61.172501,14.693054],[-61.231674,14.809444],[-61.231392,14.815554],[-61.226669,14.832222],[-61.212784,14.846666],[-61.198616,14.858889],[-61.174728,14.876944],[-61.165001,14.880278],[-61.158615,14.879999],[-61.14473,14.877777],[-61.100006,14.861387],[-61.094727,14.859165],[-61.039726,14.831944],[-61.034447,14.829166],[-60.940834,14.740833],[-60.942505,14.727777],[-60.90667,14.652498],[-60.849724,14.594721],[-60.829727,14.57],[-60.817223,14.47611],[-60.816673,14.470554],[-60.820557,14.455832],[-60.82695,14.439722],[-60.82917,14.434444],[-60.839447,14.415277],[-60.855003,14.403055],[-60.86084,14.402777]]]}}]}';
    }
}
