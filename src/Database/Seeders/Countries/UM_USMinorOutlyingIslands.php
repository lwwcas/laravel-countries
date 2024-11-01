<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class UM_USMinorOutlyingIslands extends CountrySeeder
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
        $this->name = 'United States Minor Outlying Islands';

        // Set the country's official name
        $this->official_name = 'United States Minor Outlying Islands';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'UM';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'UMI';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '581';

        // Set the international dialing code
        $this->international_phone = null; // No specific international dialing code

        // Define the languages spoken in the territory
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.um'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => 'Unknown', // Not widely applicable
            // Average mobile connection speed
            'average_speed_mobile' => 'Unknown', // Not widely applicable
        ];

        // Define internet penetration rate
        $this->internet_penetration = 'Unknown'; // Data not available

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = null; // No specific cybersecurity agency

        // List popular web technologies in the United States Minor Outlying Islands
        $this->popular_technologies = []; // No specific data available

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'UM';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '5854968';

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
            'coins_main' => ['1', '5', '10', '25'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '25'],
        ];

        // Set the population
        $this->population = 300; // Approximately as per recent estimates

        // Set the area in square kilometers
        $this->area = 34.2; // km² (combined area of all islands)

        // Set the capital city
        $this->capital = null; // No official capital city, as these are unincorporated territories

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Pacific/Wake',
                // Standard time offset
                'standard_time' => 'UTC+12',
                // No daylight saving time observed
            ],
            [
                // Time zone identifier
                'timezone_id' => 'Pacific/Midway',
                // Standard time offset
                'standard_time' => 'UTC-11',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // No independence, as it is a U.S. territory

        // List international organizations the country is part of
        $this->international_organizations = []; // Not applicable for the United States Minor Outlying Islands

        // Set the GDP in billions of USD
        $this->gdp = null; // Not applicable

        // List the predominant religions
        $this->religions = []; // No significant population data

        // Describe the form of government
        $this->government = 'Unincorporated territory of the United States';

        // Set the national sport
        $this->national_sport = null; // No specific national sport

        // Define bordering countries
        $this->borders = []; // The United States Minor Outlying Islands are isolated islands with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇺🇲',
            // Unicode code points
            'uCode' => 'U+1F1FA U+1F1F2',
            // HTML entities
            'html' => '&#x1F1FA;&#x1F1F2;',
            // CSS entities
            'css' => '\\1F1FA\\1F1F2',
            // Decimal Unicode entities
            'decimal' => '&#127482;&#127474;',
            // Direct UTF-8 string
            'utf8' => '🇺🇲',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDFA\uD83C\uDDF2',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-um:',
            // Hexadecimal entity
            'hex' => '&#x1F1FA;&#x1F1F2;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#B22234',
                // RGB color values
                'rgb' => '178,34,52',
                // CMYK color values
                'cmyk' => '0,81,76,30',
                // HSL color values
                'hsl' => '350°,68%,42%',
                // HSV color values
                'hsv' => '350°,81%,70%',
                // Pantone color code
                'pantone' => '193 C',
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
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#3C3B6E',
                // RGB color values
                'rgb' => '60,59,110',
                // CMYK color values
                'cmyk' => '45,45,0,57',
                // HSL color values
                'hsl' => '239°,30%,33%',
                // HSV color values
                'hsv' => '239°,46%,43%',
                // Pantone color code
                'pantone' => '281 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '19.2823',
            // Longitude in decimal degrees
            'longitude' => '166.6470',
            // Degrees with decimal
            'dd' => '19.2823° N, 166.6470° E',
            // Degrees, minutes, seconds
            'dms' => '19°16\'56.28" N, 166°38\'49.20" E',
            // Degrees and decimal minutes
            'dm' => '19°16.938\' N, 166°38.82\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"um"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-160.021149,-0.398056],[-160.028107,-0.398056],[-160.039734,-0.395278],[-160.047241,-0.38917],[-160.048615,-0.38361],[-160.041718,-0.376667],[-160.036987,-0.374722],[-160.030853,-0.373889],[-160.017792,-0.374722],[-160.00946,-0.38028],[-160.00946,-0.38917],[-160.010834,-0.394445],[-160.015015,-0.39722],[-160.021149,-0.398056]]],[[[-176.456146,0.21583],[-176.461426,0.215278],[-176.46698,0.216667],[-176.468323,0.22222],[-176.459991,0.2275],[-176.453918,0.226111],[-176.453369,0.22083300000014],[-176.456146,0.21583]]],[[[-176.632202,0.793055],[-176.636169,0.79027800000011],[-176.641693,0.79166700000013],[-176.64447,0.79555],[-176.645844,0.80111100000011],[-176.64505,0.807222],[-176.643097,0.812778],[-176.637512,0.81222],[-176.632751,0.80861],[-176.629974,0.797778],[-176.632202,0.793055]]],[[[-169.522522,16.728882],[-169.53894,16.724159],[-169.543884,16.726379],[-169.542511,16.728882],[-169.537537,16.731106],[-169.531708,16.732491],[-169.52533,16.731663],[-169.522522,16.728882]]],[[[166.646362,19.279442],[166.63916,19.279442],[166.613861,19.297218],[166.607452,19.304996],[166.610504,19.30916],[166.627594,19.32458],[166.648041,19.318607],[166.653046,19.316387],[166.657471,19.31361],[166.660248,19.309441],[166.662201,19.297775],[166.662476,19.284443],[166.65802,19.28194],[166.652191,19.28055],[166.646362,19.279442]]],[[[-177.334442,28.194157],[-177.342224,28.193886],[-177.341675,28.196663],[-177.326111,28.210548],[-177.321686,28.213608],[-177.318054,28.206383],[-177.317505,28.200829],[-177.322266,28.197773],[-177.334442,28.194157]]],[[[-177.388062,28.186378],[-177.393341,28.184158],[-177.395844,28.187492],[-177.389771,28.212769],[-177.386169,28.216385],[-177.376923,28.221104],[-177.370026,28.22193],[-177.363068,28.22166],[-177.358032,28.21916],[-177.362762,28.20583],[-177.366394,28.202213],[-177.388062,28.186378]]]]}}]}';
    }
}
