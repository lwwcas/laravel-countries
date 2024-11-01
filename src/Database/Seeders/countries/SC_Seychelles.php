<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class SC_Seychelles extends CountrySeeder
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
        $this->name = 'Seychelles';

        // Set the country's official name
        $this->official_name = 'Republic of Seychelles';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'SC';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'SYC';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '690';

        // Set the international dialing code
        $this->international_phone = '248';

        // Define the languages spoken in the country
        $this->languages = ['fr', 'en', 'crs']; // French, English, and Seychellois Creole are official languages

        // Define the top-level domain(s)
        $this->tld = ['.sc'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '15 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '10 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '70%'; // High internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Seychelles National Information Services Agency (NISA)';

        // List popular web technologies in Seychelles
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'SEY';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '241170';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Seychellois rupee',
            // Currency code
            'code' => 'SCR',
            // Currency symbol
            'symbol' => '₨',
            // Main unit
            'main_unit' => 'rupee',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['10', '25', '50', '100', '500'],
            // Main coins
            'coins_main' => ['1', '5', '10'],
            // Subunit coins
            'coins_sub' => ['5', '10', '25'],
        ];

        // Set the population
        $this->population = 98347; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 459; // km²

        // Set the capital city
        $this->capital = 'Victoria';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Indian/Mahe',
                // Standard time offset
                'standard_time' => 'UTC+4',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1976-06-29'; // Independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'African Union (AU)',
            'Indian Ocean Commission (IOC)',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 1.6; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism, Anglicanism)',
        ];

        // Describe the form of government
        $this->government = 'Unitary presidential republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport in Seychelles

        // Define bordering countries
        $this->borders = []; // Seychelles is an island nation with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇸🇨',
            // Unicode code points
            'uCode' => 'U+1F1F8 U+1F1E8',
            // HTML entities
            'html' => '&#x1F1F8;&#x1F1E8;',
            // CSS entities
            'css' => '\\1F1F8\\1F1E8',
            // Decimal Unicode entities
            'decimal' => '&#127480;&#127464;',
            // Direct UTF-8 string
            'utf8' => '🇸🇨',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF8\uD83C\uDDE8',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-sc:',
            // Hexadecimal entity
            'hex' => '&#x1F1F8;&#x1F1E8;',
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
                'hsl' => '220°,100%,41%',
                // HSV color values
                'hsv' => '220°,100%,63%',
                // Pantone color code
                'pantone' => 'Reflex Blue C',
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
                'hex' => '#FF3333',
                // RGB color values
                'rgb' => '255,51,51',
                // CMYK color values
                'cmyk' => '0,80,80,0',
                // HSL color values
                'hsl' => '0°,100%,60%',
                // HSV color values
                'hsv' => '0°,100%,100%',
                // Pantone color code
                'pantone' => '185 C',
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
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#009739',
                // RGB color values
                'rgb' => '0,151,57',
                // CMYK color values
                'cmyk' => '100,0,100,41',
                // HSL color values
                'hsl' => '147°,100%,30%',
                // HSV color values
                'hsv' => '147°,100%,59%',
                // Pantone color code
                'pantone' => '348 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '-4.6796',
            // Longitude in decimal degrees
            'longitude' => '55.4919',
            // Degrees with decimal
            'dd' => '4.6796° S, 55.4919° E',
            // Degrees, minutes, seconds
            'dms' => '4°40\'46.56" S, 55°29\'30.84" E',
            // Degrees and decimal minutes
            'dm' => '4°40.776\' S, 55°29.514\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"sc"},"geometry":{"type":"MultiPolygon","coordinates":[[[[46.491386,-9.75445],[46.485832,-9.755001],[46.48027,-9.75361],[46.476944,-9.750278],[46.476105,-9.744167],[46.478333,-9.74028],[46.497498,-9.72139],[46.503609,-9.71667],[46.508331,-9.717779],[46.510033,-9.72],[46.511108,-9.72139],[46.511108,-9.72722],[46.50972,-9.73278],[46.508331,-9.737501],[46.503052,-9.745556],[46.496109,-9.752501],[46.491386,-9.75445]]],[[[46.510551,-9.396946],[46.476105,-9.4225],[46.465271,-9.42472],[46.452217,-9.425835],[46.446106,-9.42528],[46.41861,-9.41917],[46.405548,-9.41861],[46.395271,-9.42139],[46.333054,-9.43944],[46.322777,-9.44278],[46.269165,-9.46306],[46.263054,-9.4625],[46.240555,-9.45833],[46.23555,-9.45639],[46.223328,-9.448891],[46.219994,-9.445557],[46.211662,-9.433334],[46.206108,-9.41917],[46.204163,-9.400835],[46.204163,-9.389446],[46.210274,-9.396112],[46.214439,-9.405556],[46.217773,-9.40917],[46.238327,-9.42139],[46.264442,-9.429445],[46.270554,-9.43],[46.302216,-9.428057],[46.365273,-9.41306],[46.425552,-9.386112],[46.44666,-9.35028],[46.448883,-9.34556],[46.45166,-9.345],[46.468048,-9.34889],[46.48305,-9.35361],[46.507774,-9.362501],[46.515831,-9.36778],[46.51944,-9.371113],[46.521385,-9.375834],[46.52222,-9.38139],[46.51722,-9.390278],[46.510551,-9.396946]]],[[[46.413887,-9.35889],[46.407776,-9.359724],[46.34111,-9.35694],[46.284439,-9.351667],[46.279442,-9.35028],[46.276665,-9.34611],[46.278053,-9.34083],[46.280273,-9.33861],[46.29666,-9.334167],[46.309715,-9.33333],[46.344719,-9.331945],[46.36305,-9.33333],[46.38721,-9.33611],[46.421387,-9.34139],[46.426941,-9.342779],[46.426941,-9.34556],[46.418053,-9.35639],[46.413887,-9.35889]]],[[[56.28222,-7.134167],[56.247215,-7.19444],[56.245827,-7.189167],[56.253326,-7.15389],[56.25471,-7.148334],[56.275276,-7.11444],[56.27861,-7.110834],[56.28416,-7.11222],[56.28611,-7.11778],[56.285553,-7.12389],[56.28222,-7.134167]]],[[[55.535271,-4.763056],[55.53249,-4.789167],[55.526382,-4.788334],[55.522217,-4.78556],[55.511108,-4.77611],[55.47749,-4.740556],[55.376106,-4.627223],[55.374718,-4.62306],[55.44527,-4.558056],[55.45916,-4.55139],[55.468605,-4.55194],[55.474998,-4.55944],[55.537216,-4.66139],[55.539162,-4.66611],[55.54055,-4.68389],[55.535271,-4.763056]]],[[[55.246109,-4.50694],[55.240555,-4.50833],[55.236382,-4.50694],[55.221939,-4.48028],[55.217216,-4.47139],[55.21916,-4.459723],[55.22138,-4.455],[55.227493,-4.449445],[55.231667,-4.448056],[55.252777,-4.455],[55.255554,-4.459167],[55.265831,-4.47611],[55.26722,-4.481668],[55.258888,-4.499445],[55.255554,-4.50278],[55.246109,-4.50694]]],[[[55.77583,-4.34833],[55.770271,-4.34972],[55.742775,-4.343056],[55.731941,-4.340279],[55.70166,-4.31833],[55.694717,-4.31139],[55.687218,-4.298612],[55.685829,-4.29306],[55.687218,-4.2875],[55.701111,-4.280834],[55.707222,-4.280001],[55.712776,-4.28139],[55.77166,-4.31556],[55.77916,-4.324445],[55.77833,-4.344445],[55.77583,-4.34833]]]]}}]}';
    }
}
