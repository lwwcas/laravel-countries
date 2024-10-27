<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class DM_Dominica extends CountrySeeder
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
        $this->name = 'Dominica';

        // Set the country's official name
        $this->official_name = 'Commonwealth of Dominica';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'DM';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'DMA';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '212';

        // Set the international dialing code
        $this->international_phone = '1-767';

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.dm'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '50 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '15 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '67%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'National Telecommunications Regulatory Commission (NTRC)';

        // List popular web technologies in Dominica
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress', 'Python'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'DO';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3575830';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'East Caribbean dollar',
            // Currency code
            'code' => 'XCD',
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
            'coins_sub' => ['5', '10', '25'],
        ];

        // Set the population
        $this->population = 71991; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 751; // km²

        // Set the capital city
        $this->capital = 'Roseau';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/Dominica',
                // Standard time offset
                'standard_time' => 'UTC-4', // Atlantic Standard Time (AST)
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1978-11-03'; // Date of independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Organization of Eastern Caribbean States (OECS)',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'Caribbean Community (CARICOM)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.58; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism, Protestantism)',
        ];

        // Describe the form of government
        $this->government = 'Unitary parliamentary republic';

        // Set the national sport
        $this->national_sport = 'Cricket'; // Cricket is one of the most popular sports in Dominica

        // Define bordering countries
        $this->borders = []; // Dominica is an island nation with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇩🇲',
            // Unicode code points
            'uCode' => 'U+1F1E9 U+1F1F2',
            // HTML entities
            'html' => '&#x1F1E9;&#x1F1F2;',
            // CSS entities
            'css' => '\\1F1E9\\1F1F2',
            // Decimal Unicode entities
            'decimal' => '&#127465;&#127474;',
            // Direct UTF-8 string
            'utf8' => '🇩🇲',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE9\uD83C\uDDF2',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-dm:',
            // Hexadecimal entity
            'hex' => '&#x1F1E9;&#x1F1F2;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#006B3F',
                // RGB color values
                'rgb' => '0,107,63',
                // CMYK color values
                'cmyk' => '100,0,41,58',
                // HSL color values
                'hsl' => '157,100%,21%',
                // HSV color values
                'hsv' => '157,100%,42%',
                // Pantone color code
                'pantone' => '342 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
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
                'cmyk' => '0,79,73,6',
                // HSL color values
                'hsl' => '356,84%,57%',
                // HSV color values
                'hsv' => '356,79%,94%',
                // Pantone color code
                'pantone' => '485 C',
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
                'pantone' => '116 C',
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
                'hsl' => '0,0%,0%',
                // HSV color values
                'hsv' => '0,0%,0%',
                // Pantone color code
                'pantone' => 'Black C',
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
            'latitude' => '15.4150',
            // Longitude in decimal degrees
            'longitude' => '-61.3710',
            // Degrees with decimal
            'dd' => '15.4150° N, 61.3710° W',
            // Degrees, minutes, seconds
            'dms' => '15°24\'54.00" N, 61°22\'15.60" W',
            // Degrees and decimal minutes
            'dm' => '15°24.900\' N, 61°22.260\' W',
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
      "properties": { "cca2": "dm" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-61.363617, 15.198055],
            [-61.37056, 15.199165],
            [-61.374168, 15.202499],
            [-61.375839, 15.207499],
            [-61.377502, 15.236387],
            [-61.377785, 15.248055],
            [-61.374451, 15.268332],
            [-61.374168, 15.274443],
            [-61.391396, 15.349722],
            [-61.392784, 15.354721],
            [-61.395004, 15.359444],
            [-61.422783, 15.4175],
            [-61.450562, 15.455555],
            [-61.462502, 15.471109],
            [-61.474724, 15.486387],
            [-61.476395, 15.491388],
            [-61.491394, 15.540554],
            [-61.482506, 15.587776],
            [-61.474724, 15.61861],
            [-61.468056, 15.628054],
            [-61.452225, 15.631943],
            [-61.433617, 15.631666],
            [-61.427223, 15.630278],
            [-61.31778, 15.581944],
            [-61.304169, 15.57361],
            [-61.267227, 15.516666],
            [-61.253334, 15.461388],
            [-61.250557, 15.329166],
            [-61.250839, 15.323055],
            [-61.254448, 15.291666],
            [-61.25528, 15.285],
            [-61.25695, 15.278889],
            [-61.265007, 15.258055],
            [-61.270004, 15.248333],
            [-61.280281, 15.237499],
            [-61.363617, 15.198055]
          ]
        ]
      }
    }
  ]
}
';
    }
}
