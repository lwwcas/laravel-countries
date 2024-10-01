<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class NU_Niue extends CountrySeeder
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
    public ?string $region = 'oceania';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Niue';

        // Set the country's official name
        $this->official_name = 'Niue';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'NU';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'NIU';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '570';

        // Set the international dialing code
        $this->international_phone = '683';

        // Define the languages spoken in the country
        $this->languages = ['niu', 'en']; // Niuean and English are official languages

        // Define the top-level domain(s)
        $this->tld = ['.nu'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '10 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '5 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '65%'; // Moderate internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Niue CERT';

        // List popular web technologies in Niue
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'NU';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '4036232';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'New Zealand dollar',
            // Currency code
            'code' => 'NZD',
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
            // Subunit coins
            'coins_sub' => ['10', '20', '50'],
        ];

        // Set the population
        $this->population = 1624; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 261.46; // km²

        // Set the capital city
        $this->capital = 'Alofi';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Pacific/Niue',
                // Standard time offset
                'standard_time' => 'UTC-11',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1974-10-19'; // Self-governing in free association with New Zealand

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations (Special Observer)',
            'Pacific Islands Forum (PIF)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.01; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Congregational, Protestant)',
        ];

        // Describe the form of government
        $this->government = 'Unitary parliamentary constitutional monarchy in free association with New Zealand';

        // Set the national sport
        $this->national_sport = 'Rugby'; // Rugby is popular in Niue

        // Define bordering countries
        $this->borders = []; // Niue is an island and has no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇳🇺',
            // Unicode code points
            'uCode' => 'U+1F1F3 U+1F1FA',
            // HTML entities
            'html' => '&#x1F1F3;&#x1F1FA;',
            // CSS entities
            'css' => '\\1F1F3\\1F1FA',
            // Decimal Unicode entities
            'decimal' => '&#127475;&#127482;',
            // Direct UTF-8 string
            'utf8' => '🇳🇺',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF3\uD83C\uDDFA',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-nu:',
            // Hexadecimal entity
            'hex' => '&#x1F1F3;&#x1F1FA;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
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
                'hsl' => '50°,100%,50%',
                // HSV color values
                'hsv' => '50°,100%,100%',
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
                'hex' => '#00247D',
                // RGB color values
                'rgb' => '0,36,125',
                // CMYK color values
                'cmyk' => '100,71,0,51',
                // HSL color values
                'hsl' => '220°,100%,25%',
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
                'hsl' => '350°,81%,44%',
                // HSV color values
                'hsv' => '350°,90%,81%',
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
            'latitude' => '-19.0544',
            // Longitude in decimal degrees
            'longitude' => '-169.8672',
            // Degrees with decimal
            'dd' => '19.0544° S, 169.8672° W',
            // Degrees, minutes, seconds
            'dms' => '19°3\'15.84" S, 169°52\'1.92" W',
            // Degrees and decimal minutes
            'dm' => '19°3.264\' S, 169°52.032\' W',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"nu"},"geometry":{"type":"Polygon","coordinates":[[[-169.89389,-19.145557],[-169.930878,-19.124443],[-169.951416,-19.076389],[-169.953064,-19.070278],[-169.931671,-19.016666],[-169.928894,-19.010559],[-169.894745,-18.97028],[-169.884766,-18.963333],[-169.868896,-18.963615],[-169.817505,-18.96833],[-169.812775,-18.972221],[-169.781708,-19.062778],[-169.781403,-19.067783],[-169.798096,-19.087223],[-169.824432,-19.110832],[-169.850281,-19.125835],[-169.859161,-19.130554],[-169.888062,-19.144447],[-169.89389,-19.145557]]]}}]}';
    }
}
