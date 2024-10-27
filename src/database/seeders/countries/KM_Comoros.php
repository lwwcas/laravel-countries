<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class KM_Comoros extends CountrySeeder
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
        $this->name = 'Comoros';

        // Set the country's official name
        $this->official_name = 'Union of the Comoros';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'KM';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'COM';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '174';

        // Set the international dialing code
        $this->international_phone = '269';

        // Define the languages spoken in the country
        $this->languages = ['ar', 'fr', 'swb']; // Arabic, French, and Comorian (Shikomor)

        // Define the top-level domain(s)
        $this->tld = ['.km'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '5 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '3 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '10%'; // As per recent estimates

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'None'; // No dedicated cybersecurity agency

        // List popular web technologies in Comoros
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS']; // Common technologies

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'IC';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '921929';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Comorian franc',
            // Currency code
            'code' => 'KMF',
            // Currency symbol
            'symbol' => 'CF',
            // Main unit
            'main_unit' => 'franc',
            // Subunit
            'sub_unit' => 'centime',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['500', '1000', '2000', '5000', '10,000'],
            // Main coins
            'coins_main' => ['25', '50', '100', '250'],
            // Subunit coins
            'coins_sub' => ['1', '2', '5', '10'],
        ];

        // Set the population
        $this->population = 869595; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 1862; // km²

        // Set the capital city
        $this->capital = 'Moroni';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Indian/Comoro',
                // Standard time offset
                'standard_time' => 'UTC+3',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1975-07-06'; // Independence from France

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'African Union (AU)',
            'Arab League',
            'Organisation of Islamic Cooperation (OIC)',
            'Indian Ocean Commission (IOC)',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'Non-Aligned Movement',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 1.2; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Islam (Sunni)',
        ];

        // Describe the form of government
        $this->government = 'Federal presidential republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is popular in Comoros

        // Define bordering countries
        $this->borders = []; // It is an island nation with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇰🇲',
            // Unicode code points
            'uCode' => 'U+1F1F0 U+1F1F2',
            // HTML entities
            'html' => '&#x1F1F0;&#x1F1F2;',
            // CSS entities
            'css' => '\\1F1F0\\1F1F2',
            // Decimal Unicode entities
            'decimal' => '&#127472;&#127474;',
            // Direct UTF-8 string
            'utf8' => '🇰🇲',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF0\uD83C\uDDF2',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-km:',
            // Hexadecimal entity
            'hex' => '&#x1F1F0;&#x1F1F2;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#009639',
                // RGB color values
                'rgb' => '0,150,57',
                // CMYK color values
                'cmyk' => '100,0,62,41',
                // HSL color values
                'hsl' => '147°,100%,29%',
                // HSV color values
                'hsv' => '147°,100%,59%',
                // Pantone color code
                'pantone' => '355 C',
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
                'hsl' => '355°,85%,57%',
                // HSV color values
                'hsv' => '355°,79%,94%',
                // Pantone color code
                'pantone' => '185 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Yellow',
                // Web color name
                'web_name' => 'yellow',
                // Hexadecimal color code
                'hex' => '#FCD116',
                // RGB color values
                'rgb' => '252,209,22',
                // CMYK color values
                'cmyk' => '0,17,91,1',
                // HSL color values
                'hsl' => '47°,98%,54%',
                // HSV color values
                'hsv' => '47°,91%,99%',
                // Pantone color code
                'pantone' => '116 C',
                // Contrast color for readability
                'contrast' => '#000000',
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
                'cmyk' => '100,68,0,37',
                // HSL color values
                'hsl' => '220°,100%,31%',
                // HSV color values
                'hsv' => '220°,100%,63%',
                // Pantone color code
                'pantone' => '286 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '-11.6455',
            // Longitude in decimal degrees
            'longitude' => '43.3333',
            // Degrees with decimal
            'dd' => '11.6455° S, 43.3333° E',
            // Degrees, minutes, seconds
            'dms' => '11°38\'43.80" S, 43°19\'59.88" E',
            // Degrees and decimal minutes
            'dm' => '11°38.730\' S, 43°19.998\' E',
            // GPS formats
            'gps' => [],
        ];

        Builder::country($this);
    }

    public function geographical()
    {
        return '{
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "properties": { "cca2": "km" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [43.86055, -12.35611],
              [43.863327, -12.36028],
              [43.863884, -12.366112],
              [43.862495, -12.371668],
              [43.86055, -12.375557],
              [43.85444, -12.383057],
              [43.774994, -12.36361],
              [43.739998, -12.35945],
              [43.731667, -12.365002],
              [43.711937, -12.36361],
              [43.66861, -12.3575],
              [43.656944, -12.35028],
              [43.630272, -12.300001],
              [43.624718, -12.285833],
              [43.62138, -12.27583],
              [43.62138, -12.26917],
              [43.622772, -12.25833],
              [43.628326, -12.250557],
              [43.636383, -12.245],
              [43.644722, -12.24028],
              [43.650276, -12.241667],
              [43.725, -12.26778],
              [43.737221, -12.27444],
              [43.824165, -12.32667],
              [43.835831, -12.33417],
              [43.853607, -12.349445],
              [43.86055, -12.35611]
            ]
          ],
          [
            [
              [44.487495, -12.09306],
              [44.518326, -12.213612],
              [44.53083, -12.34472],
              [44.53, -12.35083],
              [44.526665, -12.366112],
              [44.517776, -12.37778],
              [44.513611, -12.38028],
              [44.508049, -12.379723],
              [44.489716, -12.370834],
              [44.486107, -12.368334],
              [44.42722, -12.309446],
              [44.39222, -12.27195],
              [44.389717, -12.26778],
              [44.322495, -12.23556],
              [44.31277, -12.23167],
              [44.247772, -12.19833],
              [44.23055, -12.18889],
              [44.218887, -12.180834],
              [44.209999, -12.16944],
              [44.206665, -12.16194],
              [44.21611, -12.16139],
              [44.227219, -12.16333],
              [44.231384, -12.16528],
              [44.23389, -12.16944],
              [44.237495, -12.17278],
              [44.241661, -12.17528],
              [44.294441, -12.186668],
              [44.300552, -12.1875],
              [44.325829, -12.1875],
              [44.363609, -12.180834],
              [44.373886, -12.178057],
              [44.382774, -12.173334],
              [44.408882, -12.15389],
              [44.410828, -12.14917],
              [44.420273, -12.121946],
              [44.419716, -12.110279],
              [44.413605, -12.09639],
              [44.412773, -12.09028],
              [44.434166, -12.07889],
              [44.453331, -12.07083],
              [44.464996, -12.06944],
              [44.469719, -12.07083],
              [44.476662, -12.0775],
              [44.482773, -12.085],
              [44.487495, -12.09306]
            ]
          ],
          [
            [
              [43.459717, -11.93556],
              [43.453606, -11.93611],
              [43.427498, -11.922779],
              [43.293053, -11.84639],
              [43.27611, -11.836113],
              [43.26916, -11.83083],
              [43.2575, -11.81556],
              [43.221107, -11.76583],
              [43.219162, -11.761112],
              [43.215, -11.74556],
              [43.213608, -11.733612],
              [43.214439, -11.727501],
              [43.219719, -11.714169],
              [43.232216, -11.69278],
              [43.23972, -11.68111],
              [43.243889, -11.67195],
              [43.245277, -11.66639],
              [43.25, -11.551111],
              [43.252777, -11.47639],
              [43.249161, -11.44639],
              [43.25, -11.44083],
              [43.251389, -11.43556],
              [43.260277, -11.41139],
              [43.265831, -11.397223],
              [43.273888, -11.38583],
              [43.28139, -11.379723],
              [43.286942, -11.37833],
              [43.33083, -11.36833],
              [43.343048, -11.366945],
              [43.37055, -11.37111],
              [43.374718, -11.37389],
              [43.380829, -11.38111],
              [43.395271, -11.40611],
              [43.39722, -11.417501],
              [43.39666, -11.44167],
              [43.37944, -11.580557],
              [43.374718, -11.60806],
              [43.37389, -11.614168],
              [43.375275, -11.61945],
              [43.38361, -11.644445],
              [43.424164, -11.70945],
              [43.430832, -11.716112],
              [43.438332, -11.72889],
              [43.49805, -11.879168],
              [43.498604, -11.88528],
              [43.497215, -11.89],
              [43.489166, -11.911945],
              [43.484993, -11.920834],
              [43.464439, -11.93333],
              [43.459717, -11.93556]
            ]
          ]
        ]
      }
    }
  ]
}
';
    }
}
