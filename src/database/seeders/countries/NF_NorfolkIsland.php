<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class NF_NorfolkIsland extends CountrySeeder
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
        $this->name = 'Norfolk Island';

        // Set the country's official name
        $this->official_name = 'Territory of Norfolk Island';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'NF';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'NFK';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '574';

        // Set the international dialing code
        $this->international_phone = '672';

        // Define the languages spoken in the country
        $this->languages = ['en', 'pih']; // English and Norfuk are the official languages

        // Define the top-level domain(s)
        $this->tld = ['.nf'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '15 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '5 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '60%'; // Moderate internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Norfolk Island CERT';

        // List popular web technologies in Norfolk Island
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'NF';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '2155115';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Australian dollar',
            // Currency code
            'code' => 'AUD',
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
            'coins_sub' => ['5', '10', '20', '50'],
        ];

        // Set the population
        $this->population = 1748; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 34.6; // km²

        // Set the capital city
        $this->capital = 'Kingston';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Pacific/Norfolk',
                // Standard time offset
                'standard_time' => 'UTC+11',
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC+12',
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Norfolk Island is a territory of Australia

        // List international organizations the country is part of
        $this->international_organizations = [
            'Pacific Islands Forum (PIF)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.05; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Protestantism, Roman Catholicism)',
        ];

        // Describe the form of government
        $this->government = 'Australian territory with limited self-governance';

        // Set the national sport
        $this->national_sport = 'Rugby'; // Rugby is popular in Norfolk Island

        // Define bordering countries
        $this->borders = []; // Norfolk Island is an island and has no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇳🇫',
            // Unicode code points
            'uCode' => 'U+1F1F3 U+1F1EB',
            // HTML entities
            'html' => '&#x1F1F3;&#x1F1EB;',
            // CSS entities
            'css' => '\\1F1F3\\1F1EB',
            // Decimal Unicode entities
            'decimal' => '&#127475;&#127467;',
            // Direct UTF-8 string
            'utf8' => '🇳🇫',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF3\uD83C\uDDEB',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-nf:',
            // Hexadecimal entity
            'hex' => '&#x1F1F3;&#x1F1EB;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
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
                'hsl' => '144°,100%,30%',
                // HSV color values
                'hsv' => '144°,100%,59%',
                // Pantone color code
                'pantone' => '348 C',
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
            'latitude' => '-29.0408',
            // Longitude in decimal degrees
            'longitude' => '167.9547',
            // Degrees with decimal
            'dd' => '29.0408° S, 167.9547° E',
            // Degrees, minutes, seconds
            'dms' => '29°2\'26.88" S, 167°57\'16.92" E',
            // Degrees and decimal minutes
            'dm' => '29°2.448\' S, 167°57.282\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"nf"},"geometry":{"type":"Polygon","coordinates":[[[167.964966,-29.081112],[167.923584,-29.056667],[167.916077,-29.043056],[167.909424,-29.009445],[167.912476,-29.00528],[167.930542,-29.000557],[167.944702,-29.001945],[167.949982,-29.004169],[167.997742,-29.025002],[168,-29.030003],[167.983307,-29.066113],[167.964966,-29.081112]]]}}]}';
    }
}
