<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class VG_BritishVirginIslands extends CountrySeeder
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
        $this->name = 'Virgin Islands';

        // Set the country's official name
        $this->official_name = 'Virgin Islands';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'VG';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'VGB';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '92';

        // Set the international dialing code
        $this->international_phone = '1-284';

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.vg'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '50 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '20 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '75%'; // Moderate internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Cybersecurity and Information Security Agency (CISA)';

        // List popular web technologies in the Virgin Islands
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'VG';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3577718';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'United States Dollar',
            // Currency code
            'code' => 'USD',
            // Currency symbol
            'symbol' => '$',
            // Main unit
            'main_unit' => 'dollar',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['1', '5', '10', '20', '50', '100'],
            // Main coins
            'coins_main' => ['1', '5', '10', '25'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '25'],
        ];

        // Set the population
        $this->population = 30231; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 151; // km²

        // Set the capital city
        $this->capital = 'Road Town';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/Tortola',
                // Standard time offset
                'standard_time' => 'UTC-4',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // British Overseas Territory, no independence day

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations (Observer)',
            'Caribbean Community (CARICOM)',
            'Organization of Eastern Caribbean States (OECS)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 1.027; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Protestantism)',
        ];

        // Describe the form of government
        $this->government = 'Parliamentary democracy under a constitutional monarchy';

        // Set the national sport
        $this->national_sport = 'Sailing'; // Sailing is popular in the Virgin Islands

        // Define bordering countries
        $this->borders = [
            ['name' => 'United States Virgin Islands', 'iso_alpha_2' => 'VI'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇻🇬',
            // Unicode code points
            'uCode' => 'U+1F1FB U+1F1EC',
            // HTML entities
            'html' => '&#x1F1FB;&#x1F1EC;',
            // CSS entities
            'css' => '\\1F1FB\\1F1EC',
            // Decimal Unicode entities
            'decimal' => '&#127483;&#127468;',
            // Direct UTF-8 string
            'utf8' => '🇻🇬',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDFB\uD83C\uDDEC',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-vg:',
            // Hexadecimal entity
            'hex' => '&#x1F1FB;&#x1F1EC;',
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
                'cmyk' => '100,71,0,49',
                // HSL color values
                'hsl' => '220°,100%,25%',
                // HSV color values
                'hsv' => '220°,100%,49%',
                // Pantone color code
                'pantone' => '281 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
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
                'hsl' => '145°,100%,29%',
                // HSV color values
                'hsv' => '145°,100%,59%',
                // Pantone color code
                'pantone' => '356 C',
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
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '18.4207',
            // Longitude in decimal degrees
            'longitude' => '-64.6399',
            // Degrees with decimal
            'dd' => '18.4207° N, 64.6399° W',
            // Degrees, minutes, seconds
            'dms' => '18°25\'14.52" N, 64°38\'23.64" W',
            // Degrees and decimal minutes
            'dm' => '18°25.242\' N, 64°38.394\' W',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"vg"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-64.66084,18.383888],[-64.667236,18.383888],[-64.69917,18.39139],[-64.70029,18.395554],[-64.69723,18.400276],[-64.66833,18.428333],[-64.65251,18.441109],[-64.640289,18.445],[-64.61168,18.452499],[-64.57501,18.458054],[-64.56778,18.457222],[-64.56222,18.455276],[-64.558334,18.451942],[-64.55695,18.44694],[-64.55695,18.440552],[-64.561951,18.425831],[-64.563614,18.42139],[-64.5675,18.418331],[-64.57695,18.413887],[-64.66084,18.383888]]],[[[-64.422501,18.43861],[-64.4364,18.431389],[-64.43779,18.434998],[-64.43861,18.440552],[-64.43834,18.453053],[-64.415558,18.50361],[-64.412231,18.506107],[-64.32556,18.51],[-64.32223,18.506107],[-64.323624,18.501663],[-64.326675,18.496944],[-64.33057,18.494164],[-64.422501,18.43861]]],[[[-64.3114,18.746109],[-64.30501,18.738609],[-64.292511,18.729164],[-64.27834,18.721107],[-64.27196,18.713333],[-64.26973,18.708885],[-64.26918,18.70333],[-64.27,18.69639],[-64.275284,18.695],[-64.278061,18.69194],[-64.283066,18.693333],[-64.29529,18.70333],[-64.302505,18.710552],[-64.31584,18.719166],[-64.335007,18.72361],[-64.367233,18.72361],[-64.388062,18.725555],[-64.40028,18.729164],[-64.408066,18.735832],[-64.407227,18.74194],[-64.4014,18.741108],[-64.39612,18.742496],[-64.38417,18.743889],[-64.35722,18.742496],[-64.35139,18.74305],[-64.32973,18.748608],[-64.31696,18.748333],[-64.3114,18.746109]]]]}}]}';
    }
}
