<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class GP_Guadeloupe extends CountrySeeder
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
        $this->name = 'Guadeloupe';

        // Set the country's official name
        $this->official_name = 'Guadeloupe';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'GP';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'GLP';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '312';

        // Set the international dialing code
        $this->international_phone = '590';

        // Define the languages spoken in the country
        $this->languages = ['fr']; // French is the official language

        // Define the top-level domain(s)
        $this->tld = ['.gp'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '30 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '20 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '60%'; // Internet access in Guadeloupe

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'None'; // No dedicated cybersecurity agency

        // List popular web technologies in Guadeloupe
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'GP';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3579143';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Euro',
            // Currency code
            'code' => 'EUR',
            // Currency symbol
            'symbol' => '€',
            // Main unit
            'main_unit' => 'euro',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['5', '10', '20', '50', '100', '200', '500'],
            // Main coins
            'coins_main' => ['1', '2'],
            // Subunit coins
            'coins_sub' => ['1', '2', '5', '10', '20', '50 cents'],
        ];

        // Set the population
        $this->population = 400132; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 1628; // km²

        // Set the capital city
        $this->capital = 'Basse-Terre';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/Guadeloupe',
                // Standard time offset
                'standard_time' => 'UTC-4', // Atlantic Standard Time (AST)
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Guadeloupe is an overseas department of France

        // List international organizations the country is part of
        $this->international_organizations = [
            'European Union (EU)',
            'Association of Caribbean States (ACS)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 9.0; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism)',
        ];

        // Describe the form of government
        $this->government = 'Overseas department of France';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport

        // Define bordering countries
        $this->borders = []; // Guadeloupe is an island and has no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇬🇵',
            // Unicode code points
            'uCode' => 'U+1F1EC U+1F1F5',
            // HTML entities
            'html' => '&#x1F1EC;&#x1F1F5;',
            // CSS entities
            'css' => '\\1F1EC\\1F1F5',
            // Decimal Unicode entities
            'decimal' => '&#127468;&#127477;',
            // Direct UTF-8 string
            'utf8' => '🇬🇵',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDEC\uD83C\uDDF5',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-gp:',
            // Hexadecimal entity
            'hex' => '&#x1F1EC;&#x1F1F5;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#002395',
                // RGB color values
                'rgb' => '0,35,149',
                // CMYK color values
                'cmyk' => '100,77,0,42',
                // HSL color values
                'hsl' => '228,100%,29%',
                // HSV color values
                'hsv' => '228,100%,58%',
                // Pantone color code
                'pantone' => 'Reflex Blue C',
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
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#ED2939',
                // RGB color values
                'rgb' => '237,41,57',
                // CMYK color values
                'cmyk' => '0,83,76,7',
                // HSL color values
                'hsl' => '355,84%,55%',
                // HSV color values
                'hsv' => '355,83%,93%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '16.2650',
            // Longitude in decimal degrees
            'longitude' => '-61.5500',
            // Degrees with decimal
            'dd' => '16.2650° N, 61.5500° W',
            // Degrees, minutes, seconds
            'dms' => '16°15\'54.00" N, 61°33\'0.00" W',
            // Degrees and decimal minutes
            'dm' => '16°15.900\' N, 61°33.000\' W',
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
      "properties": { "cca2": "gp" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-61.24556, 15.871666],
              [-61.25667, 15.869999],
              [-61.275841, 15.870832],
              [-61.28306, 15.87194],
              [-61.305557, 15.88],
              [-61.310005, 15.882776],
              [-61.31695, 15.889999],
              [-61.329445, 15.92861],
              [-61.32973, 15.934444],
              [-61.30917, 15.972776],
              [-61.27528, 16.009163],
              [-61.266945, 16.015],
              [-61.261391, 16.012775],
              [-61.23806, 15.99333],
              [-61.202225, 15.952499],
              [-61.19611, 15.944721],
              [-61.18695, 15.92111],
              [-61.186394, 15.91555],
              [-61.1875, 15.91],
              [-61.19445, 15.902777],
              [-61.222778, 15.882776],
              [-61.230835, 15.877222],
              [-61.24556, 15.871666]
            ]
          ],
          [
            [
              [-61.03722, 16.31111],
              [-61.08167, 16.295555],
              [-61.08667, 16.29583],
              [-61.08778, 16.300831],
              [-61.08584, 16.304722],
              [-61.08223, 16.308331],
              [-61.059448, 16.325554],
              [-61.04723, 16.33416],
              [-61.025284, 16.346664],
              [-61.020836, 16.348888],
              [-61.01528, 16.350277],
              [-61.00194, 16.348888],
              [-60.988617, 16.346107],
              [-60.990837, 16.34083],
              [-60.998894, 16.335278],
              [-61.03722, 16.31111]
            ]
          ],
          [
            [
              [-61.346115, 16.33416],
              [-61.339447, 16.33305],
              [-61.333618, 16.333611],
              [-61.291672, 16.326664],
              [-61.27917, 16.32333],
              [-61.268616, 16.318886],
              [-61.26, 16.312775],
              [-61.20556, 16.26722],
              [-61.225838, 16.25305],
              [-61.454727, 16.200554],
              [-61.46695, 16.200275],
              [-61.47417, 16.201385],
              [-61.498337, 16.20833],
              [-61.50917, 16.21278],
              [-61.521118, 16.222221],
              [-61.53334, 16.231667],
              [-61.54723, 16.229532],
              [-61.563892, 16.228111],
              [-61.567062, 16.226944],
              [-61.568893, 16.22428],
              [-61.58112, 16.20472],
              [-61.58139, 16.19861],
              [-61.58083, 16.193054],
              [-61.57667, 16.166111],
              [-61.575279, 16.160831],
              [-61.5675, 16.142498],
              [-61.555557, 16.076111],
              [-61.55278, 16.054443],
              [-61.55945, 16.033886],
              [-61.5625, 16.029442],
              [-61.57278, 16.01833],
              [-61.60695, 15.98972],
              [-61.64834, 15.965277],
              [-61.685005, 15.94778],
              [-61.690559, 15.94639],
              [-61.69501, 15.949165],
              [-61.73695, 16.015831],
              [-61.75695, 16.047775],
              [-61.761391, 16.056664],
              [-61.793892, 16.241943],
              [-61.79611, 16.26416],
              [-61.79362, 16.306942],
              [-61.78361, 16.33305],
              [-61.759727, 16.351109],
              [-61.74778, 16.359722],
              [-61.7425, 16.361111],
              [-61.730835, 16.362221],
              [-61.726669, 16.360275],
              [-61.655838, 16.324718],
              [-61.609726, 16.283886],
              [-61.61028, 16.27861],
              [-61.606674, 16.275276],
              [-61.581547, 16.275103],
              [-61.55793, 16.284374],
              [-61.556717, 16.284899],
              [-61.54187, 16.290249],
              [-61.498894, 16.34861],
              [-61.522507, 16.393055],
              [-61.529449, 16.417774],
              [-61.532784, 16.433331],
              [-61.53334, 16.439163],
              [-61.53167, 16.451942],
              [-61.526115, 16.46083],
              [-61.50695, 16.485],
              [-61.47028, 16.51083],
              [-61.46612, 16.51361],
              [-61.460281, 16.514164],
              [-61.45667, 16.513054],
              [-61.43611, 16.498886],
              [-61.407784, 16.47666],
              [-61.40472, 16.472775],
              [-61.402504, 16.468052],
              [-61.393059, 16.432777],
              [-61.3914, 16.421944],
              [-61.39944, 16.399719],
              [-61.400284, 16.392776],
              [-61.39889, 16.387775],
              [-61.39473, 16.378887],
              [-61.373337, 16.351387],
              [-61.366394, 16.34417],
              [-61.35778, 16.338055],
              [-61.346115, 16.33416]
            ]
          ],
          [
            [
              [-62.811394, 17.888332],
              [-62.835556, 17.87833],
              [-62.84112, 17.879166],
              [-62.845, 17.8825],
              [-62.870003, 17.913055],
              [-62.872505, 17.9175],
              [-62.87306, 17.923332],
              [-62.869171, 17.929722],
              [-62.863335, 17.930275],
              [-62.81167, 17.918053],
              [-62.79084, 17.912498],
              [-62.78945, 17.9075],
              [-62.79084, 17.902775],
              [-62.811394, 17.888332]
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
