<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class WF_WallisandFutunaIslands extends CountrySeeder
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
        $this->name = 'Wallis and Futuna';

        // Set the country's official name
        $this->official_name = 'Territory of the Wallis and Futuna Islands';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'WF';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'WLF';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '876';

        // Set the international dialing code
        $this->international_phone = '681';

        // Define the languages spoken in the country
        $this->languages = ['fr']; // French is the official language

        // Define the top-level domain(s)
        $this->tld = ['.wf'];

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
        $this->internet_penetration = '50%'; // Moderate internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Agence Nationale de la Sécurité des Systèmes d’Information (ANSSI)';

        // List popular web technologies in Wallis and Futuna
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'WF';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '4034749';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'CFP franc',
            // Currency code
            'code' => 'XPF',
            // Currency symbol
            'symbol' => '₣',
            // Main unit
            'main_unit' => 'franc',
            // Subunit
            'sub_unit' => 'centime',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['500', '1000', '5000', '10000'],
            // Main coins
            'coins_main' => ['1', '2', '5', '10', '20', '50', '100'],
            // Subunit coins
            'coins_sub' => ['1', '2', '5', '10', '20', '50'],
        ];

        // Set the population
        $this->population = 11239; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 142; // km²

        // Set the capital city
        $this->capital = 'Mata-Utu';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Pacific/Wallis',
                // Standard time offset
                'standard_time' => 'UTC+12',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // French overseas territory, no independence day

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations (Observer)',
            'Pacific Islands Forum',
            'Organisation internationale de la Francophonie',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.06; // GDP in billions of USD (2023 estimates)

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism)',
        ];

        // Describe the form of government
        $this->government = 'French overseas collectivity';

        // Set the national sport
        $this->national_sport = 'Rugby'; // Rugby is popular in Wallis and Futuna

        // Define bordering countries (Wallis and Futuna has no land borders but shares maritime boundaries)
        $this->borders = [];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇼🇫',
            // Unicode code points
            'uCode' => 'U+1F1FC U+1F1EB',
            // HTML entities
            'html' => '&#x1F1FC;&#x1F1EB;',
            // CSS entities
            'css' => '\\1F1FC\\1F1EB',
            // Decimal Unicode entities
            'decimal' => '&#127484;&#127467;',
            // Direct UTF-8 string
            'utf8' => '🇼🇫',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDFC\uD83C\uDDEB',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-wf:',
            // Hexadecimal entity
            'hex' => '&#x1F1FC;&#x1F1EB;',
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
            'latitude' => '-13.7686',
            // Longitude in decimal degrees
            'longitude' => '-177.1566',
            // Degrees with decimal
            'dd' => '13.7686° S, 177.1566° W',
            // Degrees, minutes, seconds
            'dms' => '13°46\'7.02" S, 177°9\'23.76" W',
            // Degrees and decimal minutes
            'dm' => '13°46.117\' S, 177°9.396\' W',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"wf"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-178.042511,-14.31945],[-178.060822,-14.323891],[-178.134216,-14.31778],[-178.140564,-14.316389],[-178.1539,-14.308058],[-178.171112,-14.287781],[-178.177826,-14.278057],[-178.180878,-14.272779],[-178.188324,-14.25611],[-178.191101,-14.243334],[-178.189453,-14.23611],[-178.185577,-14.231668],[-178.177826,-14.23305],[-178.129974,-14.24694],[-178.124695,-14.250278],[-178.044769,-14.31444],[-178.042267,-14.316668],[-178.042511,-14.31945]]],[[[-176.161438,-13.35278],[-176.165039,-13.35305],[-176.167816,-13.35278],[-176.170319,-13.35111],[-176.177246,-13.34139],[-176.18808,-13.31361],[-176.191101,-13.286945],[-176.185822,-13.25778],[-176.183075,-13.24361],[-176.178345,-13.23222],[-176.160553,-13.21611],[-176.156158,-13.213614],[-176.15033,-13.214169],[-176.145844,-13.21806],[-176.123627,-13.25139],[-176.121948,-13.256392],[-176.121094,-13.26333],[-176.138611,-13.33833],[-176.140564,-13.34361],[-176.14447,-13.34667],[-176.161438,-13.35278]]]]}}]}';
    }
}
