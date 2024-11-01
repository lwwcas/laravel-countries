<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class YT_Mayotte extends CountrySeeder
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
        $this->name = 'Mayotte';

        // Set the country's official name
        $this->official_name = 'Department of Mayotte';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'YT';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'MYT';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '175';

        // Set the international dialing code
        $this->international_phone = '262';

        // Define the languages spoken in the country
        $this->languages = ['fr']; // French is the official language

        // Define the top-level domain(s)
        $this->tld = ['.yt'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '25 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '15 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '50%'; // Moderate internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Agence Nationale de la Sécurité des Systèmes d’Information (ANSSI)';

        // List popular web technologies in Mayotte
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'MYT';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '1024031';

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
        $this->population = 279471; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 374; // km²

        // Set the capital city
        $this->capital = 'Mamoudzou';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Indian/Mayotte',
                // Standard time offset
                'standard_time' => 'UTC+3',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Mayotte is a department of France, no independence day

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations (Observer)',
            'Indian Ocean Commission',
            'Organisation internationale de la Francophonie',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 2.6; // GDP in billions of USD (2023 estimates)

        // List the predominant religions
        $this->religions = [
            'Islam (Sunni)',
            'Christianity (Roman Catholicism)',
        ];

        // Describe the form of government
        $this->government = 'French Overseas Department';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport in Mayotte

        // Define bordering countries (Mayotte has no land borders but shares maritime boundaries)
        $this->borders = [];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇾🇹',
            // Unicode code points
            'uCode' => 'U+1F1FE U+1F1F9',
            // HTML entities
            'html' => '&#x1F1FE;&#x1F1F9;',
            // CSS entities
            'css' => '\\1F1FE\\1F1F9',
            // Decimal Unicode entities
            'decimal' => '&#127486;&#127481;',
            // Direct UTF-8 string
            'utf8' => '🇾🇹',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDFE\uD83C\uDDF9',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-yt:',
            // Hexadecimal entity
            'hex' => '&#x1F1FE;&#x1F1F9;',
        ];

        // Define the colors of the country's flag with accurate color values (using French flag)
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#0055A4',
                // RGB color values
                'rgb' => '0,85,164',
                // CMYK color values
                'cmyk' => '100,48,0,36',
                // HSL color values
                'hsl' => '216°,100%,32%',
                // HSV color values
                'hsv' => '216°,100%,64%',
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
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#EF4135',
                // RGB color values
                'rgb' => '239,65,53',
                // CMYK color values
                'cmyk' => '0,83,78,6',
                // HSL color values
                'hsl' => '4°,83%,57%',
                // HSV color values
                'hsv' => '4°,78%,94%',
                // Pantone color code
                'pantone' => '485 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '-12.8275',
            // Longitude in decimal degrees
            'longitude' => '45.1662',
            // Degrees with decimal
            'dd' => '12.8275° S, 45.1662° E',
            // Degrees, minutes, seconds
            'dms' => '12°49\'39.00" S, 45°9\'58.32" E',
            // Degrees and decimal minutes
            'dm' => '12°49.650\' S, 45°9.972\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"yt"},"geometry":{"type":"MultiPolygon","coordinates":[[[[45.282494,-12.804167],[45.277771,-12.805],[45.272774,-12.796946],[45.268883,-12.7875],[45.262497,-12.76889],[45.263885,-12.765],[45.266663,-12.76083],[45.272774,-12.75361],[45.276382,-12.75],[45.283051,-12.7475],[45.286659,-12.75],[45.290833,-12.76417],[45.293327,-12.781668],[45.291939,-12.786945],[45.282494,-12.804167]]],[[[45.204994,-12.84972],[45.176384,-12.92089],[45.177219,-12.928223],[45.17805,-12.93139],[45.181107,-12.97139],[45.136383,-12.9925],[45.124161,-12.99139],[45.097496,-12.985834],[45.07,-12.957224],[45.06055,-12.89639],[45.063049,-12.89306],[45.067215,-12.89056],[45.080276,-12.88972],[45.086388,-12.89056],[45.091385,-12.8925],[45.095276,-12.901945],[45.096107,-12.907778],[45.099442,-12.91056],[45.113106,-12.901278],[45.11594,-12.90211],[45.11927,-12.90211],[45.123272,-12.898945],[45.124939,-12.892445],[45.124107,-12.88528],[45.103607,-12.82833],[45.058327,-12.750834],[45.041939,-12.74083],[45.039993,-12.73611],[45.039162,-12.713335],[45.045273,-12.69528],[45.078888,-12.6625],[45.208328,-12.7275],[45.222771,-12.73944],[45.23027,-12.752224],[45.22916,-12.7575],[45.204994,-12.84972]]]]}}]}';
    }
}
