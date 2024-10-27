<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class PM_SaintPierreandMiquelon extends CountrySeeder
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
        $this->name = 'Saint Pierre and Miquelon';

        // Set the country's official name
        $this->official_name = 'Saint Pierre and Miquelon';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'PM';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'SPM';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '666';

        // Set the international dialing code
        $this->international_phone = '508';

        // Define the languages spoken in the country
        $this->languages = ['fr']; // French is the official language

        // Define the top-level domain(s)
        $this->tld = ['.pm'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '30 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '10 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '75%'; // High internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'CERT Saint Pierre and Miquelon';

        // List popular web technologies in Saint Pierre and Miquelon
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'SP';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3424932';

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
        $this->population = 6000; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 242; // km²

        // Set the capital city
        $this->capital = 'Saint-Pierre';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/Miquelon',
                // Standard time offset
                'standard_time' => 'UTC-3',
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC-2',
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Saint Pierre and Miquelon is a territorial overseas collectivity of France

        // List international organizations the country is part of
        $this->international_organizations = [
            'Organisation internationale de la Francophonie (OIF)',
            'Overseas Countries and Territories Association (OCTA)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.215; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism)',
        ];

        // Describe the form of government
        $this->government = 'Territorial overseas collectivity of France';

        // Set the national sport
        $this->national_sport = 'Ice Hockey'; // Ice hockey is popular in Saint Pierre and Miquelon

        // Define bordering countries
        $this->borders = []; // Saint Pierre and Miquelon is an island and has no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇵🇲',
            // Unicode code points
            'uCode' => 'U+1F1F5 U+1F1F2',
            // HTML entities
            'html' => '&#x1F1F5;&#x1F1F2;',
            // CSS entities
            'css' => '\\1F1F5\\1F1F2',
            // Decimal Unicode entities
            'decimal' => '&#127477;&#127474;',
            // Direct UTF-8 string
            'utf8' => '🇵🇲',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF5\uD83C\uDDF2',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-pm:',
            // Hexadecimal entity
            'hex' => '&#x1F1F5;&#x1F1F2;',
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
                'hsl' => '212°,100%,32%',
                // HSV color values
                'hsv' => '212°,100%,64%',
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
                'cmyk' => '0,73,78,6',
                // HSL color values
                'hsl' => '4°,84%,57%',
                // HSV color values
                'hsv' => '4°,78%,94%',
                // Pantone color code
                'pantone' => 'Red 032 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '46.8852',
            // Longitude in decimal degrees
            'longitude' => '-56.3159',
            // Degrees with decimal
            'dd' => '46.8852° N, 56.3159° W',
            // Degrees, minutes, seconds
            'dms' => '46°53\'6.72" N, 56°18\'57.24" W',
            // Degrees and decimal minutes
            'dm' => '46°53.112\' N, 56°18.954\' W',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"pm"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-56.15083,46.758049],[-56.22028,46.74721],[-56.22666,46.750832],[-56.235001,46.759438],[-56.237221,46.763885],[-56.235832,46.76944],[-56.22583,46.77916],[-56.205,46.796661],[-56.19444,46.80527],[-56.188889,46.808884],[-56.182503,46.810547],[-56.17389,46.80999],[-56.16666,46.809158],[-56.15028,46.80555],[-56.144447,46.801384],[-56.145836,46.79639],[-56.15028,46.791107],[-56.14416,46.75972],[-56.15083,46.758049]]],[[[-56.271111,46.99416],[-56.275558,46.988884],[-56.28083,46.984436],[-56.28667,46.981102],[-56.29333,46.979431],[-56.29695,46.9836],[-56.29806,46.988327],[-56.30167,46.99277],[-56.339439,46.992493],[-56.346947,46.991104],[-56.34805,46.986382],[-56.33808,46.975746],[-56.32699,46.97224],[-56.30771,46.968151],[-56.30771,46.960556],[-56.314137,46.94537],[-56.31764,46.930767],[-56.31472,46.90416],[-56.31111,46.899719],[-56.30583,46.895828],[-56.28917,46.889717],[-56.273056,46.88916],[-56.25695,46.885551],[-56.242775,46.878876],[-56.237503,46.874992],[-56.235001,46.87027],[-56.23305,46.865273],[-56.23194,46.855827],[-56.23333,46.850273],[-56.236389,46.84444],[-56.241386,46.838326],[-56.246391,46.834717],[-56.33139,46.782768],[-56.3375,46.779991],[-56.34389,46.77833],[-56.368332,46.784721],[-56.37444,46.788887],[-56.394447,46.822495],[-56.39695,46.826942],[-56.398056,46.831665],[-56.39639,46.837212],[-56.391388,46.843323],[-56.38666,46.846939],[-56.37417,46.852219],[-56.35389,46.856102],[-56.347778,46.858887],[-56.3425,46.863052],[-56.33222,46.886383],[-56.33083,46.891663],[-56.32944,46.897217],[-56.32556,46.923882],[-56.32645,46.931938],[-56.32778,46.937771],[-56.33083,46.94833],[-56.35556,46.9886],[-56.36611,47.001938],[-56.385559,47.053047],[-56.39584,47.09166],[-56.398056,47.101387],[-56.39778,47.106659],[-56.390282,47.118881],[-56.38,47.12749],[-56.37417,47.131104],[-56.36111,47.135826],[-56.34722,47.136658],[-56.34472,47.13221],[-56.32584,47.0886],[-56.289444,47.070831],[-56.259727,47.05249],[-56.24944,47.044716],[-56.246391,47.039719],[-56.24722,47.034996],[-56.271111,46.99416]]]]}}]}';
    }
}
