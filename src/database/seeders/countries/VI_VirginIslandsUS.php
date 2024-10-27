<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class VI_VirginIslandsUS extends CountrySeeder
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
        $this->name = 'United States Virgin Islands';

        // Set the country's official name
        $this->official_name = 'Virgin Islands of the United States';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'VI';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'VIR';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '850';

        // Set the international dialing code
        $this->international_phone = '1-340';

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.vi'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '100 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '40 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '80%'; // High internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'United States Cybersecurity and Infrastructure Security Agency (CISA)';

        // List popular web technologies in the United States Virgin Islands
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'Ruby on Rails'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'VI';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '4796775';

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
        $this->population = 104425; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 346.36; // km²

        // Set the capital city
        $this->capital = 'Charlotte Amalie';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/St_Thomas',
                // Standard time offset
                'standard_time' => 'UTC-4',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // U.S. Territory, no independence day

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations (Observer)',
            'Caribbean Community (CARICOM)',
            'Organization of Eastern Caribbean States (OECS)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 4.2; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Protestantism)',
            'Roman Catholicism',
        ];

        // Describe the form of government
        $this->government = 'Territorial government under U.S. federal law';

        // Set the national sport
        $this->national_sport = 'Basketball'; // Basketball is popular in the United States Virgin Islands

        // Define bordering countries
        $this->borders = [
            ['name' => 'British Virgin Islands', 'iso_alpha_2' => 'VG'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇻🇮',
            // Unicode code points
            'uCode' => 'U+1F1FB U+1F1EE',
            // HTML entities
            'html' => '&#x1F1FB;&#x1F1EE;',
            // CSS entities
            'css' => '\\1F1FB\\1F1EE',
            // Decimal Unicode entities
            'decimal' => '&#127483;&#127470;',
            // Direct UTF-8 string
            'utf8' => '🇻🇮',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDFB\uD83C\uDDEE',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-vi:',
            // Hexadecimal entity
            'hex' => '&#x1F1FB;&#x1F1EE;',
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
                'name' => 'Yellow',
                // Web color name
                'web_name' => 'yellow',
                // Hexadecimal color code
                'hex' => '#FFD100',
                // RGB color values
                'rgb' => '255,209,0',
                // CMYK color values
                'cmyk' => '0,18,100,0',
                // HSL color values
                'hsl' => '48°,100%,50%',
                // HSV color values
                'hsv' => '48°,100%,100%',
                // Pantone color code
                'pantone' => '116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
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
                'hsl' => '206°,100%,34%',
                // HSV color values
                'hsv' => '206°,100%,67%',
                // Pantone color code
                'pantone' => '2935 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#CE1126',
                // RGB color values
                'rgb' => '206,17,38',
                // CMYK color values
                'cmyk' => '0,92,82,19',
                // HSL color values
                'hsl' => '356°,84%,44%',
                // HSV color values
                'hsv' => '356°,92%,81%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '18.3358',
            // Longitude in decimal degrees
            'longitude' => '-64.8963',
            // Degrees with decimal
            'dd' => '18.3358° N, 64.8963° W',
            // Degrees, minutes, seconds
            'dms' => '18°20\'8.88" N, 64°53\'46.68" W',
            // Degrees and decimal minutes
            'dm' => '18°20.148\' N, 64°53.778\' W',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"vi"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-64.761948,17.774166],[-64.758621,17.771664],[-64.75334,17.773052],[-64.74139,17.774166],[-64.73584,17.772221],[-64.72974,17.76444],[-64.72195,17.758053],[-64.70917,17.754997],[-64.69667,17.74555],[-64.689728,17.74472],[-64.687225,17.75],[-64.683899,17.753887],[-64.67445,17.758053],[-64.663071,17.767776],[-64.65779,17.769165],[-64.63806,17.765274],[-64.610001,17.762218],[-64.59029,17.761944],[-64.57667,17.76083],[-64.570282,17.759441],[-64.565,17.757221],[-64.56084,17.753887],[-64.560287,17.748333],[-64.564178,17.74528],[-64.57806,17.746387],[-64.590561,17.749443],[-64.59584,17.749443],[-64.60057,17.747219],[-64.61084,17.736111],[-64.618896,17.730274],[-64.628067,17.72583],[-64.64418,17.721664],[-64.66833,17.710831],[-64.69196,17.708332],[-64.714172,17.70417],[-64.72639,17.705276],[-64.73889,17.70805],[-64.74445,17.70666],[-64.757782,17.699444],[-64.763062,17.698055],[-64.776947,17.699165],[-64.78862,17.69778],[-64.804459,17.693607],[-64.815567,17.691666],[-64.82306,17.68472],[-64.828339,17.683331],[-64.833618,17.683331],[-64.84306,17.688889],[-64.852234,17.684444],[-64.858612,17.685833],[-64.8625,17.689163],[-64.86806,17.68972],[-64.87222,17.686943],[-64.8775,17.685555],[-64.89612,17.676666],[-64.895844,17.679443],[-64.89195,17.682499],[-64.888901,17.686943],[-64.88196,17.710278],[-64.88,17.72389],[-64.883057,17.733887],[-64.89084,17.74667],[-64.891678,17.752499],[-64.890015,17.758331],[-64.8864,17.762218],[-64.88251,17.765],[-64.87973,17.769722],[-64.87083,17.774719],[-64.864456,17.774441],[-64.86195,17.77083],[-64.844452,17.761665],[-64.83806,17.76028],[-64.831955,17.76083],[-64.82695,17.762218],[-64.81862,17.768055],[-64.815567,17.771942],[-64.8114,17.774719],[-64.79695,17.78889],[-64.78696,17.7925],[-64.773346,17.79],[-64.76945,17.78694],[-64.7664,17.783054],[-64.761948,17.774166]]],[[[-64.66528,18.332222],[-64.70445,18.307499],[-64.76918,18.31583],[-64.774734,18.317776],[-64.78807,18.326385],[-64.79028,18.33083],[-64.790009,18.336941],[-64.78195,18.343052],[-64.74417,18.36861],[-64.73918,18.370831],[-64.73195,18.37194],[-64.70862,18.37055],[-64.66833,18.35083],[-64.66446,18.3475],[-64.65834,18.339722],[-64.66112,18.335278],[-64.66528,18.332222]]],[[[-64.84167,18.312496],[-64.87807,18.31055],[-64.8864,18.316666],[-64.92306,18.336388],[-64.928619,18.338608],[-64.97945,18.346943],[-65.01195,18.34916],[-65.018341,18.350555],[-65.02612,18.35694],[-65.026947,18.362778],[-65.02417,18.367222],[-64.97667,18.377777],[-64.95001,18.375275],[-64.9039,18.364719],[-64.84695,18.338608],[-64.83446,18.328888],[-64.831955,18.324444],[-64.83307,18.317497],[-64.83585,18.313053],[-64.84167,18.312496]]]]}}]}';
    }
}
