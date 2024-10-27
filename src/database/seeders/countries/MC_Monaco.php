<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class MC_Monaco extends CountrySeeder
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
        $this->name = 'Monaco';

        // Set the country's official name
        $this->official_name = 'Principality of Monaco';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'MC';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'MCO';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '492';

        // Set the international dialing code
        $this->international_phone = '377';

        // Define the languages spoken in the country
        $this->languages = ['fr']; // French is the official language

        // Define the top-level domain(s)
        $this->tld = ['.mc'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '150 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '70 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '99%'; // Very high internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Monaco CERT (Computer Emergency Response Team)';

        // List popular web technologies in Monaco
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'MC';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '2993457';

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
        $this->population = 38300; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 2.02; // km²

        // Set the capital city
        $this->capital = 'Monaco';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Europe/Monaco',
                // Standard time offset
                'standard_time' => 'UTC+1',
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC+2',
            ],
        ];

        // Set the independence day
        $this->independence_day = '1297-01-08'; // Founding of Monaco as a principality

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Council of Europe',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'Organization for Security and Co-operation in Europe (OSCE)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 7.2; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism)',
        ];

        // Describe the form of government
        $this->government = 'Constitutional monarchy with a parliamentary system';

        // Set the national sport
        $this->national_sport = 'Tennis'; // Tennis is popular in Monaco

        // Define bordering countries
        $this->borders = [
            ['name' => 'France', 'iso_alpha_2' => 'FR'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇲🇨',
            // Unicode code points
            'uCode' => 'U+1F1F2 U+1F1E8',
            // HTML entities
            'html' => '&#x1F1F2;&#x1F1E8;',
            // CSS entities
            'css' => '\\1F1F2\\1F1E8',
            // Decimal Unicode entities
            'decimal' => '&#127474;&#127464;',
            // Direct UTF-8 string
            'utf8' => '🇲🇨',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF2\uD83C\uDDE8',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-mc:',
            // Hexadecimal entity
            'hex' => '&#x1F1F2;&#x1F1E8;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#FF0000',
                // RGB color values
                'rgb' => '255,0,0',
                // CMYK color values
                'cmyk' => '0,100,100,0',
                // HSL color values
                'hsl' => '0°,100%,50%',
                // HSV color values
                'hsv' => '0°,100%,100%',
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
            'latitude' => '43.7333',
            // Longitude in decimal degrees
            'longitude' => '7.4167',
            // Degrees with decimal
            'dd' => '43.7333° N, 7.4167° E',
            // Degrees, minutes, seconds
            'dms' => '43°43\'59.88" N, 7°25\'0.12" E',
            // Degrees and decimal minutes
            'dm' => '43°43.998\' N, 7°25.002\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"mc"},"geometry":{"type":"Polygon","coordinates":[[[7.439293,43.757523],[7.423055,43.739998],[7.4175,43.734161],[7.391609,43.727547],[7.386389,43.741943],[7.386389,43.745552],[7.387777,43.748604],[7.403055,43.761383],[7.416111,43.770554],[7.419999,43.772499],[7.424722,43.773048],[7.429444,43.771385],[7.4325,43.769165],[7.438333,43.760277],[7.439293,43.757523]]]}}]}';
    }
}
