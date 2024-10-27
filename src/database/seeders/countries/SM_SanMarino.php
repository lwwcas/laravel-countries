<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class SM_SanMarino extends CountrySeeder
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
    public ?string $region = 'europe';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'San Marino';

        // Set the country's official name
        $this->official_name = 'Most Serene Republic of San Marino';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'SM';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'SMR';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '674';

        // Set the international dialing code
        $this->international_phone = '378';

        // Define the languages spoken in the country
        $this->languages = ['it']; // Italian is the official language

        // Define the top-level domain(s)
        $this->tld = ['.sm'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '90 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '40 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '92%'; // High internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'San Marino Data Protection Authority';

        // List popular web technologies in San Marino
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'SM';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3168068';

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
            'coins_sub' => ['5', '10', '20', '50'],
        ];

        // Set the population
        $this->population = 33600; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 61; // km²

        // Set the capital city
        $this->capital = 'San Marino';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Europe/San_Marino',
                // Standard time offset
                'standard_time' => 'UTC+1',
                // Daylight saving time offset
                'daylight_time' => 'UTC+2',
            ],
        ];

        // Set the independence day
        $this->independence_day = '301-09-03'; // One of the oldest republics, founded in 301 AD

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Council of Europe',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 1.6; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism)',
        ];

        // Describe the form of government
        $this->government = 'Unitary parliamentary constitutional republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport in San Marino

        // Define bordering countries
        $this->borders = [
            ['name' => 'Italy', 'iso_alpha_2' => 'IT'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇸🇲',
            // Unicode code points
            'uCode' => 'U+1F1F8 U+1F1F2',
            // HTML entities
            'html' => '&#x1F1F8;&#x1F1F2;',
            // CSS entities
            'css' => '\\1F1F8\\1F1F2',
            // Decimal Unicode entities
            'decimal' => '&#127480;&#127474;',
            // Direct UTF-8 string
            'utf8' => '🇸🇲',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF8\uD83C\uDDF2',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-sm:',
            // Hexadecimal entity
            'hex' => '&#x1F1F8;&#x1F1F2;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#5EB6E4',
                // RGB color values
                'rgb' => '94,182,228',
                // CMYK color values
                'cmyk' => '59,0,0,11',
                // HSL color values
                'hsl' => '198°,75%,63%',
                // HSV color values
                'hsv' => '198°,59%,89%',
                // Pantone color code
                'pantone' => '2985 C',
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
            'latitude' => '43.9333',
            // Longitude in decimal degrees
            'longitude' => '12.4500',
            // Degrees with decimal
            'dd' => '43.9333° N, 12.4500° E',
            // Degrees, minutes, seconds
            'dms' => '43°56\'0" N, 12°27\'0" E',
            // Degrees and decimal minutes
            'dm' => '43°56.0\' N, 12°27.0\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"sm"},"geometry":{"type":"Polygon","coordinates":[[[12.415798,43.957954],[12.450554,43.979721],[12.453888,43.981667],[12.4625,43.984718],[12.471666,43.986938],[12.492777,43.989166],[12.505554,43.988609],[12.509998,43.986938],[12.510277,43.982773],[12.511665,43.943329],[12.510555,43.939163],[12.496387,43.923332],[12.494999,43.914719],[12.487778,43.90583],[12.474443,43.897217],[12.464722,43.895554],[12.459166,43.896111],[12.416388,43.904716],[12.412222,43.906105],[12.407822,43.913658],[12.403889,43.926666],[12.404999,43.948326],[12.408888,43.954994],[12.415798,43.957954]]]}}]}';
    }
}
