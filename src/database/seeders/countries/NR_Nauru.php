<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class NR_Nauru extends CountrySeeder
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
        $this->name = 'Nauru';

        // Set the country's official name
        $this->official_name = 'Republic of Nauru';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'NR';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'NRU';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '520';

        // Set the international dialing code
        $this->international_phone = '674';

        // Define the languages spoken in the country
        $this->languages = ['na', 'en']; // Nauruan is the official language, with English widely used for government and commerce

        // Define the top-level domain(s)
        $this->tld = ['.nr'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '3 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '2 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '54%'; // Moderate internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Nauru Cyber Security Incident Response Team (NCSIRT)';

        // List popular web technologies in Nauru
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'NR';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '2110425';

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
        $this->population = 10834; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 21; // km²

        // Set the capital city
        $this->capital = 'No official capital, government offices in Yaren';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Pacific/Nauru',
                // Standard time offset
                'standard_time' => 'UTC+12',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1968-01-31'; // Independence from a joint trusteeship under Australia, New Zealand, and the UK

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Pacific Islands Forum (PIF)',
            'Commonwealth of Nations',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.112; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Protestantism, Roman Catholicism)',
        ];

        // Describe the form of government
        $this->government = 'Unitary parliamentary republic';

        // Set the national sport
        $this->national_sport = 'Australian Rules Football'; // Popular in Nauru

        // Define bordering countries
        $this->borders = []; // Nauru is an island and has no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇳🇷',
            // Unicode code points
            'uCode' => 'U+1F1F3 U+1F1F7',
            // HTML entities
            'html' => '&#x1F1F3;&#x1F1F7;',
            // CSS entities
            'css' => '\\1F1F3\\1F1F7',
            // Decimal Unicode entities
            'decimal' => '&#127475;&#127479;',
            // Direct UTF-8 string
            'utf8' => '🇳🇷',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF3\uD83C\uDDF7',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-nr:',
            // Hexadecimal entity
            'hex' => '&#x1F1F3;&#x1F1F7;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#00205B',
                // RGB color values
                'rgb' => '0,32,91',
                // CMYK color values
                'cmyk' => '100,85,5,36',
                // HSL color values
                'hsl' => '220°,100%,18%',
                // HSV color values
                'hsv' => '220°,100%,36%',
                // Pantone color code
                'pantone' => '287 C',
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
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '-0.5228',
            // Longitude in decimal degrees
            'longitude' => '166.9315',
            // Degrees with decimal
            'dd' => '0.5228° S, 166.9315° E',
            // Degrees, minutes, seconds
            'dms' => '0°31\'22.08" S, 166°55\'53.4" E',
            // Degrees and decimal minutes
            'dm' => '0°31.368\' S, 166°55.89\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"nr"},"geometry":{"type":"Polygon","coordinates":[[[166.929138,-0.552222],[166.922211,-0.552222],[166.916931,-0.550833],[166.909149,-0.544722],[166.904419,-0.535833],[166.904419,-0.528889],[166.907745,-0.511945],[166.916077,-0.499444],[166.920258,-0.496667],[166.930542,-0.493333],[166.948303,-0.496667],[166.953033,-0.499444],[166.958588,-0.506389],[166.958008,-0.513333],[166.955811,-0.518611],[166.9422,-0.544722],[166.938873,-0.548889],[166.935242,-0.551667],[166.929138,-0.552222]]]}}]}';
    }
}
