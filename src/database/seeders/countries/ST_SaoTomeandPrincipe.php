<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class ST_SaoTomeandPrincipe extends CountrySeeder
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
        $this->name = 'São Tomé and Príncipe';

        // Set the country's official name
        $this->official_name = 'Democratic Republic of São Tomé and Príncipe';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'ST';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'STP';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '678';

        // Set the international dialing code
        $this->international_phone = '239';

        // Define the languages spoken in the country
        $this->languages = ['pt']; // Portuguese is the official language

        // Define the top-level domain(s)
        $this->tld = ['.st'];

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
        $this->cybersecurity_agency = 'National Center for Information Technologies';

        // List popular web technologies in São Tomé and Príncipe
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'ST';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '2410758';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'São Tomé and Príncipe dobra',
            // Currency code
            'code' => 'STN',
            // Currency symbol
            'symbol' => 'Db',
            // Main unit
            'main_unit' => 'dobra',
            // Subunit
            'sub_unit' => 'cêntimo',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['5', '10', '20', '50', '100', '200'],
            // Main coins
            'coins_main' => ['1', '2'],
            // Subunit coins
            'coins_sub' => ['10', '20', '50'],
        ];

        // Set the population
        $this->population = 223364; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 964; // km²

        // Set the capital city
        $this->capital = 'São Tomé';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Africa/Sao_Tome',
                // Standard time offset
                'standard_time' => 'UTC+0',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1975-07-12'; // Independence from Portugal

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'African Union (AU)',
            'Community of Portuguese Language Countries (CPLP)',
            'World Trade Organization (WTO)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.45; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism)',
        ];

        // Describe the form of government
        $this->government = 'Unitary semi-presidential republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport in São Tomé and Príncipe

        // Define bordering countries
        $this->borders = []; // São Tomé and Príncipe is an island nation with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇸🇹',
            // Unicode code points
            'uCode' => 'U+1F1F8 U+1F1F9',
            // HTML entities
            'html' => '&#x1F1F8;&#x1F1F9;',
            // CSS entities
            'css' => '\\1F1F8\\1F1F9',
            // Decimal Unicode entities
            'decimal' => '&#127480;&#127481;',
            // Direct UTF-8 string
            'utf8' => '🇸🇹',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF8\uD83C\uDDF9',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-st:',
            // Hexadecimal entity
            'hex' => '&#x1F1F8;&#x1F1F9;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
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
                'cmyk' => '100,0,63,41',
                // HSL color values
                'hsl' => '147°,100%,29%',
                // HSV color values
                'hsv' => '147°,100%,59%',
                // Pantone color code
                'pantone' => '348 C',
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
                'hex' => '#EF3340',
                // RGB color values
                'rgb' => '239,51,64',
                // CMYK color values
                'cmyk' => '0,79,64,6',
                // HSL color values
                'hsl' => '355°,85%,57%',
                // HSV color values
                'hsv' => '355°,79%,94%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
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
            'latitude' => '0.1864',
            // Longitude in decimal degrees
            'longitude' => '6.6131',
            // Degrees with decimal
            'dd' => '0.1864° N, 6.6131° E',
            // Degrees, minutes, seconds
            'dms' => '0°11\'11.04" N, 6°36\'47.16" E',
            // Degrees and decimal minutes
            'dm' => '0°11.184\' N, 6°36.786\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"st"},"geometry":{"type":"MultiPolygon","coordinates":[[[[6.5238890000001,0.01833],[6.518611,0.01833],[6.514444,0.021111000000133],[6.5075,0.041667],[6.46583,0.193056],[6.4644440000001,0.19861],[6.46722,0.25972200000012],[6.49055,0.30500000000012],[6.493055,0.308889],[6.53361,0.3438890000001],[6.617777,0.403611],[6.655,0.409167],[6.661666,0.409167],[6.666666,0.40833300000014],[6.687778,0.402222],[6.716666,0.3775],[6.751389,0.33027800000014],[6.76667,0.29056],[6.76583,0.28444],[6.755555,0.23972],[6.752777,0.228889],[6.750278,0.224722],[6.73861,0.208889],[6.6611110000001,0.104167],[6.6577770000001,0.100556],[6.5616660000001,0.027222],[6.5238890000001,0.01833]]],[[[7.423055,1.556111],[7.399166,1.530555],[7.3477770000001,1.565],[7.338055,1.577222],[7.327222,1.607222],[7.32861,1.612778],[7.37305,1.6875],[7.402499,1.70055],[7.406666,1.7019440000001],[7.451111,1.693055],[7.4613890000001,1.682778],[7.46417,1.6786110000001],[7.46417,1.671667],[7.462777,1.6347220000001],[7.423055,1.556111]]]]}}]}';
    }
}
