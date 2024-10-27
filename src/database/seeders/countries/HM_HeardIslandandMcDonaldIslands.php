<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class HM_HeardIslandandMcDonaldIslands extends CountrySeeder
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
        $this->name = 'Heard Island and McDonald Islands';

        // Set the country's official name
        $this->official_name = 'Heard Island and McDonald Islands';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'HM';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'HMD';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '334';

        // Set the international dialing code
        $this->international_phone = '672';

        // Define the languages spoken in the territory
        $this->languages = ['en']; // English is the de facto language

        // Define the top-level domain(s)
        $this->tld = ['.hm'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds (limited due to remote location)
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => 'Limited',
            // Average mobile connection speed
            'average_speed_mobile' => 'Limited',
        ];

        // Define internet penetration rate
        $this->internet_penetration = 'Minimal'; // Very limited internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'None'; // No dedicated cybersecurity agency

        // List popular web technologies (data not available)
        $this->popular_technologies = []; // No data due to lack of permanent population

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'HM';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '1547314';

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
            'coins_sub' => ['5', '10', '20', '50 cents'],
        ];

        // Set the population (no permanent residents)
        $this->population = 0; // No permanent population

        // Set the area in square kilometers
        $this->area = 412; // km²

        // Set the capital city (no capital, administered from Australia)
        $this->capital = null;

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Indian/Kerguelen',
                // Standard time offset
                'standard_time' => 'UTC+5',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // It is an external territory of Australia

        // List international organizations the territory is part of
        $this->international_organizations = []; // Not a member of international organizations

        // Set the GDP in billions of USD
        $this->gdp = null; // Not applicable due to lack of economy

        // List the predominant religions
        $this->religions = [
            'None', // No permanent population
        ];

        // Describe the form of government
        $this->government = 'External territory of Australia';

        // Set the national sport
        $this->national_sport = null; // Not applicable

        // Define bordering countries
        $this->borders = []; // It is an island territory with no land borders

        // Define the territory's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇭🇲',
            // Unicode code points
            'uCode' => 'U+1F1ED U+1F1F2',
            // HTML entities
            'html' => '&#x1F1ED;&#x1F1F2;',
            // CSS entities
            'css' => '\\1F1ED\\1F1F2',
            // Decimal Unicode entities
            'decimal' => '&#127469;&#127474;',
            // Direct UTF-8 string
            'utf8' => '🇭🇲',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDED\uD83C\uDDF2',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-hm:',
            // Hexadecimal entity
            'hex' => '&#x1F1ED;&#x1F1F2;',
        ];

        // Define the colors of the territory's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'navy',
                // Hexadecimal color code
                'hex' => '#00247D',
                // RGB color values
                'rgb' => '0,36,125',
                // CMYK color values
                'cmyk' => '100,71,0,51',
                // HSL color values
                'hsl' => '224,100%,24%',
                // HSV color values
                'hsv' => '224,100%,49%',
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
                'hsl' => '350,82%,44%',
                // HSV color values
                'hsv' => '350,90%,81%',
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
                'hsl' => '0,0%,100%',
                // HSV color values
                'hsv' => '0,0%,100%',
                // Pantone color code
                'pantone' => 'White',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '-53.0818',
            // Longitude in decimal degrees
            'longitude' => '73.5042',
            // Degrees with decimal
            'dd' => '53.0818° S, 73.5042° E',
            // Degrees, minutes, seconds
            'dms' => '53°4\'54.48" S, 73°30\'15.12" E',
            // Degrees and decimal minutes
            'dm' => '53°4.908\' S, 73°30.252\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "properties": { "cca2": "hm" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [73.77388, -53.125031],
            [73.746658, -53.126945],
            [73.719711, -53.13195],
            [73.688599, -53.140839],
            [73.66777, -53.148895],
            [73.647766, -53.157784],
            [73.635818, -53.164169],
            [73.624985, -53.171112],
            [73.618332, -53.174171],
            [73.56749, -53.191948],
            [73.550552, -53.195839],
            [73.531662, -53.198334],
            [73.509995, -53.199448],
            [73.474442, -53.194168],
            [73.460541, -53.189171],
            [73.430267, -53.166115],
            [73.396652, -53.138336],
            [73.358597, -53.080833],
            [73.35582, -53.075279],
            [73.288055, -53.026672],
            [73.255554, -53.019173],
            [73.242493, -53.006668],
            [73.234985, -52.997223],
            [73.234436, -52.987785],
            [73.299438, -52.964172],
            [73.307495, -52.966118],
            [73.35083, -53.004448],
            [73.35582, -53.008614],
            [73.36055, -53.012505],
            [73.372498, -53.019173],
            [73.434158, -53.029724],
            [73.444443, -53.030281],
            [73.462494, -53.026947],
            [73.469162, -53.02417],
            [73.479996, -53.016945],
            [73.486374, -53.014168],
            [73.522491, -53.011673],
            [73.531662, -53.012779],
            [73.578888, -53.024445],
            [73.632767, -53.046394],
            [73.647217, -53.05806],
            [73.654709, -53.067505],
            [73.66333, -53.076118],
            [73.677765, -53.088058],
            [73.706375, -53.105003],
            [73.719437, -53.11084],
            [73.747208, -53.120834],
            [73.77388, -53.125031]
          ]
        ]
      }
    }
  ]
}
';
    }
}
