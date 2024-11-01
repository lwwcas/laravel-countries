<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class SZ_Swaziland extends CountrySeeder
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
        $this->name = 'Eswatini';

        // Set the country's official name
        $this->official_name = 'Kingdom of Swaziland'; // Currently known as the Kingdom of Eswatini

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'SZ';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'SWZ';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '748';

        // Set the international dialing code
        $this->international_phone = '268';

        // Define the languages spoken in the country
        $this->languages = ['en', 'ss']; // English and Swati (Siswati) are official languages

        // Define the top-level domain(s)
        $this->tld = ['.sz'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '10 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '5 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '30%'; // Low internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Eswatini Communications Commission (ESCCOM)';

        // List popular web technologies in Eswatini
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'SW';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '934841';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Swazi lilangeni',
            // Currency code
            'code' => 'SZL',
            // Currency symbol
            'symbol' => 'L',
            // Main unit
            'main_unit' => 'lilangeni',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['10', '20', '50', '100', '200'],
            // Main coins
            'coins_main' => ['1', '2', '5'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '20', '50'],
        ];

        // Set the population
        $this->population = 1160164; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 17364; // km²

        // Set the capital cities
        $this->capital = 'Mbabane';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Africa/Mbabane',
                // Standard time offset
                'standard_time' => 'UTC+2',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1968-09-06'; // Independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'African Union (AU)',
            'Southern African Development Community (SADC)',
            'Commonwealth of Nations',
            'World Trade Organization (WTO)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 4.7; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Zionism, Roman Catholicism)',
        ];

        // Describe the form of government
        $this->government = 'Absolute monarchy';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport in Eswatini

        // Define bordering countries
        $this->borders = [
            ['name' => 'South Africa', 'iso_alpha_2' => 'ZA'],
            ['name' => 'Mozambique', 'iso_alpha_2' => 'MZ'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇸🇿',
            // Unicode code points
            'uCode' => 'U+1F1F8 U+1F1FF',
            // HTML entities
            'html' => '&#x1F1F8;&#x1F1FF;',
            // CSS entities
            'css' => '\\1F1F8\\1F1FF',
            // Decimal Unicode entities
            'decimal' => '&#127480;&#127487;',
            // Direct UTF-8 string
            'utf8' => '🇸🇿',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF8\uD83C\uDDFF',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-sz:',
            // Hexadecimal entity
            'hex' => '&#x1F1F8;&#x1F1FF;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#0033A0',
                // RGB color values
                'rgb' => '0,51,160',
                // CMYK color values
                'cmyk' => '100,68,0,37',
                // HSL color values
                'hsl' => '225°,100%,31%',
                // HSV color values
                'hsv' => '225°,100%,63%',
                // Pantone color code
                'pantone' => '286 C',
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
                'hex' => '#D62718',
                // RGB color values
                'rgb' => '214,39,24',
                // CMYK color values
                'cmyk' => '0,82,89,16',
                // HSL color values
                'hsl' => '5°,79%,47%',
                // HSV color values
                'hsv' => '5°,89%,84%',
                // Pantone color code
                'pantone' => '1795 C',
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
                'name' => 'Black',
                // Web color name
                'web_name' => 'black',
                // Hexadecimal color code
                'hex' => '#000000',
                // RGB color values
                'rgb' => '0,0,0',
                // CMYK color values
                'cmyk' => '0,0,0,100',
                // HSL color values
                'hsl' => '0°,0%,0%',
                // HSV color values
                'hsv' => '0°,0%,0%',
                // Pantone color code
                'pantone' => 'Black',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '-26.5225',
            // Longitude in decimal degrees
            'longitude' => '31.4659',
            // Degrees with decimal
            'dd' => '26.5225° S, 31.4659° E',
            // Degrees, minutes, seconds
            'dms' => '26°31\'21" S, 31°27\'57.24" E',
            // Degrees and decimal minutes
            'dm' => '26°31.35\' S, 31°27.954\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"sz"},"geometry":{"type":"Polygon","coordinates":[[[30.902048,-26.305254],[30.969444,-26.238335],[31.005554,-26.18417],[31.051109,-26.112782],[31.063889,-26.091393],[31.076942,-26.063057],[31.095554,-26.020836],[31.107777,-25.9925],[31.110802,-25.983261],[31.125275,-25.928337],[31.12833,-25.913891],[31.320553,-25.75528],[31.33083,-25.751392],[31.421665,-25.728336],[31.590832,-25.827503],[31.733887,-25.911392],[31.769951,-25.933033],[31.81361,-25.958889],[31.878052,-25.995556],[31.96851,-25.95784],[31.998608,-25.990837],[32.074715,-26.037224],[32.10083,-26.148613],[32.10305,-26.162224],[32.061104,-26.261391],[32.07222,-26.393333],[32.089165,-26.425003],[32.123055,-26.492226],[32.129166,-26.505836],[32.1325,-26.796669],[32.1334,-26.839626],[32.096664,-26.813057],[32.086105,-26.808891],[32.079994,-26.807781],[32.021683,-26.806095],[32.009491,-26.808064],[31.967777,-27.053059],[31.958611,-27.112782],[31.960546,-27.142929],[31.964722,-27.209446],[31.96833,-27.264168],[31.984951,-27.289452],[31.987499,-27.316113],[31.983608,-27.316669],[31.925278,-27.316391],[31.762218,-27.315556],[31.680553,-27.315002],[31.517498,-27.313057],[31.413609,-27.281113],[31.278288,-27.239218],[31.218887,-27.220837],[31.161663,-27.203056],[31.056942,-27.076946],[30.96833,-26.960835],[30.910553,-26.804447],[30.899443,-26.77195],[30.888332,-26.786667],[30.884998,-26.790836],[30.876389,-26.796391],[30.871387,-26.799168],[30.825554,-26.816391],[30.821941,-26.814724],[30.818886,-26.810558],[30.816666,-26.799168],[30.808846,-26.743587],[30.803608,-26.702503],[30.802498,-26.681114],[30.800278,-26.611946],[30.798332,-26.542778],[30.802219,-26.468391],[30.808609,-26.447224],[30.829441,-26.390835],[30.902048,-26.305254]]]}}]}';
    }
}
