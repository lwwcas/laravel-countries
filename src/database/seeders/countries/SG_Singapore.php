<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class SG_Singapore extends CountrySeeder
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
    public ?string $region = 'asia';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Singapore';

        // Set the country's official name
        $this->official_name = 'Republic of Singapore';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'SG';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'SGP';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '702';

        // Set the international dialing code
        $this->international_phone = '65';

        // Define the languages spoken in the country
        $this->languages = ['en', 'zh', 'ms', 'ta']; // English, Mandarin, Malay, and Tamil are official languages

        // Define the top-level domain(s)
        $this->tld = ['.sg'];

        // Define alternative top-level domains
        $this->alternative_tlds = ['.com.sg', '.net.sg', '.org.sg', '.edu.sg']; // Common alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '200 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '60 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '90%'; // High internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Cyber Security Agency of Singapore (CSA)';

        // List popular web technologies in Singapore
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'Ruby'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'SG';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '1880252';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Singapore dollar',
            // Currency code
            'code' => 'SGD',
            // Currency symbol
            'symbol' => '$',
            // Main unit
            'main_unit' => 'dollar',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['2', '5', '10', '50', '100', '1000', '10000'],
            // Main coins
            'coins_main' => ['1'],
            // Subunit coins
            'coins_sub' => ['5', '10', '20', '50'],
        ];

        // Set the population
        $this->population = 5638676; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 728; // km²

        // Set the capital city
        $this->capital = 'Singapore';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Asia/Singapore',
                // Standard time offset
                'standard_time' => 'UTC+8',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1965-08-09'; // Independence from Malaysia

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Association of Southeast Asian Nations (ASEAN)',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 372.8; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Buddhism',
            'Christianity',
            'Islam',
            'Taoism',
            'Hinduism',
        ];

        // Describe the form of government
        $this->government = 'Unitary parliamentary republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is popular in Singapore

        // Define bordering countries
        $this->borders = []; // Singapore is a city-state and island nation with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇸🇬',
            // Unicode code points
            'uCode' => 'U+1F1F8 U+1F1EC',
            // HTML entities
            'html' => '&#x1F1F8;&#x1F1EC;',
            // CSS entities
            'css' => '\\1F1F8\\1F1EC',
            // Decimal Unicode entities
            'decimal' => '&#127480;&#127468;',
            // Direct UTF-8 string
            'utf8' => '🇸🇬',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF8\uD83C\uDDEC',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-sg:',
            // Hexadecimal entity
            'hex' => '&#x1F1F8;&#x1F1EC;',
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
                'cmyk' => '0,79,64,6',
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
            'latitude' => '1.3521',
            // Longitude in decimal degrees
            'longitude' => '103.8198',
            // Degrees with decimal
            'dd' => '1.3521° N, 103.8198° E',
            // Degrees, minutes, seconds
            'dms' => '1°21\'7.56" N, 103°49\'11.28" E',
            // Degrees and decimal minutes
            'dm' => '1°21.126\' N, 103°49.188\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"sg"},"geometry":{"type":"Polygon","coordinates":[[[103.99054,1.383291],[103.996918,1.376667],[103.998863,1.371666],[103.998016,1.365555],[103.994133,1.355278],[103.98497,1.344167],[103.959976,1.320833],[103.844971,1.259166],[103.838867,1.258889],[103.798309,1.259444],[103.652763,1.300277],[103.648033,1.3025],[103.644699,1.305833],[103.642197,1.31],[103.640808,1.315555],[103.641083,1.321111],[103.643311,1.331388],[103.669968,1.390833],[103.672203,1.395555],[103.67775,1.403611],[103.684402,1.411111],[103.694962,1.421111],[103.703308,1.426111],[103.713593,1.429444],[103.804138,1.445],[103.8172,1.445277],[103.829422,1.443611],[103.848312,1.434722],[103.87941,1.417222],[103.891647,1.408611],[103.896362,1.406389],[103.967743,1.387222],[103.99054,1.383291]]]}}]}';
    }
}
