<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class MO_MacauSARChina extends CountrySeeder
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
    public ?string $region = 'asia';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Macau';

        // Set the country's official name
        $this->official_name = 'Macao Special Administrative Region of the People\'s Republic of China';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'MO';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'MAC';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '446';

        // Set the international dialing code
        $this->international_phone = '853';

        // Define the languages spoken in the country
        $this->languages = ['zh', 'pt']; // Chinese (Cantonese) and Portuguese are official languages

        // Define the top-level domain(s)
        $this->tld = ['.mo'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '100 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '50 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '86%'; // High internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Macao CERT';

        // List popular web technologies in Macau
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'Node.js'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'MO';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '1821275';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Macanese pataca',
            // Currency code
            'code' => 'MOP',
            // Currency symbol
            'symbol' => 'MOP$',
            // Main unit
            'main_unit' => 'pataca',
            // Subunit
            'sub_unit' => 'avo',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['10', '20', '50', '100', '500', '1000'],
            // Main coins
            'coins_main' => ['1', '5'],
            // Subunit coins
            'coins_sub' => ['10', '20', '50'],
        ];

        // Set the population
        $this->population = 682800; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 32.9; // km²

        // Set the capital city
        $this->capital = 'Macau'; // Macau is a city and administrative region

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Asia/Macau',
                // Standard time offset
                'standard_time' => 'UTC+8',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Macau is a special administrative region of China and does not have an independence day

        // List international organizations the country is part of
        $this->international_organizations = [
            'World Trade Organization (WTO)',
            'World Health Organization (WHO)',
            'United Nations (via China)',
            'Asia-Pacific Economic Cooperation (APEC)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 28.6; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Buddhism',
            'Christianity',
            'Chinese folk religion',
        ];

        // Describe the form of government
        $this->government = 'Special administrative region of China';

        // Set the national sport
        $this->national_sport = 'Dragon boat racing'; // Traditional sports like dragon boat racing are popular

        // Define bordering countries
        $this->borders = [
            ['name' => 'China', 'iso_alpha_2' => 'CN'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇲🇴',
            // Unicode code points
            'uCode' => 'U+1F1F2 U+1F1F4',
            // HTML entities
            'html' => '&#x1F1F2;&#x1F1F4;',
            // CSS entities
            'css' => '\\1F1F2\\1F1F4',
            // Decimal Unicode entities
            'decimal' => '&#127474;&#127476;',
            // Direct UTF-8 string
            'utf8' => '🇲🇴',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF2\uD83C\uDDF4',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-mo:',
            // Hexadecimal entity
            'hex' => '&#x1F1F2;&#x1F1F4;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#007A33',
                // RGB color values
                'rgb' => '0,122,51',
                // CMYK color values
                'cmyk' => '100,0,58,52',
                // HSL color values
                'hsl' => '146°,100%,24%',
                // HSV color values
                'hsv' => '146°,100%,48%',
                // Pantone color code
                'pantone' => '348 C',
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
                'hsl' => '50°,100%,50%',
                // HSV color values
                'hsv' => '50°,100%,100%',
                // Pantone color code
                'pantone' => '116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '22.1987',
            // Longitude in decimal degrees
            'longitude' => '113.5439',
            // Degrees with decimal
            'dd' => '22.1987° N, 113.5439° E',
            // Degrees, minutes, seconds
            'dms' => '22°11\'55.32" N, 113°32\'38.04" E',
            // Degrees and decimal minutes
            'dm' => '22°11.922\' N, 113°32.634\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"mo"},"geometry":{"type":"Polygon","coordinates":[[[113.531662,22.194736],[113.531372,22.201939],[113.532494,22.20583],[113.536102,22.211662],[113.545258,22.214439],[113.554428,22.21273],[113.556374,22.193607],[113.555817,22.186939],[113.552467,22.183052],[113.546097,22.184441],[113.531662,22.194736]]]}}]}';
    }
}
