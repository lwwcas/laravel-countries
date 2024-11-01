<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class MF_SaintMartin extends CountrySeeder
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
        $this->name = 'Saint Martin';

        // Set the country's official name
        $this->official_name = 'Saint Martin';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'MF';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'MAF';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '663';

        // Set the international dialing code
        $this->international_phone = '590';

        // Define the languages spoken in the country
        $this->languages = ['fr']; // French is the official language

        // Define the top-level domain(s)
        $this->tld = ['.mf'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '70 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '40 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '80%'; // High internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'CERT-FR (Computer Emergency Response Team of France)';

        // List popular web technologies in Saint Martin
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'SM';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3578421';

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
        $this->population = 38659; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 53.2; // km²

        // Set the capital city
        $this->capital = 'Marigot';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/Marigot',
                // Standard time offset
                'standard_time' => 'UTC-4',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Saint Martin is a part of the French overseas territories and does not have an independence day

        // List international organizations the country is part of
        $this->international_organizations = [
            'European Union (Overseas countries and territories association)',
            'United Nations (represented by France)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.58; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism, Protestantism)',
        ];

        // Describe the form of government
        $this->government = 'Overseas collectivity of France';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is popular in Saint Martin

        // Define bordering countries
        $this->borders = [
            ['name' => 'Sint Maarten (Dutch Part)', 'iso_alpha_2' => 'SX'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇲🇫',
            // Unicode code points
            'uCode' => 'U+1F1F2 U+1F1EB',
            // HTML entities
            'html' => '&#x1F1F2;&#x1F1EB;',
            // CSS entities
            'css' => '\\1F1F2\\1F1EB',
            // Decimal Unicode entities
            'decimal' => '&#127474;&#127467;',
            // Direct UTF-8 string
            'utf8' => '🇲🇫',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF2\uD83C\uDDEB',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-mf:',
            // Hexadecimal entity
            'hex' => '&#x1F1F2;&#x1F1EB;',
        ];

        // Define the colors of the country's flag with accurate color values
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
                'pantone' => '286 C',
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
                'cmyk' => '0,73,78,6',
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
            'latitude' => '18.0708',
            // Longitude in decimal degrees
            'longitude' => '-63.0501',
            // Degrees with decimal
            'dd' => '18.0708° N, 63.0501° W',
            // Degrees, minutes, seconds
            'dms' => '18°4\'14.88" N, 63°3\'0.36" W',
            // Degrees and decimal minutes
            'dm' => '18°4.248\' N, 63°3.006\' W',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"mf"},"geometry":{"type":"Polygon","coordinates":[[[-63.00667,18.080555],[-63.01146,18.06728],[-63.030273,18.07037],[-63.109867,18.066116],[-63.139839,18.058601],[-63.14389,18.06194],[-63.14612,18.066387],[-63.14667,18.071941],[-63.142227,18.074165],[-63.045006,18.121387],[-63.03917,18.121944],[-63.01917,18.117775],[-63.016113,18.11389],[-63.006393,18.086941],[-63.00667,18.080555]]]}}]}';
    }
}
