<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class LI_Liechtenstein extends CountrySeeder
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
        $this->name = 'Liechtenstein';

        // Set the country's official name
        $this->official_name = 'Principality of Liechtenstein';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'LI';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'LIE';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '438';

        // Set the international dialing code
        $this->international_phone = '423';

        // Define the languages spoken in the country
        $this->languages = ['de']; // German is the official language

        // Define the top-level domain(s)
        $this->tld = ['.li'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '85 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '40 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '95%'; // High internet penetration

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Liechtenstein National Cybersecurity Center';

        // List popular web technologies in Liechtenstein
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'LS';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3042058';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Swiss franc',
            // Currency code
            'code' => 'CHF',
            // Currency symbol
            'symbol' => 'CHF',
            // Main unit
            'main_unit' => 'franc',
            // Subunit
            'sub_unit' => 'rappen',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['10', '20', '50', '100', '200', '1000'],
            // Main coins
            'coins_main' => ['1', '2', '5'],
            // Subunit coins (only numbers)
            'coins_sub' => ['5', '10', '20', '50'],
        ];

        // Set the population
        $this->population = 38747; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 160; // km²

        // Set the capital city
        $this->capital = 'Vaduz';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Europe/Vaduz',
                // Standard time offset
                'standard_time' => 'UTC+1',
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC+2',
            ],
        ];

        // Set the independence day
        $this->independence_day = '1866-07-12'; // Independence from the German Confederation

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'European Free Trade Association (EFTA)',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'Schengen Area',
            'Council of Europe',
            'Organization for Security and Co-operation in Europe (OSCE)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 6.8; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Roman Catholicism',
        ];

        // Describe the form of government
        $this->government = 'Constitutional monarchy with a parliamentary system';

        // Set the national sport
        $this->national_sport = 'Skiing'; // Skiing is popular in Liechtenstein

        // Define bordering countries
        $this->borders = [
            ['name' => 'Switzerland', 'iso_alpha_2' => 'CH'],
            ['name' => 'Austria', 'iso_alpha_2' => 'AT'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇱🇮',
            // Unicode code points
            'uCode' => 'U+1F1F1 U+1F1EE',
            // HTML entities
            'html' => '&#x1F1F1;&#x1F1EE;',
            // CSS entities
            'css' => '\\1F1F1\\1F1EE',
            // Decimal Unicode entities
            'decimal' => '&#127473;&#127470;',
            // Direct UTF-8 string
            'utf8' => '🇱🇮',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF1\uD83C\uDDFE',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-li:',
            // Hexadecimal entity
            'hex' => '&#x1F1F1;&#x1F1EE;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#002F6C',
                // RGB color values
                'rgb' => '0,47,108',
                // CMYK color values
                'cmyk' => '100,56,0,58',
                // HSL color values
                'hsl' => '210°,100%,21%',
                // HSV color values
                'hsv' => '210°,100%,42%',
                // Pantone color code
                'pantone' => '287 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#C8102E',
                // RGB color values
                'rgb' => '200,16,46',
                // CMYK color values
                'cmyk' => '0,92,77,22',
                // HSL color values
                'hsl' => '348°,85%,42%',
                // HSV color values
                'hsv' => '348°,92%,78%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Gold',
                // Web color name
                'web_name' => 'gold',
                // Hexadecimal color code
                'hex' => '#FFD700',
                // RGB color values
                'rgb' => '255,215,0',
                // CMYK color values
                'cmyk' => '0,16,100,0',
                // HSL color values
                'hsl' => '51°,100%,50%',
                // HSV color values
                'hsv' => '51°,100%,100%',
                // Pantone color code
                'pantone' => '116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '47.166',
            // Longitude in decimal degrees
            'longitude' => '9.5554',
            // Degrees with decimal
            'dd' => '47.166° N, 9.5554° E',
            // Degrees, minutes, seconds
            'dms' => '47°9\'57.6" N, 9°33\'19.44" E',
            // Degrees and decimal minutes
            'dm' => '47°9.96\' N, 9°33.324\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"li"},"geometry":{"type":"Polygon","coordinates":[[[9.533569,47.274544],[9.566387,47.243889],[9.622776,47.150551],[9.633888,47.130554],[9.63611,47.103607],[9.634998,47.094994],[9.627222,47.086388],[9.610277,47.070274],[9.603611,47.065826],[9.598635,47.063835],[9.544722,47.07],[9.538055,47.07],[9.506388,47.06472],[9.485277,47.061104],[9.474637,47.057457],[9.510277,47.092499],[9.512499,47.100273],[9.512777,47.109444],[9.511389,47.121666],[9.505554,47.139999],[9.49861,47.15361],[9.489721,47.16555],[9.484444,47.179718],[9.484165,47.192215],[9.485832,47.200272],[9.491388,47.215271],[9.502222,47.231384],[9.533569,47.274544]]]}}]}';
    }
}
