<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class CX_ChristmasIsland extends CountrySeeder
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
        $this->name = 'Christmas Island';

        // Set the country's official name
        $this->official_name = 'Territory of Christmas Island';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'CX';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'CXR';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '162';

        // Set the international dialing code
        $this->international_phone = '61'; // Christmas Island shares the dialing code with Australia

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.cx'];

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
        $this->internet_penetration = '52%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Australian Cyber Security Centre (ACSC)'; // Managed by Australia

        // List popular web technologies on Christmas Island
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'CX';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '2078138';

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
        $this->population = 1843; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 135; // km²

        // Set the capital city
        $this->capital = 'Flying Fish Cove';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Indian/Christmas',
                // Standard time offset
                'standard_time' => 'UTC+7', // Christmas Island Time (CXT)
            ],
        ];

        // Set the independence day (Note: Christmas Island is a territory of Australia)
        $this->independence_day = null; // Christmas Island is not an independent country

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations (Australia)',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = null; // No specific GDP available for Christmas Island; managed under Australia

        // List the predominant religions
        $this->religions = [
            'Buddhism',
            'Islam',
            'Christianity',
            'Taoism',
        ];

        // Describe the form of government
        $this->government = 'Non-self-governing territory of Australia';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is popular, but no official national sport

        // Define bordering countries
        $this->borders = []; // Christmas Island is an island territory with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇨🇽',
            // Unicode code points
            'uCode' => 'U+1F1E8 U+1F1FD',
            // HTML entities
            'html' => '&#x1F1E8;&#x1F1FD;',
            // CSS entities
            'css' => '\\1F1E8\\1F1FD',
            // Decimal Unicode entities
            'decimal' => '&#127464;&#127485;',
            // Direct UTF-8 string
            'utf8' => '🇨🇽',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE8\uD83C\uDDFD',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-cx:',
            // Hexadecimal entity
            'hex' => '&#x1F1E8;&#x1F1FD;',
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
                'cmyk' => '100,0,62,41',
                // HSL color values
                'hsl' => '140,100%,29%',
                // HSV color values
                'hsv' => '140,100%,59%',
                // Pantone color code
                'pantone' => 'Pantone 355 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
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
                'cmyk' => '100,69,0,37',
                // HSL color values
                'hsl' => '224,100%,41%',
                // HSV color values
                'hsv' => '224,100%,63%',
                // Pantone color code
                'pantone' => 'Pantone 286 C',
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
                'hsl' => '48,100%,50%',
                // HSV color values
                'hsv' => '48,100%,100%',
                // Pantone color code
                'pantone' => 'Pantone 116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '-10.4475',
            // Longitude in decimal degrees
            'longitude' => '105.6904',
            // Degrees with decimal
            'dd' => '10.4475° S, 105.6904° E',
            // Degrees, minutes, seconds
            'dms' => '10°26\'51.00" S, 105°41\'25.44" E',
            // Degrees and decimal minutes
            'dm' => '10°26.850\' S, 105°41.424\' E',
            // Various GPS formats
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
      "properties": { "cca2": "cx" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [105.701401, -10.51097],
            [105.683098, -10.47414],
            [105.644501, -10.46614],
            [105.628998, -10.43731],
            [105.654602, -10.41489],
            [105.715202, -10.38447],
            [105.736603, -10.38408],
            [105.7509, -10.39408],
            [105.7519, -10.48375],
            [105.736298, -10.50456],
            [105.701401, -10.51097]
          ]
        ]
      }
    }
  ]
}
';
    }
}
