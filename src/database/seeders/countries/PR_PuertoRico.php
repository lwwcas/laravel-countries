<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class PR_PuertoRico extends CountrySeeder
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
        $this->name = 'Puerto Rico';

        // Set the country's official name
        $this->official_name = 'Commonwealth of Puerto Rico';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'PR';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'PRI';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '630';

        // Set the international dialing code
        $this->international_phone = '1-787, 1-939'; // Puerto Rico shares the North American Numbering Plan

        // Define the languages spoken in the country
        $this->languages = ['es', 'en']; // Spanish and English are official languages

        // Define the top-level domain(s)
        $this->tld = ['.pr'];

        // Define alternative top-level domains
        $this->alternative_tlds = ['.com.pr', '.net.pr', '.gov.pr', '.edu.pr']; // Common alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '50 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '25 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '80%'; // High internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Puerto Rico Cyber Emergency Response Team (PR-CERT)';

        // List popular web technologies in Puerto Rico
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress', 'Python'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'PR';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '4566966';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'United States dollar',
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
            'coins_main' => ['1', '2'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '25', '50'],
        ];

        // Set the population
        $this->population = 3193694; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 9104; // km²

        // Set the capital city
        $this->capital = 'San Juan';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/Puerto_Rico',
                // Standard time offset
                'standard_time' => 'UTC-4',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Puerto Rico is a territory of the United States

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations (as a territory of the U.S.)',
            'World Trade Organization (WTO)',
            'Organization of American States (OAS)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 103.1; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism, Protestantism)',
        ];

        // Describe the form of government
        $this->government = 'Unincorporated territory of the United States with a republican form of government';

        // Set the national sport
        $this->national_sport = 'Baseball'; // Baseball is the most popular sport in Puerto Rico

        // Define bordering countries
        $this->borders = []; // Puerto Rico is an island and has no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇵🇷',
            // Unicode code points
            'uCode' => 'U+1F1F5 U+1F1F7',
            // HTML entities
            'html' => '&#x1F1F5;&#x1F1F7;',
            // CSS entities
            'css' => '\\1F1F5\\1F1F7',
            // Decimal Unicode entities
            'decimal' => '&#127477;&#127479;',
            // Direct UTF-8 string
            'utf8' => '🇵🇷',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF5\uD83C\uDDF7',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-pr:',
            // Hexadecimal entity
            'hex' => '&#x1F1F5;&#x1F1F7;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#EF3340',
                // RGB color values
                'rgb' => '239,51,64',
                // CMYK color values
                'cmyk' => '0,79,66,6',
                // HSL color values
                'hsl' => '355°,85%,57%',
                // HSV color values
                'hsv' => '355°,79%,94%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#0050F0',
                // RGB color values
                'rgb' => '0,80,240',
                // CMYK color values
                'cmyk' => '100,67,0,6',
                // HSL color values
                'hsl' => '225°,100%,47%',
                // HSV color values
                'hsv' => '225°,100%,94%',
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
            'latitude' => '18.2208',
            // Longitude in decimal degrees
            'longitude' => '-66.5901',
            // Degrees with decimal
            'dd' => '18.2208° N, 66.5901° W',
            // Degrees, minutes, seconds
            'dms' => '18°13\'14.88" N, 66°35\'24.36" W',
            // Degrees and decimal minutes
            'dm' => '18°13.248\' N, 66°35.406\' W',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"pr"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-67.880569,18.04833],[-67.8864,18.0475],[-67.892227,18.048054],[-67.930557,18.074997],[-67.93695,18.081387],[-67.93834,18.090275],[-67.93085,18.109722],[-67.926682,18.112778],[-67.90334,18.114441],[-67.862793,18.114166],[-67.84668,18.107498],[-67.840286,18.09389],[-67.841675,18.087776],[-67.871399,18.05278],[-67.880569,18.04833]]],[[[-65.44139,18.090275],[-65.52501,18.083054],[-65.545563,18.085],[-65.55139,18.086941],[-65.56557,18.095],[-65.57333,18.101387],[-65.5789,18.109722],[-65.58029,18.114719],[-65.57834,18.11861],[-65.502792,18.144165],[-65.48695,18.149166],[-65.43445,18.164165],[-65.42834,18.165],[-65.395844,18.164444],[-65.30112,18.147778],[-65.30528,18.1325],[-65.337784,18.116943],[-65.44139,18.090275]]],[[[-65.242783,18.302219],[-65.27528,18.276943],[-65.279175,18.278889],[-65.333618,18.331944],[-65.33667,18.335831],[-65.3389,18.34666],[-65.335007,18.348053],[-65.28473,18.331665],[-65.273346,18.327499],[-65.26251,18.32333],[-65.248062,18.315277],[-65.24417,18.311943],[-65.241959,18.307499],[-65.242783,18.302219]]],[[[-66.99667,18.504997],[-66.76883,18.487677],[-66.69556,18.489441],[-66.55057,18.482498],[-66.466675,18.474163],[-66.30556,18.46722],[-66.20834,18.464165],[-66.195,18.463892],[-66.1364,18.465553],[-66.10278,18.416386],[-66.116959,18.469444],[-66.116959,18.474163],[-66.11111,18.474998],[-66.031113,18.445274],[-66.014175,18.456387],[-66.004181,18.460278],[-65.99086,18.46009],[-65.904175,18.454441],[-65.89056,18.452221],[-65.801392,18.430553],[-65.64307,18.375275],[-65.626953,18.364998],[-65.63,18.275276],[-65.63222,18.26543],[-65.602509,18.236664],[-65.603058,18.2325],[-65.61334,18.221386],[-65.69278,18.19361],[-65.8239,18.063889],[-65.83667,18.055832],[-65.84029,18.044441],[-65.85695,18.01861],[-65.88473,17.989441],[-65.8889,17.98638],[-65.898056,17.98194],[-65.927505,17.970276],[-65.93722,17.966663],[-66.204453,17.922222],[-66.23779,17.928055],[-66.290558,17.943333],[-66.347778,17.9675],[-66.37556,17.96083],[-66.454178,17.982498],[-66.5714,17.965553],[-66.57584,17.963333],[-66.58723,17.961109],[-66.67111,17.964722],[-66.68445,17.966942],[-66.714737,17.981388],[-66.789169,17.970554],[-66.80751,17.960278],[-66.82167,17.953609],[-66.84195,17.946941],[-66.927231,17.928886],[-66.939728,17.928055],[-66.953339,17.930275],[-67.0675,17.959721],[-67.096115,17.949997],[-67.18224,17.932499],[-67.18722,17.932499],[-67.2039,17.949444],[-67.20557,17.95444],[-67.20557,17.96083],[-67.19417,18.035],[-67.175293,18.10611],[-67.1564,18.188332],[-67.157501,18.214722],[-67.16905,18.23761],[-67.17056,18.242775],[-67.17445,18.25194],[-67.18973,18.278053],[-67.193619,18.281109],[-67.19917,18.283054],[-67.21112,18.286663],[-67.218613,18.28722],[-67.224731,18.288887],[-67.22945,18.291386],[-67.24084,18.301666],[-67.25029,18.313053],[-67.26195,18.341389],[-67.266678,18.362778],[-67.26611,18.36805],[-67.17223,18.484997],[-67.168625,18.488888],[-67.15445,18.503052],[-67.14639,18.509163],[-67.14195,18.511387],[-67.13998,18.511629],[-67.101669,18.518055],[-67.08334,18.519444],[-67.06361,18.519165],[-67.039734,18.51583],[-67.02612,18.513611],[-66.99667,18.504997]]]]}}]}';
    }
}
