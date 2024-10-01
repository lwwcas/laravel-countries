<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class SH_SaintHelena extends CountrySeeder
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
    public ?string $region = 'africa';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Saint Helena, Ascension and Tristan da Cunha';

        // Set the country's official name
        $this->official_name = 'Saint Helena, Ascension and Tristan da Cunha';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'SH';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'SHN';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '654';

        // Set the international dialing code
        $this->international_phone = '290';

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.sh'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '5 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '3 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '20%'; // Low internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Saint Helena Government';

        // List popular web technologies in Saint Helena
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'SH';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3370751';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Saint Helena pound',
            // Currency code
            'code' => 'SHP',
            // Currency symbol
            'symbol' => '£',
            // Main unit
            'main_unit' => 'pound',
            // Subunit
            'sub_unit' => 'penny',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['5', '10', '20', '50'],
            // Main coins
            'coins_main' => ['1', '2'],
            // Subunit coins
            'coins_sub' => ['1', '2', '5', '10', '20', '50'],
        ];

        // Set the population
        $this->population = 6077; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 394; // km²

        // Set the capital city
        $this->capital = 'Jamestown';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Atlantic/St_Helena',
                // Standard time offset
                'standard_time' => 'UTC+0',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Saint Helena is a British Overseas Territory

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations (represented by the United Kingdom)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.031; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Anglican, Roman Catholic)',
        ];

        // Describe the form of government
        $this->government = 'Constitutional monarchy under British sovereignty';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport

        // Define bordering countries
        $this->borders = []; // Saint Helena, Ascension and Tristan da Cunha are island territories with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇸🇭',
            // Unicode code points
            'uCode' => 'U+1F1F8 U+1F1ED',
            // HTML entities
            'html' => '&#x1F1F8;&#x1F1ED;',
            // CSS entities
            'css' => '\\1F1F8\\1F1ED',
            // Decimal Unicode entities
            'decimal' => '&#127480;&#127469;',
            // Direct UTF-8 string
            'utf8' => '🇸🇭',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF8\uD83C\uDDED',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-sh:',
            // Hexadecimal entity
            'hex' => '&#x1F1F8;&#x1F1ED;',
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
                'hsl' => '221°,100%,25%',
                // HSV color values
                'hsv' => '221°,100%,49%',
                // Pantone color code
                'pantone' => '280 C',
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
                'pantone' => '109 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '-15.965',
            // Longitude in decimal degrees
            'longitude' => '-5.7089',
            // Degrees with decimal
            'dd' => '15.965° S, 5.7089° W',
            // Degrees, minutes, seconds
            'dms' => '15°57\'54" S, 5°42\'32" W',
            // Degrees and decimal minutes
            'dm' => '15°57.9\' S, 5°42.533\' W',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"sh"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-9.892223,-40.390839],[-9.91111,-40.40389],[-9.92389,-40.402229],[-9.941668,-40.39667],[-9.94806,-40.39445],[-10.040834,-40.341667],[-10.04139,-40.336945],[-10.031389,-40.31444],[-10.02861,-40.30945],[-10.023056,-40.30695],[-10.009724,-40.305],[-9.959167,-40.30528],[-9.95222,-40.306671],[-9.90333,-40.36528],[-9.892223,-40.390839]]],[[[-12.20639,-37.112503],[-12.26583,-37.155556],[-12.28278,-37.148056],[-12.30306,-37.136391],[-12.33,-37.11306],[-12.33167,-37.107506],[-12.330557,-37.10139],[-12.30306,-37.0625],[-12.296667,-37.053612],[-12.28945,-37.052505],[-12.259445,-37.05278],[-12.24417,-37.05445],[-12.238335,-37.056671],[-12.21472,-37.0725],[-12.210556,-37.07612],[-12.19361,-37.095001],[-12.2025,-37.108612],[-12.20639,-37.112503]]],[[[-5.66222,-15.987501],[-5.69833,-16.005001],[-5.7025,-16.002502],[-5.710556,-15.996389],[-5.712976,-15.99286],[-5.72528,-16.003334],[-5.72889,-16.00556],[-5.73722,-16.00972],[-5.76639,-16.02333],[-5.77056,-16.020557],[-5.78722,-16.009167],[-5.79306,-15.994167],[-5.7925,-15.988056],[-5.770278,-15.949446],[-5.7675,-15.94528],[-5.74861,-15.929167],[-5.72889,-15.91389],[-5.71639,-15.905279],[-5.70417,-15.90306],[-5.697779,-15.90389],[-5.69194,-15.905001],[-5.67139,-15.90944],[-5.64528,-15.94],[-5.64583,-15.955557],[-5.646945,-15.961113],[-5.65861,-15.98389],[-5.66222,-15.987501]]],[[[-14.36389,-7.97972],[-14.391525,-7.98409],[-14.40972,-7.97833],[-14.41222,-7.97417],[-14.41611,-7.94],[-14.41445,-7.93444],[-14.405834,-7.915278],[-14.398613,-7.90194],[-14.386112,-7.88639],[-14.38194,-7.88361],[-14.37833,-7.883056],[-14.359167,-7.89028],[-14.355835,-7.892222],[-14.31944,-7.91806],[-14.29417,-7.93972],[-14.29306,-7.94528],[-14.29667,-7.948611],[-14.31139,-7.96139],[-14.34028,-7.97333],[-14.34528,-7.97528],[-14.36389,-7.97972]]]]}}]}';
    }
}
