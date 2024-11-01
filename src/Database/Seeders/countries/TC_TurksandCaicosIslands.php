<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class TC_TurksandCaicosIslands extends CountrySeeder
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
        $this->name = 'Turks and Caicos Islands';

        // Set the country's official name
        $this->official_name = 'Turks and Caicos Islands';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'TC';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'TCA';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '796';

        // Set the international dialing code
        $this->international_phone = '1-649';

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.tc'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '20 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '15 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '70%'; // High internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Turks and Caicos Telecommunications Commission';

        // List popular web technologies in Turks and Caicos Islands
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'TC';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3576916';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'United States dollar',
            // Currency code
            'code' => 'USD',
            // Currency symbol
            'symbol' => '$',
            // Main unit
            'main_unit' => 'dollar',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['1', '5', '10', '20', '50', '100'],
            // Main coins
            'coins_main' => ['1'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '25', '50'],
        ];

        // Set the population
        $this->population = 38718; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 948; // km²

        // Set the capital city
        $this->capital = 'Cockburn Town';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/Grand_Turk',
                // Standard time offset
                'standard_time' => 'UTC-5',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Turks and Caicos Islands is a British Overseas Territory

        // List international organizations the country is part of
        $this->international_organizations = [
            'Caribbean Community (CARICOM)',
            'International Organization for Standardization (ISO)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.917; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Protestantism)',
        ];

        // Describe the form of government
        $this->government = 'Constitutional monarchy under a parliamentary democracy (British Overseas Territory)';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport in Turks and Caicos Islands

        // Define bordering countries
        $this->borders = []; // Turks and Caicos Islands is an island nation with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇹🇨',
            // Unicode code points
            'uCode' => 'U+1F1F9 U+1F1E8',
            // HTML entities
            'html' => '&#x1F1F9;&#x1F1E8;',
            // CSS entities
            'css' => '\\1F1F9\\1F1E8',
            // Decimal Unicode entities
            'decimal' => '&#127481;&#127464;',
            // Direct UTF-8 string
            'utf8' => '🇹🇨',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF9\uD83C\uDDE8',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-tc:',
            // Hexadecimal entity
            'hex' => '&#x1F1F9;&#x1F1E8;',
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
                'cmyk' => '100,71,0,51',
                // HSL color values
                'hsl' => '219°,100%,24%',
                // HSV color values
                'hsv' => '219°,100%,49%',
                // Pantone color code
                'pantone' => '280 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
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
                'hsl' => '353°,82%,45%',
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
            'latitude' => '21.6940',
            // Longitude in decimal degrees
            'longitude' => '-71.7979',
            // Degrees with decimal
            'dd' => '21.6940° N, 71.7979° W',
            // Degrees, minutes, seconds
            'dms' => '21°41\'38.40" N, 71°47\'52.44" W',
            // Degrees and decimal minutes
            'dm' => '21°41.64\' N, 71°47.874\' W',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"tc"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-71.14029,21.431942],[-71.145844,21.430275],[-71.150009,21.433331],[-71.15028,21.445831],[-71.150558,21.47083],[-71.140015,21.50944],[-71.135559,21.511108],[-71.131393,21.50861],[-71.12973,21.503609],[-71.12779,21.448055],[-71.12807,21.441387],[-71.13167,21.437496],[-71.13583,21.434444],[-71.14029,21.431942]]],[[[-72.460556,21.62972],[-72.46584,21.628052],[-72.46806,21.645275],[-72.45668,21.699718],[-72.448624,21.70611],[-72.433624,21.713333],[-72.42862,21.71083],[-72.427505,21.698887],[-72.42862,21.69278],[-72.444458,21.649719],[-72.44667,21.644444],[-72.45668,21.63277],[-72.460556,21.62972]]],[[[-71.4689,21.655],[-71.47362,21.652775],[-71.47639,21.66333],[-71.47806,21.66833],[-71.480835,21.67277],[-71.49834,21.69694],[-71.505,21.704441],[-71.535,21.719444],[-71.53334,21.734444],[-71.466675,21.72416],[-71.462784,21.72083],[-71.460846,21.71611],[-71.45723,21.699718],[-71.45639,21.694164],[-71.456955,21.687222],[-71.46223,21.662777],[-71.46474,21.65833],[-71.4689,21.655]]],[[[-71.65779,21.82333],[-71.63779,21.78167],[-71.63362,21.772221],[-71.64362,21.74416],[-71.65362,21.739998],[-71.65889,21.739719],[-71.67418,21.75972],[-71.68085,21.76722],[-71.713058,21.787777],[-71.718903,21.789719],[-71.75,21.792221],[-71.75723,21.79277],[-71.769455,21.790833],[-71.796951,21.78361],[-71.802231,21.781944],[-71.81111,21.776386],[-71.816391,21.774719],[-71.823059,21.774441],[-71.827515,21.776386],[-71.84112,21.797497],[-71.84279,21.802498],[-71.85057,21.839722],[-71.85057,21.84583],[-71.84778,21.85472],[-71.69501,21.838886],[-71.68167,21.836388],[-71.670288,21.832775],[-71.66528,21.830276],[-71.66112,21.827221],[-71.65779,21.82333]]],[[[-72.26222,21.75111],[-72.27417,21.74166],[-72.287231,21.74416],[-72.30084,21.758888],[-72.32973,21.82694],[-72.327225,21.85583],[-72.29056,21.832222],[-72.247787,21.795555],[-72.24223,21.774441],[-72.25223,21.762775],[-72.26222,21.75111]]],[[[-71.88417,21.847221],[-71.881958,21.82361],[-71.88917,21.824165],[-71.90167,21.827221],[-72.029175,21.905],[-72.035843,21.938053],[-72.03334,21.94278],[-72.030014,21.946663],[-72.026672,21.949165],[-72.017227,21.953888],[-72.005,21.957775],[-71.973068,21.957222],[-71.94723,21.953053],[-71.917511,21.94583],[-71.912231,21.943333],[-71.90889,21.93972],[-71.906403,21.935276],[-71.88417,21.847221]]]]}}]}';
    }
}
