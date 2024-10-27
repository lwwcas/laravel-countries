<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class TV_Tuvalu extends CountrySeeder
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
        $this->name = 'Tuvalu';

        // Set the country's official name
        $this->official_name = 'Tuvalu';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'TV';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'TUV';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '798';

        // Set the international dialing code
        $this->international_phone = '688';

        // Define the languages spoken in the country
        $this->languages = ['tv', 'en']; // Tuvaluan and English are the official languages

        // Define the top-level domain(s)
        $this->tld = ['.tv'];

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
        $this->internet_penetration = '30%'; // Low internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = null; // No dedicated cybersecurity agency

        // List popular web technologies in Tuvalu
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'TV';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '2110297';

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
        $this->population = 11792; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 26; // km²

        // Set the capital city
        $this->capital = 'Funafuti';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Pacific/Funafuti',
                // Standard time offset
                'standard_time' => 'UTC+12',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1978-10-01'; // Independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Pacific Islands Forum (PIF)',
            'World Trade Organization (WTO)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.04; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Church of Tuvalu)',
        ];

        // Describe the form of government
        $this->government = 'Unitary parliamentary republic under a constitutional monarchy';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport in Tuvalu

        // Define bordering countries
        $this->borders = []; // Tuvalu is an island nation with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇹🇻',
            // Unicode code points
            'uCode' => 'U+1F1F9 U+1F1FB',
            // HTML entities
            'html' => '&#x1F1F9;&#x1F1FB;',
            // CSS entities
            'css' => '\\1F1F9\\1F1FB',
            // Decimal Unicode entities
            'decimal' => '&#127481;&#127483;',
            // Direct UTF-8 string
            'utf8' => '🇹🇻',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF9\uD83C\uDDFB',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-tv:',
            // Hexadecimal entity
            'hex' => '&#x1F1F9;&#x1F1FB;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#00247D',
                // RGB color values
                'rgb' => '0,36,125',
                // CMYK color values
                'cmyk' => '100,71,0,49',
                // HSL color values
                'hsl' => '220°,100%,25%',
                // HSV color values
                'hsv' => '220°,100%,49%',
                // Pantone color code
                'pantone' => '280 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
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
                'hsl' => '48°,100%,50%',
                // HSV color values
                'hsv' => '48°,100%,100%',
                // Pantone color code
                'pantone' => '109 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#CF142B',
                // RGB color values
                'rgb' => '207,20,43',
                // CMYK color values
                'cmyk' => '0,90,79,19',
                // HSL color values
                'hsl' => '353°,81%,44%',
                // HSV color values
                'hsv' => '353°,90%,81%',
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
            'latitude' => '-7.1095',
            // Longitude in decimal degrees
            'longitude' => '179.1948',
            // Degrees with decimal
            'dd' => '7.1095° S, 179.1948° E',
            // Degrees, minutes, seconds
            'dms' => '7°6\'34.20" S, 179°11\'41.28" E',
            // Degrees and decimal minutes
            'dm' => '7°6.57\' S, 179°11.688\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"tv"},"geometry":{"type":"MultiPolygon","coordinates":[[[[179.222366,-8.554146],[179.213226,-8.561292],[179.198151,-8.46999],[179.200928,-8.46482],[179.203705,-8.46244],[179.206879,-8.464428],[179.218384,-8.48189],[179.225143,-8.49222],[179.231094,-8.50492],[179.232285,-8.51842],[179.231491,-8.5335],[179.228317,-8.543427],[179.222366,-8.554146]]],[[[178.366913,-8.06278],[178.364136,-8.066666],[178.358002,-8.06611],[178.355804,-8.06139],[178.359955,-8.045],[178.366058,-8.030834],[178.36969,-8.0275],[178.374969,-8.028889],[178.37439,-8.03639],[178.366913,-8.06278]]],[[[178.397766,-8.015278],[178.392761,-8.016666],[178.390259,-8.0125],[178.39151,-8],[178.394135,-7.995555],[178.397766,-7.99278],[178.403046,-7.99139],[178.40802,-7.993333],[178.406921,-8],[178.406647,-8.00361],[178.401642,-8.011946],[178.397766,-8.015278]]],[[[178.700531,-7.48222],[178.695801,-7.48417],[178.690247,-7.48278],[178.687469,-7.47889],[178.686096,-7.47333],[178.687469,-7.468056],[178.690796,-7.464445],[178.700531,-7.468611],[178.702759,-7.47194],[178.703308,-7.47806],[178.700531,-7.48222]]],[[[177.158875,-7.18778],[177.156647,-7.19194],[177.150543,-7.191388],[177.146362,-7.18861],[177.143585,-7.18444],[177.141663,-7.179722],[177.142212,-7.17361],[177.150543,-7.175],[177.158875,-7.18778]]],[[[176.310242,-6.28556],[176.306366,-6.28833],[176.300812,-6.286944],[176.296631,-6.28333],[176.295258,-6.278056],[176.295258,-6.271111],[176.299988,-6.2625],[176.303589,-6.25889],[176.308868,-6.2575],[176.311646,-6.26167],[176.314423,-6.276112],[176.313019,-6.281389],[176.310242,-6.28556]]],[[[177.295807,-6.11389],[177.290253,-6.11444],[177.284698,-6.11333],[177.278046,-6.10639],[177.278046,-6.099444],[177.281372,-6.089444],[177.308868,-6.09889],[177.308014,-6.105],[177.304688,-6.10833],[177.300537,-6.11167],[177.295807,-6.11389]]],[[[176.139709,-5.69056],[176.136383,-5.69389],[176.130249,-5.69333],[176.125244,-5.68444],[176.126617,-5.679167],[176.129395,-5.675],[176.135529,-5.67555],[176.13916,-5.68444],[176.139709,-5.69056]]],[[[176.08136,-5.665277],[176.077454,-5.66806],[176.070526,-5.6675],[176.066376,-5.665277],[176.068573,-5.66056],[176.079407,-5.65778],[176.083588,-5.66056],[176.08136,-5.665277]]]]}}]}';
    }
}
