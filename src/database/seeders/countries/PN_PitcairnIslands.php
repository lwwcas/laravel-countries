<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class PN_PitcairnIslands extends CountrySeeder
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
        $this->name = 'Pitcairn Islands';

        // Set the country's official name
        $this->official_name = 'Pitcairn Group of Islands';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'PN';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'PCN';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '612';

        // Set the international dialing code
        $this->international_phone = '64'; // Same as New Zealand

        // Define the languages spoken in the country
        $this->languages = ['en', 'pih']; // English and Pitkern, a creole language

        // Define the top-level domain(s)
        $this->tld = ['.pn'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '2 Mbps', // Very slow due to remote location
            // Average mobile connection speed
            'average_speed_mobile' => 'No mobile network', // No mobile network coverage
        ];

        // Define internet penetration rate
        $this->internet_penetration = '100%'; // Internet is available to all residents

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Pitcairn Islands Administration';

        // List popular web technologies in the Pitcairn Islands
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'PC';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '4030699';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'New Zealand dollar',
            // Currency code
            'code' => 'NZD',
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
            'coins_sub' => ['10', '20', '50'],
        ];

        // Set the population
        $this->population = 47; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 47; // km²

        // Set the capital city
        $this->capital = 'Adamstown';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Pacific/Pitcairn',
                // Standard time offset
                'standard_time' => 'UTC-8',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Pitcairn is a British Overseas Territory

        // List international organizations the country is part of
        $this->international_organizations = [
            'British Overseas Territories',
            'Pacific Community (SPC)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.004; // GDP in billions of USD, based mainly on fishing and postage stamps

        // List the predominant religions
        $this->religions = [
            'Christianity (Seventh-day Adventist Church)',
        ];

        // Describe the form of government
        $this->government = 'British Overseas Territory';

        // Set the national sport
        $this->national_sport = 'No official national sport'; // Due to the small population, there is no organized national sport

        // Define bordering countries
        $this->borders = []; // Pitcairn is an island and has no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇵🇳',
            // Unicode code points
            'uCode' => 'U+1F1F5 U+1F1F3',
            // HTML entities
            'html' => '&#x1F1F5;&#x1F1F3;',
            // CSS entities
            'css' => '\\1F1F5\\1F1F3',
            // Decimal Unicode entities
            'decimal' => '&#127477;&#127475;',
            // Direct UTF-8 string
            'utf8' => '🇵🇳',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF5\uD83C\uDDF3',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-pn:',
            // Hexadecimal entity
            'hex' => '&#x1F1F5;&#x1F1F3;',
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
                'hsl' => '217°,100%,25%',
                // HSV color values
                'hsv' => '217°,100%,49%',
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
                'hsl' => '350°,83%,45%',
                // HSV color values
                'hsv' => '350°,90%,81%',
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
            'latitude' => '-25.0666',
            // Longitude in decimal degrees
            'longitude' => '-130.1004',
            // Degrees with decimal
            'dd' => '25.0666° S, 130.1004° W',
            // Degrees, minutes, seconds
            'dms' => '25°3\'59.76" S, 130°6\'1.44" W',
            // Degrees and decimal minutes
            'dm' => '25°3.996\' S, 130°6.024\' W',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"pn"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-130.076935,-25.07972],[-130.08139,-25.08223],[-130.088043,-25.081673],[-130.093323,-25.07972],[-130.10083,-25.07611],[-130.104431,-25.07278],[-130.107483,-25.068058],[-130.107483,-25.063335],[-130.104431,-25.058617],[-130.10083,-25.05584],[-130.093872,-25.05528],[-130.08725,-25.05611],[-130.065002,-25.063335],[-130.061951,-25.06694],[-130.064209,-25.071388],[-130.076935,-25.07972]]],[[[-124.780853,-24.675835],[-124.787781,-24.676666],[-124.792801,-24.67444],[-124.796661,-24.67111],[-124.796082,-24.667503],[-124.795853,-24.66611],[-124.790573,-24.66416],[-124.783142,-24.66279],[-124.772522,-24.66695],[-124.771133,-24.67111],[-124.775574,-24.67389],[-124.780853,-24.675835]]],[[[-128.289185,-24.40972],[-128.29306,-24.41305],[-128.29892,-24.412781],[-128.304199,-24.41056],[-128.31308,-24.40472],[-128.32782,-24.390556],[-128.34198,-24.36972],[-128.344177,-24.364723],[-128.346954,-24.35361],[-128.34726,-24.340557],[-128.344757,-24.33584],[-128.336945,-24.329166],[-128.332214,-24.32727],[-128.326935,-24.326115],[-128.313324,-24.325],[-128.307526,-24.32667],[-128.303894,-24.33028],[-128.299469,-24.338615],[-128.293884,-24.3525],[-128.286682,-24.386391],[-128.285553,-24.39861],[-128.286682,-24.40472],[-128.289185,-24.40972]]]]}}]}';
    }
}
