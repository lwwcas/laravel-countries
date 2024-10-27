<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class RE_Reunion extends CountrySeeder
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
        $this->name = 'Réunion';

        // Set the country's official name
        $this->official_name = 'Réunion Island';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'RE';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'REU';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '638';

        // Set the international dialing code
        $this->international_phone = '262';

        // Define the languages spoken in the country
        $this->languages = ['fr']; // French is the official language

        // Define the top-level domain(s)
        $this->tld = ['.re'];

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
        $this->cybersecurity_agency = 'Agence nationale de la sécurité des systèmes d\'information (ANSSI)';

        // List popular web technologies in Réunion
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'RE';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '935317';

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
        $this->population = 859959; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 2511; // km²

        // Set the capital city
        $this->capital = 'Saint-Denis';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Indian/Reunion',
                // Standard time offset
                'standard_time' => 'UTC+4',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Réunion is an overseas department of France

        // List international organizations the country is part of
        $this->international_organizations = [
            'European Union (EU)',
            'United Nations (as part of France)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 18.3; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism)',
            'Hinduism',
            'Islam',
        ];

        // Describe the form of government
        $this->government = 'Overseas department and region of France';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport in Réunion

        // Define bordering countries
        $this->borders = []; // Réunion is an island and has no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇷🇪',
            // Unicode code points
            'uCode' => 'U+1F1F7 U+1F1EA',
            // HTML entities
            'html' => '&#x1F1F7;&#x1F1EA;',
            // CSS entities
            'css' => '\\1F1F7\\1F1EA',
            // Decimal Unicode entities
            'decimal' => '&#127479;&#127466;',
            // Direct UTF-8 string
            'utf8' => '🇷🇪',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF7\uD83C\uDDEA',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-re:',
            // Hexadecimal entity
            'hex' => '&#x1F1F7;&#x1F1EA;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#002395',
                // RGB color values
                'rgb' => '0,35,149',
                // CMYK color values
                'cmyk' => '100,76,0,42',
                // HSL color values
                'hsl' => '224°,100%,29%',
                // HSV color values
                'hsv' => '224°,100%,58%',
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
                'hex' => '#ED2939',
                // RGB color values
                'rgb' => '237,41,57',
                // CMYK color values
                'cmyk' => '0,83,76,7',
                // HSL color values
                'hsl' => '354°,83%,55%',
                // HSV color values
                'hsv' => '354°,83%,93%',
                // Pantone color code
                'pantone' => 'Red 032 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '-21.1151',
            // Longitude in decimal degrees
            'longitude' => '55.5364',
            // Degrees with decimal
            'dd' => '21.1151° S, 55.5364° E',
            // Degrees, minutes, seconds
            'dms' => '21°6\'54.36" S, 55°32\'11.04" E',
            // Degrees and decimal minutes
            'dm' => '21°6.906\' S, 55°32.184\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"re"},"geometry":{"type":"Polygon","coordinates":[[[55.709999,-20.998058],[55.744995,-21.057503],[55.783607,-21.103336],[55.787216,-21.10667],[55.800278,-21.11528],[55.820831,-21.123611],[55.839165,-21.127224],[55.844994,-21.128891],[55.849159,-21.131668],[55.851387,-21.136391],[55.85305,-21.168613],[55.825554,-21.319447],[55.823883,-21.324722],[55.821106,-21.328892],[55.806938,-21.341667],[55.793327,-21.349724],[55.787498,-21.351112],[55.721939,-21.364445],[55.674164,-21.37389],[55.659439,-21.373611],[55.533333,-21.354725],[55.427773,-21.3125],[55.351944,-21.274445],[55.34333,-21.268612],[55.293327,-21.20639],[55.229721,-21.076389],[55.225555,-21.06139],[55.219719,-21.027779],[55.221382,-21.022224],[55.294441,-20.921669],[55.405273,-20.868893],[55.414993,-20.865559],[55.448883,-20.856392],[55.456108,-20.85667],[55.570831,-20.878891],[55.612221,-20.888615],[55.657494,-20.901669],[55.662498,-20.903614],[55.669716,-20.910557],[55.687775,-20.928059],[55.697777,-20.945835],[55.702774,-20.955002],[55.705551,-20.965836],[55.709999,-20.998058]]]}}]}';
    }
}
