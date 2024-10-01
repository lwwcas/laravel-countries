<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class VC_SaintVincentandGrenadines extends CountrySeeder
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
        $this->name = 'Vatican City';

        // Set the country's official name
        $this->official_name = 'Vatican City State';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'VA';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'VAT';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '336';

        // Set the international dialing code
        $this->international_phone = '379';

        // Define the languages spoken in the country
        $this->languages = ['la', 'it']; // Latin and Italian are the official languages

        // Define the top-level domain(s)
        $this->tld = ['.va'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '100 Mbps', // The Vatican has high internet speeds due to its small size
            // Average mobile connection speed
            'average_speed_mobile' => '50 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '100%'; // High internet penetration rate due to the limited population

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = null; // No specific cybersecurity agency

        // List popular web technologies in Vatican City
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python']; // Popular technologies for Vatican-related websites

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'VA';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3164670';

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
        $this->population = 825; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 0.44; // km² (smallest country in the world)

        // Set the capital city
        $this->capital = 'Vatican City'; // Capital is the same as the country name

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Europe/Vatican',
                // Standard time offset
                'standard_time' => 'UTC+1',
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC+2',
            ],
        ];

        // Set the independence day
        $this->independence_day = '1929-02-11'; // Independence from Italy through the Lateran Treaty

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations (Observer)',
            'European Conference of Postal and Telecommunications Administrations (CEPT)',
            'Universal Postal Union (UPU)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 'N/A'; // Vatican City does not report GDP due to its unique economy

        // List the predominant religions
        $this->religions = [
            'Roman Catholicism',
        ];

        // Describe the form of government
        $this->government = 'Ecclesiastical and theocratic absolute elective monarchy';

        // Set the national sport
        $this->national_sport = null; // No official national sport

        // Define bordering countries
        $this->borders = [
            ['name' => 'Italy', 'iso_alpha_2' => 'IT'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇻🇦',
            // Unicode code points
            'uCode' => 'U+1F1FB U+1F1E6',
            // HTML entities
            'html' => '&#x1F1FB;&#x1F1E6;',
            // CSS entities
            'css' => '\\1F1FB\\1F1E6',
            // Decimal Unicode entities
            'decimal' => '&#127483;&#127462;',
            // Direct UTF-8 string
            'utf8' => '🇻🇦',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDFB\uD83C\uDDE6',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-va:',
            // Hexadecimal entity
            'hex' => '&#x1F1FB;&#x1F1E6;',
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
                'hsl' => '48°,100%,50%',
                // HSV color values
                'hsv' => '48°,100%,100%',
                // Pantone color code
                'pantone' => 'Pantone 116 C',
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
            'latitude' => '41.9029',
            // Longitude in decimal degrees
            'longitude' => '12.4534',
            // Degrees with decimal
            'dd' => '41.9029° N, 12.4534° E',
            // Degrees, minutes, seconds
            'dms' => '41°54\'10.44" N, 12°27\'12.24" E',
            // Degrees and decimal minutes
            'dm' => '41°54.174\' N, 12°27.204\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"vc"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-61.416946,12.590277],[-61.443893,12.584444],[-61.448616,12.586943],[-61.452225,12.590277],[-61.45417,12.593887],[-61.446396,12.607222],[-61.44334,12.611111],[-61.437782,12.612499],[-61.425835,12.612499],[-61.412506,12.60861],[-61.406952,12.606943],[-61.40306,12.603888],[-61.40528,12.599165],[-61.416946,12.590277]]],[[[-61.32806,12.68778],[-61.3325,12.686666],[-61.33639,12.689444],[-61.347778,12.698889],[-61.347778,12.70167],[-61.32973,12.732498],[-61.32667,12.736387],[-61.323616,12.737499],[-61.31056,12.734999],[-61.30584,12.725832],[-61.305,12.720276],[-61.30584,12.71417],[-61.31473,12.702221],[-61.32084,12.694166],[-61.32806,12.68778]]],[[[-61.216667,12.998055],[-61.23945,12.974998],[-61.2475,12.980833],[-61.252228,12.988609],[-61.22806,13.023333],[-61.20612,13.042776],[-61.199722,13.04472],[-61.19723,13.033609],[-61.213615,13.002222],[-61.216667,12.998055]]],[[[-61.17306,13.1325],[-61.18445,13.13028],[-61.243614,13.156111],[-61.263062,13.178333],[-61.27889,13.203609],[-61.28139,13.207777],[-61.278061,13.25028],[-61.265556,13.273054],[-61.20889,13.36778],[-61.20528,13.370832],[-61.182503,13.382221],[-61.177223,13.384165],[-61.14389,13.378332],[-61.141113,13.374166],[-61.12361,13.33111],[-61.12222,13.32555],[-61.120285,13.307499],[-61.123337,13.248888],[-61.124168,13.242777],[-61.13,13.220276],[-61.148056,13.167776],[-61.165,13.138332],[-61.16806,13.13444],[-61.17306,13.1325]]]]}}]}';
    }
}
